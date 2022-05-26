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
                            Daily New Category
                        </h2>

                        <div class="page-pretitle">
                            <span class="bg-green-lt"> SVGs Uploaded in Daily New Categories</span>
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
                                            Category Description Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Aperiam deleniti
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
                    <!-- Vector-1 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/vector-contents/thumbs/1b73704b282a8ec6.jpg')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt"> SVG Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Content ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Trade Type: <strong>NONE / ADS / COIN BASED</strong>
                                </div>

                                <div class="mb-2">
                                    Aspect Ratio: <strong>Square 1 : 1</strong>
                                </div>

                                <div class="mb-2">
                                    Design Type: <strong>SVG Type 1</strong>
                                </div>

                                <div class="mb-2">
                                    Download: <strong>856</strong>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="#" class="btn btn-success w-100">
                                        OPEN SVG GRID
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100">
                                        DELETE THIS SVG
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.vector-content-details')}}" class="btn btn-primary w-100">
                                        EDIT THIS SVG
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vector-2 -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <img src="{{asset('dist/static/coloring-book/vector-contents/thumbs/3d2998219313cd37.jpg')}}"
                                 class="card-img-top d-block">

                            <div class="card-body">
                                <!-- Vector title -->
                                <div class="card-title bg-cyan-lt"> SVG Title Goes Here</div>
                                <!-- Vector Details -->
                                <div class="mb-2">
                                    Created at: <strong> 2020-01-05 16:42:29 UTC</strong>
                                </div>

                                <div class="mb-2">
                                    Updated On: <strong> 2020-08-05 ( 14 Hours Ago )</strong>
                                </div>

                                <div class="mb-2">
                                    Content ID: <strong> A67hnjwe75rhRt</strong>
                                </div>

                                <div class="mb-2">
                                    Trade Type: <strong>NONE / ADS / COIN BASED</strong>
                                </div>

                                <div class="mb-2">
                                    Aspect Ratio: <strong>Square 1 : 1</strong>
                                </div>

                                <div class="mb-2">
                                    Design Type: <strong>SVG Type 1</strong>
                                </div>

                                <div class="mb-2">
                                    Download: <strong>856</strong>
                                </div>
                            </div>
                            <!-- Card footer -->
                            <div class="card-footer">
                                <div class="mb-2">
                                    <a href="#" class="btn btn-success w-100">
                                        OPEN SVG GRID
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="#" class="btn btn-danger w-100">
                                        DELETE SVG VECTOR
                                    </a>
                                </div>
                                <div class="mb-2">
                                    <a href="{{route('live.coloringbook.dashboard.vector-content-details')}}" class="btn btn-primary w-100">
                                        EDIT SVG VECTOR
                                    </a>
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