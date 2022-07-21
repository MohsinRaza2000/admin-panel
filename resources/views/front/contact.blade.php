@extends('front.layouts.app')
@section('content')
    <header class="masthead" style="background-image: url('asset/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <span class="subheading">Have questions? I have answers.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  <!-- Main Content-->
  <main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->

                        <form action= "{{route('contact_post')}}" method="post">
                            @csrf
                            <h1>Contact Form</h1>
                            <div>
                                <label>Name</label>
                                <input type="name" class="form-control" placeholder="name" name ="name"required="" />
                            </div>
                            <div>
                                <label>email</label>
                                <input type="email" class="form-control" placeholder="email" name ="email"required="" />
                            </div>
                            <div>
                                <label>Mobile</label>
                                <input type="number" class="form-control" placeholder="mobile" required="" name="mobile"/>
                            </div>
                            <div>
                                <label>message</label>
                                <input type="text" class="form-control" placeholder="message" required="" name="message"/>
                            </div>
                            <div>
                                <a href="{{ route('contact') }}" ><input class="btn btn-info" type="submit"  ></a>


                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Footer-->
@endsection
