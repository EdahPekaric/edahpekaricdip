@extends('admin.lte.layout')

@section('content')
    @include('admin.trains.sidebar')

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
                    <a href="{{ route('trains.create') }}" class="btn btn-primary">Add new train</a>
                </div>


                <div class="row">

                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="20%">Brand</th>
                            <th width="20%">Version</th>
                            <th width="20%">Number of seats</th>
                            <th width="20%">Type</th>
                            <th width="20%">Action</th>
                        </tr>
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $row->brand }}</td>
                                <td>{{ $row->version }}</td>
                                <td>{{ $row->number_of_seats }}</td>
                                <td>{{ $row->type }}</td>
                                <td>
                                    <form action="{{ route('trains.destroy', $row->id) }}" method="post">
                                        <a href="{{ route('trains.show', $row->id) }}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('trains.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                {!! $data->links() !!}
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
