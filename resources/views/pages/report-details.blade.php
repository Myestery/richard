@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-breadcrumb">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">
                            {{ $blog->title }}
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products mb-30">
        <div class="container-fluid">
            <div class="card product-details h-100 border-0">
                <div class="product-item d-flex p-sm-50 p-20">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-item__image">
                                <div class="wrap-gallery-article carousel slide carousel-fade" id="carouselExampleCaptions"
                                    data-bs-ride="carousel">
                                    <div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img class="img-fluid d-flex bg-opacity-primary "
                                                    src="{{ $report->media_url }}" alt="Card image cap" title="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="overflow-hidden">
                                        <ul class="reset-ul d-flex flex-wrap list-thumb-gallery">
                                            <li>
                                                <a href="#" class="thumbnail active"
                                                    data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                                    aria-current="true" aria-label="Slide 1">
                                                    <img class="img-fluid d-flex" src="{{ $report->media_url }}"
                                                        alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-7">
                            <div class=" b-normal-b mb-25 pb-sm-35 pb-15 mt-lg-0 mt-15">
                                <div class="product-item__body">
                                    <div class="product-item__title">
                                        <a href="#">
                                            <h1 class="card-title">
                                                Reported by: {{ $report->user->name }}
                                            </h1>
                                        </a>
                                    </div>
                                    <div class="product-item__content text-capitalize">

                                        <div class="quantity product-quantity flex-wrap">
                                            <div class="me-15 d-flex align-items-center flex-wrap">
                                                <p class="fs-14 fw-500 color-dark">Reason:</p>
                                                <p class=" product-deatils-pera">
                                                    {{ $report->comment }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="product-item__button mt-lg-30 mt-sm-25 mt-20 d-flex flex-wrap">
                                            <div class=" d-flex flex-wrap product-item__action align-items-center">

                                                <form action="/blogs/{{ $blog->id }}/delete" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete?')">
                                                    @csrf
                                                    <button type="submit" class="btn btn-lg btn-primary btn-danger">Delete
                                                        Blog</button>
                                                </form>
                                                <form action="/blogs/reports/{{ $report->id }}/delete" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete?')">
                                                    @csrf
                                                    <button
                                                        class="btn btn-info btn-default btn-squared border-0 px-25 my-sm-0 my-2 me-10">
                                                        Delete Report
                                                    </button>
                                                </form>
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
