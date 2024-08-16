@extends('setting::layouts.master')

@section('title', 'Edit Student')

@section('breadcrumb')
    <ol class="breadcrumb border-0 m-0">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}">Student</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid mb-4">
                <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row d-flex">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <a href="{{ route('students.index') }}" class="btn btn-success">Go Back <i
                                        class="bi bi-check"></i></a href="{{ route('students.index') }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group float-right">
                                <button class="btn btn-primary">Update Changes <i class="bi bi-check"></i></button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="name">Name <span class="text-danger">*</span></label>
                                                <input class="form-control" type="text" name="name"
                                                    value="{{ $student->name }}" required>
                                                    @error('name')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="email">Email <span class="text-danger">*</span></label>
                                                <input class="form-control" type="email" name="email"
                                                    value="{{ $student->user->email }}" required>
                                                @error('email')
                                                    <p style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <div class="input-group mb-3" id="show_hide_password">
                                                    <input type="password" class="form-control" placeholder="Password"
                                                        aria-label="password" name="password" required
                                                        aria-describedby="button-addon2">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button"
                                                            id="button-addon2"><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                @error('password')
                                                    <p style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password <span
                                                        class="text-danger">*</span></label>
                                                <div class="input-group" id="show_hide_confirm_password">
                                                    <input class="form-control" name="password_confirmation"
                                                        type="password">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button"
                                                            id="button-addon2"><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></button>
                                                    </div>
                                                </div>
                                                @error('password_cconfirmation')
                                                    <p style="color: red">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="qualification">Qualification <span
                                                        class="text-danger">*</span></label>
                                                <input class="form-control" value="{{ $student->qualification }}"
                                                    type="text" name="qualification" required>
                                                    @error('qualification')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="address">Address <span class="text-danger">*</span></label>
                                                <input class="form-control" value="{{ $student->address }}" type="text"
                                                    name="address" required>
                                                    @error('address')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role">Role <span class="text-danger">*</span></label>
                                                <select class="form-control" name="role" id="role" required>
                                                    <option value="7" selected>Student</option>
                                                    {{-- @foreach (\Spatie\Permission\Models\Role::where('name', '!=', 'Super Admin')->get() as $role) --}}
                                                    {{-- <option value="{{ $role->name }}">{{ $role->name }}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="role">Phone Number <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" name="phone" value="{{ $student->phone }}"
                                                    class="form-control" placeholder="Contact Number">
                                                    @error('phone')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status <span class="text-danger">*</span></label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="on" {{ $student->status == 'on' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="off" {{ $student->status == 'off' ? 'selected' : '' }}>
                                                Deactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="training">Trainigs <span class="text-danger">*</span></label>

                                        <input type="text" id="file-ip-1" class="form-control-file border"
                                            name="training" value="{{ $student->training }}">
                                        @error('training')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="total_fees">Total Fees <span class="text-danger">*</span></label>

                                        <input type="number" min="0" name="total_fees" id="file-ip-1"
                                            class="form-control-file border" value="{{ $student->total_fees }}">
                                        @error('total_fees')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="paid_fees">Paid Fees <span class="text-danger">*</span></label>

                                        <input type="number" min="0" id="file-ip-1"
                                            class="form-control-file border" value="{{ $student->paid_fees }}"
                                            name="paid_fees">
                                        @error('paid_fees')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="admission_date">Admission Date <span
                                                class="text-danger">*</span></label>

                                        <input type="date" min="0" id="file-ip-1"
                                            class="form-control-file border" value="{{ $student->admission_date }}"
                                            name="admission_date">
                                        @error('admission_date')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="complete_date">Training End Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" id="file-ip-1" class="form-control-file border"
                                            value="{{ $student->complete_date }}" name="complete_date"
                                            min="{{ date('Y-m-d') }}">
                                        @error('complete_date')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Profile Image <span class="text-danger">*</span></label>

                                        <input type="file" id="file-ip-1" accept="image/*"
                                            class="form-control-file border" value="{{ $student->user->image }}"
                                            onchange="showPreview1(event);" name="image">
                                        @error('image')
                                            <p style="color: red">{{ $message }}</p>
                                        @enderror
                                        <img src="{{ asset('upload/images/users/' . $student->user->image) }}"
                                            width="120px" alt="{{ $student->name }}">
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
<script type="text/javascript">
    function showPreview1(event) {
        if (event.target.files.length > 0) {
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
        }
    }
    $(document).ready(function() {
        $("#show_hide_password button").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
        $("#show_hide_confirm_password button").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_confirm_password input').attr("type") == "text") {
                $('#show_hide_confirm_password input').attr('type', 'password');
                $('#show_hide_confirm_password i').addClass("fa-eye-slash");
                $('#show_hide_confirm_password i').removeClass("fa-eye");
            } else if ($('#show_hide_confirm_password input').attr("type") == "password") {
                $('#show_hide_confirm_password input').attr('type', 'text');
                $('#show_hide_confirm_password i').removeClass("fa-eye-slash");
                $('#show_hide_confirm_password i').addClass("fa-eye");
            }
        });

    });
</script>
@endsection
