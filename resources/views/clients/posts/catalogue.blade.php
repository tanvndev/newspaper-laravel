@extends('layouts.clientLayout')
@section('content')
<div class="site-content">
    <div class="mnmd-block mnmd-block--fullwidth mnmd-block--contiguous page-heading page-heading--has-background">
        <div class="container">
            <h2 class="page-heading__title">Danh mục: {{ $config['seo']['title'] ?? '' }}</h2>
            <div class="page-heading__subtitle">Danh mục lưu trữ tất cả các tin liên quan đến {{ $config['seo']['title']
                ?? '' }}</div>
        </div>
    </div>
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="row">
                <div class="mnmd-main-col" role="main">
                    <div class="mnmd-block">
                        <div class="posts-listing list-unstyled list-space-lg">
                            @if (!empty($posts) && count($posts) > 0)
                            @foreach ($posts as $post)
                            <div class="list-item">
                                <article class="post post--horizontal post--horizontal-sm cat-4">
                                    <div class="post__thumb">
                                        <a href="{{ route('post-detail', ['id'=>$post->id]) }}"
                                            title="{{ $post->name }}">
                                            <img src="{{ $post->image }}">
                                        </a>
                                    </div>
                                    <div class="post__text"><a
                                            href="{{ route('post-catalogue', $post->post_catalogue_id) }}"
                                            class="post__cat cat-theme">{{
                                            $post->post_catalogue_name }}</a>
                                        <h3 class="post__title typescale-2">
                                            <a href="{{ route('post-detail', ['id'=>$post->id]) }}">{{ $post->name
                                                }}</a>
                                        </h3>
                                        <div class="post__excerpt">
                                            {!! $post->description !!}
                                        </div>
                                        <div class="post__meta">
                                            <span class="entry-author">Tạo bởi
                                                <a href="#" class="entry-author__name">
                                                    {{ $post->users->fullname }}
                                                </a>
                                            </span>
                                            <time class="time published">
                                                <i class="mdicon mdicon-schedule"></i>{{
                                                convertDateTime($post->created_at) }}
                                            </time>
                                            <a href="#" title="21 comments">
                                                <i class="mdicon mdicon-chat_bubble_outline"></i>
                                                0
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                            @else
                            <img src="https://cdn.dribbble.com/users/2382015/screenshots/6065978/no_result.gif"
                                alt="not-content">
                            @endif
                        </div>
                        <nav class="mnmd-pagination text-center">
                            <h4 class="mnmd-pagination__title sr-only">Posts navigation</h4>
                            {{ $posts->links('pagination::bootstrap-4') }}
                        </nav>

                    </div><!-- .mnmd-block -->
                </div><!-- .mnmd-main-col -->
                <div class="mnmd-sub-col mnmd-sub-col--right sidebar js-sticky-sidebar" role="complementary">
                    <div class="mnmd-widget widget widget-subscribe widget-subscribe--stack-bottom">
                        <div class="widget-subscribe__inner">
                            <div class="subscribe-form subscribe-form--center">
                                <p><b class="typescale-3">Đừng bỏ lỡ những tin mới!</b></p>
                                <p>Nhập email của bạn để nhận được tổng hợp hàng ngày của hầu hết các bài gửi</p>
                                <div class="subscribe-form__fields">
                                    <p><label>Địa chỉ Email:</label><input type="email" name="EMAIL"
                                            placeholder="Địa chỉ email của bạn" required=""></p>
                                    <p><input type="submit" value="Subscribe" class="btn-block"></p>
                                </div>
                                <small>Đừng lo lắng, chúng tôi không spam</small>
                            </div>
                        </div>
                    </div><!-- .widget -->
                    <div class="mnmd-widget-social-counter-counter mnmd-widget widget">
                        <div class="mnmd-widget-social-counter__inner">
                            <ul class="list-unstyled list-space-xs">
                                <li><a href="#" class="social-tile social-facebook facebook-theme-bg">
                                        <div class="social-tile__icon"><i class="mdicon mdicon-facebook"></i>
                                        </div>
                                        <div class="social-tile__inner flexbox">
                                            <div class="social-tile__left flexbox__item">
                                                <h5 class="social-tile__title meta-font">Facebook</h5><span
                                                    class="social-tile__count">2.7k thích</span>
                                            </div>
                                            <div class="social-tile__right"><i class="mdicon mdicon-arrow_forward"></i>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="social-tile social-twitter twitter-theme-bg">
                                        <div class="social-tile__icon"><i class="mdicon mdicon-twitter"></i>
                                        </div>
                                        <div class="social-tile__inner flexbox">
                                            <div class="social-tile__left flexbox__item">
                                                <h5 class="social-tile__title meta-font">Twitter</h5><span
                                                    class="social-tile__count">1.2k người theo dõi</span>
                                            </div>
                                            <div class="social-tile__right"><i class="mdicon mdicon-arrow_forward"></i>
                                            </div>
                                        </div>
                                    </a></li>
                                <li><a href="#" class="social-tile social-youtube youtube-theme-bg">
                                        <div class="social-tile__icon"><i class="mdicon mdicon-youtube"></i>
                                        </div>
                                        <div class="social-tile__inner flexbox">
                                            <div class="social-tile__left flexbox__item">
                                                <h5 class="social-tile__title meta-font">Youtube</h5><span
                                                    class="social-tile__count">480k người đăng ký</span>
                                            </div>
                                            <div class="social-tile__right"><i class="mdicon mdicon-arrow_forward"></i>
                                            </div>
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div><!-- .widget -->
                </div><!-- .mnmd-sub-col -->
            </div><!-- .row -->
            <div class="row">
            </div>
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
</div>
@endsection