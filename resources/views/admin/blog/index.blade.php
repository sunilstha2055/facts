@extends('admin.layouts.app')
@section('title','Blog')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Blogs</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">blogs</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Blogs</h3>
                        <a class="float-right btn btn-success" href="{{ route('admin.blogs.create') }}">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="datatable">
                            <thead>
                                <tr>


                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Blog type</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sn =0 ;
                                ?>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td><?php 
                                     $sn++;
                                     ?>
                                        {{$sn}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->blog_type}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>
                                        <img class="admin-about-img"
                                            src="{{ asset('assets/image/blog/' . $blog->image) }}"
                                            alt="{{$blog->title1}}">
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">
                                            <form action="{{route('admin.blogs.destroy',$blog->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                                            </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
@endsection