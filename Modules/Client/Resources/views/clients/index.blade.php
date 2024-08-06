@extends('setting::layouts.master')

@section('title', 'Clients')

@section('third_party_stylesheets')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
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
                                <h3 class="card-title float-right"><a title="Create Client" class="btn btn-info text-white"
                                        href="{{ route('clients.create') }}"><i class="fa fa-plus"></i> Create</a> </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th class="text-center">Image</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clients as $key => $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td class="text-center">
                                                <img src="{{ asset('upload/images/clients/' . $value->user->image) }}"
                                                    width="120px" alt="{{ $value->name }}">
                                            </td>
                                            <td>{{ $value->user->email }}</td>
                                            <td>{{ $value->company_name }}</td>
                                            <td>{{ $value->phone_no }}</td>
                                            
                                            <td class="text-center">
                                                @if ($value->user->hasRole('Super Admin'))
                                                    No Access!!
                                                @else
                                                    <a href="{{ route('clients.edit', $value->id) }}"
                                                        title="Edit Student" class="btn btn-primary btn-xs"><i
                                                            class="fa fa-edit"></i></a>
                                                    {{-- <a href="{{ route('clients.show',$value->id) }}" class="btn btn-success btn-xs" title="View Fees Details"><i class="fa fa-eye"></i></a> --}}
                                                    <button id="delete" title="Delete Student"
                                                        class="btn btn-danger btn-xs"
                                                        onclick="event.preventDefault();
                                                            if (confirm('Are you sure? It will delete the data permanently!')) {
                                                                document.getElementById('destroy{{ $value->id }}').submit()}">
                                                        <i class="fa fa-trash"></i>
                                                        <form id="destroy{{ $value->id }}" class="d-none"
                                                            action="{{ route('clients.destroy', $value->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </button>
                                                @endif
                                                {{-- <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-id="{{ $value->id }}" data-target="#editModal{{$value->id}}" title="Add Fees">Add Fee</button>
                                               
                                                <div class="modal fade" id="editModal{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <form action="{{ route('fees.store') }}" method="post">
                                                            @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add Fees</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group d-flex">
                                                                                <label for="fees">Fees </label>&nbsp;&nbsp;
                                                                                <input type="number" required min="0" name="fees" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group d-flex">
                                                                                <label for="fees">Date </label>&nbsp;&nbsp;
                                                                                <input type="date" required  name="date" class="form-control" max="{{ date('Y-m-d') }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group d-flex">
                                                                                <label for="method">Method </label>&nbsp;&nbsp;
                                                                                <select name="method" id="method" class="form-control" required>
                                                                                    <option value="" selected disabled>Select Payment Method</option>
                                                                                    <option value="cash">Cash</option>
                                                                                    <option value="online">Online</option>
                                                                                    <option value="cheque">Cheque</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <input type="hidden" name="student_id" value="{{ $value->id }}">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group d-flex">
                                                                                <label for="fees">Receipt/ Cheque </label>&nbsp;&nbsp;
                                                                                <input type="file" min="0" name="image" class="form-control">
                                                                            </div>
                                                                        </div>  
                                                                    </div>      
                                                                    
                                                                   
                                                                
                                                            </div>
                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div> --}}
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th class="text-center">Image</th>
                                            <th>Email</th>
                                            <th>Company</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Action</th>
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
