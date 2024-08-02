<!-- Site header -->
{{-- @dd($systemSetting) --}}
<header class="site-header site-header--inverse" role="banner">
    <!-- Header content -->
    <div class="header-main hidden-xs hidden-sm">
        <div class="background-img" style="background-image: url('assets/clients/img/color-powder.jpg')">
        </div>
        <div class="container pos-relative">
            <div class="header-logo text-center">
                <h1>
                    <a href="{{ route('home') }}">
                        <img style="filter: brightness(2)"
                            src="https://s1.vnecdn.net/vnexpress/restruct/i/v908/v2_2019/pc/graphics/logo.svg"
                            alt="logo" width="700"></a>
                </h1>
                <div class="spacer-xs"></div>
                <ul class="social-list social-list--lg social-list--inverse list-horizontal">
                    <li><a href="#"><i class="mdicon mdicon-facebook"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-twitter"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-youtube"></i></a></li>
                    <li><a href="#"><i class="mdicon mdicon-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header content -->
    <!-- Mobile header -->
    <div id="mnmd-mobile-header" class="mobile-header mobile-header--inverse visible-xs visible-sm">
        <div class="mobile-header__inner mobile-header__inner--flex">
            <div class="header-branding header-branding--mobile mobile-header__section text-left">
                <div class="header-logo header-logo--mobile flexbox__item text-left"><a href="home-1.html"><img
                            src="https://s1.vnecdn.net/vnexpress/restruct/i/v908/v2_2019/pc/graphics/logo.svg"
                            alt="logo"></a></div>
            </div>
            <div class="mobile-header__section text-right"><button type="submit"
                    class="mobile-header-btn js-search-dropdown-toggle"><span class="hidden-xs">Tìm kiếm</span><i
                        class="mdicon mdicon-search mdicon--last hidden-xs"></i><i
                        class="mdicon mdicon-search visible-xs-inline-block"></i></button> <a
                    href="#mnmd-offcanvas-primary"
                    class="offcanvas-menu-toggle mobile-header-btn js-mnmd-offcanvas-toggle"><span
                        class="hidden-xs">Menu</span><i class="mdicon mdicon-menu mdicon--last hidden-xs"></i><i
                        class="mdicon mdicon-menu visible-xs-inline-block"></i></a></div>
        </div>
    </div><!-- Mobile header -->
    <!-- Navigation bar -->
    <nav
        class="navigation-bar navigation-bar--fullwidth navigation-bar--inverse hidden-xs hidden-sm js-sticky-header-holder">
        <div class="container">
            <div class="navigation-bar__inner">
                <div class="navigation-bar__section">
                    {{-- <a href="#mnmd-offcanvas-primary"
                        class="offcanvas-menu-toggle navigation-bar-btn js-mnmd-offcanvas-toggle"><i
                            class="mdicon mdicon-menu"></i>
                    </a> --}}
                </div>
                <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                    <ul id="menu-main-menu" class="navigation navigation--main navigation--inline">
                        <li class="menu-item-cat-3">
                            <a href="{{ route('home') }}">Trang chủ</a>
                        </li>

                        @if (count($mainMenus) > 0)
                        @foreach ($mainMenus as $mainMenu)
                        @if (isset($mainMenu['children']) && count($mainMenu['children']) > 0)
                        <li class="menu-item-has-children">
                            <a href="{{ route('post-catalogue', ['id'=> $mainMenu['id']]) }}">{{ $mainMenu['name']
                                }}</a>
                            <div class="mnmd-mega-menu">
                                <div class="mnmd-mega-menu__inner">
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="{{ route('post-catalogue', ['id'=> $mainMenu['id']]) }}">{{
                                                $mainMenu['name'] }}</a>
                                            <ul class="sub-menu">
                                                @foreach ($mainMenu['children'] as $child)
                                                <li>
                                                    <a href="{{ route('post-catalogue', ['id'=> $child['id']]) }}">{{
                                                        $child['name'] }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        @else
                        <li class="menu-item-cat-3">
                            <a href="{{ route('post-catalogue', ['id'=> $child['id']]) }}">{{ $mainMenu['name'] }}</a>
                        </li>
                        @endif
                        @endforeach
                        @endif


                    </ul>
                </div>
                <div class="navigation-bar__section"><a href="#login-modal"
                        class="navigation-bar__login-btn navigation-bar-btn js-login-modal-toggle" data-toggle="modal"
                        data-target="#login-modal">
                        <i class="mdicon mdicon-person"></i></a>
                    <button type="submit" class="navigation-bar-btn js-search-dropdown-toggle"><i
                            class="mdicon mdicon-search"></i></button>
                </div>
            </div><!-- .navigation-bar__inner -->
            <div id="header-search-dropdown" class="header-search-dropdown ajax-search is-in-navbar js-ajax-search">
                <div class="container container--narrow">
                    <form class="search-form search-form--horizontal" method="get"
                        action="{{ route('post-catalogue') }}">
                        <div class="search-form__input-wrap">
                            <input type="text" name="keyword" class="search-form__input"
                                placeholder="Nhập vào bài viết muốn tìm kiếm">
                        </div>
                        <div class="search-form__submit-wrap">
                            <button type="submit" class="search-form__submit btn btn-primary">Tìm kiếm</button>
                        </div>
                    </form>
                    <div class="search-results">
                        <div class="typing-loader"></div>
                        <div class="search-results__inner"></div>
                    </div>
                </div>
            </div><!-- .header-search-dropdown -->
        </div><!-- .container -->
    </nav><!-- Navigation-bar -->
</header><!-- Site header -->

<div id="mnmd-sticky-header" class="sticky-header js-sticky-header">
    <!-- Navigation bar -->
    <nav class="navigation-bar navigation-bar--inverse navigation-bar--fullwidth hidden-xs hidden-sm">
        <div class="navigation-bar__inner">
            <div class="navigation-bar__section">
                {{-- <a href="#mnmd-offcanvas-primary"
                    class="offcanvas-menu-toggle navigation-bar-btn js-mnmd-offcanvas-toggle">
                    <i class="mdicon mdicon-menu icon--2x"></i>
                </a> --}}
                <div class="site-logo header-logo"><a href="home-1.html"><img
                            src="{{ $systemSetting['homepage_logo'] }}" alt="logo"></a></div>
            </div>
            <div class="navigation-wrapper navigation-bar__section js-priority-nav">
                <ul id="menu-main-menu" class="navigation navigation--main navigation--inline">
                    <li class="menu-item-cat-3">
                        <a href="{{ route('home') }}">Trang chủ</a>
                    </li>

                    @if (count($mainMenus) > 0)
                    @foreach ($mainMenus as $mainMenu)
                    @if (isset($mainMenu['children']) && count($mainMenu['children']) > 0)
                    <li class="menu-item-has-children">
                        <a href="{{ route('post-catalogue', ['id'=> $mainMenu['id']]) }}">{{ $mainMenu['name']
                            }}</a>
                        <div class="mnmd-mega-menu">
                            <div class="mnmd-mega-menu__inner">
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="{{ route('post-catalogue', ['id'=> $mainMenu['id']]) }}">{{
                                            $mainMenu['name'] }}</a>
                                        <ul class="sub-menu">
                                            @foreach ($mainMenu['children'] as $child)
                                            <li>
                                                <a href="{{ route('post-catalogue', ['id'=> $child['id']]) }}">{{
                                                    $child['name'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </li>
                    @else
                    <li class="menu-item-cat-3">
                        <a href="{{ route('post-catalogue', ['id'=> $child['id']]) }}">{{ $mainMenu['name'] }}</a>
                    </li>
                    @endif
                    @endforeach
                    @endif


                </ul>
            </div>
            <div class="navigation-bar__section"><a href="#login-modal"
                    class="navigation-bar__login-btn navigation-bar-btn" data-toggle="modal"
                    data-target="#login-modal"><i class="mdicon mdicon-person"></i></a> <button type="submit"
                    class="navigation-bar-btn js-search-dropdown-toggle"><i class="mdicon mdicon-search"></i></button>
            </div>
        </div><!-- .navigation-bar__inner -->
    </nav><!-- Navigation-bar -->
</div><!-- Sticky header -->