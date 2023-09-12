@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="job-apply mt-20">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Report {{ $blog->title }}</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i
                                                class="uil uil-estate"></i>{{ trans('menu.job-menu-title') }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Report {{ $blog->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <form enctype="multipart/form-data" method="POST" action="/blogs/{{ $blog->id }}/report" class="row justify-content-center mt-25">
                @csrf
                <div class="col-sm-6">
                    <div class="job-apply-wrapper">
                        <div class="job-apply__content">
                            <h1>
                                Submit your Ticket
                            </h1>
                            <form method="POST" action="/blogs/{{ $blog->id }}/report">
                                <div class="form-group">
                                    <label>What did you find wrong about this post?</label>
                                    <textarea name="report" class="form-control" rows="3" placeholder="What can we help with?"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Please upload a proof</label>
                                    <div class="">
                                        <div class="">
                                            <div class="">
                                                <input required type="file" accept="image/*" name="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="button-group d-flex pt-15">
                                    <button type="submit" class="btn btn-primary btn-default btn-squared ">
                                        Report Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
