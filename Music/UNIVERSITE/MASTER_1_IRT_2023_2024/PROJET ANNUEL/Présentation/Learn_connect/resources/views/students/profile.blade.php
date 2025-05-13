@extends('frontend.layouts.app')
@section('title', "Student's Profile")
@section('body-attr') style="background-color: #ebebf2;" @endsection

@section('content')

<!-- Breadcrumb Starts Here -->
<div class="py-0">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center bg-transparent mb-0">
                <li class="breadcrumb-item"><a href="index.html" class="fs-6 text-secondary">Home</a></li>
                <li class="breadcrumb-item fs-6 text-secondary" aria-current="page">My Profile</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Students Info area Starts Here -->
<section class="section students-info">
    <div class="container">
        <div class="students-info-intro">
            <!-- profile Details   -->
            <div class="students-info-intro__profile">
                <div>
                    <div class="students-info-intro-start">
                        <div class="image">
                            <img src="{{ asset('/uploads/students/' . $student_info->image) }}" alt="Student" />
                        </div>
                        <div class="text">
                            <h5>{{$student_info->name_en}}</h5>
                            <p>{{$student_info->profession?$student_info->profession:'Student'}}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="students-info-intro-end">
                        <div class="enrolled-courses">
                            <div class="enrolled-courses-icon">
                                <svg width="28" height="26" viewBox="0 0 28 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 1.625H8.8C10.1791 1.625 11.5018 2.15764 12.477 3.10574C13.4521 4.05384 14 5.33974 14 6.68056V24.375C14 23.3694 13.5891 22.405 12.8577 21.6939C12.1263 20.9828 11.1343 20.5833 10.1 20.5833H1V1.625Z"
                                        stroke="#1089FF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M27 1.625H19.2C17.8209 1.625 16.4982 2.15764 15.523 3.10574C14.5479 4.05384 14 5.33974 14 6.68056V24.375C14 23.3694 14.4109 22.405 15.1423 21.6939C15.8737 20.9828 16.8657 20.5833 17.9 20.5833H27V1.625Z"
                                        stroke="#1089FF" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="enrolled-courses-text">
                                <h6 class="font-title--xs">{{$enrollment?$enrollment->count():0}}</h6>
                                <p class="fs-6 mt-1">Cours inscrits</p>
                            </div>
                        </div>
                        <div class="completed-courses">
                            <div class="completed-courses-icon">
                                <svg width="22" height="26" viewBox="0 0 22 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M19.1716 3.95235C19.715 4.14258 20.078 4.65484 20.078 5.23051V13.6518C20.078 16.0054 19.2226 18.2522 17.7119 19.9929C16.9522 20.8694 15.9911 21.552 14.9703 22.1041L10.5465 24.4938L6.11516 22.1028C5.09312 21.5508 4.13077 20.8694 3.36983 19.9916C1.85791 18.2509 1 16.0029 1 13.6468V5.23051C1 4.65484 1.36306 4.14258 1.90641 3.95235L10.0902 1.07647C10.3811 0.974511 10.6982 0.974511 10.9879 1.07647L19.1716 3.95235Z"
                                        stroke="#00AF91" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7.30688 12.4002L9.65931 14.7538L14.5059 9.90723" stroke="#00AF91"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="completed-courses-text">
                                <h5 class="font-title--xs">0</h5>
                                <p class="fs-6 mt-1">Cours complets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Nav  -->
            <nav class="students-info-intro__nav">
                <div class="nav" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                        aria-selected="true">Mon Profil</button>

                    <button class="nav-link" id="nav-setting-tab" data-bs-toggle="tab" data-bs-target="#nav-setting"
                        type="button" role="tab" aria-controls="nav-setting" aria-selected="false">Paramètres</button>
                </div>
            </nav>
        </div>

        <div class="students-info-main">
            <div class="tab-content" id="nav-tabContent">
                {{-- Profile Info --}}
                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel"
                    aria-labelledby="nav-profile-tab">
                    <div class="tab-content__profile">
                        <div class="tab-content__profile-content">
                            <div class="about-student">
                                <h6 class="font-title--card">A propos</h6>
                                <p class="font-para--md">
                                    {{$student_info->bio?$student_info->bio:"Student's Bio"}}
                                </p>
                            </div>
                        </div>
                        <div class="tab-content__profile-content">
                            <div class="info-student">
                                <h6 class="font-title--card">{{$student_info->name_en}}'s Information</h6>
                                <dl class="row my-0 info-student-topic">
                                    <dt class="col-sm-4">
                                        <span>Nom:</span>
                                    </dt>
                                    <dd class="col-sm-8">
                                        <p>{{$student_info->name_en}}</p>
                                    </dd>
                                </dl>
                                <dl class="row my-0 info-student-topic">
                                    <dt class="col-sm-4">
                                        <span>E-mail</span>
                                    </dt>
                                    <dd class="col-sm-8">
                                        <p>{{$student_info->email}}</p>
                                    </dd>
                                </dl>
                                <dl class="row my-0 info-student-topic">
                                    <dt class="col-sm-4">
                                        <span>Profession:</span>
                                    </dt>
                                    <dd class="col-sm-8">
                                        <p>{{$student_info->profession?$student_info->profession:'Student'}}</p>
                                    </dd>
                                </dl>
                                <dl class="row my-0 info-student-topic">
                                    <dt class="col-sm-4">
                                        <span>Téléphone:</span>
                                    </dt>
                                    <dd class="col-sm-8">
                                        <p>{{$student_info->contact_en?$student_info->contact_en:'+8801523565688'}}</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Settings --}}
                <div class="tab-pane fade" id="nav-setting" role="tabpanel" aria-labelledby="nav-setting-tab">
                    <div class="tab-content__profile">
                        <div class="row">
                            <!-- Student Profile Update Form -->
                            <form action="{{ route('student_save_profile') }}" method="post">
                                @csrf
                                <div class="col-md-12 col-lg-10">
                                    <div class="student-profile-form">
                                        <div class="student-profile-form__field">
                                            <label for="fullName_en">Full Name:</label>
                                            <input type="text" id="fullName_en" name="fullName_en" value="{{ old('fullName_en', $student_info->name_en) }}" />
                                        </div>
                                        <div class="student-profile-form__field">
                                            <label for="emailAddress">E-mail Address:</label>
                                            <input type="email" id="emailAddress" name="emailAddress" value="{{ old('emailAddress', $student_info->email) }}" />
                                        </div>
                                        <div class="student-profile-form__field">
                                            <label for="profession">Profession:</label>
                                            <input type="text" id="profession" name="profession" value="{{ old('profession', $student_info->profession) }}" />
                                        </div>
                                        <div class="student-profile-form__field">
                                            <label for="contact_en">Phone Number:</label>
                                            <input type="text" id="contact_en" name="contact_en" value="{{ old('contact_en', $student_info->contact_en) }}" />
                                        </div>
                                        <button class="button button-lg button--primary" type="submit">Save Changes</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Student Profile Image Change Form -->
                            <form id="changeImageForm" action="{{ route('change_image') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" id="newImageInput" />
                                <button type="button" id="changeImageButton" class="button button--primary-outline">Change Image</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
