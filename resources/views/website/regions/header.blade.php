<header class="ms-header ms-header-primary">
    <div class="container container-full">
        <div class="ms-title">
            <a href="{{ url('/').'/'.Lang::getlocale().'/home' }}">
                <img class="logo" src="{{ url('/') }}/public/website_assets/img/logo.png" alt="SYBACE">
                {{--<span class="ms-logo animated zoomInDown animation-delay-5">SB</span>--}}
                {{--<h1 class="animated fadeInRight animation-delay-6">Sy--}}
                {{--<span>Bace</span>--}}
                {{--</h1>--}}
            </a>
        </div>
        <div class="header-right">
            <div class="share-menu">
                <ul class="share-menu-list">
                    {{--<li class="animated fadeInRight animation-delay-3">--}}
                        {{--<a href="javascript:void(0)" class="btn-circle btn-google">--}}
                            {{--<i class="zmdi zmdi-google"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    <li class="animated fadeInRight animation-delay-2">
                        <a href="https://www.facebook.com/pg/sybaceweb/" class="btn-circle btn-facebook">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                    </li>
                    <li class="animated fadeInRight animation-delay-1">
                        <a href="https://twitter.com/sybaceindia" class="btn-circle btn-twitter">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                    </li>
                </ul>
                <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                    <i class="zmdi zmdi-share"></i>
                </a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
                <i class="zmdi zmdi-account"></i>
            </a>
            <form class="search-form animated zoomInDown animation-delay-9">
                <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
                <label for="search-box">
                    <i class="zmdi zmdi-search"></i>
                </label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary sb-toggle-left animated zoomInDown animation-delay-10">
                <i class="zmdi zmdi-menu"></i>
            </a>
        </div>
    </div>
</header>
<nav class="navbar navbar-static-top yamm ms-navbar ms-navbar-primary">
    <div class="container container-full">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/').'/'.Lang::getlocale().'/home' }}">
                <img class="logo" src="{{ url('/') }}/public/website_assets/img/logo.png" alt="SYBACE">
                {{--<span class="ms-logo ms-logo-sm">SB</span>--}}
                {{--<span class="ms-title">Sy--}}
                {{--<strong>Bace</strong>--}}
                {{--</span>--}}
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="@if(\Request::segment(2) == "home") active @endif">
                    <a href="{{ url('/').'/'.Lang::getlocale().'/home' }}" class="dropdown-toggle animated fadeIn animation-delay-4" data-name="home">Home</a>
                </li>
                <li class="@if(\Request::segment(3) == "about-us") active @endif">
                    <a href="{{ action('CmsController@showPage','about-us') }}" class="dropdown-toggle animated fadeIn animation-delay-5" data-name="page">About Us</a>
                </li>
                <li class="@if(\Request::segment(3) == "careers") active @endif">
                    <a href="{{ action('CmsController@showPage','careers') }}" class="dropdown-toggle animated fadeIn animation-delay-6" data-name="component">Careers</a>
                </li>
                <li class="@if(\Request::segment(3) == "privacy-policy") active @endif">
                    <a href="{{ action('CmsController@showPage','privacy-policy') }}" class="dropdown-toggle animated fadeIn animation-delay-7" data-name="blog">Privacy</a>
                </li>
                <li class="@if(\Request::segment(3) == "careers") active @endif">
                    <a href="{{ action("WebsiteController@createContact")}}" class="dropdown-toggle animated fadeIn animation-delay-8" data-name="portfolio">Support</a>
                </li>
                @if(\Request::segment(2) == "marketplace")
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle animated fadeIn animation-delay-6" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">
                            Marketplace <i class="zmdi zmdi-chevron-down"></i><div class="ripple-container"></div>
                        </a>
                        <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x" style="">
                            <li>
                                <div class="row">
                                    <?php
                                    if(isset($categories)){
                                    $count = 0;
                                    $end = 1;
                                        foreach ($categories as $key => $data) {
                                        $count++;
                                        $end = 0;
                                        ?>
                                        <div class="col-sm-3 megamenu-col" style="height: 556px;">
                                            <div class="megamenu-block animated @if($count%4==2) fadeInRight @else fadeInLeft @endif animated-2x">
                                                <!--<h3 class="megamenu-block-title"><i class="fa fa-bold"></i> Bootstrap CSS</h3>-->
                                                <ul class="megamenu-block-list">
                                                    <li>
                                                        <a class="withripple" href="{{ '?url='.base64_encode($data['availableVariants']['v0.1.0']['get']) }} "><i class="fa fa-arrow-circle-right"></i> {{ ucwords(str_replace("_"," ",$key)) }}</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="@if(\Request::segment(3) == "marketplace") active @endif">
                        <a href="{{ url('/').'/'.Lang::getlocale().'/marketplace' }}" class="dropdown-toggle animated fadeIn animation-delay-9" data-name="ecommerce">Marketplace</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- navbar-collapse collapse -->
        <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
        </a>
    </div>
    <!-- container -->
</nav>