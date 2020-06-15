@extends('admin.lte.layout')

@section('content')
    @include('admin.schedules.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Main Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Main Page</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="jumbotron text-center col-md-6">
                        <div align="right">
                            <a href="{{ route('schedules.index') }}" class="btn btn-default">Back</a>
                        </div>
                        <br />
                        <h3>Departure time - {{ $data->departure_time }} </h3>
                        <h3>Arrival Time - {{ $data->arrival_time }}</h3>
                        <h3>Occupation - {{ $data->occupation }} </h3>
                        <h3>Price - {{ $data->price }}</h3>
                        <h3>Destination - {{ $data->destination_id }} </h3>
                        <h3>Train - {{ $data->train_id }}</h3>
                    </div>
                <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
    </aside>
    <!-- /.control-sidebar -->


@endsection



