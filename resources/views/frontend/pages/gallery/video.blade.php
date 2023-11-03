@extends('frontend.layouts.siteLayout')
@section('pageTitle')
    Paulsabinna Foundation - Video Gallery
@endsection
@section('setHomeActive')
    active
@endsection



@section('content')
    <section class="breadcrumbs-page-wrap">
        <div class="bg-fixed pos-rel breadcrumbs-page">
            <div class="container">
                <h1>Video Gallery</h1>
                <nav aria-label="breadcrumb" class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Video Gallery</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="wide-tb-100 pb-0">
        <div class="container">

            {{-- <div class="row mt-5">
                <div class="col-sm-6 col-md-6 col-lg-3" id="video-list">

                </div> --}}
            <div id="video-list"></div>

            {{-- <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-30"></div>
            </div> --}}

    </section>
@endsection


@section('styles')
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"> --}}
    <style>

    </style>
@endsection


@section('scripts')
    <script>
        const API_KEY = 'AIzaSyCxNufxXaie5ayGMEhuNg-gouIxKY6HKY0';
        const CHANNEL_ID = 'UC-ZCPV15JdVxgzBxby24NHA';
        // const VIDEO_LIST_CONTAINER = document.getElementById('video-list');

        const VIDEO_LIST_CONTAINER = document.getElementById('video-list'); // Get the target element
        const MAX_RESULTS = 50; // Set the number of results per page (maximum: 50)

        function createVideoGrid(videoItems) {
            // Create a container for the grid
            const gridContainer = document.createElement('div');
            gridContainer.className = 'row';

            videoItems.forEach(video => {
                const videoId = video.id.videoId;
                const videoTitle = video.snippet.title;

                // Create video elements (iframe and title)
                const iframe = document.createElement('iframe');
                iframe.src = `https://www.youtube.com/embed/${videoId}`;
                iframe.width = "100%";
                iframe.height = "300px";
                iframe.frameBorder = "0";
                iframe.allowFullscreen = true;

                const titleElement = document.createElement('h2');
                titleElement.textContent = videoTitle;

                // Create a column for the video
                const videoColumn = document.createElement('div');
                videoColumn.className = 'col-md-3';
                videoColumn.appendChild(iframe);
                // videoColumn.appendChild(titleElement);

                // Append the video column to the grid container
                gridContainer.appendChild(videoColumn);
            });

            return gridContainer;
        }

        function fetchAndDisplayAllVideos(pageToken = '') {
            fetch(
                    `https://www.googleapis.com/youtube/v3/search?key=${API_KEY}&channelId=${CHANNEL_ID}&part=snippet,id&order=date&maxResults=${MAX_RESULTS}&pageToken=${pageToken}`
                )
                .then(response => response.json())
                .then(data => {
                    const videoItems = data.items;

                    // Create the video grid for the current page of results
                    const grid = createVideoGrid(videoItems);
                    VIDEO_LIST_CONTAINER.appendChild(grid);

                    // Check if there are more pages of results
                    if (data.nextPageToken) {
                        // If there is a nextPageToken, fetch the next page of results
                        fetchAndDisplayAllVideos(data.nextPageToken);
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        }

        // Initial fetch and display
        fetchAndDisplayAllVideos();

        // Periodically fetch and display videos (e.g., every 10 minutes)
        setInterval(fetchAndDisplayAllVideos, 600000);
    </script>
@endsection
