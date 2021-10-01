@extends('admin.layouts.app')
@section('title','Slider')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Sliders</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Slider</li>
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
                        <h3 class="card-title">Sliders</h3>
                        <a class="float-right btn btn-success" href="{{ route('admin.sliders.create') }}">Create</a>
                    </div>
                    <div class="card-body">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="example1_length"><label>Show <select
                                                name="example1_length" aria-controls="example1"
                                                class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="example1_filter" class="dataTables_filter"><label>Search:<input
                                                type="search" class="form-control form-control-sm" placeholder=""
                                                aria-controls="example1"></label></div>
                                </div>
                            </div>
                            <table class="table  table-striped dataTable dtr-inline" id="datatable">
                                <thead>
                                    <tr>


                                        <th>SN</th>
                                        <th>Title1</th>
                                        <th>Title2</th>
                                        <th>Description</th>
                                        <th>Button1</th>
                                        <th>Button1 Link</th>
                                        <th>Button2</th>
                                        <th>Button2 Link</th>
                                        <th>Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $sn =0 ;
                                ?>
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td><?php 
                                     $sn++;
                                     ?>
                                            {{$sn}}</td>
                                        <td>{{$slider->title1}}</td>
                                        <td>{{$slider->title2}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td>{{$slider->btn1}}</td>
                                        <td>{{$slider->btn1_link}}</td>
                                        <td>{{$slider->btn2}}</td>
                                        <td>{{$slider->btn2_link}}</td>
                                        <td>
                                            <img class="admin-about-img"
                                                src="{{ asset('assets/image/slider/' . $slider->image) }}"
                                                alt="{{$slider->title1}}">
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info"
                                                href="{{route('admin.sliders.edit', $slider->id)}}">Edit</a>
                                            <a class="btn btn-sm btn-danger" href="">
                                                <form action="{{route('admin.sliders.destroy',$slider->id)}}"
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
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
@endsection