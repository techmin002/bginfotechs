@extends('setting::layouts.master')

@section('title', 'Projects')

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

                                @include('Client::projects.create')
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Project Title</th>
                                            <th>Client</th>
                                            <th>Package</th>
                                            <th>Total Amount</th>
                                            <th>Paid Amount</th>
                                            <th class="">Due Amount</th>
                                            <th>Start Date</th>
                                            <th>To Date</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $key => $value)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->client->name }}</td>
                                                <td>{{ $value->package->title }}</td>
                                                <td>Rs. {{ $value->price }}</td>
                                                <td>Rs. {{ $value->paid_amount }}</td>
                                                <td>Rs. {{ $value->price - $value->paid_amount }}</td>
                                                <td>{{ \Carbon\Carbon::parse($value->start_date)->format('Y-M-d') }}</td>
                                                <td>{{ \Carbon\Carbon::parse($value->end_date)->format('Y-M-d') }}</td>
                                                <td class="">

                                                    <a data-toggle="modal" data-id="{{ $value->id }}"
                                                        data-target="#editModal{{ $value->id }}" title="Edit Project"
                                                        class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('projects.show', $value->id) }}"
                                                        class="btn btn-success btn-xs" title="View Amount Details"><i
                                                            class="fa fa-eye"></i></a>
                                                    <button id="delete" title="Delete Student"
                                                        class="btn btn-danger btn-xs"
                                                        onclick="event.preventDefault();
                                                            if (confirm('Are you sure? It will delete the data permanently!')) {
                                                                document.getElementById('destroy{{ $value->id }}').submit()}">
                                                        <i class="fa fa-trash"></i>
                                                        <form id="destroy{{ $value->id }}" class="d-none"
                                                            action="{{ route('projects.destroy', $value->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </button>
                                                    @include('Client::projects.edit')
                                                   
                                                        @include('Client::projects.amount_add')

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Project Title</th>
                                            <th>Package</th>
                                            <th>Client</th>
                                            <th>TotalAmount</th>
                                            <th>Paid Amount Category</th>
                                            <th class="">Due Amount</th>
                                            <th>Start Date</th>
                                            <th>To Date</th>
                                            <th class="">Action</th>
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
@section('script')
    <!-- image preview -->
    <script type="text/javascript">
        function showPreview1(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreview2(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-2-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function showPreview3(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-3-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

    <script>
        $('textarea.summernote').summernote({
            placeholder: 'Enter Message',
            tabsize: 2,
            height: 100,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ],
        });
    </script>
@endsection()
