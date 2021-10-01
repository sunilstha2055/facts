@extends('admin.layouts.app')
@section('title', 'Team | Edit')

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
                    <li class="breadcrumb-item active">Team</li>
                    <li class="breadcrumb-item active">edit</li>
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
                        <form class="row" method="post" action="{{ route('admin.teams.update', $team->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method ('patch')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" value="{{$team->name}}" id="name" name="name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="designation">Designation:</label>
                                    <input type="text" value="{{$team->designation}}" id=" designation"
                                        name="designation" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="f_username">Facebook username:</label>
                                    <input type="text" value="{{$team->f_username}}" id=" f_username" name="f_username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="l_username">Linkedin username:</label>
                                    <input type="text" value="{{$team->l_username}}" id=" l_username" name="l_username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="t_username">Twiter username:</label>
                                    <input type="text" value="{{$team->t_username}}" id=" t_username" name="t_username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="i_username">Instagram username:</label>
                                    <input type="text" value="{{$team->i_username}}" id="i_username" name="i_username"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <img src="{{asset('assets/image/team/' . $team->image)}}" alt="" height="100px"
                                        width="200px">
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