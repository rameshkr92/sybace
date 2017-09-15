@extends('website.master')
@section('content')
    <style>
        .services-bg {
            background-color: #009cde;
            background-image: radial-gradient(circle farthest-side at center bottom, #009cde, #003087 125%);
            color: #fff;
        }
        .service-images {
            border-radius: 50%;
            box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.5);
            display: block;
            height: auto;
            margin: 15px auto;
            width: 150px;
            background-color:#6F4C90;
        }
    </style>
    <div class="sb-site-container">
    @include('website.home.blocks.top-head')
    @include('website.regions.header')
    @include('website.home.blocks.banner')
    <!-- ms-hero ms-hero-black -->
        {{--<div class="container wow fadeInUp">--}}
            {{--<div class="row">--}}
                {{--<h3 class="text-center fw-500 mb-4">--}}
                    {{--<svg class="heading-icon">--}}
                        {{--<circle fill="#B9F4BC" cx="33" cy="33" r="33"></circle>--}}
                        {{--<path d="M38.4 15l1-3h1l1.2 3c.2.2.5.2.7.3l2.2-2.5 1 .4-.2 3.3c.2 0 .3.2.5.4l3-1.5.7.7-1.4 3 .5.5h3.3l.4.8-2.5 2.2c0 .2 0 .5.2.7l3 1v1l-3 1.2-.3.8 2.5 2-.4 1-3.3-.2-.4.7 1.5 2.8-.7.7-3-1.4c0 .2-.4.4-.6.5l.2 3.3-1 .4-2-2.5c-.3 0-.6 0-1 .2l-1 3h-1l-1-3c-.2-.2-.5-.2-.8-.3l-2 2.5-1-.4.2-3.3-.7-.4-2.8 1.5-.7-.7 1.4-3c-.2 0-.4-.4-.5-.6l-3.3.2-.4-1 2.5-2c0-.3 0-.6-.2-1l-3-1v-1l3-1c.2-.2.2-.4.3-.7l-2.5-2.2.4-1 3.3.2c0-.2.2-.3.4-.5l-1.5-3 .7-.7 3 1.4.5-.5v-3.3l.8-.4 2.2 2.5s.5 0 .7-.2z" fill="#6ED69A" transform="rotate(204.39152064000072 40 25)"></path>--}}
                        {{--<circle fill="#B9F4BC" cx="40" cy="25" r="2"></circle>--}}
                        {{--<path d="M21.6 26.8L19 25l-1.3 1 1.4 3c0 .2-.3.4-.5.6l-3-.8-1 1.4 2.4 2.3-.4.8-3.2.3-.3 1.6 3 1.4v.8l-3 1.4.4 1.6 3.2.3c0 .3.2.5.3.8l-2.4 2.3.8 1.4 3-.8.7.6-1.3 3 1.3 1 2.6-1.8c.3 0 .5.3.8.4l-.3 3.2 1.6.6 2-2.7c.2 0 .5 0 .7.2l1 3h1.5l1-3c0-.2.4-.2.7-.3l2 2.7 1.4-.6-.4-3.2c.3 0 .5-.3.8-.4L37 49l1.3-1-1.4-3c0-.2.3-.4.5-.6l3 .8 1-1.4-2.4-2.3.4-.8 3.2-.3.3-1.6-3-1.4v-.8l3-1.4-.4-1.6-3.2-.3c0-.3-.2-.5-.3-.8l2.4-2.3-.8-1.4-3 .8-.7-.6 1.3-3-1.3-1-2.6 1.8c-.3 0-.5-.3-.8-.4l.3-3.2-1.6-.6-2 2.7c-.2 0-.5 0-.7-.2l-1-3h-1.5l-1 3c0 .2-.4.2-.7.3l-2-2.7-1.4.6.4 3.2c-.3 0-.5.3-.8.4z" fill="#1BB978" transform="rotate(-204.39152064000072 28 37)"></path>--}}
                        {{--<circle fill="#B9F4BC" cx="28" cy="37" r="3"></circle>--}}
                    {{--</svg>--}}
                    {{--Developers first--}}
                {{--</h3>--}}
                {{--<div class="mw-800 center-block">--}}
                    {{--<p>--}}
                        {{--We believe that payments is a problem rooted in code, not finance. We obsessively seek out elegant, composable abstractions that enable robust, scalable, flexible integrations. Because we eliminate needless complexity and extraneous details, you can get up and running with Stripe in just a couple of minutes.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-6 text-justify">
                    <h2 class="color-primary right-line">Our Vision & Mission</h2>
                    {{--<p class="dropcaps">--}}
                    {{--Your success is our success--}}
                    {{--</p>--}}
                    <p>
                        Our vision is to be a key player in Digital Transformation service, in order to provide more accessibility opportunities for our customers everywhere and every time.
                    </p>
                    <p>
                        Your success is our success is our commitment to our customers. We will be the number one in professional services for our customers’ minds, which provide a way in a profitable and sustainable growth.
                    </p>
                    <p>
                        Our mission for customers by our services as they are our first priority
                    </p>
                    <p>
                        Our mission for employees to be professional while ensuring them work life balance.
                    </p>
                    <p class="text-right">
                        <cite class="lead color primary-color">— From CEO, sybace.com</cite>
                    </p>
                </div>
                <div class="col-md-6">
                    <h2 class="color-primary right-line">Our Approach</h2>
                    <div class="panel-group ms-collapse" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a class="withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa fa-lightbulb-o"></i> Creativity & Talent </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>
                                        Our approach to enhance our management skills and ability to grow our business. We expect software activity to arise and concentrate in places with a broadly creative ecosystem that attracts an innovative, talented, and diverse population.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-desktop"></i> Design & Development </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>
                                        Our best approach to design and develop the thing in proper manner to suit the customer business, and fulfill their requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-user"></i> Quality & Support </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>
                                        Sybace Web techonoligy is a division of Web development Network, We are committed to providing quality service. Share Quility experiance with customers, to provide full time support, to grow our relation with customers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ms-bg-fixed mb-6 mt-4">
            <div class="container text-center">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- Home Page -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-4141596849655811"
                     data-ad-slot="5097375401"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        {{--<div class="wrap ms-hero-bg-dark-light ms-hero-img-airplane ms-bg-fixed mb-6 mt-4">--}}
        <div class="ms-bg-fixed mb-6 mt-4 services-bg">
            <div class="container">
                {{--<h2 class="text-center color-white no-mt mb-6 wow fadeInUp">Our Services</h2>--}}
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-1">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/php.png" alt="PHP">
                            </div>
                            <!--<h4 class="text-center">PHP</h4>-->
                            {{--<p class="small-font">Looking for a a successful digital debut with awesome websites, mobile apps and software products.</p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-2">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/mean.png" alt="MEAN">
                            </div>
                            <!--<h4 class="text-center">Frontend UI Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/ror.png" alt="ROR">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/ang.png" alt="AngularJS">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/sql.png" alt="MySQL">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/node.png" alt="NodeJS">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/wordpress.png" alt="WordPress">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center mt-4">
                            <div class="circle" id="circles-3">
                                <img class="service-images" src="{{ url('/') }}/public/website_assets/img/mongo.png" alt="MongoDB">
                            </div>
                            <!--<h4 class="text-center">Ruby Web Development</h4>-->
                            {{--<p class="small-font"></p>--}}
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="javascript:void(0)" class="btn btn-raised btn-info wow flipInX animation-delay-8">
                        <i class="fa fa-space-shuttle"></i> I have a project</a>
                    <a href="javascript:void(0)" class="btn btn-raised btn-warning wow flipInX animation-delay-9">
                        <i class="fa fa-info"></i> More Info</a>
                </div>
            </div>
        </div>
        <div class="container mt-4 wow fadeInUp">
            <div class="card-block card-block-big">
                <h3 class="text-center fw-500 mb-4">Testimonials</h3>
                <div class="mw-800 center-block">
                    <div id="carousel-example-generic" class="carousel-cards carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <blockquote class="ms-blockquote">
                                    <p class="lead">If you're passionate about a particular subject, and you have a lot of experience in that area, then you can offer your knowledge to both people who are new? Do you want to turn your challenges into something that will inspire others to overcome their problems.</p>
                                    <footer>
                                        <strong>CEO</strong>,
                                        <cite title="Source Title">Sybace Inc.</cite>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="ms-blockquote">
                                    <p class="lead">
                                        Don't limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, you can achieve.
                                    </p>
                                    <footer>
                                        <strong>CEO</strong>,
                                        <cite title="Source Title">Sybace Inc.</cite>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote class="ms-blockquote">
                                    <p class="lead">If you’re passionate about a particular subject, and you have a lot's of experience in that specific area, then you can offer your knowledge/ideas to other people who are the new to that subject and others who are as experienced as you are.</p>
                                    <footer>
                                        <strong>CEO</strong>,
                                        <cite title="Source Title">Sybace Inc.</cite>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-primary">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!--container -->
        @include('website.regions.footer')
    </div>
    @include('website.regions.leftbar')
@endsection
@section('footer')
@endsection