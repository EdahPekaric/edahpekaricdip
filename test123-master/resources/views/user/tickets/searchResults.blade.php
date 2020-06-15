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

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="11%">Price</th>
                            <th width="11%">Departure Time</th>
                            <th width="11%">Arrival Time</th>
                            <th width="12%">Destination</th>
                            <th width="11%">Action</th>
                        </tr>
                        @foreach($data['schedule'] as $row)
                            <tr>
                                <td>{{ $row->price }}</td>
                                <td>{{ $row->departure_time }}</td>
                                <td>{{ $row->arrival_time }}</td>
                                <td>{{ $row->destination->from }} - {{ $row->destination->to }}</td>
                                <td>
                                    <form action="{{ route('tickets.store') }}" method="POST">
                                        @csrf
                                    <!-- fields -->
                                            <input type="hidden" name="number_of_passengers" value="{{$data['search_data']['number_of_passengers']}}" />
                                            <input type="hidden" name="type" value="{{$data['search_data']['type']}}" />
                                            <input type="hidden" name="travel_date" value="{{$data['search_data']['travel_date']}}" />
                                            <input type="hidden" name="destination_id" value="{{$data['search_data']['destination_id']}}" />
                                            <input type="hidden" name="id" value="{{$row->id}}" />
                                            <input type="submit" name="add" class="btn btn-primary input-lg" value="Buy" />

                                    </form>
{{--                                    <a href="{{ route('tickets.store', $row->id) }}" >Buy</a>--}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

            <p>Number of passengers: {{$data['search_data']['number_of_passengers']}}</p>
            <p>Ticket type: {{$data['search_data']['type']}} </p>
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
