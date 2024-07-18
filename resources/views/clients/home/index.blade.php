@extends('layouts.clientLayout')
@section('content')

<div class="site-content">
    <div
        class="mnmd-block mnmd-block--fullwidth mnmd-block--contiguous mnmd-carousel mnmd-carousel-overlap has-overlap-background">
        <div class="overlap-background background-svg-pattern background-svg-pattern--solid-color hidden-xs">
            <div class="background-overlay gradient-5-alt"></div>
        </div>
        @empty(!$postBanners)
        <div class="mnmd-carousel__inner js-mnmd-carousel-overlap">
            @foreach ($postBanners as $postBanner)

            <div class="slide-content">
                <article class="post--overlay post--overlay-bottom post--overlay-floorfade cat-4">
                    <div class="background-img" style="background-image: url('{{$postBanner->image}}')"></div>
                    <div class="post__text inverse-text">
                        <div class="post__text-wrap">
                            <div class="post__text-inner text-center max-width-sm"><a href="#"
                                    class="post__cat post__cat--bg cat-theme-bg">Tech</a>
                                <h3 class="post__title typescale-5">{{$postBanner->languages->first()->pivot->name}}
                                </h3>
                                <div class="post__meta"><span class="entry-author">By <a href="#"
                                            class="entry-author__name">Ryan Reynold</a></span> <time
                                        class="time published" datetime="2016-08-20T08:53+00:00"
                                        title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>{{
                                        convertDatetime($postBanner->created_at) }}</time> <a href="#single-url"><i
                                            class="mdicon mdicon-chat_bubble_outline"></i>21</a></div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('post-detail', ['id'=>$postBanner->id]) }}" class="link-overlay"></a>
                </article>
            </div>
            @endforeach


        </div><!-- .container -->
        @endempty
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">Trending</span> Stories</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post post--card post--card-sm cat-2 text-center shadow-hover-4">
                        <div class="post__thumb"><a href="#single-url">
                                <div class="background-img" style="background-image: url('img/demo/sport-1-4_3.jpg')">
                                </div>
                            </a><a href="#" class="post__cat post__cat--bg post__cat--overlap cat-theme-bg">Sport</a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1"><a href="#">Canberra dirt bike racers gear up
                                    for Canberra Cup this weekend</a></h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post post--card post--card-sm cat-3 text-center shadow-hover-4">
                        <div class="post__thumb"><a href="#single-url">
                                <div class="background-img" style="background-image: url('img/demo/life-1-4_3.jpg')">
                                </div>
                            </a><a href="#" class="post__cat post__cat--bg post__cat--overlap cat-theme-bg">Life</a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1"><a href="#">Concerts, festivals and more events
                                    on the Peninsula this summer</a></h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post post--card post--card-sm cat-5 text-center shadow-hover-4">
                        <div class="post__thumb"><a href="#single-url">
                                <div class="background-img"
                                    style="background-image: url('img/demo/business-1-4_3.jpg')"></div>
                            </a><a href="#" class="post__cat post__cat--bg post__cat--overlap cat-theme-bg">Business</a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1"><a href="#">5 tiny business habits that will
                                    make your small business more money</a></h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post post--card post--card-sm cat-6 text-center shadow-hover-4">
                        <div class="post__thumb"><a href="#single-url">
                                <div class="background-img" style="background-image: url('img/demo/travel-1-4_3.jpg')">
                                </div>
                            </a><a href="#" class="post__cat post__cat--bg post__cat--overlap cat-theme-bg">Travel</a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1"><a href="#">Everett man goes to Arctic to
                                    photograph polar bears up close</a></h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">Latest</span> Stories</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-sm-6">
                    <article
                        class="post post--overlay post--overlay-xs post--overlay-floorfade post--overlay-bottom cat-2">
                        <div class="background-img" style="background-image: url('img/demo/sport-2-4_3.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner text-center"><a href="#"
                                        class="post__cat post__cat--bg cat-theme-bg">Sport</a>
                                    <h3 class="post__title typescale-2">Ski Or Die x Ruka 2017 — The wildest
                                        event in skiing</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <article
                        class="post post--overlay post--overlay-xs post--overlay-floorfade post--overlay-bottom cat-4">
                        <div class="background-img" style="background-image: url('img/demo/tech-3-4_3.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner text-center"><a href="#"
                                        class="post__cat post__cat--bg cat-theme-bg">Tech</a>
                                    <h3 class="post__title typescale-2">Tesla will reveal the finished Model 3
                                        in July — here's everything you need to know about the car</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a>
                    </article>
                </div>
            </div><!-- .row -->
            <div class="row row--space-between">
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-1">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-2-2_1.jpg"></a>
                        </div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-0"><a href="#single-url">Apple releases public beta
                                    of iOS 11: Here's what you need to know</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-1">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-5-2_1.jpg"></a>
                        </div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-0"><a href="#single-url">GoPro Karma review: What I
                                    learned from crashing a drone</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-1">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/travel-2-2_1.jpg"></a>
                        </div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-0"><a href="#single-url">Beginner's guide to New
                                    York City: 5 insiders share tips</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-1">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/business-5-2_1.jpg"></a></div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-0"><a href="#single-url">Asian stocks pull back on
                                    U.S. tech declines, eurozone worries</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time></div>
                        </div>
                    </article>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth has-background mnmd-horizontal-list cat-1">
        <div class="background-svg-pattern-inverse"></div>
        <div class="container">
            <div class="block-heading block-heading--center block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">Most</span> Read</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-sm-4">
                    <article class="cat-1">
                        <div class="media">
                            <div class="media-left"><span class="index">1.</span></div>
                            <div class="post__text media-body"><a href="#" class="post__cat cat-theme">News</a>
                                <h3 class="post__title typescale-2"><a href="#">United bumpings fall 79 percent
                                        following passenger-dragging incident</a></h3>
                                <div class="post__meta"><a href="#single-url"><i
                                            class="mdicon mdicon-chat_bubble_outline"></i>21 comments</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <article class="cat-2">
                        <div class="media">
                            <div class="media-left"><span class="index">2.</span></div>
                            <div class="post__text media-body"><a href="#" class="post__cat cat-theme">Sport</a>
                                <h3 class="post__title typescale-2"><a href="#">Canada ties U.S. in 1st leg of
                                        Rugby World Cup qualifier</a></h3>
                                <div class="post__meta"><a href="#single-url"><i
                                            class="mdicon mdicon-chat_bubble_outline"></i>21 comments</a></div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <article class="cat-4">
                        <div class="media">
                            <div class="media-left"><span class="index">3.</span></div>
                            <div class="post__text media-body"><a href="#" class="post__cat cat-theme">Game</a>
                                <h3 class="post__title typescale-2"><a href="#">Call of Duty: Infinite Warfare
                                        is like no Call of Duty you've ever seen</a></h3>
                                <div class="post__meta"><a href="#single-url"><i
                                            class="mdicon mdicon-chat_bubble_outline"></i>21 comments</a></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="row row--space-between">
                <div class="col-xs-12 col-md-4">
                    <div class="block-heading block-heading--lg">
                        <h4 class="block-heading__title">News</h4>
                    </div>
                    <article
                        class="post post--overlay post--overlay-xs post--overlay-floorfade post--overlay-bottom cat-1">
                        <div class="background-img" style="background-image: url('img/demo/news-1-4_3.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner">
                                    <h3 class="post__title typescale-2">Another frosty morning for the country
                                        as winter starts to bite</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a> <a href="#" title="17 comments"
                            class="comments-count-box overlay-item">17</a>
                    </article>
                    <div class="spacer-xs"></div>
                    <ul class="list-space-xs list-seperated list-square-bullet-exclude-first list-unstyled">
                        <li>
                            <article class="post--horizontal post--horizontal-xs cat-2">
                                <div class="post__thumb"><a href="#"><img
                                            src="assets/clients/img/demo/news-2-4_3.jpg"></a>
                                </div>
                                <div class="post__text">
                                    <h3 class="post__title typescale-1"><a href="#">Asian Tourism in the Age of
                                            Globalization</a></h3>
                                    <div class="post__meta"><time class="time published"
                                            datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">Who’s afraid of Trump? Not
                                            enough Republicans — at least for now</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">United bumpings fall 79
                                            percent following passenger-dragging incident</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">Riot police pelted with
                                            missiles by 200 youths armed with axes and knives</a></h3>
                                </div>
                            </article>
                        </li>
                    </ul>
                    <div class="spacer-sm"></div>
                    <div class="text-center"><a href="#" class="btn btn-default btn-sm">View more
                            <strong>News</strong><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="block-heading block-heading--lg">
                        <h4 class="block-heading__title">Sport</h4>
                    </div>
                    <article
                        class="post post--overlay post--overlay-xs post--overlay-floorfade post--overlay-bottom cat-1">
                        <div class="background-img" style="background-image: url('img/demo/sport-1-4_3.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner">
                                    <h3 class="post__title typescale-2">Canberra dirt bike racers gear up for
                                        Canberra Cup this weekend</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a> <a href="#" title="17 comments"
                            class="comments-count-box overlay-item">17</a>
                    </article>
                    <div class="spacer-xs"></div>
                    <ul class="list-space-xs list-seperated list-square-bullet-exclude-first list-unstyled">
                        <li>
                            <article class="post--horizontal post--horizontal-xs cat-2">
                                <div class="post__thumb"><a href="#"><img
                                            src="assets/clients/img/demo/sport-2-4_3.jpg"></a>
                                </div>
                                <div class="post__text">
                                    <h3 class="post__title typescale-1"><a href="#">Ski Or Die x Ruka 2017 — The
                                            wildest event in skiing</a></h3>
                                    <div class="post__meta"><time class="time published"
                                            datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">USA Cycling championships in
                                            Knoxville: 5 things to know</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">Canada ties U.S. in 1st leg
                                            of Rugby World Cup qualifier</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">Premier League stadiums
                                            ranked by local temperature: Where is warmest?</a></h3>
                                </div>
                            </article>
                        </li>
                    </ul>
                    <div class="spacer-sm"></div>
                    <div class="text-center"><a href="#" class="btn btn-default btn-sm">View more
                            <strong>Sport</strong><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <div class="block-heading block-heading--lg">
                        <h4 class="block-heading__title">Tech</h4>
                    </div>
                    <article
                        class="post post--overlay post--overlay-xs post--overlay-floorfade post--overlay-bottom cat-4">
                        <div class="background-img" style="background-image: url('img/demo/tech-1-4_3.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner">
                                    <h3 class="post__title typescale-2">New spacesuit system could repel
                                        destructive moon dust</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a> <a href="#" title="17 comments"
                            class="comments-count-box overlay-item">17</a>
                    </article>
                    <div class="spacer-xs"></div>
                    <ul class="list-space-xs list-seperated list-square-bullet-exclude-first list-unstyled">
                        <li>
                            <article class="post--horizontal post--horizontal-xs cat-2">
                                <div class="post__thumb"><a href="#"><img
                                            src="assets/clients/img/demo/tech-2-4_3.jpg"></a>
                                </div>
                                <div class="post__text">
                                    <h3 class="post__title typescale-1"><a href="#">Apple releases public beta
                                            of iOS 11: Here's what you need to know</a></h3>
                                    <div class="post__meta"><time class="time published"
                                            datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">Tesla will reveal the
                                            finished Model 3 in July — here's everything you need to know about
                                            the car</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">watchOS 4 brings more
                                            intelligence and fitness features to Apple Watch</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post--list cat-4">
                                <div class="post-content">
                                    <h3 class="post__title typescale-0"><a href="#">GoPro Karma review: What I
                                            learned from crashing a drone</a></h3>
                                </div>
                            </article>
                        </li>
                    </ul>
                    <div class="spacer-sm"></div>
                    <div class="text-center"><a href="#" class="btn btn-default btn-sm">View more
                            <strong>World</strong><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth mnmd-featured-block-a has-background">
        <div class="background-img">
            <div class="background-img background-img--darkened blurred hidden-xs"
                style="background-image: url('img/demo/tech-5.jpg')"></div>
        </div>
        <div class="container">
            <div class="main-post-wrap">
                <div class="background-img background-img--darkened visible-xs"
                    style="background-image: url('img/demo/tech-5-4_3.jpg')"></div>
                <div class="block-heading block-heading--inverse block-heading--center block-heading--lg">
                    <h4 class="block-heading__title"><span class="first-word">Editor's</span> Picks</h4>
                </div>
                <article class="post main-post cat-4">
                    <div class="post__text inverse-text max-width-md"><a href="#"
                            class="post__cat post__cat--bg cat-theme-bg">Tech</a>
                        <h3 class="post__title typescale-5"><a href="#">GoPro Karma review: What I learned from
                                crashing a drone</a></h3>
                        <div class="post__meta"><span class="entry-author">By <a href="#"
                                    class="entry-author__name">Ryan Reynold</a></span></div>
                        <div class="post__excerpt">Major U.S. growth mutual funds have been among the largest
                            sellers of Apple shares over the past six months.</div>
                    </div>
                </article>
            </div>
        </div>
        <div class="container">
            <div class="sub-posts-wrap">
                <div class="sub-posts visible-xs">
                    <ul class="list-unstyled list-space-sm">
                        <li>
                            <article class="post post--horizontal post--horizontal-middle post--horizontal-xxs cat-2">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/tech-1-1_1.jpg"></a></div>
                                <div class="post__text inverse-text"><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Sport</a>
                                    <h3 class="post__title typescale-0"><a href="#">New spacesuit system could
                                            repel destructive moon dust</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post post--horizontal post--horizontal-middle post--horizontal-xxs cat-5">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/business-2-1_1.jpg"></a></div>
                                <div class="post__text inverse-text"><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Business</a>
                                    <h3 class="post__title typescale-0"><a href="#">Cafe business tough but
                                            critical to local economy</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post post--horizontal post--horizontal-middle post--horizontal-xxs cat-1">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/news-1-1_1.jpg"></a></div>
                                <div class="post__text inverse-text"><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Sport</a>
                                    <h3 class="post__title typescale-0"><a href="#">Asian Tourism in the Age of
                                            Globalization</a></h3>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="post post--horizontal post--horizontal-middle post--horizontal-xxs cat-2">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/sport-1-1_1.jpg"></a></div>
                                <div class="post__text inverse-text"><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Sport</a>
                                    <h3 class="post__title typescale-0"><a href="#">Canberra dirt bike racers
                                            gear up for Canberra Cup this weekend</a></h3>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="sub-posts hidden-xs">
                    <div class="row row--space-between">
                        <div class="col-xs-6 col-md-3">
                            <article class="post post--vertical post--vertical-center cat-4">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/tech-1-2_1.jpg"> </a><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Tech</a></div>
                                <div class="post__text inverse-text text-center">
                                    <h3 class="post__title typescale-1"><a href="#">New spacesuit system could
                                            repel destructive moon dust</a></h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <article class="post post--vertical post--vertical-center cat-5">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/business-2-2_1.jpg"> </a><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Business</a></div>
                                <div class="post__text inverse-text text-center">
                                    <h3 class="post__title typescale-1"><a href="#">Cafe business tough but
                                            critical to local economy</a></h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <article class="post post--vertical post--vertical-center cat-1">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/news-2-2_1.jpg"> </a><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">News</a></div>
                                <div class="post__text inverse-text text-center">
                                    <h3 class="post__title typescale-1"><a href="#">Asian Tourism in the Age of
                                            Globalization</a></h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span></div>
                                </div>
                            </article>
                        </div>
                        <div class="col-xs-6 col-md-3">
                            <article class="post post--vertical post--vertical-center cat-2">
                                <div class="post__thumb"><a href="#single-url"><img
                                            src="assets/clients/img/demo/sport-1-2_1.jpg"> </a><a href="#cat-url"
                                        class="post__cat post__cat--bg cat-theme-bg">Sport</a>
                                </div>
                                <div class="post__text inverse-text text-center">
                                    <h3 class="post__title typescale-1"><a href="#">Canberra dirt bike racers
                                            gear up for Canberra Cup this weekend</a></h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">Latest</span> Reviews</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-md-6">
                    <article
                        class="post post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-xs cat-4">
                        <div class="background-img" style="background-image: url('img/demo/review-1-4_3.jpg')">
                        </div>
                        <div class="post__text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner inverse-text">
                                    <div class="media">
                                        <div class="media-body media-middle">
                                            <h3 class="post__title typescale-2">Galaxy S8 review: The best phone
                                                will only get better</h3>
                                        </div>
                                        <div class="media-right media-middle">
                                            <div class="post-score-hexagon"><svg class="hexagon-svg" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewbox="-5 -5 184 210">
                                                    <g>
                                                        <path fill="#FC3C2D" stroke="#fff" stroke-width="10px"
                                                            d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                        </path>
                                                    </g>
                                                </svg> <span class="post-score-value">9</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a href="#" class="link-overlay"></a> <a href="#cat-url"
                            class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">Mobile</a>
                    </article>
                </div>
                <div class="col-xs-12 col-md-6">
                    <article
                        class="post post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-xs cat-4">
                        <div class="background-img" style="background-image: url('img/demo/review-3-4_3.jpg')">
                        </div>
                        <div class="post__text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner inverse-text">
                                    <div class="media">
                                        <div class="media-body media-middle">
                                            <h3 class="post__title typescale-2">Review: Nokia retunes 3310 for a
                                                new generation</h3>
                                        </div>
                                        <div class="media-right media-middle">
                                            <div class="post-score-hexagon"><svg class="hexagon-svg" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" viewbox="-5 -5 184 210">
                                                    <g>
                                                        <path fill="#FC3C2D" stroke="#fff" stroke-width="10px"
                                                            d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                        </path>
                                                    </g>
                                                </svg> <span class="post-score-value">10</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><a href="#" class="link-overlay"></a> <a href="#cat-url"
                            class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">Mobile</a>
                    </article>
                </div>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-md-4">
                    <article class="post post--vertical cat-4">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/review-2-2_1.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="post__title typescale-1"><a href="#">Microsoft Surface Laptop
                                            review: should you buy one?</a></h3>
                                </div>
                                <div class="media-right media-middle">
                                    <div class="post-score-hexagon"><svg class="hexagon-svg" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="-5 -5 184 210">
                                            <g>
                                                <path fill="#FC3C2D" stroke="#fff" stroke-width="10px"
                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                </path>
                                            </g>
                                        </svg> <span class="post-score-value">8.5</span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-md-4">
                    <article class="post post--vertical cat-4">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/review-4-2_1.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="post__title typescale-1"><a href="#">Dell XPS 13 (Kaby Lake)
                                            review: Refined perfection</a></h3>
                                </div>
                                <div class="media-right media-middle">
                                    <div class="post-score-hexagon"><svg class="hexagon-svg" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="-5 -5 184 210">
                                            <g>
                                                <path fill="#FC3C2D" stroke="#fff" stroke-width="10px"
                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                </path>
                                            </g>
                                        </svg> <span class="post-score-value">9.5</span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-md-4">
                    <article class="post post--vertical cat-4">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-5-2_1.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="media">
                                <div class="media-body media-middle">
                                    <h3 class="post__title typescale-1"><a href="#">GoPro Karma review: What I
                                            learned from crashing a drone</a></h3>
                                </div>
                                <div class="media-right media-middle">
                                    <div class="post-score-hexagon"><svg class="hexagon-svg" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg" viewbox="-5 -5 184 210">
                                            <g>
                                                <path fill="#FC3C2D" stroke="#fff" stroke-width="10px"
                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                </path>
                                            </g>
                                        </svg> <span class="post-score-value">7</span></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth mnmd-posts-listing-a grid-gutter-10">
        <div class="container">
            <div class="row row--space-between">
                <div class="col-sm-6 col-md-3">
                    <div class="mnmd-posts-listing-a__cat-wrap">
                        <div class="background-img background-img--darkened grayscale"
                            style="background-image: url('img/demo/news-1-4_3.jpg')"></div>
                        <div class="background-overlay cat-theme-bg cat-1"></div>
                        <div class="mnmd-posts-listing-a__cat-inner inverse-text">
                            <h4 class="cat-title">News</h4>
                            <ul class="list-space-sm list-seperated list-unstyled">
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">The Six Nations Rugby
                                                Championship: A History to Date</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">How To Find The Best
                                                Smartphone Camera For Your Photographic Hobby</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                            </ul><br><a href="#" class="link meta-font has-mdicon"><span class="text-underline">View all
                                    News</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="mnmd-posts-listing-a__cat-wrap">
                        <div class="background-img background-img--darkened grayscale"
                            style="background-image: url('img/demo/sport-1-4_3.jpg')"></div>
                        <div class="background-overlay cat-theme-bg cat-2"></div>
                        <div class="mnmd-posts-listing-a__cat-inner inverse-text">
                            <h4 class="cat-title">Sport</h4>
                            <ul class="list-space-sm list-seperated list-unstyled">
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">The Six Nations Rugby
                                                Championship: A History to Date</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">How To Find The Best
                                                Smartphone Camera For Your Photographic Hobby</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                            </ul><br><a href="#" class="link meta-font has-mdicon"><span class="text-underline">View all
                                    Sport</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="mnmd-posts-listing-a__cat-wrap">
                        <div class="background-img background-img--darkened grayscale"
                            style="background-image: url('img/demo/life-1-4_3.jpg')"></div>
                        <div class="background-overlay cat-theme-bg cat-3"></div>
                        <div class="mnmd-posts-listing-a__cat-inner inverse-text">
                            <h4 class="cat-title">Life</h4>
                            <ul class="list-space-sm list-seperated list-unstyled">
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">The Six Nations Rugby
                                                Championship: A History to Date</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">How To Find The Best
                                                Smartphone Camera For Your Photographic Hobby</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                            </ul><br><a href="#" class="link meta-font has-mdicon"><span class="text-underline">View all
                                    Life</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="mnmd-posts-listing-a__cat-wrap">
                        <div class="background-img background-img--darkened grayscale"
                            style="background-image: url('img/demo/tech-1-4_3.jpg')"></div>
                        <div class="background-overlay cat-theme-bg cat-4"></div>
                        <div class="mnmd-posts-listing-a__cat-inner inverse-text">
                            <h4 class="cat-title">Tech</h4>
                            <ul class="list-space-sm list-seperated list-unstyled">
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">The Six Nations Rugby
                                                Championship: A History to Date</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">How To Find The Best
                                                Smartphone Camera For Your Photographic Hobby</a></h3>
                                    </article>
                                </li>
                                <li>
                                    <article class="post cat-4">
                                        <h3 class="post__title typescale-0"><a href="#">Growth funds are dumping
                                                Apple stock on anticipated iPhone sales decline</a></h3>
                                    </article>
                                </li>
                            </ul><br><a href="#" class="link meta-font has-mdicon"><span class="text-underline">View all
                                    Tech</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">More</span> Stories</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12 col-md-6">
                    <article
                        class="post post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-sm cat-1">
                        <div class="background-img" style="background-image: url('img/demo/news-1-16_9.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner">
                                    <h3 class="post__title typescale-3">Another frosty morning for the country
                                        as winter starts to bite</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a> <a href="#" title="17 comments"
                            class="comments-count-box overlay-item">10</a> <a href="#"
                            class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">News</a>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-2">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/sport-2-4_3.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Sport</a></div>
                            <h3 class="post__title typescale-1"><a href="#">Canberra dirt bike racers gear up
                                    for Canberra Cup this weekend</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <!-- Widget subscribe -->
                    <div class="mnmd-widget widget widget-subscribe widget-subscribe--stack-bottom widget--centered">
                        <div class="widget-subscribe__inner">
                            <div class="subscribe-form">
                                <h3>Subscribe</h3>
                                <p>Enter your email to receive daily round-up of most interesting news</p>
                                <div class="subscribe-form__fields">
                                    <p><label>Email address:</label><input type="email" name="EMAIL"
                                            placeholder="Your email address" required=""></p>
                                    <p><input type="submit" value="Subscribe" class="btn-block"></p>
                                </div><small>Don't worry, we don't spam</small>
                            </div>
                        </div>
                    </div><!-- Widget subscribe -->
                </div>
            </div><!-- .row -->
            <div class="row row--space-between">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-3">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/life-1-4_3.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Life</a></div>
                            <h3 class="post__title typescale-1"><a href="#">Concerts, festivals and more events
                                    on the Peninsula this summer</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-4">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-1-4_3.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Tech</a></div>
                            <h3 class="post__title typescale-1"><a href="#">New spacesuit system could repel
                                    destructive moon dust</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-5">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/business-1-4_3.jpg"></a></div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Business</a></div>
                            <h3 class="post__title typescale-1"><a href="#">5 tiny business habits that will
                                    make your small business more money</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-6">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/travel-1-4_3.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Travel</a></div>
                            <h3 class="post__title typescale-1"><a href="#">Everett man goes to Arctic to
                                    photograph polar bears up close</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
            </div><!-- .row -->
            <div class="row row--space-between">
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-5">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/business-2-4_3.jpg"></a></div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Tech</a></div>
                            <h3 class="post__title typescale-1"><a href="#">Cafe business tough but critical to
                                    local economy</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post--vertical cat-4">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-2-4_3.jpg"></a>
                        </div>
                        <div class="post__text">
                            <div class="post__meta"><a href="#" class="post__cat cat-theme">Tech</a></div>
                            <h3 class="post__title typescale-1"><a href="#">Apple releases public beta of iOS
                                    11: Here's what you need to know</a></h3>
                            <div class="post__meta"><span class="entry-author">By <a href="#"
                                        class="entry-author__name">Ryan Reynold</a></span> <span
                                    class="meta-seperator">&middot;</span> <time class="time published"
                                    datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">2
                                    hours ago</time></div>
                        </div>
                    </article>
                </div>
                <div class="col-xs-12 col-md-6">
                    <article
                        class="post post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-sm cat-3">
                        <div class="background-img" style="background-image: url('img/demo/life-2-16_9.jpg')">
                        </div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner">
                                    <h3 class="post__title typescale-3">Five bands to see at Pitchfork Music
                                        Festival 2017</h3>
                                    <div class="post__meta"><span class="entry-author">By <a href="#"
                                                class="entry-author__name">Ryan Reynold</a></span> <time
                                            class="time published" datetime="2016-08-20T08:53+00:00"
                                            title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2
                                            hours ago</time></div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a> <a href="#" title="17 comments"
                            class="comments-count-box overlay-item">10</a> <a href="#"
                            class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">Life</a>
                    </article>
                </div>
            </div><!-- .row -->
            <nav class="mnmd-pagination text-center"><a href="#" class="btn btn-default">View all stories<i
                        class="mdicon mdicon-arrow_forward mdicon--last"></i></a></nav>
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg">
                <h4 class="block-heading__title"><span class="first-word">Latest</span> Videos</h4>
            </div>
            <div class="row row--space-between">
                <div class="col-xs-12">
                    <article class="post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-md cat-4">
                        <div class="background-img" style="background-image: url('img/demo/news-2.jpg')"></div>
                        <div class="post__text inverse-text">
                            <div class="post__text-wrap">
                                <div class="post__text-inner text-center max-width-md">
                                    <div class="post-type-icon post-type-icon--lg"><i
                                            class="mdicon mdicon-play_circle_outline"></i></div>
                                    <h3 class="post__title typescale-5">Asian Tourism in the Age of
                                        Globalization</h3>
                                    <div class="post__meta"><time class="time published"
                                            datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                class="mdicon mdicon-schedule"></i>2 hours ago</time> <a
                                            href="#single-url"><i class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                                    </div>
                                </div>
                            </div>
                        </div><a href="#single-url" class="link-overlay"></a>
                    </article>
                </div>
            </div>
            <div class="row row--space-between">
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-2">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/sport-2-16_9.jpg">
                                <div class="overlay-item--center-xy post-type-icon"><i
                                        class="mdicon mdicon-play_circle_outline"></i></div>
                            </a></div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-1"><a href="#single-url">Canberra dirt bike racers
                                    gear up for Canberra Cup this weekend</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-2">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/tech-4-16_9.jpg">
                                <div class="overlay-item--center-xy post-type-icon"><i
                                        class="mdicon mdicon-play_circle_outline"></i></div>
                            </a></div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-1"><a href="#single-url">watchOS 4 brings more
                                    intelligence and fitness features to Apple Watch</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-2">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/life-2-16_9.jpg">
                                <div class="overlay-item--center-xy post-type-icon"><i
                                        class="mdicon mdicon-play_circle_outline"></i></div>
                            </a></div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-1"><a href="#single-url">Five bands to see at
                                    Pitchfork Music Festival 2017</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-3">
                    <article class="post post--vertical cat-2">
                        <div class="post__thumb"><a href="#single-url"><img
                                    src="assets/clients/img/demo/life-3-16_9.jpg">
                                <div class="overlay-item--center-xy post-type-icon"><i
                                        class="mdicon mdicon-play_circle_outline"></i></div>
                            </a></div>
                        <div class="post__text text-center">
                            <h3 class="post__title typescale-1"><a href="#single-url">Forces of Nature gather in
                                    a new fashion exhibition at FIT</a></h3>
                            <div class="post__meta"><time class="time published" datetime="2016-08-20T08:53+00:00"
                                    title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours
                                    ago</time> <a href="#single-url"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>21</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
</div>
@endsection