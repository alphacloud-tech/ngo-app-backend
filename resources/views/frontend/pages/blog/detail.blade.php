@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Blog single
@endsection
@section('setHomeActive')
    active
@endsection
@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Blog Details</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>


    <section class="wide-tb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                    @if ($blog)
                        @php
                            $date = \Carbon\Carbon::parse($blog->created_at);
                            $day = $date->format('d'); // Extract the day
                            $month = $date->format('M'); // Extract the abbreviated month name
                            $year = $date->format('Y'); // Extract the abbreviated month name
                        @endphp
                        <div class="sidebar-spacer">
                            <div class="d-flex">
                                <div class="post-date txt-blue">{{ $day }}, {{ $month }},
                                    {{ 2020 }}
                                </div>
                                <div class="mx-2">/</div>
                                <div class="post-category">{{ $blog->category->name }}</div>
                            </div>
                            <h1 class="heading-main">
                                {{ $blog->title }}
                            </h1>

                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    {{-- <img src="assets/images/causes/causes_single_img.jpg" alt> --}}
                                    <img width="" height="" src="{{ $imgPath . '/' . $blog->image_url }}" alt>

                                </div>
                                <div class="content-wrap-single">
                                    <p>{!! $blog->content !!}</p>
                                    <div class="row my-5">
                                        <div class="col-md-6">
                                            <img src="{{ asset('frontend/assets/images/causes/causes_single_small_img_2.jpg') }}"
                                                class="rounded" alt>
                                        </div>
                                        <div class="col-md-6">
                                            <img src="{{ asset('frontend/assets/images/causes/causes_single_small_img_1.jpg') }}"
                                                class="rounded" alt>
                                        </div>
                                    </div>

                                </div>
                                <div class="share-this-wrap">
                                    <div class="share-line">
                                        <div class="pe-4">
                                            <strong>Share This</strong>
                                        </div>
                                        <div class="ps-4">
                                            <ul class="list-unstyled list-inline mb-0">
                                                {{-- <li class="list-inline-item"><a href="#"><i
                                                            class="icofont-facebook"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="icofont-twitter"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="icofont-instagram"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="icofont-behance"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="icofont-youtube-play"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="app" data-blog-id="{{ $blog->id }}">
                                <div class="commnets-reply">
                                    <div class="media" v-for="comment in comments" :key="comment.id"
                                        v-if="comment.blog_post_id === {{ $blog->id }}">
                                        <img class="thumb" src="{{ asset('frontend/assets/images/reply.png') }}" alt>
                                        <div class="media-body">
                                            <div class="d-flex justify-content-between mb-3">
                                                <div class>
                                                    <h4 class="mb-0 txt-orange">@{{ comment.name }}</h4>
                                                    <small class="txt-blue">@{{ formatDate(comment.created_at) }}</small>
                                                </div>
                                                <a type="button" class="read-more-line"
                                                    @click="toggleReplyForm(comment)"><span>Reply</span></a>
                                            </div>
                                            <p>@{{ comment.content }}</p>
                                            <div class="media reply-box" v-for="reply in comment.replies"
                                                :key="reply.id">
                                                <img src="{{ asset('frontend/assets/images/reply.png') }}" alt=""
                                                    class="thumb ">
                                                <div class="media-body">
                                                    <div class="d-flex justify-content-between mb-3">
                                                        <div class="">
                                                            <h4 class="mb-0 txt-orange">@{{ reply.name }}</h4>
                                                            <small class="txt-blue">@{{ formatDate(reply.created_at) }}</small>
                                                        </div>
                                                    </div>
                                                    @{{ reply.content }}
                                                </div>
                                            </div>
                                            <br>

                                            <form v-if="comment.showReplyForm"
                                                @submit.prevent="submitReply($event, comment)" class="comment-form">
                                                @csrf
                                                <input type="hidden" name="comment_id" :value="comment.id">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <p class="card-text">
                                                                <div class="row">
                                                                    <div class="col-md-12 mb-0">
                                                                        <div class="form-group">
                                                                            <input style="border: 1px solid #ccc"
                                                                                v-model="replyName" type="text"
                                                                                class="form-control" id="replyName"
                                                                                placeholder="Your Name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12 mb-0">
                                                                        <div class="form-group">
                                                                            <textarea style="border: 1px solid #ccc" name="content" id="comment" class="form-control" rows="5"
                                                                                placeholder="Your Comments" v-model="newReply"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button type="submit"
                                                                        class="btn btn-default text-nowrap">Reply</button>
                                                                </div>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <h1 class="heading-main mb-4">
                                    <small>Leave a Comment</small>
                                </h1>

                                <form id="comment-form" @submit.prevent="submitComment" class="comment-form">
                                    @csrf

                                    <input type="hidden" name="blog_post_id" value="{{ $blog->id }}">

                                    <div class="row">
                                        <div class="col-md-12 mb-0">
                                            <div class="form-group">
                                                <input v-model="name" type="text" class="form-control" id="name"
                                                    placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-0">
                                            <div class="form-group">
                                                <textarea id="comment" class="form-control" rows="5" placeholder="Your Comments" v-model="newComment"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-default text-nowrap">Post Comment</button>
                                    </div>
                                </form>
                            </div>



                        </div>
                    @endif
                </div>


                <div class="col-lg-3 col-md-12">
                    <aside class="row sidebar-widgets">

                        <div class="sidebar-primary col-lg-12 col-md-6">

                            {{-- <div class="widget-wrap">
                                <h3 class="widget-title">Search Keywords</h3>
                                <form class="sidebar-search">
                                    <input type="text" class="form-control" placeholder="Enter here search...">
                                    <button type="submit" class="btn-link"><i class="icofont-search"></i></button>
                                </form>
                            </div> --}}


                            <div class="widget-wrap">
                                <h3 class="widget-title">Categories</h3>
                                <div class="blog-list-categories">
                                    <ul class="list-unstyled icons-listing theme-orange mb-0">
                                        @foreach ($categories as $item)
                                            <li><a href="#">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>


                            <div class="widget-wrap">
                                <h3 class="widget-title">Popular Posts</h3>
                                <div class="popular-post">
                                    <ul class="list-unstyled">
                                        @foreach ($resentBlogs as $item)
                                            @php
                                                $date = \Carbon\Carbon::parse($item->created_at);
                                                $day = $date->format('d'); // Extract the day
                                                $month = $date->format('M'); // Extract the abbreviated month name
                                                $year = $date->format('Y'); // Extract the abbreviated month name
                                            @endphp
                                            <li>
                                                {{-- <img src="assets/images/post_thumb_1.jpg" alt> --}}
                                                <img width="60px" height="60px"
                                                    src="{{ $imgPath . '/' . $item->image_url }}" alt>

                                                <div>
                                                    <h6><a
                                                            href="{{ route('blog.single', $item->id) }}">{{ $item->title }}</a>
                                                    </h6>
                                                    <small>{{ $day }} {{ $month }}
                                                        {{ $year }}</small>
                                                </div>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                        </div>


                        <div class="sidebar-secondary col-lg-12 col-md-6">

                            <div class="widget-wrap">
                                <h3 class="widget-title">Recent Causes</h3>
                                <div class="owl-carousel owl-theme" id="sidebar-causes">

                                    @foreach ($causes as $item)
                                        <div class="causes-wrap">
                                            <div class="img-wrap">
                                                <a href="{{ route('cause.single', $item->id) }}">
                                                    <img src="{{ $imgPath . '/' . $item->image_url }}" alt>
                                                    {{-- <img src="assets/images/causes/causes_img_3.jpg" alt> --}}
                                                </a>
                                                <div class="raised-progress">
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                            <span class="txt-orange">
                                                                ${{ $item->raised_amount }}</span> raised of
                                                            <span class="txt-green">${{ $item->target_amount }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content-wrap">
                                                <span class="tag">{{ $item->category_name }}</span>
                                                <h3><a
                                                        href="{{ route('cause.single', $item->id) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="text-md-end">
                                                    <a href="{{ route('cause.single', $item->id) }}"
                                                        class="read-more-line"><span>Read
                                                            More</span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>


                            <div class="widget-wrap">
                                <div class="sidebar-ads">
                                    <img src="{{ asset('frontend/assets/images/sidebar_ads.jpg') }}" alt>
                                    <div class="content">
                                        <i class="charity-donate_money"></i>
                                        <h3>Let Us Come Together To Make A Difference</h3>
                                        <a href="{{ route('donation') }}" class="btn btn-secondary">Donate Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('styles')
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
    <style>

    </style>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection


@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('js/multislider.js') }}"></script> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>

    <script>
        new Vue({
            el: '#app',
            data: {
                comments: [], // Initialize with existing comments
                replies: [], // Initialize with existing comments
                newComment: '', // For the new comment input field
                newReply: '', // For the new reply input field
                name: '',
                replyName: '',

                blogPostId: document.getElementById('app').getAttribute('data-blog-id'),
            },
            methods: {
                submitComment() {
                    // Send the new comment to the server via AJAX
                    axios.post('/comments', {
                            _token: "{{ csrf_token() }}",
                            blog_post_id: {{ $blog->id }},
                            comment: this.newComment,
                            name: this.name,
                        })
                        .then(response => {
                            // Add the new comment to the comments array
                            this.comments.push(response.data);
                            // Clear the newComment field
                            this.newComment = '';
                            this.name = '';
                        })
                        .catch(error => {
                            console.error(error);
                        });
                },
                formatDate(date) {
                    return moment.utc(date).format('DD, MMM, YYYY');
                },

                toggleReplyForm(comment) {

                    if (comment.showReplyForm === undefined) {
                        this.$set(comment, 'showReplyForm', true); // Initialize if undefined
                    } else {
                        comment.showReplyForm = !comment.showReplyForm; // Toggle the property
                    }
                },

                submitReply(event, comment) {

                    // Send the new reply to the server via AJAX
                    event.preventDefault(); // Prevent default form submission

                    axios.post('/replies', {
                            _token: "{{ csrf_token() }}",
                            comment_id: comment.id,
                            content: this.newReply,
                            name: this.replyName,
                        })
                        .then(response => {
                            if (!comment.replies) {
                                this.$set(comment, 'replies', []); // Initialize if undefined
                            }
                            // Add the new reply to the comment's replies array
                            comment.replies.push(response.data);

                            // Clear the newReply field
                            this.newReply = '';
                            this.replyName = '';

                            // Close the reply form
                            comment.showReplyForm = false;
                        })
                        .catch(error => {
                            console.error(error);
                        });
                },

                fetchRepliesForComments() {
                    // Iterate through comments and fetch replies for each comment
                    this.comments.forEach(comment => {
                        axios.get(`/comments/${comment.id}/replies`)
                            .then(response => {
                                // Assuming this.replies is an array to store replies for the comment
                                this.$set(comment, 'replies', response.data);
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    });
                },
            },

            mounted() {
                // axios.get('/comments').then(response => {

                //     this.comments = response.data;
                //     // Fetch replies for each comment
                //     this.fetchRepliesForComments();
                // });

                axios.get(`/comments/${this.blogPostId}`)
                    .then(response => {

                        this.comments = response.data;
                        this.fetchRepliesForComments();
                    })
                    .catch(error => {
                        console.error(error);
                    });

                // axios.get('/replies').then(response => {
                //     this.replies = response.data;
                // });
            },
        });
    </script>


    {{-- <script>
        $(document).ready(function() {
            // Handle form submission via Ajax
            $('#comment-form').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function(response) {
                        // Clear the comment input
                        $('#comment').val('');

                        // Append the new comment to the comments section
                        $('#media').append(response);

                        // You may also want to show a success message or handle errors here
                    }
                });
            });
        });
    </script> --}}


    <script>
        function updateCountdown2() {
            const now = moment();
            const duration = moment.duration(endDate.diff(now));
            // alert(duration)
            // const days = duration.days();
            const days = Math.floor(duration.asDays()); // Calculate the number of days

            // alert(`${days} days remaining`);
            const hours = duration.hours();
            const minutes = duration.minutes();
            const seconds = duration.seconds();

            const timerElement = document.getElementById("countdown-timer2");
            timerElement.innerHTML = `
            <ul id="featured-cause" class="list-unstyled list-inline w-50">
                <li class="list-inline-item"><span class="days">${days}</span>
                    <div class="days_text">Days</div>
                </li>
                <li class="list-inline-item"><span class="hours">${hours}</span>
                    <div class="hours_text">Hours</div>
                </li>
                <li class="list-inline-item"><span class="minutes">${minutes}</span>
                    <div class="minutes_text">Minutes</div>
                </li>
                <li class="list-inline-item"><span class="seconds">${seconds}</span>
                    <div class="seconds_text">Seconds</div>
                </li>
            </ul>

            <a class="btn-outline-default btn" href="{{ route('donation') }}">Donate Now</a>
        `;
        }

        // Call the updateCountdown2 function initially and set an interval to update it every second
        updateCountdown2();
        setInterval(updateCountdown2, 1000);
    </script>
@endsection
