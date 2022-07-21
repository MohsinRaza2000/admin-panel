@extends('front.layouts.app')
@section('content')
    <header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>{{ $data->title }}</h1>
                        <span class="subheading">{{$data->long_desc}}</span>
                        {{$data->post_date}}
                    </div>
                </div>
            </div>
        </div>
    </header>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
            </div>
        </div>
    </div>
@endsection
