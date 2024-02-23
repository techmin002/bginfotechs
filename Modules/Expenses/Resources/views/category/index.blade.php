@extends('setting::layouts.master')

@section('title', 'Expenses Types')
@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Expense Types</li>
    </ol>
@endsection

@section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Expense Types</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active">Expense Types</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-8">
             
              <!-- /.card -->
  
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="text-center">S.N</th>
                      <th class="text-center">Title</th>
                      <th class="text-center">Status</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($types as $key => $exp)
                      <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $exp->title }}</td>
                        <td class="text-center gap-2">
                          <a href="{{ route('expensescategories.edit', $exp->id) }}"><i class="fa fa-edit"></i></a>
                          <a id="delete" class="btn btn-danger btn-sm" onclick="
                                event.preventDefault();
                                if (confirm('Are you sure? It will delete the data permanently!')) {
                                    document.getElementById('destroy{{ $exp->id }}').submit()
                                }
                                ">
                                <i class="fa fa-trash"></i>
                                <form id="destroy{{ $exp->id }}" class="d-none" action="{{ route('expensescategories.destroy', $exp->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                </form>
                            </a>
                        </td>
                      </tr>
                      @endforeach
                      
                    </tbody>
                    <tfoot>
                    <tr>
                      <th class="text-center">S.N</th>
                      <th class="text-center">Title</th>
                      <th class="text-center">Status</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-4">
             
                <!-- /.card -->
    
                <div class="card">
                  
                  <!-- /.card-header -->
                  <div class="card-body">
                    @include('expenses::category.create')
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
   
@endsection
