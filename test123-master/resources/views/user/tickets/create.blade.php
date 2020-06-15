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

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-4">
                        <a href="{{ route('tickets.index') }}" class="btn btn-default">Back</a>
                    </div>



                    <form method="get" action="{{ route('tickets.search') }}" enctype="multipart/form-data" class="col-md-5">

                        @csrf
                        <div class="form-group">
                            <label class="col-md-4">Day of Travel</label>
                            <div class="col-md-8">
                                <input type="text" name="travel_date" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Number of passengers</label>
                            <div class="col-md-8">
                                <input type="text" name="number_of_passengers" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Ticket type</label>
                            <div class="col-md-8">
                                <select class="form-control" name="type">
                                        <option value="senior">Senior</option>
                                        <option value="normal">Normal</option>
                                        <option value="student">Student</option>
                                        <option value="kid">Kids below 12 years old</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Destination</label>
                            <div class="col-md-8">
                            <select class="form-control" name="destination_id">
                                @foreach($data as $row)
                                <option value="{{$row->id}}">{{ $row->from }} - {{ $row->to }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group text-right col-md-8">
                            <input type="submit" name="add" class="btn btn-primary input-lg" value="Search" />
                        </div>
                    </form>
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

    <script>
        $(function() {
            $('input[name="travel_date"]').daterangepicker({
                "singleDatePicker": true,
                "showDropdowns": true,
                "showWeekNumbers": true,
                "autoApply": true,
                "linkedCalendars": false,
                "alwaysShowCalendars": true,
                "locale": {
                    "format": 'MM/DD/YYYY',
                },
            });
        });
    </script>

@endsection

