@extends('admin.layouts.app')
@section('title','Features')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Features</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Features</li>
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
                        <h3 class="card-title">Features</h3>
                        <a class="float-right btn btn-success" href="{{ route('admin.features.create') }}">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="datatable">
                            <thead>
                                <tr>


                                    <th>SN</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Icon Name</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $sn =0 ;
                                ?>
                                @foreach($features as $feature)
                                <tr>
                                    <td><?php 
                                     $sn++;
                                     ?>
                                        {{$sn}}</td>
                                    <td>{{$feature->title}}</td>
                                    <td>{{$feature->description}}</td>
                                    <td>
                                        {{$feature->icon_name}}
                                    </td>
                                    <td>
                                        <a class="btn btn-sm btn-info" href="">Edit</a>
                                        <a class="btn btn-sm btn-danger" href="">
                                            <form action="{{route('admin.features.destroy',$feature->id)}}"
                                                method="post">
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