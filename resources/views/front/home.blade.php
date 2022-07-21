@extends('front.layouts.app')
@section('content')
<!-- Main Content-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>My first Blog</h1>
                    <span class="subheading">This is what I do.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach($result as $list)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{route('link_post',['post_id' => $list->id])}}"><h2 class="post-title">{{$list->title}}.</h2></a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on {{$list->post_date}}
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            @endforeach

            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection
