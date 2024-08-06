@extends('setting::layouts.master')

@section('title', 'Packages')

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

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Create
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Create Package</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('packages.store') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                @php
                                                    $categories = [
                                                       'web_development'=> 'Web Development',
                                                        'app_development'=>'App Development',
                                                        'digital_marketing'=>'Digital Marketing',
                                                        'social_media'=>'Social Media',
                                                        'others'=>'Others',
                                                    ];
                                                    $duration = [
                                                        'monthly'=>'Monthly',
                                                        'yearly'=>'Yearly', 
                                                        'lifetime'=>'Lifetime',
                                                        'others'=>'Others'];
                                                @endphp
                                                <div class="modal-body">
                                                    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter package title']) !!}
                                                    {!! Form::label('package_category', 'Category', ['class' => 'form-label']) !!}
                                                    {!! Form::select('package_category', $categories, null, ['class' => 'form-control']) !!}
                                                    {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
                                                    {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Enter Price']) !!}
                                                    {!! Form::label('duration', 'Duration', ['class' => 'form-label']) !!}
                                                    {!! Form::select('duration', $duration, null, ['class' => 'form-control']) !!}
                                                    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                                                    {!! Form::textarea('description', null, [
                                                        'class' => 'summernote',
                                                        'rows' => 4,
                                                        'placeholder' => 'Enter description here',
                                                    ]) !!}
                                                    {!! Form::label('image', 'Image', ['class' => 'form-label']) !!}
                                                    {!! Form::file('image', ['class' => 'form-control','onchange'=>"showPreview1(event);"]) !!}
                                                    <div class="preview mt-2">
                                                        <img src="" id="file-ip-1-preview" width="200px">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Package Title</th>
                                            <th class="">Image</th>
                                            <th>Price</th>
                                            <th>Package Category</th>
                                            <th class="">Package Duration</th>
                                            <th class="">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($packages as $key => $value)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td class="">
                                                <img src="{{ asset('upload/images/packages/' . $value->image) }}"
                                                    width="120px" alt="{{ $value->title }}">
                                            </td>
                                            <td>Rs. {{ $value->price }}</td>
                                            <td>{{ $value->package_category }}</td>
                                            <td>{{ $value->duration }}</td>
                                            
                                            <td class="">
                                            
                                                    <a data-toggle="modal" data-id="{{ $value->id }}" data-target="#editModal{{$value->id}}"
                                                        title="Edit Student" class="btn btn-primary btn-xs"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="{{ route('packages.show',$value->id) }}" class="btn btn-success btn-xs" title="View Fees Details"><i class="fa fa-eye"></i></a>
                                                    <button id="delete" title="Delete Student"
                                                        class="btn btn-danger btn-xs"
                                                        onclick="event.preventDefault();
                                                            if (confirm('Are you sure? It will delete the data permanently!')) {
                                                                document.getElementById('destroy{{ $value->id }}').submit()}">
                                                        <i class="fa fa-trash"></i>
                                                        <form id="destroy{{ $value->id }}" class="d-none"
                                                            action="{{ route('packages.destroy', $value->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                        </form>
                                                    </button>
                                                <div class="modal fade" id="editModal{{$value->id}}">
                                                    <div class="modal-dialog modal-lg">
                                                        <form action="{{ route('packages.update',$value->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Package</h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                               
                                                                {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
                                                                {!! Form::text('title', $value->title, ['class' => 'form-control', 'placeholder' => 'Enter package title']) !!}
                                                                {!! Form::label('package_category', 'Category', ['class' => 'form-label']) !!}
                                                                {!! Form::select('package_category', $categories, $value->package_category, ['class' => 'form-control']) !!}
                                                                {!! Form::label('price', 'Price', ['class' => 'form-label']) !!}
                                                                {!! Form::number('price', $value->price, ['class' => 'form-control', 'placeholder' => 'Enter Price']) !!}
                                                                {!! Form::label('duration', 'Duration', ['class' => 'form-label']) !!}
                                                                {!! Form::select('duration', $duration, $value->duration, ['class' => 'form-control']) !!}
                                                                {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
                                                                {!! Form::textarea('description', $value->description, [
                                                                    'class' => 'summernote',
                                                                    'rows' => 4,
                                                                    'placeholder' => 'Enter description here',
                                                                ]) !!}
                                                                {!! Form::label('image', 'Image', ['class' => 'form-label']) !!}
                                                                {!! Form::file('image', ['class' => 'form-control','onchange'=>"showPreview2(event);"]) !!}
                                                                <div class="preview mt-2 d-flex gap-2">
                                                                    <img src="" id="file-ip-2-preview" width="200px">
                                                                
                                                                    <img src="{{ asset('upload/images/packages/'.$value->image) }}" width="200px">
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

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Package Title</th>
                                            <th class="">Image</th>
                                            <th>Price</th>
                                            <th>Package Category</th>
                                            <th class="">Package Duration</th>
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