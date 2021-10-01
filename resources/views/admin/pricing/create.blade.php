@extends('admin.layouts.app')
@section('title', 'Pricing | Create')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Create</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Pricing</li>
                    <li class="breadcrumb-item active">Create</li>
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
                        <h3 class="card-title">Create</h3>

                    </div>
                    <div class="card-body">
                        <form class="row" method="post" action="{{ route('admin.pricings.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Package name:</label>
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Package price:</label>
                                    <input type="text" id="price" name="price" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea type="text" id="description" name="description" class="form-control"
                                        rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="feature">Feature:</label>
                                    <div class="appending_div">
                                        <div>
                                            <input type="text" id="feature" name="feature" class="form-control">
                                        </div>
                                    </div>
                                    Add More feature<span class="fa fa-plus add text-red"></span>
                                </div>
                            </div>
                            <!-- More Links: <span class="fa fa-plus add"></span>
                            <div class="appending_div">
                                <div>
                                    Link URL: <input type="text" name="blog_linku_one[]"> &nbsp; Link Name: <input
                                        type="text" name="blog_linkn_one[]">
                                </div>
                            </div> -->
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