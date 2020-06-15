@extends('admin.lte.layout')

@section('content')
    @include('user.tickets.sidebar')

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
                    <a href="{{ route('tickets.create') }}" class="btn btn-primary">Generate new ticket</a>
                </div>


                <div class="row">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="11%">Price</th>
                            <th width="11%">Number of Passengers</th>
                            <th width="11%">Type</th>
                            <th width="11%">Date</th>
                            <th width="11%">User</th>
                            <th width="11%">Departure Time</th>
                            <th width="11%">Arrival Time</th>
                            <th width="12%">Destination</th>
                            <th width="11%">Action</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->price }}</td>
                                <td>{{ $row->number_of_passengers }}</td>
                                <td>{{ $row->type }}</td>
                                <td>{{ $row->date }}</td>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->schedule->departure_time }}</td>
                                <td>{{ $row->schedule->arrival_time }}</td>
                                <td>{{ $row->destination->from }} - {{ $row->destination->to }}</td>
                                <td>
                                        <a href="{{ route('tickets.show', $row->id) }}" class="btn btn-primary">Show</a>
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
