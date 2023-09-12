@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">Blogs</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blogs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-tap global-shadow order-lg-1 order-2 my-10">
            <ul class="nav px-1" id="ap-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ap-overview-tab" href="/?lga=all" aria-controls="ap-overview"
                        aria-selected="true">All Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="timeline-tab" href="/?lga=mine" aria-selected="false">My Location</a>
                </li>
            </ul>
        </div>
        <div class="project-category">
            <div class="d-flex align-items-center">
                <p class="mb-0 me-10 fs-14 color-light">Select Location</p>
                <div class="project-category__select">
                    <select class="js-example-basic-single js-states form-control" id="event-category">
                        <option value="all" selected>All</option>
                        @foreach ($lgas as $lga)
                            <option value="{{ $lga->id }}">
                                <a href="?lga={{ $lga->id }}">
                                    {{ $lga->state }} - {{ $lga->name }}
                                </a>
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-filter mb-sm-50 mb-30">
                    <div class="push-down push-down--style">
                        <div class="filtr-container">
                            @foreach ($blogs as $blog)
                                <div class="filtr-item filtr-item--style"
                                style="overflow-y:hidden" data-category="1" data-sort="Busy streets">
                                    <a href="{{ route('blog.show', $blog->id) }}">
                                        <div class="card" style="height:350px">
                                            <div class="gc ">
                                                <div class="gc__img">
                                                    <img src="{{ $blog->image }}"
                                                    style="height:200px;object-fit:cover" alt="img" class="w-100 radius-xl">
                                                </div>
                                                <div class="card-body px-25 py-20">
                                                    <div class="gc__title">
                                                        <P>{{ $blog->title }}</P>
                                                        <span>{{ $blog->description }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $('#event-category').on('change', function() {
                var lga = $(this).val();
                window.location.href = "?lga=" + lga;
            });
        });
    </script>
@endsection
