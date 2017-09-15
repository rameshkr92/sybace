@extends('website.master')
@section('content')
<div class="sb-site-container">
@include('website.home.blocks.top-head')
@include('website.regions.header')
    <div class="ms-hero-page ms-hero-img-keyboard ms-hero-bg-primary mb-6">
        <div class="container">
            <div class="text-center">
                <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">SB</span>
                <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Blog</h1>
                <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 fw-300 animated fadeInUp animation-delay-7">
                    Teach something. If you’re passionate about a particular subject, and you have a lot of experience in that area, then you can offer your knowledge to both people who are new to the subject and others who are as experienced as you are.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row masonry-container">
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-info mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post1.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-royal mb-4 wow materialUp animation-delay-5">
                    <div data-type="vimeo" data-video-id="94747106"></div>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-royal">Resources</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-success mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/p3.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-success">Multimedia</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card mb-4 wow materialUp animation-delay-5">
                    <div data-type="youtube" data-video-id="bTqVqk7FSmY"></div>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-danger mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post5.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-danger">Productivity</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-info mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post4.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-info mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post2.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-info mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/p2.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-danger mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post3.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-danger">Productivity</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-royal mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/p5.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-royal">Resources</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-success mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/p4.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-success">Multimedia</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item wow fadeInUp animation-delay-2">
                <article class="card card-info mb-4 wow materialUp animation-delay-5">
                    <figure class="ms-thumbnail ms-thumbnail-left">
                        <img src="assets/img/demo/post1.jpg" alt="" class="img-responsive">
                        <figcaption class="ms-thumbnail-caption text-center">
                            <div class="ms-thumbnail-caption-content">
                                <h3 class="ms-thumbnail-caption-title">Lorem ipsum dolor sit</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm mr-1 btn-circle-white color-danger">
                                        <i class="zmdi zmdi-favorite"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 mr-1 btn-circle-white color-warning">
                                        <i class="zmdi zmdi-star"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-sm ml-1 btn-circle-white color-success">
                                        <i class="zmdi zmdi-share"></i>
                                    </a>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <div class="card-block">
                        <h2>
                            <a href=javascript:void(0)>Lorem ipsum Minim in nulla labore sint</a>
                        </h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error nesciunt voluptas sit voluptatem accusantium doloremque laudantium eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-4">
                                <div class="mt-05">
                                    <a href="javascript:void(0)" class="ms-tag ms-tag-info">Design</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <a href="javascript:void(0)" class="btn btn-primary btn-sm btn-block animate-icon">Read more
                                    <i class="ml-1 no-mr zmdi zmdi-long-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
    <!-- container -->
    @include('website.regions.footer')
</div>
<!-- sb-site-container -->
@include('website.regions.leftbar')
@endsection
@section('footer')

@stop