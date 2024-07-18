<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    {{-- head --}}
    @include('clients.includes.head')

</head>

<body class="home home-2">
    <!-- Site wrapper -->
    <div class="site-wrapper">
        {{-- header --}}
        @include('clients.includes.header')
        <main>
            @yield('content')
        </main>

        {{-- footer --}}
        @include('clients.includes.footer')
        <div id="mnmd-sticky-header" class="sticky-header js-sticky-header">
            <!-- Navigation bar -->
            <nav class="navigation-bar navigation-bar--inverse navigation-bar--fullwidth hidden-xs hidden-sm">
                <div class="navigation-bar__inner">
                    <div class="navigation-bar__section"><a href="#mnmd-offcanvas-primary"
                            class="offcanvas-menu-toggle navigation-bar-btn js-mnmd-offcanvas-toggle"><i
                                class="mdicon mdicon-menu icon--2x"></i></a>
                        <div class="site-logo header-logo"><a href="home-1.html"><img
                                    src="assets/clients/img/logo-mark-color.png" alt="logo"></a></div>
                    </div>
                    <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                        <ul id="menu-main-menu-1" class="navigation navigation--main navigation--inline">
                            <li class="menu-item-has-children"><a href="#">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="home-1.html">Home 1</a></li>
                                    <li><a href="home-2.html">Home 2</a></li>
                                    <li><a href="home-3.html">Home 3</a></li>
                                    <li><a href="home-4.html">Home 4</a></li>
                                    <li><a href="home-5.html">Home 5</a></li>
                                    <li><a href="home-6.html">Home 6</a></li>
                                    <li><a href="home-7.html">Home 7</a></li>
                                    <li><a href="home-8.html">Home 8</a></li>
                                    <li><a href="home-9.html">Home 9</a></li>
                                    <li><a href="theme-introduction.html">All demos</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Features</a>
                                <div class="mnmd-mega-menu">
                                    <div class="container">
                                        <div class="mnmd-mega-menu__inner">
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children"><a href="#">Post templates</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-1.html">Title top</a></li>
                                                        <li><a href="single-1-alt.html">Title top wide</a></li>
                                                        <li><a href="single-1-alt-left-sidebar.html">Title top wide left
                                                                sidebar</a></li>
                                                        <li><a href="single-1-no-sidebar.html">Title top no sidebar</a>
                                                        </li>
                                                        <li><a href="single-2.html">Thumb top</a></li>
                                                        <li><a href="single-2-alt.html">Thumb top wide</a></li>
                                                        <li><a href="single-2-no-sidebar.html">Thumb top no sidebar</a>
                                                        </li>
                                                        <li><a href="single-3.html">Background header</a></li>
                                                        <li><a href="single-3-no-sidebar.html">Background header no
                                                                sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Post templates</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-4.html">Background header alt</a></li>
                                                        <li><a href="single-4-alt.html">Background header alt light</a>
                                                        </li>
                                                        <li><a href="single-4-no-sidebar.html">Background header alt no
                                                                sidebar</a></li>
                                                        <li><a href="single-5.html">Billboard</a></li>
                                                        <li><a href="single-5-center.html">Billboard center</a></li>
                                                        <li><a href="single-5-no-sidebar.html">Billboard no sidebar</a>
                                                        </li>
                                                        <li><a href="single-6.html">Billboard blur</a></li>
                                                        <li><a href="single-6-center.html">Billboard blur center</a>
                                                        </li>
                                                        <li><a href="single-6-no-sidebar.html">Billboard blur no
                                                                sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Post examples</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-gallery.html">Gallery</a></li>
                                                        <li><a href="single-video.html">Video</a></li>
                                                        <li><a href="single-video-no-sidebar.html">Video no sidebar</a>
                                                        </li>
                                                        <li><a href="single-video-with-list.html">Video with list</a>
                                                        </li>
                                                        <li><a href="single-video-with-list-no-sidebar.html">Video with
                                                                list no sidebar</a></li>
                                                        <li><a href="single-review.html">Review</a></li>
                                                        <li><a href="single-review-aside-left.html">Review aside</a>
                                                        </li>
                                                        <li><a href="single-paginated.html">Paginated</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Page templates</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="author.html">Author</a></li>
                                                        <li><a href="authors-list.html">Authors list</a></li>
                                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="page.html">Sample page</a></li>
                                                        <li><a href="page.html">Typography</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Extras</a>
                                <div class="mnmd-mega-menu">
                                    <div class="container">
                                        <div class="mnmd-mega-menu__inner">
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children"><a href="#">Header examples</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="home-1.html">Header 1</a></li>
                                                        <li><a href="home-2.html">Header 2</a></li>
                                                        <li><a href="home-3.html">Header 3</a></li>
                                                        <li><a href="home-4.html">Header 4</a></li>
                                                        <li><a href="home-5.html">Header 5</a></li>
                                                        <li><a href="home-6.html">Header 6</a></li>
                                                        <li><a href="home-7.html">Header 7</a></li>
                                                        <li><a href="home-8.html">Header 8</a></li>
                                                        <li><a href="home-9.html">Header 9</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Footer examples</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="home-1.html">Footer 1</a></li>
                                                        <li><a href="home-2.html">Footer 2</a></li>
                                                        <li><a href="home-3.html">Footer 3</a></li>
                                                        <li><a href="home-4.html">Footer 4</a></li>
                                                        <li><a href="home-5.html">Footer 5</a></li>
                                                        <li><a href="home-6.html">Footer 6</a></li>
                                                        <li><a href="home-8.html">Footer 7</a></li>
                                                        <li><a href="home-9.html">Footer 8</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Archive templates</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="archive-list.html">List</a></li>
                                                        <li><a href="archive-list-alt.html">List alt 1</a></li>
                                                        <li><a href="archive-list-alt-2.html">List alt 2</a></li>
                                                        <li><a href="archive-list-alt-3.html">List alt 3</a></li>
                                                        <li><a href="archive-list-no-sidebar.html">List no sidebar</a>
                                                        </li>
                                                        <li><a href="archive-grid.html">Grid</a></li>
                                                        <li><a href="archive-grid-alt.html">Grid alt</a></li>
                                                        <li><a href="archive-grid-no-sidebar.html">Grid no sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Archive templates</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="category.html">Category 1</a></li>
                                                        <li><a href="category-2.html">Category 2</a></li>
                                                        <li><a href="category-3.html">Category 3</a></li>
                                                        <li><a href="category-4.html">Category 4</a></li>
                                                        <li><a href="category-5.html">Category 5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#">Others</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blocks-main-col.html">All sections</a></li>
                                                        <li><a href="blocks-fullwidth.html">Fullwidth sections</a></li>
                                                        <li><a href="blocks-slider-and-carousel.html">Sliders</a></li>
                                                        <li><a href="widgets.html">Widgets</a></li>
                                                        <li><a href="archive-list.html">Links pagination</a></li>
                                                        <li><a href="home-3.html">Load more button pagination</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="theme-introduction.html">All features</a></li>
                            <li class="menu-item-cat-1"><a href="#">News</a>
                                <div class="mnmd-mega-menu">
                                    <div class="container">
                                        <div class="mnmd-mega-menu__inner">
                                            <ul class="posts-list list-unstyled">
                                                <li class="big-post">
                                                    <article
                                                        class="post post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-xs cat-1">
                                                        <div class="background-img"
                                                            style="background-image: url('img/demo/news-1-4_3.jpg')">
                                                        </div>
                                                        <div class="post__text inverse-text">
                                                            <div class="post__text-wrap">
                                                                <div class="post__text-inner">
                                                                    <h3 class="post__title typescale-2">Another frosty
                                                                        morning for the country as winter starts to bite
                                                                    </h3>
                                                                    <div class="post__meta"><span
                                                                            class="entry-author">By <a href="#"
                                                                                class="entry-author__name">Ryan
                                                                                Reynold</a></span> <time
                                                                            class="time published"
                                                                            datetime="2016-08-20T08:53+00:00"
                                                                            title="August 20, 2016 at 08:53 am"><i
                                                                                class="mdicon mdicon-schedule"></i>2
                                                                            hours ago</time></div>
                                                                </div>
                                                            </div>
                                                        </div><a href="#single-url" class="link-overlay"></a>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/news-2-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Asian
                                                                    Tourism in the Age of Globalization</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/news-3-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Who’s afraid
                                                                    of Trump? Not enough Republicans — at least for
                                                                    now</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/news-4-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">United
                                                                    bumpings fall 79 percent following
                                                                    passenger-dragging incident</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                            <ul class="sub-categories">
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-1">World</a>
                                                </li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-2">USA</a></li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-3">Europe</a>
                                                </li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-4">Asia</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-cat-4"><a href="#">Tech</a>
                                <div class="mnmd-mega-menu">
                                    <div class="container">
                                        <div class="mnmd-mega-menu__inner">
                                            <ul class="posts-list list-unstyled">
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/tech-1-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">New
                                                                    spacesuit system could repel destructive moon
                                                                    dust</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/tech-2-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Apple
                                                                    releases public beta of iOS 11: Here's what you need
                                                                    to know</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/tech-3-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Tesla will
                                                                    reveal the finished Model 3 in July — here's
                                                                    everything you need to know about the car</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/tech-4-2_1.jpg"></a>
                                                        </div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">watchOS 4
                                                                    brings more intelligence and fitness features to
                                                                    Apple Watch</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                            <ul class="sub-categories">
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-1">Mobile</a>
                                                </li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-2">Computer</a>
                                                </li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-3">Car</a></li>
                                                <li><a href="#cat-url"
                                                        class="post__cat post__cat--bg cat-theme-bg cat-4">Gadgets</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-cat-5"><a href="#">Review</a>
                                <div class="mnmd-mega-menu">
                                    <div class="container">
                                        <div class="mnmd-mega-menu__inner">
                                            <ul class="posts-list list-unstyled">
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/review-1-2_1.jpg">
                                                                <div class="overlay-center-y text-center">
                                                                    <div class="post-score-hexagon"><svg
                                                                            class="hexagon-svg" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewbox="-5 -5 184 210">
                                                                            <g>
                                                                                <path fill="#FC3C2D" stroke="#fff"
                                                                                    stroke-width="10px"
                                                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg> <span class="post-score-value">9</span>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Galaxy S8
                                                                    review: The best phone will only get better</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/review-2-2_1.jpg">
                                                                <div class="overlay-center-y text-center">
                                                                    <div class="post-score-hexagon"><svg
                                                                            class="hexagon-svg" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewbox="-5 -5 184 210">
                                                                            <g>
                                                                                <path fill="#FC3C2D" stroke="#fff"
                                                                                    stroke-width="10px"
                                                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg> <span class="post-score-value">8.5</span>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Microsoft
                                                                    Surface Laptop review: should you buy one?</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/review-3-2_1.jpg">
                                                                <div class="overlay-center-y text-center">
                                                                    <div class="post-score-hexagon"><svg
                                                                            class="hexagon-svg" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewbox="-5 -5 184 210">
                                                                            <g>
                                                                                <path fill="#FC3C2D" stroke="#fff"
                                                                                    stroke-width="10px"
                                                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg> <span class="post-score-value">10</span>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Review:
                                                                    Nokia retunes 3310 for a new generation</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                                <li>
                                                    <article class="post post--vertical cat-6">
                                                        <div class="post__thumb"><a href="#single-url"><img
                                                                    src="assets/clients/img/demo/review-4-2_1.jpg">
                                                                <div class="overlay-center-y text-center">
                                                                    <div class="post-score-hexagon"><svg
                                                                            class="hexagon-svg" version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            viewbox="-5 -5 184 210">
                                                                            <g>
                                                                                <path fill="#FC3C2D" stroke="#fff"
                                                                                    stroke-width="10px"
                                                                                    d="M81.40638795573723 2.9999999999999996Q86.60254037844386 0 91.7986928011505 2.9999999999999996L168.0089283341811 47Q173.20508075688772 50 173.20508075688772 56L173.20508075688772 144Q173.20508075688772 150 168.0089283341811 153L91.7986928011505 197Q86.60254037844386 200 81.40638795573723 197L5.196152422706632 153Q0 150 0 144L0 56Q0 50 5.196152422706632 47Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg> <span class="post-score-value">9.5</span>
                                                                    </div>
                                                                </div>
                                                            </a></div>
                                                        <div class="post__text">
                                                            <h3 class="post__title typescale-0"><a href="#">Dell XPS 13
                                                                    (Kaby Lake) review: Refined perfection</a></h3>
                                                            <div class="post__meta"><time class="time published"
                                                                    datetime="2016-08-20T08:53+00:00"
                                                                    title="August 20, 2016 at 08:53 am"><i
                                                                        class="mdicon mdicon-schedule"></i>2 hours
                                                                    ago</time></div>
                                                        </div>
                                                    </article>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-cat-3"><a href="#">Life</a></li>
                        </ul>
                    </div>
                    <div class="navigation-bar__section"><a href="#login-modal"
                            class="navigation-bar__login-btn navigation-bar-btn" data-toggle="modal"
                            data-target="#login-modal"><i class="mdicon mdicon-person"></i></a> <button type="submit"
                            class="navigation-bar-btn js-search-dropdown-toggle"><i
                                class="mdicon mdicon-search"></i></button></div>
                </div><!-- .navigation-bar__inner -->
            </nav><!-- Navigation-bar -->
        </div><!-- Sticky header -->

        <!-- Off-canvas menu -->
        <div id="mnmd-offcanvas-primary" class="mnmd-offcanvas js-mnmd-offcanvas js-perfect-scrollbar">
            <div class="mnmd-offcanvas__title">
                <h2 class="site-logo"><a href="#"><img src="assets/clients/img/logo-mark-color.png" alt="logo"
                            width="140"></a></h2>
                <ul class="social-list list-horizontal">
                    <li><a href="#"><i class="mdicon mdicon-facebook"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-twitter"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-youtube"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-google-plus"></i></a></li>
                </ul><a href="#mnmd-offcanvas-primary" class="mnmd-offcanvas-close js-mnmd-offcanvas-close"
                    aria-label="Close"><span aria-hidden="true">&#10005;</span></a>
            </div>
            <div class="mnmd-offcanvas__section mnmd-offcanvas__section-navigation">
                <ul id="menu-offcanvas-menu" class="navigation navigation--offcanvas">
                    <li class="menu-item-has-children"><a href="#">Home</a>
                        <ul class="sub-menu">
                            <li><a href="home-1.html">Home 1</a></li>
                            <li><a href="home-2.html">Home 2</a></li>
                            <li><a href="home-3.html">Home 3</a></li>
                            <li><a href="home-4.html">Home 4</a></li>
                            <li><a href="home-5.html">Home 5</a></li>
                            <li><a href="home-6.html">Home 6</a></li>
                            <li><a href="home-7.html">Home 7</a></li>
                            <li><a href="home-8.html">Home 8</a></li>
                            <li><a href="home-9.html">Home 9</a></li>
                            <li><a href="theme-introduction.html">All demos</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Categories</a>
                        <ul class="sub-menu">
                            <li><a href="#">Design</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Creative</a></li>
                            <li class="menu-item-has-children"><a href="#">Tech</a>
                                <ul class="sub-menu">
                                    <li><a href="#">Mobile</a></li>
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">PC</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">Buy theme</a></li>
                    <li><a href="#">Documentation</a></li>
                    <li><a href="#">All features</a></li>
                    <li><a href="#">Other themes</a></li>
                </ul>
            </div>
            <div class="mnmd-offcanvas__section">
                <div class="widget widget_text">
                    <div class="subscribe-form subscribe-form--horizontal text-center">
                        <p>Join our <b>868,537</b> subscribers and get access to the latest tools, freebies, product
                            announcements and much more!</p>
                        <div class="subscribe-form__fields"><input type="email" name="EMAIL"
                                placeholder="Your email address" required=""> <input type="submit" value="Subscribe"
                                class="btn btn-primary"></div>
                    </div>
                </div>
            </div>
            <div class="mnmd-offcanvas__section visible-xs visible-sm">
                <div class="text-center"><a href="#login-modal" class="btn btn-default" data-toggle="modal"
                        data-target="#login-modal"><i class="mdicon mdicon-person mdicon--first"></i><span>Login/Sign
                            up</span></a></div>
            </div>
        </div><!-- Off-canvas menu --> <a href="#" class="mnmd-go-top btn btn-default hidden-xs js-go-top-el"><i
                class="mdicon mdicon-arrow_upward"></i></a>
    </div>

    {{-- Alert sweetalert --}}
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    {{-- Script --}}
    @include('clients.includes.script')


</body>


</html>