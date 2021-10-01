@extends('admin.layouts.app')
@section('title', 'project | Create')

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
                    <li class="breadcrumb-item active">project</li>
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
                        <form class="row" method="post" action="{{ route('admin.projects.update', $project->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method ('patch')
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <input type="text" value="{{$project->title}}" id="title" name="title"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="worktitle">Work Title:</label>
                                    <input type="text" value="{{$project->worktitle}}" id="worktitle" name="worktitle"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Work Category:</label>
                                    <select id="latestwork_id" name="latestwork_id" class="form-control">
                                        <!-- <option selected disabled value="">Select Category</option> -->
                                        @foreach ($latestworks as $latestwork)
                                        <option value="{{ $latestwork->id }}">{{ $latestwork->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description:</label>
                                    <textarea type="text" id="description" name="description" class="form-control"
                                        rows="5">{{$project->description}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Image:</label>
                                    <input type="file" id="image" name="image" class="form-control">
                                    <img src="{{asset('assets/image/project/' . $project->image)}}" alt="" width="200px"
                                        height="100px">
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