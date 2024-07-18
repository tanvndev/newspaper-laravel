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
    @if (!empty($postCatalogues))
    @foreach ($postCatalogues as $postCatalogue)
    <div class="mnmd-block mnmd-block--fullwidth">
        <div class="container">
            <div class="block-heading block-heading--lg ">
                <h4 class="block-heading__title">{{ $postCatalogue['name'] }}</h4>
                <nav class="mnmd-pagination text-center mt-0">
                    <a href="{{ route('post-catalogue', $postCatalogue['id']) }}" class="btn btn-default">
                        Xem thêm <strong>{{ $postCatalogue['name'] }}</strong>
                        <i class="mdicon mdicon-arrow_forward mdicon--last"></i>
                    </a>
                </nav>
            </div>
            @if (!empty($postCatalogue['posts']))
            <div class="row row--space-between">
                @foreach ($postCatalogue['posts'] as $post)
                <div class="col-xs-12 col-sm-6 col-md-3">
                    <article class="post post--card post--card-sm cat-2 text-center shadow-hover-4">
                        <div class="post__thumb">
                            <a href="{{ route('post-detail', $post['post_id']) }}">
                                <div class="background-img" style="background-image: url('{{ $post['image'] }}')">
                                </div>
                            </a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1">
                                <a href="{{ route('post-detail', $post['post_id']) }}">{{ $post['post_name']}}</a>
                            </h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta">
                                <time class="time published">
                                    <i class="mdicon mdicon-schedule"></i>
                                    {{convertDatetime($post['created_at'], 'd/m/Y') }}
                                </time>
                                <a href="{{ route('post-detail', $post['post_id']) }}"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>0</a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div><!-- .row -->
            @endif

        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    @endforeach
    @endif
    @if (!empty($postCatalogues))
    @foreach ($postCatalogues as $postCatalogue)

    <div class="mnmd-block mnmd-block--fullwidth mnmd-carousel">
        <div class="container">
            <div class="block-heading block-heading--center block-heading--lg">
                <h4 class="block-heading__title">{{ $postCatalogue['name'] }}</h4>
            </div>
            @if (!empty($postCatalogue['posts']))
            <div class="mnmd-carousel__inner owl-carousel js-carousel-4i20m">
                @foreach ($postCatalogue['posts'] as $post)

                <div class="slide-content">
                    <article class="post post--card post--card-sm cat-1 text-center shadow-hover-4">
                        <div class="post__thumb"><a href="#single-url">
                                <div class="background-img" style="background-image: url('{{ $post['image'] }}')">
                                </div>
                            </a><a href="{{ route('post-detail', $post['post_id']) }}"
                                class="post__cat post__cat--bg post__cat--overlap cat-theme-bg">News</a>
                        </div>
                        <div class="post__text">
                            <h3 class="post__title typescale-1">
                                <a href="{{ route('post-detail', $post['post_id']) }}">{{ $post['post_name']}}</a>
                            </h3>
                        </div>
                        <div class="post__footer">
                            <div class="post__meta">
                                <time class="time published">
                                    <i class="mdicon mdicon-schedule"></i>
                                    {{convertDatetime($post['created_at'], 'd/m/Y') }}
                                </time>
                                <a href="{{ route('post-detail', $post['post_id']) }}"><i
                                        class="mdicon mdicon-chat_bubble_outline"></i>0</a>
                            </div>
                        </div>
                    </article>
                </div>

                @endforeach
            </div>
            @endif
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
    @endforeach
    @endif


</div>
@endsection