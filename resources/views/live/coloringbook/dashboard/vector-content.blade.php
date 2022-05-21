<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Category : Daily New Vectors</title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Daily New Vectors
                        </h2>
                        <div class="page-pretitle">
                            <span class="bg-green-lt"> Vectors Uploaded in Daily New Categories</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.dashboard.categories')}}"
                                        class="btn btn-primary">Back to all categories</a></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <!-- Category Detail Card Start -->
                <div class="row row-cards mb-2">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <img src="{{asset('dist/static/coloring-book/categories/new.png')}}"
                                             alt="" class="rounded">
                                    </div>
                                    <div class="col">
                                        <h3 class="card-title mb-1">Category name maxx allowed character are 32
                                        </h3>

                                        <div class="text-muted">
                                            Category Description Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti
                                            fugit incidunt, iste, itaque minima neque pariatur perferendis sed suscipit
                                            velit vitae voluptatem.
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-primary w-100">
                                                    Add Content
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-success w-100">
                                                    Edit Category Details
                                                </a>
                                            </div>
                                            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3">
                                                <a href="#" class="btn btn-danger w-100">
                                                    Delete this Category
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title bg-pink-lt">Category Details</div>
                                <div class="mb-2">
                                    Created at: <strong class="bg-green-lt">2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Category Age: <strong class="bg-green-lt">2 Days 5 Month ago</strong>
                                </div>

                                <div class="mb-2">
                                    Added to Slider: <strong class="bg-green-lt">YES</strong>
                                </div>
                                <div class="mb-2">
                                    Updated On: <strong class="bg-green-lt">2020-08-05 (2 days ago)</strong>
                                </div>
                                <div class="mb-2">
                                    Total uploaded Vectors: <strong class="bg-green-lt">18 Files</strong>
                                </div>

                                <div class="mb-2">
                                    <a href="#" class="btn btn-success w-100">
                                        Refresh this data
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Category Detail Card Ends -->

                <!-- Content Card Start Here -->
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="{{asset('dist/static/photos/1b73704b282a8ec6.jpg')}}" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div>Created </div>
                                        <div class="text-muted">3 days ago</div>
                                    </div>
                                    <div class="ms-auto">
                                        <a href="#" class="text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                                            467
                                        </a>
                                        <a href="#" class="ms-3 text-muted">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                                            67
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Content Card Ends Here -->

            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
@include('live.includes.bottom-scripts')
</body>
</html>