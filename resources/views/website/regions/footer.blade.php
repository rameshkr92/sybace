<aside class="ms-footbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ms-footer-col">
                <div class="ms-footbar-block">
                    <h3 class="ms-footbar-title">Sitemap</h3>
                    <ul class="list-unstyled ms-icon-list three_cols">
                        <li>
                            <a href="{{ url('/').'/'.Lang::getlocale().'/home' }}"><i class="zmdi zmdi-home"></i> Home</a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="page-blog.html"><i class="zmdi zmdi-edit"></i> Blog</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="page-blog.html"><i class="zmdi zmdi-image-o"></i> Portafolio</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="portfolio-filters_sidebar.html"><i class="zmdi zmdi-case"></i> Works</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="page-timeline_left2.html"><i class="zmdi zmdi-time"></i> Timeline</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                        {{--<a href="page-pricing.html"><i class="zmdi zmdi-money"></i> Pricing</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ action('CmsController@showPage','about-us') }}"><i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                        </li>
                        <li>
                            <a href="{{ action('CmsController@showPage','disclaimer') }}"><i class="zmdi zmdi-accounts"></i> Disclaimer</a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="page-services.html"><i class="zmdi zmdi-face"></i> Services</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ action('FaqController@faqs') }}"><i class="zmdi zmdi-help"></i> FAQ</a>
                        </li>
                        {{--<li>--}}
                        {{--<a href="page-login2.html"><i class="zmdi zmdi-lock"></i> Login</a>--}}
                        {{--</li>--}}
                        <li>
                            <a href="{{ action("WebsiteController@createContact")}}"><i class="zmdi zmdi-email"></i> Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="ms-footbar-block">
                    <h3 class="ms-footbar-title">Subscribe</h3>
                    <p class="">Subscribe via email address to get latest update.</p>
                    <form name="frm_newsletter" action="{{ action('MailChimpController@subscribe') }}" method="post">
                        <div class="form-group label-floating mt-2 mb-1">
                            <div class="input-group ms-input-subscribe">
                                <label class="control-label" for="ms-subscribe">
                                    <i class="zmdi zmdi-email"></i> Email Adress</label>
                                <input type="email" id="ms-subscribe" name="email" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <button type="submit" class="ms-subscribre-btn">Subscribe</button>
                    </form>
                </div>
            </div>
            <?php
            $arr_articles = \Sybace\Articles\Models\Article::where('active',1)->get();
            ?>
            <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
                <div class="ms-footbar-block">
                    <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                    <div class="ms-footer-media">
                        @if(isset($arr_articles) && $arr_articles->count()>0)
                            @foreach($arr_articles as $articles)
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <a href="javascript:void(0)">
                                            <img class="media-object media-object-circle" src="{{url('/')}}/public/website_assets/img/demo/p75.jpg"  alt="Articles" title="Articles">
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">
                                            <a href="javascript:void(0)">{!! $articles->trans->description !!}</a>
                                        </h4>
                                        <div class="media-footer">
                                            <span><i class="zmdi zmdi-time color-info-light"></i> {{ date("F j, Y", strtotime($articles->created_at)) }}</span>
                                            <span><i class="zmdi zmdi-folder-outline color-warning-light"></i><a href="javascript:void(0)">News</a></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
                <div class="ms-footbar-block">
                    <div class="ms-footbar-title">
                        <span class="ms-logo ms-logo-white ms-logo-sm mr-1">SB</span>
                        <h3 class="no-m ms-site-title">Sy
                            <span>Bace</span>
                        </h3>
                    </div>
                    <address class="no-mb">
                        <p><i class="color-danger-light zmdi zmdi-pin mr-1"></i> {{ \Sybace\Settings\Models\Setting::find(2)->value}}</p>
                        {{--<p><i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>--}}
                        <p>
                            <i class="color-info-light zmdi zmdi-email mr-1"></i>
                            <a href="mailto:{{ \Sybace\Settings\Models\Setting::find(3)->value}}">{{ \Sybace\Settings\Models\Setting::find(3)->value}}</a>
                        </p>
                        <p>
                            <i class="color-royal-light zmdi zmdi-phone mr-1"></i>{{ \Sybace\Settings\Models\Setting::find(4)->value}} </p>
                        <p>
                            <i class="color-success-light fa fa-fax mr-1"></i>{{ \Sybace\Settings\Models\Setting::find(31)->value}} </p>
                    </address>
                </div>
                <div class="ms-footbar-block">
                    <h3 class="ms-footbar-title">Social Media</h3>
                    <div class="ms-footbar-social">
                        <a href="https://www.facebook.com/pg/sybaceweb/" target="_blank" class="btn-circle btn-facebook">
                            <i class="zmdi zmdi-facebook"></i>
                        </a>
                        <a  href="https://twitter.com/sybaceindia" target="_blank" class="btn-circle btn-twitter">
                            <i class="zmdi zmdi-twitter"></i>
                        </a>
                        {{--<a href="javascript:void(0)" class="btn-circle btn-youtube">--}}
                        {{--<i class="zmdi zmdi-youtube"></i>--}}
                        {{--</a>--}}
                        {{--<br>--}}
                        <a href="https://plus.google.com/103956882661141313645" target="_blank" class="btn-circle btn-google">
                        <i class="zmdi zmdi-google"></i>
                        </a>
                        {{--<a href="javascript:void(0)" class="btn-circle btn-instagram">--}}
                        {{--<i class="zmdi zmdi-instagram"></i>--}}
                        {{--</a>--}}
                        {{--<a href="javascript:void(0)" class="btn-circle btn-github">--}}
                        {{--<i class="zmdi zmdi-github"></i>--}}
                        {{--</a>--}}
                        {{--https://www.linkedin.com/in/sybace-india-17b779149/--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<footer class="ms-footer">
    <div class="container">
        <p>Copyright &copy; {{date("Y")}} {{ \Sybace\Settings\Models\Setting::find(1)->value }} Web Technology Private Limited</p>
    </div>
    <div class="ftr__made-in-india">
        Made in <img class="ftr__flag" src="{{url('/')}}/public/website_assets/img/in.png" alt="IN" title="IN"/> with <span class="ftr-heart">❤</span>
    </div>
</footer>
<div class="btn-back-top">
    <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
        <i class="zmdi zmdi-long-arrow-up"></i>
    </a>
</div>
@if(Request::segment(1)=='blog')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59b4bf61d74632aa" async defer ></script>
@endif