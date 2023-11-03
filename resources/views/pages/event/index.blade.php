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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Cause list</a></li>
                        <li class="breadcrumb-item active">

                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addEventModal">Add
                                Event</a>
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
                {{-- <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">Calendar</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <p>Drag and drop your event or click in the calendar</p>
                                    <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme
                                        Release</div>
                                    <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
                                    </div>
                                    <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet
                                        manager</div>
                                    <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New
                                        theme</div>
                                </div>
                                <!-- checkbox -->
                                <div class="checkbox checkbox-event pt-3 pb-5">
                                    <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                    <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                                </div>
                                <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-event w-100">
                                    <span class="align-middle"><i class="ti-plus"></i></span> Create New
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">Create event organizer</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <form action="{{ route('event-organizer.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="modal-body">
                                            <p>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" placeholder="" name="name"
                                                        value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="" name="phone"
                                                        value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" placeholder="" name="email"
                                                        value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Website url</label>
                                                    <input type="text" class="form-control" placeholder="" name="website"
                                                        value="">
                                                </div>
                                            </div>

                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- checkbox -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar" class="app-fullcalendar"></div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>

                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add a category</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                                name="category-name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add Modal -->
            <div class="modal fade" id="addEventModal" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="{{ route('event.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="modal-header">
                                <h5 class="modal-title">Create event</h5>
                                <button type="button" class="close" data-dismiss="modal"><span>×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" class="form-control" placeholder="" name="title"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Organizer</label>
                                        <select class="custom-select" name="event_organizer_id">
                                            <option selected="">Choose organizer</option>
                                            @foreach ($eventOrganizers as $organizer)
                                                <option value="{{ $organizer->id }}">{{ $organizer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Date</label>

                                        <input value=`${selectedDate}` name="date" class="datepicker-default form-control" id="datepicker">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_url">
                                                <label class="custom-file-label">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Start time</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14" name="start_time">
                                            <span class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>End time</label>
                                        <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                            data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14" name="end_time">
                                            <span class="input-group-append"><span class="input-group-text"><i
                                                        class="fa fa-clock-o"></i></span></span>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6">
                                        <label>Location</label>
                                        <input type="text" class="form-control" placeholder="" name="location"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Location map (<i style="color: #E34724">Google Iframe -
                                                optional</i>)</label>
                                        <input type="text" class="form-control" placeholder="" name="location_map"
                                            value="">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Description</label>
                                        <textarea class="summernote" name="description"></textarea>
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


            <!-- Event Modal -->
            <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="eventModalLabel">Event Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5 id="modal-title"></h5>
                            <p><span id="modal-description"></span></p>
                            <p>Date: <span id="modal-date"></span></p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>



            {{-- /////////////////////data-target="#eventModal"///////////////// --}}


            {{-- <div class="modal fade" id="exampleModalCenter" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                                egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
@endsection


@section('styles')
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: red;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>


    <style>
        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child {
            width: 130px;
        }

        table.table td a {
            color: #a0a5b1;
            display: inline-block;
            margin: 0 5px;
        }

        table.table td a.view {
            color: #03A9F4;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 95%;
            width: 30px;
            height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 30px !important;
            text-align: center;
            padding: 0;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 6px;
            font-size: 95%;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <style>
        /* .custom-day-cell {
                                    position: relative;
                                } */

        .add-event-icon {
            position: absolute;
            bottom: 5px;
            left: 5px;
            font-size: 20px;
            /* color: red */
        }
    </style>
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const csrfToken = $('meta[name="csrf-token"]').attr('content');

            const toggleElements = document.querySelectorAll('input[name="featured"]');
            toggleElements.forEach(function(toggle) {
                const isFeatured = toggle.getAttribute('data-featured');
                toggle.checked = isFeatured === '1';
                // Add an event listener to handle changes and make AJAX requests
                toggle.addEventListener('change', function() {
                    const causeId = toggle.getAttribute('data-cause-id');
                    const isChecked = toggle.checked;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                        },
                    });

                    // Send an AJAX request to update the "featured" status
                    $.ajax({
                        type: 'POST',
                        url: `/update-featured/${causeId}`,
                        data: {
                            featured: isChecked ? '1' : '0'
                        },
                        success: function(data) {
                            if (data.success) {
                                if (isChecked) {
                                    Swal.fire('Success', 'Cause list is now featured.',
                                        'success');
                                } else {
                                    Swal.fire('Success',
                                        'Cause list is no longer featured.',
                                        'success');
                                }
                            } else {
                                Swal.fire('Error', 'Error updating featured status.',
                                    'error');
                            }
                        },
                        error: function() {
                            alert('An error occurred.');
                        },
                    });
                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var events = @json($events);

            var formattedEvents = events.map(function(event) {
                return {
                    title: event.title,
                    start: event.date, // Use only the date
                    description: event.description, // Use only the date
                    backgroundColor: '#353C5E',
                    borderColor: '#353C5E',
                };
            });

            var calendar = new FullCalendar.Calendar(calendarEl, {
                events: formattedEvents,
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                initialView: 'dayGridMonth',

                dayCellContent: function(arg) {
                    // var buttonHtml = '<button class="add-event-button btn-sm" data-toggle="modal" data-target="#addEventModal">Add Event</button>';

                    var isPastDay = arg.date < new Date(); // Check if the date is in the past

                    var buttonHtml = isPastDay ? '' :
                        '<i class="fa fa-plus add-event-icon" data-toggle="modal" data-target="#addEventModal"></i>';
                    var dayClass = isPastDay ? 'past-day' : '';

                    // var buttonHtml =
                    //     '<i class="fa fa-plus add-event-icon" data-toggle="modal" data-target="#addEventModal"></i>';


                    return {
                        html: '<div class="custom-day-cell ' + dayClass + '">' + arg.dayNumberText +
                            buttonHtml +
                            '</div>',
                    };
                    // return {
                    //     html: '<div class="custom-day-cell">' + arg.dayNumberText + buttonHtml +
                    //         '</div>',
                    // };
                },

                // dayCellContent: function(arg) {
                //     var buttonHtml =
                //         '<i class="fas fa-plus add-event-icon" data-toggle="modal" data-target="#eventModal"></i>';

                //     return {
                //         html: '<div class="custom-day-cell">' + arg.dayNumberText + buttonHtml +
                //             '</div>',
                //     };
                // },

                eventClick: function(info) {

                    // if (info.jsEvent.target.classList.contains('add-event-button')) {
                    //     // Handle the button click here, e.g., show a modal to add an event for the selected day.
                    //     var selectedDate = info.dateStr;
                    //     // Implement your logic to open an event creation modal for the selected date.
                    //     console.log('Add event for date: ' + selectedDate);
                    // }

                    // Handle event click, e.g., show event details
                    // Get the event title and date
                    var eventTitle = info.event.title;
                    var eventDate = info.event.start;
                    var selectedDate = info.event.start;
                    var eventDesc = info.event.extendedProps
                        .description; // Assumes you have a description property in your event data

                    // Update the modal content
                    document.getElementById('modal-title').textContent = eventTitle;
                    // document.getElementById('modal-description').textContent = eventDesc;
                    document.getElementById('modal-description').innerHTML =
                        eventDesc; // Render HTML content

                    document.getElementById('modal-date').textContent = eventDate.toDateString();

                    // Show the modal
                    $('#eventModal').modal('show');
                }

            });

            calendar.render();

        });
    </script>
@endsection
