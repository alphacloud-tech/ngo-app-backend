@extends('layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - contact-us
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                    </ol>
                </div>
            </div>

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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>S/N </th>
                                            <th>Name </th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Date</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($messages as $item)
                                            <tr style="color: #000">
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $item->lastname }} {{ $item->firstname }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone }}</td>
                                                <td><a href="#" class="" data-toggle="modal"
                                                        data-target="#viewModalCenter{{ $item->id }}" class="edit"
                                                        title="Edit" data-toggle="tooltip">
                                                        <i class="material-icons" style=" font-weight:700">
                                                            {!! \Illuminate\Support\Str::limit($item->message, 100) !!}
                                                        </i>
                                                    </a>
                                                </td>
                                                <td>
                                                    {{ \Carbon\Carbon::parse($item->created_at)->format('D, M j, Y \a\t g:ia') }}
                                                </td>
                                                <td>

                                                    <a type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#viewModalCenter{{ $item->id }}" class="edit"
                                                        title="Edit" data-toggle="tooltip">
                                                        <i class="material-icons"
                                                            style="color: #fff; font-weight:700">&#xE254;</i>
                                                    </a>

                                                    <a type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#deleteModalCenter{{ $item->id }}" class="delete"
                                                        title="Delete" data-toggle="tooltip">
                                                        <i class="material-icons"
                                                            style="color: #fff; font-weight:700">&#xE872;</i>
                                                    </a>
                                                </td>
                                            </tr>


                                            {{-- delete modal  --}}
                                            <div class="modal fade" id="viewModalCenter{{ $item->id }}"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Read message</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>{!! $item->message, 100 !!}</p>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            {{-- delete modal  --}}
                                            <div class="modal fade" id="deleteModalCenter{{ $item->id }}"
                                                aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Delete message</h5>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal"><span>×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('messages.destroy', $item->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')

                                                                <p>Are you sure you want to delete?</p>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection


@section('scripts')
@endsection
