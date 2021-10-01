@extends('admin.layouts.app')
@section('title', 'Blog | Edit')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Blog</li>
                    <li class="breadcrumb-item active">Edit</li>
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
                        <h3 class="card-title">Edit</h3>

                    </div>
                    <div class="card-body">
                        <form class="row" method="post" action="{{route('admin.blogs.update', $blog->id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            @method ('patch')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" value="{{$blog->title}}" id="title" name="title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="blog_type">Blog type:</label>
                                    <input type="text" value="{{$blog->blog_type}}" id="blog_type" name="blog_type"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea type="text" value="" id="description" name="description"
                                        class="form-control" rows="5">
                                        {{$blog->description}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <img src="{{ asset('assets/image/blog/'. $blog->image)}}" alt="{{$blog->title}}"
                                        style="height:100px; width:200px;">
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
@endsection