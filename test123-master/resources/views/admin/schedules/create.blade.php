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
                        <a href="{{ route('schedules.index') }}" class="btn btn-default">Back</a>
                    </div>



                    <form method="post" action="{{ route('schedules.store') }}" enctype="multipart/form-data" class="col-md-5">

                        @csrf
                        <div class="form-group">
                            <label class="col-md-4">Departure time</label>
                            <div class="col-md-8">
                                <input type="text" name="departure_time" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Arrival time</label>
                            <div class="col-md-8">
                                <input type="text" name="arrival_time" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Price</label>
                            <div class="col-md-8">
                                <input type="text" name="price" class="form-control input-lg" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Destination</label>
                            <div class="col-md-8">
                            <select class="form-control" name="destination_id">
                                @foreach($data['destinations'] as $row)
                                <option value="{{$row->id}}">{{ $row->from }} - {{ $row->to }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4">Train</label>
                            <div class="col-md-8">
                                <select class="form-control" name="train_id">
                                    @foreach($data['trains'] as $row)
                                        <option value="{{$row->id}}">{{ $row->brand }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-right col-md-8">
                            <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
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
            $('input[name="departure_time"]').daterangepicker({
                "singleDatePicker": true,
                "showDropdowns": true,
                "timePicker": true,
                "timePicker24Hour": true,
                "showWeekNumbers": true,
                "timePickerIncrement": 5,
                "autoApply": true,
                "linkedCalendars": false,
                "alwaysShowCalendars": true,
                "locale": {
                    "format": 'MM/DD/YYYY HH:mm',
                },
            });
        });
    </script>

    <script>
        $(function() {
            $('input[name="arrival_time"]').daterangepicker({
                "singleDatePicker": true,
                "showDropdowns": true,
                "timePicker": true,
                "timePicker24Hour": true,
                "showWeekNumbers": true,
                "timePickerIncrement": 5,
                "autoApply": true,
                "linkedCalendars": false,
                "alwaysShowCalendars": true,
                "locale": {
                    "format": 'MM/DD/YYYY HH:mm',
                },
            });
        });
    </script>

@endsection

