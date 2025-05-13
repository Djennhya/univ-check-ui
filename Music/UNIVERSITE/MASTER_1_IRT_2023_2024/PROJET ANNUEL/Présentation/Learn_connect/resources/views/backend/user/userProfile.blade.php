@extends('backend.layouts.app')
@section('title', 'User Profile')


@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Salut!</h4>
                    <p class="mb-0">Mes informations personnelles</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Profil</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>

                        </div>
                        <div class="profile-info">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="profile-photo">
                                        <img src="{{asset('/uploads/users/'.request()->session()->get('image'))}}" class="rounded-circle" height="140" width="140" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-9 col-12">
                                    <div class="row">
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-name">
                                                <h4 class="text-primary mb-0">{{ encryptor('decrypt', request()->session()->get('userName')) }}</h4>
                                                <p>{{ encryptor('decrypt', request()->session()->get('role')) }}</p>
                                            </div> 
                                        </div>
                                        <div class="col-xl-4 col-sm-6 border-right-1">
                                            <div class="profile-email">
                                                <h4 class="text-muted mb-0">{{ encryptor('decrypt', request()->session()->get('emailAddress')) }}</h4>
                                                <p>Email</p>
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
        
</div>

@endsection

@push('scripts')

@endpush