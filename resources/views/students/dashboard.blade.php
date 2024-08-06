@extends('frontend.layouts.app')
@section('content')
    <!-- start: Breadcrumb Area -->
    <section class="breadcrumb-wrapper">
        <div class="container">
            <div class="row vh-100">
                <div class="col-lg-4 ">
                    <div class="card vh-100">
                        <div class="card-header text-center">
                            <img src="{{ asset('upload/images/users/' . $student->user->image) }}" class="w-50 rounded-circle"
                                height="200px" alt="">
                            <h5>{{ $student->name }}</h5>
                            <h5>{{ $student->user->email }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex ">
                                        <div class="nav flex-column nav-pills me-3 w-100" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <button class="text-start nav-link active" id="v-pills-home-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                                role="tab" aria-controls="v-pills-home" aria-selected="true"> <i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Profile</button>
                                            <hr>
                                            <button class="text-start nav-link" id="v-pills-profile-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button"
                                                role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Trainigs</button>
                                            <hr>
                                            <button class="text-start nav-link" id="v-pills-messages-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button"
                                                role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Fees</button>
                                            <hr>
                                            <button class="text-start nav-link" id="v-pills-exam-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-exam" type="button"
                                                role="tab" aria-controls="v-pills-exam" aria-selected="false"><i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Exams</button>
                                            <hr>
                                            <button class="text-start nav-link" id="v-pills-marksheet-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-marksheet" type="button"
                                                role="tab" aria-controls="v-pills-marksheet" aria-selected="false"><i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Marksheet</button>
                                            <hr>
                                            <button class="text-start nav-link" id="v-pills-credentials-tab"
                                                data-bs-toggle="pill" data-bs-target="#v-pills-credentials" type="button"
                                                role="tab" aria-controls="v-pills-credentials" aria-selected="false"><i
                                                    class="fa fa-user"></i> &nbsp;&nbsp;&nbsp; Change Credentials</button>
                                            <hr>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-arrow-right"></i>
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-8 ">
                    <div class="card vh-100">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Profile Detail's</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    </tr>
                                                    <th>Name</th>
                                                    <th>:</th>
                                                    <td>{{ $student->name }}</td>
                                                    </tr>
                                                    </tr>
                                                    <th>Phone</th>
                                                    <th>:</th>
                                                    <td>{{ $student->phone }}</td>
                                                    </tr>
                                                    </tr>
                                                    <th>Email</th>
                                                    <th>:</th>
                                                    <td>{{ $student->user->email }}</td>

                                                    </tr>
                                                    </tr>
                                                    <th>Education Qualification</th>
                                                    <th>:</th>
                                                    <td>{{ $student->qualification }}</td>
                                                    </tr>
                                                    </tr>
                                                    <th>Address</th>
                                                    <th>:</th>
                                                    <td>{{ $student->address }}</td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Training Detail's</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    </tr>
                                                    <th>Training Title</th>
                                                    <th>:</th>
                                                    <td>{{ $student->training }}</td>
                                                    </tr>
                                                    </tr>
                                                    <th>Admission Date</th>
                                                    <th>:</th>
                                                    <td>{{ \Carbon\Carbon::parse($student->admission_date)->format('d-M-Y') }}
                                                    </td>
                                                    </tr>
                                                    </tr>
                                                    <th>Training Complete Date</th>
                                                    <th>:</th>
                                                    <td>{{ \Carbon\Carbon::parse($student->complete_date)->format('d-M-Y') }}
                                                    </td>

                                                    </tr>
                                                    </tr>
                                                    <th>Address</th>
                                                    <th>:</th>
                                                    <td>{{ $student->address }}</td>
                                                    </tr>
                                                    </tr>
                                                    <th>Total fees</th>
                                                    <th>:</th>
                                                    <td>Rs {{ $student->total_fees }} /-</td>
                                                    </tr>
                                                    <th>Paid fees</th>
                                                    <th>:</th>
                                                    <td class="text-primary">Rs {{ $student->paid_fees }} /-</td>
                                                    </tr>
                                                    <th>Due fees</th>
                                                    <th>:</th>
                                                    <td class="text-danger">Rs {{ $student->due_fees }} /-</td>
                                                    </tr>
                                                    <th>Status</th>
                                                    <th>:</th>
                                                    <td>
                                                        @if ($student->status === 'on')
                                                            <span class="btn btn-success">Processing</span>
                                                        @else
                                                            <span class="btn btn-info">Completed</span>
                                                        @endif
                                                    </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Fee Detail's</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table">
                                                    <thead>
                                                        <th>S.N</th>
                                                        <th>Fee</th>
                                                        <th>Methods</th>
                                                        <th>Date</th>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($student->fees as $key => $fee)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $fee->fees }}</td>
                                                                <td>{{ $fee->method }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($fee->date)->format('d-M-Y') }}
                                                                </td>

                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-exam" role="tabpanel"
                                aria-labelledby="v-pills-exam-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Exam Details</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <h5>Exam not found!!</h5>
 
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-marksheet" role="tabpanel"
                                aria-labelledby="v-pills-marksheet-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Marksheet Detail's</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                               <h5>Marksheet not found!!</h5>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-credentials" role="tabpanel"
                                aria-labelledby="v-pills-credentials-tab">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h4>Change Password</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                    <form method="post" action="{{ route('student.password.update') }}" class="contact-form-box" style="width: 100% !important;" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="300">
                                                        @csrf
                                                        <div class="form-input">
                                                            <label>Old Password</label>
                                                            <input type="text" class="form__input w-100" required name="current_password" />
                                                        </div>
                                                        <div class="form-input">
                                                            <label>New Password</label>
                                                            <input type="text" class="form__input w-100" required name="new_password" />
                                                        </div>
                                                        <div class="form-input">
                                                            <label>Confirm Password</label>
                                                            <input type="text" class="form__input w-100" required name="new_password_confirmation" />
                                                        </div>
                                                        
                                                    
                                                        <div class="tj-contact-button">
                                                            <button class="btn tj-primary-btn" type="submit">Save Changes</button>
                                                        </div>
                                                    </form>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end: Breadcrumb Area -->
@endsection
