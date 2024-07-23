@extends('setting::layouts.master')

@section('title', 'Create Client')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('clients.index') }}">Client</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid mb-4">
                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <a href="{{ route('clients.index') }}" class="btn btn-success">Go Back <i
                                        class="bi bi-check"></i></a href="{{ route('students.index') }}">
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="card">
                                <dv class="card-header">
                                    Personal Details
                                </dv>
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Name" type="text" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Email" type="email" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password">Password <span class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Password" type="password" name="password" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Confirm Password" type="password" name="password_confirmation"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="qualification">Contact Number <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Contact Number" type="text" name="phone_no" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="address">Address <span class="text-danger">*</span></label>
                                                <input class="form-control" placeholder="Enter Address" type="text" name="address" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option placeholder="Enter "value="" selected disabled>Select Status</option>
                                            <option placeholder="Enter "value="on">Active</option>
                                            <option placeholder="Enter "value="off">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                        <div class="form-group text-center">
                                            <button class="btn btn-primary">Save Changes <i class="bi bi-check"></i></button>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <dv class="card-header">
                                    Company Details
                                </dv>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="company_name">Company Name <span class="text-danger">*</span></label>

                                        <input type="text" id="file-ip-1" class="form-control-file border"
                                            placeholder="Enter Company Name"value="{{ old('company_name') }}" name="company_name">
                                        @error('company_name')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="pan_vat">Company PAN/ VAT <small class="">(optional)</small></label>

                                        <input type="number" min="0" name="pan_vat" id="file-ip-1"
                                            class="form-control-file border" placeholder="Enter Company PAN OR VAT Number"value="{{ old('pan_vat') }}">
                                        @error('pan_vat')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="company_phone">Contact No. <small class="">(optional)</small></label>

                                        <input type="number" min="0" id="file-ip-1"
                                            class="form-control-file border"  placeholder="Enter Company Contact Number"value="{{ old('company_phone') }}"
                                            name="company_phone">
                                        @error('company_phone')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="company_details">About Company <span
                                                class="text-danger">*</span></label>
                                        <textarea name="company_details" class="form-control" id="" cols="30"  rows="5" placeholder="Enter Company Short Intro"></textarea>
                                        @error('company_details')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="company_logo">Company Logo <small class="">(optional)</small></label>

                                        <input type="file" id="file-ip-1" accept="image/*"
                                            class="form-control-file border" value="{{ old('company_logo') }}"
                                            onchange="showPreview1(event);" name="company_logo">
                                        @error('company_logo')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                        <div class="preview mt-2">
                                            <img src="" id="file-ip-1-preview" width="200px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </form>
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
    </script>
@endsection
