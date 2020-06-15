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
                    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Add new schedule</a>
                </div>


                <div class="row">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="13%">Departure time</th>
                            <th width="13%">Arrival time</th>
                            <th width="13%">Occupation</th>
                            <th width="13%">Price</th>
                            <th width="13%">Destination</th>
                            <th width="13%">Train</th>
                            <th width="22%">Action</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->departure_time }}</td>
                                <td>{{ $row->arrival_time }}</td>
                                <td>{{ $row->occupation }}</td>
                                <td>{{ $row->price }}</td>
                                <td>{{ $row->destination->from }} - {{ $row->destination->to }}</td>
                                <td>{{ $row->train->brand }}, {{ $row->train->version }}</td>
                                <td>
                                    <form action="{{ route('schedules.destroy', $row->id) }}" method="post">
                                        <a href="{{ route('schedules.show', $row->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('schedules.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
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
