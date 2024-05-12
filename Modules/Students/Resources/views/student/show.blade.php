@extends('setting::layouts.master')

@section('title', 'Users')

@section('third_party_stylesheets')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row d-flex">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <a href="{{ route('students.index') }}" class="btn btn-success">Go Back <i class="bi bi-check"></i></a href="{{ route('students.index') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group float-right">
                                            <button class="btn btn-info">Student Name : {{ $student->name }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Collect Fees</th>
                                            <th class="text-center">Method</th>
                                            <th class="text-center">Receipt</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($student->fees as $key => $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>Rs.{{ $value->fees }}</td>
                                                <td>{{ ucfirst($value->method) }}</td>
                                                <td>
                                                    @if($value->receipt)
                                                   <a href="{{ asset('upload/images/fees/'.$value->receipt) }}" target="_blank"></a> 
                                                    @else
                                                    N/A
                                                    @endif
                                                </td>
                                                <td>{{ $value->date }}</td>
                                                
                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Collect Fees</th>
                                            <th class="text-center">Method</th>
                                            <th class="text-center">Receipt</th>
                                            <th class="text-center">Date</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
