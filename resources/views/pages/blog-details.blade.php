@section('title', $title)
@section('description', $description)
@extends('layout.app')
@section('content')
    <div class="blog-page2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h4 class="text-capitalize breadcrumb-title">Blog Details</h4>
                        <div class="breadcrumb-action justify-content-center flex-wrap">

                        </div>
                    </div>

                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-12">
                    <div class="blog-details-thumbnail">
                        <img src="{{ $blog->image }} " alt="">
                    </div>
                    <article class="blog-details">
                        <div class="blog-details-content">
                            <h1 class="main-title mb-30">
                                {{ $blog->title }}
                            </h1>
                            <ul class="blog-details-meta">
                                <li class="blog-author">
                                    <a href="#">
                                        <img src="{{ $blog->author->image }}" alt="">
                                    </a>
                                </li>
                                <li class="author-name">
                                    <a href="#" rel="bookmark">
                                        <time class="entry-date published updated" datetime="2022-01-25T10:55:00+06:00">
                                            {{ $blog->created_at }}
                                        </time>
                                    </a>
                                </li>

                                <li class="blog-read-time">8 mins read</li>
                            </ul>
                            <div class="blog-body">
                                <p class="mb-20">
                                    {{ $blog->description }}
                                </p>

                                <p class="mb-50">
                                    {{ $blog->content }}
                                </p>

                            </div>

                            @if (auth()->user()->is_admin)
                                <form action="/blogs/{{ $blog->id }}/delete" method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete?')">
                                    @csrf
                                    <button type="submit" class="btn btn-lg btn-primary btn-danger">Delete Blog</button>
                                </form>
                            @endif
                    </article>


                    <article class="blog-details">
                        {{-- add comment --}}
                        <div class="blog-details-content">
                            <h3 class="main-title mb-30">
                                Add Comment
                            </h3>

                            <form action="/blogs/{{ $blog->id }}/comment" method="POST">
                                @csrf
                                <div class="form-group form-element-textarea mb-20">
                                    <label for="exampleFormControlTextarea1"
                                        class="il-gray fs-14 fw-500 align-center mb-10">Add a
                                        Comment</label>
                                    <textarea required name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>

                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-lg btn-primary btn-submit">Submit</button>
                                </div>
                            </form>
                        </div>

                        <div class="blog-details-content">
                            <h3 class="main-title mb-30">
                                Comments ({{ $blog->comments->count() }})
                            </h3>
                        </div>

                        @foreach ($blog->comments as $comment)
                            <div>
                                <ul class="blog-details-meta">
                                    <li class="blog-author">
                                        <a href="#">
                                            <img src="{{ $comment->user->image }}" alt="">
                                        </a>
                                    </li>
                                    <li class="blog-read-time">
                                        {{ $comment->user->name }}
                                    </li>
                                    <li class="blog-read-time">
                                        {{ $comment->created_at->diffForHumans() }}
                                    </li>

                                </ul>
                                <div style="margin-top: -8%">
                                    <p class="mb-20">
                                        {{ $comment->comment }}
                                    </p>
                                </div>

                            </div>
                        @endforeach
                </div>
            </div>
            <!-- ends: .row -->
        </div>
    </div>
@endsection
