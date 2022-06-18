<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Coloring Book -Home Sliders </title>
    @include('live.includes.top-scripts')
</head>
<body>
<div class="page">
    @include('live.coloringbook.includes.side-menu')
    <div class="page-wrapper">
        <div class="container-xl">
            <!-- Page title -->
            <div class="page-header d-print-none">
                <div class="row align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Coloring Book Home Sliders
                        </h2>

                        <div class="page-pretitle">
                            Categories , Explore Categories that have been attached to Home Slider
                        </div>
                    </div>
                    <!--Buttons List -->
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <!-- Logout from coloring book dashboard -->
                            <span class="d-none d-sm-inline"><a
                                        href="{{route('live.coloringbook.authentication.sign-in')}}"
                                        class="btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#logout-modal">Logout</a></span>
                            <!-- Create New Category Button -->
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                               data-bs-target="#create-new-slider-modal">
                                Create new Slider
                            </a>
                            <!-- Create New Category Button For Mobile Devices -->
                            <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                               data-bs-target="#create-new-category-modal" aria-label="Create new Slider">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <line x1="12" y1="5" x2="12" y2="19"/>
                                    <line x1="5" y1="12" x2="19" y2="12"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <!-- Data Row -->
                <div class="row row-cards">


                    <!-- Category attached to slider-->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- Third Category Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/sports.png')}}')"></div>
                                    <!-- Third Category Main Body Start Here -->
                                    <div class="card-body">
                                        <!-- Third Category Main Title Goes Here -->
                                        <h3 class="card-title">Category Title (Max 32 Char) &nbsp;</h3>
                                        <!-- Number of content uploaded in Third Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">45 Contents uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.coloringbook.dashboard.vector-content')}}"
                                               class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Third Category Main Body Ends Here-->

                                    <!-- Third Category Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Mark Third Category as slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#update-remove-to-slider-modal">This category is
                                                    attached to home slider</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Category Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Category attached to slider ends-->

                    <!-- Originally Created Slider-->
                    <div class="col-md-6 col-xl-4">
                        <div class="row row-cards">
                            <div class="col-12">
                                <div class="card">
                                    <!-- Third Category Thumbnail-->
                                    <div class="card-img-top img-responsive img-responsive-16by9"
                                         style="background-image: url('{{asset('dist/static/coloring-book/categories/sports.png')}}')"></div>
                                    <!-- Third Category Main Body Start Here -->
                                    <div class="card-body">
                                        <!-- Third Category Main Title Goes Here -->
                                        <h3 class="card-title">Category Title (Max 32 Char) &nbsp;</h3>
                                        <!-- Number of content uploaded in Third Category is displayed here -->
                                        <h3 class="card-subtitle"><span class="bg-green-lt">45 Contents uploaded</span>
                                        </h3>
                                        <!-- Buttons to go inside a category to upload content and edit category details and other actions -->
                                        <div class="card-text">
                                            <a href="{{route('live.coloringbook.dashboard.vector-content')}}"
                                               class="btn btn-primary ">View Content</a>
                                        </div>
                                    </div>
                                    <!-- Third Category Main Body Ends Here-->

                                    <!-- Third Category Footer Start Here -->
                                    <div class="card-footer">
                                        <!-- Originally Created Slider, this will show category on home slider -->
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <a href="#" data-bs-toggle="modal"
                                                   data-bs-target="#update-remove-to-slider-modal">Originally created slider</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Category Footer Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Originally Created Slider Ends Here-->



                </div>

            </div>
        </div>
        @include('live.includes.footer')
    </div>
</div>
<!-- Alert Modal-->
@include('live.coloringbook.modals.slider.create-new-slider')
@include('live.coloringbook.modals.categories.sucess-alert')
@include('live.coloringbook.modals.categories.error-alert')
@include('live.coloringbook.modals.categories.attach-to-slider-category')
@include('live.coloringbook.modals.categories.slider-sucess-alert')
@include('live.coloringbook.modals.categories.slider-error-alert')
@include('live.coloringbook.modals.categories.update-remove-to-slider-category')
@include('live.coloringbook.modals.logout-alert')

@include('live.includes.bottom-scripts')
</body>
</html>