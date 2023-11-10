@extends('layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation
@endsection
@section('setHomeActive')
    active
@endsection


@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Paulsabinna Foundation for the Needy</p>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item active">

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModalCenter">Settings</a>
                        </li>

                    </ol>
                </div>
            </div>
            <!-- row -->


            @if (session('success'))
                <div class="alert alert-primary alert-dismissible alert-alt solid fade show">
                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i
                                class="mdi mdi-close"></i></span>
                    </button>
                    <strong>Success!</strong>

                    {{ session('success') }}
                </div>
            @endif


            <div class="row">

                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card mb-3 text-center">
                        <div class="card-header">
                            <h5 class="card-title">Logo</h5>
                        </div>
                        <img class="card-img-top img-fluid" src="{{ asset($setting->logo) }}" alt="Card image cap">

                        <div class="card-body">
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editLogo{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Favicon</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text">
                                <img src="{{ asset($setting->favicon) }}" alt="" srcset=""
                                    class="img-responsive">
                            </p>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editfavicon{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                            {{-- <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModalCenter "
                                class="edit" title="Edit" data-toggle="tooltip">
                                <i class="material-icons" style="color: #fff; font-weight:700">&#xE254;</i>
                            </a> --}}
                        </div>
                        {{-- <div class="card-footer">
                            <p class="card-text text-dark">Last updateed 3 min ago</p>
                        </div> --}}
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Company Name</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text" style="color: #000">
                                {{ $setting->company_name }}
                            </p>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editcompany_name{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Company Address</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text" style="color: #000">
                                {{ $setting->address }}
                            </p>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editaddress{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Company Short Description</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text" style="color: #000">
                                {{ $setting->description }}
                            </p>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editdescription{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Phones No</h5>
                        </div>
                        <div class="card-body">

                            <p class="card-text" style="color: #000">
                                Phone 1 - {{ $setting->phone_1 }}
                                <br>
                                Phone 2- {{ $setting->phone_2 }}
                            </p>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editphones{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Email No</h5>
                        </div>
                        <div class="card-body">

                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-list-group">
                                            <div class="list-group">

                                                <a href="javascript:void()"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-3">Email 1</h5>
                                                    </div>
                                                    <p class="mb-1 float-left">{{ $setting->email_1 }}</p>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-list-group">
                                            <div class="list-group">

                                                <a href="javascript:void()"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-3">Email 2</h5>
                                                    </div>
                                                    <p class="mb-1 float-left">{{ $setting->email_2 }}</p>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editEmail{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6">
                    <div class="card text-center">
                        <div class="card-header">
                            <h5 class="card-title">Company Social Media</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-list-group">
                                            <div class="list-group">

                                                <a href="javascript:void()"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-3 float-left">Facebook</h5>
                                                        {{-- <small class="text-muted">3
                                                            days ago</small> --}}
                                                    </div>
                                                    <p class="mb-1">{{ $setting->facebook }}</p>
                                                    {{-- <small class="text-muted">Donec
                                                        id elit non mi porta.</small> --}}
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-list-group">
                                            <div class="list-group">

                                                <a href="javascript:void()"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-3">Youtube</h5>
                                                        {{-- <small class="text-muted">3
                                                            days ago</small> --}}
                                                    </div>
                                                    <p class="mb-1 float-left">{{ $setting->youtube }}</p>
                                                    {{-- <small class="text-muted">Donec
                                                        id elit non mi porta.</small> --}}
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="basic-list-group">
                                            <div class="list-group">

                                                <a href="javascript:void()"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="d-flex w-100 justify-content-between">
                                                        <h5 class="mb-3">Instagram</h5>
                                                        {{-- <small class="text-muted">3
                                                            days ago</small> --}}
                                                    </div>
                                                    <p class="mb-1 float-left">{{ $setting->instagram }}</p>
                                                    {{-- <small class="text-muted">Donec
                                                        id elit non mi porta.</small> --}}
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#editsocial{{ $setting->id }}" class="edit" title="Edit"
                                data-toggle="tooltip">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>

            </div>



            <!-- Edit Email Modal -->
            <div class="modal fade" id="editsocial{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('social.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Company Social Media</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company facebook</label>
                                    <input type="text" class="form-control" placeholder="" name="facebook"
                                        value="{{ $setting->facebook }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Company youtube</label>
                                    <input type="text" class="form-control" placeholder="" name="youtube"
                                        value="{{ $setting->youtube }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Company instagram</label>
                                    <input type="text" class="form-control" placeholder="" name="instagram"
                                        value="{{ $setting->instagram }}">
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit description Modal -->
            <div class="modal fade" id="editdescription{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('description.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Company short description</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $setting->description }}</textarea>
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Email Modal -->
            <div class="modal fade" id="editEmail{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('email.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Email No</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company Email No 1</label>
                                    <input type="text" class="form-control" placeholder="" name="email_1"
                                        value="{{ $setting->email_1 }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Company Email No 2</label>
                                    <input type="text" class="form-control" placeholder="" name="email_2"
                                        value="{{ $setting->email_2 }}">
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit phones Modal -->
            <div class="modal fade" id="editphones{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('phone.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Phones No</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company phone No 1</label>
                                    <input type="text" class="form-control" placeholder="" name="phone_1"
                                        value="{{ $setting->phone_1 }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Company phone No 2</label>
                                    <input type="text" class="form-control" placeholder="" name="phone_2"
                                        value="{{ $setting->phone_2 }}">
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit address Modal -->
            <div class="modal fade" id="editaddress{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('address.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Company Address</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company Address</label>
                                    <textarea class="form-control" name="address" id="" cols="30" rows="10">{{ $setting->address }}</textarea>
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit company_name Modal -->
            <div class="modal fade" id="editcompany_name{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('company_name.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="modal-header">
                                <h5 class="modal-title">Edit Company Name</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-group col-md-12">
                                    <label>Company Name</label>
                                    <input type="text" class="form-control" placeholder="" name="company_name"
                                        value="{{ $setting->company_name }}">
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit favicon Modal -->
            <div class="modal fade" id="editfavicon{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('favicon.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{ $setting->favicon }}" name="old_img">

                            <div class="modal-header">
                                <h5 class="modal-title">Edit favicon</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="favicon">
                                                <label class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Logo Modal -->
            <div class="modal fade" id="editLogo{{ $setting->id }}" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('logo.update', $setting->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <input type="hidden" value="{{ $setting->logo }}" name="old_img">

                            <div class="modal-header">
                                <h5 class="modal-title">Edit logo</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="logo">
                                                <label class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('styles')
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection


@section('scripts')
@endsection
