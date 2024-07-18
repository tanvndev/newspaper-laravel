@extends('layouts.clientLayout')
@section('content')
<div class="site-content single-entry single-entry--template-2">
    <div class="mnmd-block mnmd-block--fullwidth single-entry-wrap">
        <div class="container">
            <div class="row">
                <div class="mnmd-main-col" role="main">
                    <article
                        class="mnmd-block post post--single post-10 type-post status-publish format-standard has-post-thumbnail hentry category-abroad tag-landscape cat-5"
                        itemscope itemtype="http://schema.org/Article">
                        <div class="single-content">
                            <div class="entry-thumb single-entry-thumb"><img src="{{ $post->image }}">
                            </div>
                            <header class="single-header"><a href="#" class="entry-cat cat-theme cat-5">{{
                                    $post->post_catalogue_name }}</a>
                                <h1 class="entry-title">{{ $post->name }}</h1>
                                <div class="entry-teaser">{!! $post->description !!}</div>
                                <div class="entry-meta">
                                    <span class="entry-author entry-author--with-ava">
                                        <img alt="Ryan Reynold" src="/assets/clients/img/users/avatar-1.jpg"
                                            class="entry-author__avatar" height="34" width="34">By
                                        <a href="#" class="entry-author__name" title="Posts by Ryan Reynold"
                                            rel="author">{{ $post->users->fullname }}</a>
                                    </span>
                                    <time class="entry-date published">
                                        <i class="mdicon mdicon-schedule"></i>
                                        {{ convertDatetime($post->created_at) }}
                                    </time>
                                    <time class="updated">
                                        {{ convertDatetime($post->created_at) }}
                                    </time>
                                </div>
                            </header>
                            <div class="entry-interaction entry-interaction--horizontal">
                                <div class="entry-interaction__left">
                                    <div class="post-sharing post-sharing--simple">
                                        <ul>
                                            <li><a href="#"
                                                    class="sharing-btn sharing-btn-primary facebook-btn facebook-theme-bg"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Share on Facebook"><i
                                                        class="mdicon mdicon-facebook"></i><span
                                                        class="sharing-btn__text">Share</span></a></li>


                                            <li><a href="#"
                                                    class="sharing-btn sharing-btn-primary twitter-btn twitter-theme-bg"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Share on Twitter"><i class="mdicon mdicon-twitter"></i><span
                                                        class="sharing-btn__text">Tweet</span></a></li>


                                            <li><a href="#" class="sharing-btn pinterest-btn pinterest-theme-bg"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Share on Pinterest"><i
                                                        class="mdicon mdicon-pinterest-p"></i></a></li>


                                            <li><a href="#" class="sharing-btn googleplus-btn googleplus-theme-bg"
                                                    data-toggle="tooltip" data-placement="top"
                                                    title="Share on Google+"><i
                                                        class="mdicon mdicon-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="entry-interaction__right">
                                    <a href="#comment" class="comments-count entry-action-btn" data-toggle="tooltip"
                                        data-placement="top" title="0 comments"><i
                                            class="mdicon mdicon-chat_bubble"></i>
                                        <span>0</span>
                                    </a>
                                </div>
                            </div>
                            <div class="single-body entry-content typography-copy" itemprop="articleBody">
                                {!! $post->content !!}
                            </div>
                            <footer class="single-footer entry-footer">
                                <div class="entry-info">
                                    <div class="row row--space-between grid-gutter-10">
                                        <div class="entry-categories col-sm-6">
                                            <ul>
                                                <li class="entry-categories__icon"><i
                                                        class="mdicon mdicon-folder"></i><span class="sr-only">Posted
                                                        in</span></li>


                                                <li><a href="#" class="entry-cat cat-theme cat-2">Tech</a></li>


                                                <li><a href="#" class="entry-cat cat-theme cat-3">Smartphone</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="entry-tags col-sm-6">
                                            <ul>
                                                <li class="entry-tags__icon"><i
                                                        class="mdicon mdicon-local_offer"></i><span
                                                        class="sr-only">Tagged with</span></li>


                                                <li><a href="#" class="post-tag" rel="tag">Technology</a></li>


                                                <li><a href="#" class="post-tag" rel="tag">Space</a></li>


                                                <li><a href="#" class="post-tag" rel="tag">Apps</a></li>


                                                <li><a href="#" class="post-tag" rel="tag">Future</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-interaction entry-interaction--horizontal">
                                    <div class="entry-interaction__left">
                                        <div class="post-sharing post-sharing--simple">
                                            <ul>
                                                <li><a href="#"
                                                        class="sharing-btn sharing-btn-primary facebook-btn facebook-theme-bg"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Share on Facebook"><i
                                                            class="mdicon mdicon-facebook"></i><span
                                                            class="sharing-btn__text">Share</span></a></li>


                                                <li><a href="#"
                                                        class="sharing-btn sharing-btn-primary twitter-btn twitter-theme-bg"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Share on Twitter"><i
                                                            class="mdicon mdicon-twitter"></i><span
                                                            class="sharing-btn__text">Tweet</span></a></li>


                                                <li><a href="#" class="sharing-btn pinterest-btn pinterest-theme-bg"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Share on Pinterest"><i
                                                            class="mdicon mdicon-pinterest-p"></i></a></li>


                                                <li><a href="#" class="sharing-btn googleplus-btn googleplus-theme-bg"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="Share on Google+"><i
                                                            class="mdicon mdicon-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="entry-interaction__right"><a href="#comment"
                                            class="comments-count entry-action-btn" data-toggle="tooltip"
                                            data-placement="top" title="17 comments"><i
                                                class="mdicon mdicon-chat_bubble"></i><span>17</span></a></div>
                                </div>
                            </footer>
                        </div><!-- .single-content -->
                    </article><!-- .post--single -->
                    <div class="author-box single-entry-section">
                        <div class="author-box__image">
                            <div class="author-avatar"><img alt="Ryan Reynold"
                                    src="/assets/clients/img/users/avatar-1.jpg" class="avatar photo" height="80"
                                    width="80"></div>
                        </div>
                        <div class="author-box__text">
                            <div class="author-name meta-font"><a href="#author-url" title="Posts by Ryan Reynold"
                                    rel="author">Ryan Reynold</a></div>
                            <div class="author-bio">Ryan Reynold is a writer based in New York. When he's not
                                writing about apps, marketing, or tech, you can probably catch him eating ice
                                cream.</div>
                            <div class="author-info">
                                <div class="row row--space-between row--flex row--vertical-center grid-gutter-20">
                                    <div class="author-socials col-xs-12 col-sm-6">
                                        <ul class="list-unstyled list-horizontal list-space-sm">
                                            <li><a href="#"><i class="mdicon mdicon-mail_outline"></i><span
                                                        class="sr-only">e-mail</span></a></li>
                                            <li><a href="#"><i class="mdicon mdicon-twitter"></i><span
                                                        class="sr-only">Twitter</span></a></li>
                                            <li><a href="#"><i class="mdicon mdicon-facebook"></i><span
                                                        class="sr-only">Facebook</span></a></li>
                                            <li><a href="#"><i class="mdicon mdicon-google-plus"></i><span
                                                        class="sr-only">Google+</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Posts navigation -->
                    <div class="posts-navigation single-entry-section clearfix">
                        <div class="posts-navigation__prev">
                            <article class="post--overlay post--overlay-bottom post--overlay-floorfade">
                                <div class="background-img" style="background-image: url('img/demo/life-3-16_9.jpg')">
                                </div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-1">Forces of Nature gather in a new
                                                fashion exhibition at FIT</h3>
                                        </div>
                                    </div>
                                </div><a href="#single-url" class="link-overlay"></a>
                            </article><a class="posts-navigation__label" href="#single-url"><span><i
                                        class="mdicon mdicon-arrow_back"></i>Previous article</span></a>
                        </div>
                        <div class="posts-navigation__next">
                            <article class="post--overlay post--overlay-bottom post--overlay-floorfade">
                                <div class="background-img" style="background-image: url('img/demo/life-2-16_9.jpg')">
                                </div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-1">Five bands to see at Pitchfork
                                                Music Festival 2017</h3>
                                        </div>
                                    </div>
                                </div><a href="#single-url" class="link-overlay"></a>
                            </article><a class="posts-navigation__label" href="#single-url"><span>Next article<i
                                        class="mdicon mdicon-arrow_forward"></i></span></a>
                        </div>
                    </div><!-- Posts navigation -->
                    <!-- Related posts -->
                    <div class="related-posts single-entry-section">
                        <div class="block-heading block-heading--line">
                            <h4 class="block-heading__title">You may also like</h4>
                        </div>
                        <div class="row row--space-between">
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/news-2-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">Asian Tourism in the Age
                                                of Globalization</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/news-3-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">Who’s afraid of Trump?
                                                Not enough Republicans — at least for now</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/news-4-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">United bumpings fall 79
                                                percent following passenger-dragging incident</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                        </div><!-- .row -->
                        <div class="row row--space-between">
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/travel-1-16_9.jpg"></a>
                                    </div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">Everett man goes to
                                                Arctic to photograph polar bears up close</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/travel-2-16_9.jpg"></a>
                                    </div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">Beginner's guide to New
                                                York City: 5 insiders share tips</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <article class="post--vertical cat-4">
                                    <div class="post__thumb"><a href="#"><img
                                                src="/assets/clients/img/demo/travel-3-16_9.jpg"></a>
                                    </div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-1"><a href="#">15 Caribbean vacations
                                                that are worth the price</a></h3>
                                        <div class="post__meta"><time class="time published"
                                                datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time></div>
                                    </div>
                                </article>
                            </div>
                        </div><!-- .row -->
                    </div><!-- Related posts -->
                    <!-- Comments section -->
                    <div class="comments-section single-entry-section">
                        <div id="comments" class="comments-area">
                            <h2 class="comments-title">5 Comments</h2>
                            <ol class="comment-list">
                                <li id="comment-4" class="comment even thread-even depth-1 parent">
                                    <article id="div-comment-4" class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard"><img
                                                    src="/assets/clients/img/users/avatar-2.jpg" class="avatar photo"><b
                                                    class="fn">Diane Gregory</b><span class="says">says:</span></div>
                                            <!-- .comment-author -->
                                            <div class="comment-metadata"><a href="#"><time
                                                        datetime="2016-10-21T13:31:45+00:00">October 21, 2016 at
                                                        1:31 pm</time></a></div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>There's good news, and there's bad news. The bad news is, it's
                                                not the drug. You're here, in the astral plane. You went too far
                                                in the make believe and got lost in your mind, consciousness,
                                                and now you're trapped in this, no place. Where every day is the
                                                same, where you can imagine yourself a kingdom. but nothing is
                                                ever real.</p>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                                                aria-label="Reply to Sculpture Fan">Reply</a></div>
                                    </article><!-- .comment-body -->
                                    <ol class="children">
                                        <li id="comment-5"
                                            class="comment byuser comment-author-melchoyce bypostauthor odd alt depth-2 parent">
                                            <article id="div-comment-5" class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard"><img
                                                            src="/assets/clients/img/users/avatar-1.jpg"
                                                            class="avatar photo"><a href="#" rel="external nofollow"
                                                            class="url">Ryan
                                                            Reynold</a><span class="says">says:</span></div>
                                                    <!-- .comment-author -->
                                                    <div class="comment-metadata"><a href="#"><time
                                                                datetime="2016-10-21T13:31:45+00:00">October 21,
                                                                2016 at 1:31 pm</time> </a><span class="edit-link"><a
                                                                class="comment-edit-link" href="#">Edit</a></span></div>
                                                    <!-- .comment-metadata -->
                                                </footer><!-- .comment-meta -->
                                                <div class="comment-content">
                                                    <p>And what's the good news?</p>
                                                </div><!-- .comment-content -->
                                                <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                                                        aria-label="Reply to Sculpture Fan">Reply</a>
                                                </div>
                                            </article><!-- .comment-body -->
                                            <ol class="children">
                                                <li id="comment-6" class="comment even depth-3">
                                                    <article id="div-comment-6" class="comment-body">
                                                        <footer class="comment-meta">
                                                            <div class="comment-author vcard"><img
                                                                    src="/assets/clients/img/users/avatar-2.jpg"
                                                                    class="avatar photo"><b class="fn">Diane
                                                                    Gregory</b><span class="says">says:</span>
                                                            </div><!-- .comment-author -->
                                                            <div class="comment-metadata"><a href="#"><time
                                                                        datetime="2016-10-21T13:31:45+00:00">October
                                                                        21, 2016 at 1:31 pm</time></a></div>
                                                            <!-- .comment-metadata -->
                                                        </footer><!-- .comment-meta -->
                                                        <div class="comment-content">
                                                            <p>I'm not alone anymore.</p>
                                                        </div><!-- .comment-content -->
                                                        <div class="reply"><a rel="nofollow" class="comment-reply-link"
                                                                href="#" aria-label="Reply to Sculpture Fan">Reply</a>
                                                        </div>
                                                    </article><!-- .comment-body -->
                                                </li><!-- #comment-## -->
                                            </ol><!-- .children -->
                                        </li><!-- #comment-## -->
                                    </ol><!-- .children -->
                                </li><!-- #comment-## -->
                                <li id="comment-7"
                                    class="comment byuser bypostauthor odd alt thread-odd thread-alt depth-1">
                                    <article id="div-comment-7" class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard"><img
                                                    src="/assets/clients/img/users/avatar-1.jpg" class="avatar photo"><b
                                                    class="fn">Ryan Reynold</b><span class="says">says:</span></div>
                                            <!-- .comment-author -->
                                            <div class="comment-metadata"><a href="#"><time
                                                        datetime="2016-10-21T13:31:45+00:00">October 21, 2016 at
                                                        1:31 pm</time></a></div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>It's just Thursday. Like the 260th Thursday as a passenger on the
                                                cruise ship "Mental Health." On the plus side I've mastered
                                                eating with a spoon.</p>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                                                aria-label="Reply to Sculpture Fan">Reply</a></div>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                                <li id="comment-8" class="comment byuser odd alt thread-odd thread-alt depth-1">
                                    <article id="div-comment-8" class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard"><img
                                                    src="/assets/clients/img/users/avatar-2.jpg" class="avatar photo"><b
                                                    class="fn">Diane Gregory</b><span class="says">says:</span></div>
                                            <!-- .comment-author -->
                                            <div class="comment-metadata"><a href="#"><time
                                                        datetime="2016-10-21T13:31:45+00:00">October 21, 2016 at
                                                        1:31 pm</time></a></div><!-- .comment-metadata -->
                                        </footer><!-- .comment-meta -->
                                        <div class="comment-content">
                                            <p>I know, I don't have to be afraid. But I am because look at you.
                                                All of you. You're gods, and someday you are going to wake up
                                                and realize you don't have to listen to us anymore.</p>
                                        </div><!-- .comment-content -->
                                        <div class="reply"><a rel="nofollow" class="comment-reply-link" href="#"
                                                aria-label="Reply to Sculpture Fan">Reply</a></div>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                            </ol>
                            <div id="respond" class="comment-respond">
                                <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow"
                                            id="cancel-comment-reply-link" href="#" style="display: none">Cancel
                                            reply</a></small></h3>
                                <form action="#" method="post" id="commentform" class="comment-form" novalidate>
                                    <p class="comment-notes"><span id="email-notes">Your email address will not
                                            be published.</span> Required fields are marked <span
                                            class="required">*</span></p>
                                    <p class="comment-form-comment"><label for="comment">Comment</label><textarea
                                            id="comment" name="comment" cols="45" rows="8" maxlength="65525"
                                            aria-required="true" required="required"></textarea></p>
                                    <p class="comment-form-author"><label for="author">Name <span
                                                class="required">*</span></label><input id="author" name="author"
                                            type="text" value="" size="30" maxlength="245" aria-required="true"
                                            required="required"></p>
                                    <p class="comment-form-email"><label for="email">Email <span
                                                class="required">*</span></label><input id="email" name="email"
                                            type="email" value="" size="30" maxlength="100"
                                            aria-describedby="email-notes" aria-required="true" required="required"></p>
                                    <p class="comment-form-url"><label for="url">Website</label><input id="url"
                                            name="url" type="url" value="" size="30" maxlength="200"></p>
                                    <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                            value="Post Comment"> <input type="hidden" name="comment_post_ID" value="44"
                                            id="comment_post_ID"> <input type="hidden" name="comment_parent"
                                            id="comment_parent" value="0">
                                    </p>
                                </form>
                            </div><!-- #respond -->
                        </div><!-- #comments -->
                    </div><!-- Comments section -->
                    <!-- Same category posts -->
                    <div class="same-category-posts single-entry-section">
                        <div class="block-heading block-heading--line">
                            <h4 class="block-heading__title">More in <a href="#" class="cat-4 cat-theme">Tech</a></h4>
                        </div>
                        <ul class="list-space-lg list-unstyled">
                            <li>
                                <article class="post post--horizontal post--horizontal-sm cat-1">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/tech-1-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-2"><a href="#single-url">New spacesuit
                                                system could repel destructive moon dust</a></h3>
                                        <div class="post__meta"><span class="entry-author">By <a href="#"
                                                    class="entry-author__name">Ryan Reynold</a></span> <time
                                                class="time published" datetime="2016-08-20T08:53+00:00"
                                                title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time> <a href="#"
                                                title="21 comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>21</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-sm cat-1">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/tech-2-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-2"><a href="#single-url">Apple releases
                                                public beta of iOS 11: Here's what you need to know</a></h3>
                                        <div class="post__meta"><span class="entry-author">By <a href="#"
                                                    class="entry-author__name">Ryan Reynold</a></span> <time
                                                class="time published" datetime="2016-08-20T08:53+00:00"
                                                title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time> <a href="#"
                                                title="21 comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>21</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-sm cat-1">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/tech-4-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-2"><a href="#single-url">watchOS 4
                                                brings more intelligence and fitness features to Apple Watch</a>
                                        </h3>
                                        <div class="post__meta"><span class="entry-author">By <a href="#"
                                                    class="entry-author__name">Ryan Reynold</a></span> <time
                                                class="time published" datetime="2016-08-20T08:53+00:00"
                                                title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time> <a href="#"
                                                title="21 comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>21</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-sm cat-1">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/tech-5-16_9.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-2"><a href="#single-url">GoPro Karma
                                                review: What I learned from crashing a drone</a></h3>
                                        <div class="post__meta"><span class="entry-author">By <a href="#"
                                                    class="entry-author__name">Ryan Reynold</a></span> <time
                                                class="time published" datetime="2016-08-20T08:53+00:00"
                                                title="August 20, 2016 at 08:53 am"><i
                                                    class="mdicon mdicon-schedule"></i>2 hours ago</time> <a href="#"
                                                title="21 comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>21</a></div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                        <nav class="mnmd-pagination text-center"><a href="#" class="btn btn-default">View all
                                Tech<i class="mdicon mdicon-arrow_forward mdicon--last"></i></a></nav>
                    </div><!-- Same category posts -->
                </div><!-- .mnmd-main-col -->
                <div class="mnmd-sub-col mnmd-sub-col--right sidebar js-sticky-sidebar" role="complementary">
                    <!-- Widget posts list -->
                    <div class="mnmd-widget-posts-list mnmd-widget widget">
                        <div class="widget__title">
                            <h4 class="widget__title-text">Bài viết mới nhất</h4>
                        </div>
                        <ul class="posts-list list-space-sm list-unstyled">
                            <li>
                                <article class="post post--horizontal post--horizontal-xxs cat-4">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/news-1-1_1.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-0"><a href="#"></a></h3>
                                        <div class="post__meta"><a href="#" class="post__comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>108
                                                comments</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-xxs cat-4">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/news-2-1_1.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-0"><a href="#">Asian Tourism in the Age
                                                of Globalization</a></h3>
                                        <div class="post__meta"><a href="#" class="post__comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>68
                                                comments</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-xxs cat-4">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/news-3-1_1.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-0"><a href="#">Who’s afraid of Trump?
                                                Not enough Republicans — at least for now</a></h3>
                                        <div class="post__meta"><a href="#" class="post__comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>34
                                                comments</a></div>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <article class="post post--horizontal post--horizontal-xxs cat-4">
                                    <div class="post__thumb"><a href="#single-url"><img
                                                src="/assets/clients/img/demo/news-4-1_1.jpg"></a></div>
                                    <div class="post__text">
                                        <h3 class="post__title typescale-0"><a href="#">United bumpings fall 79
                                                percent following passenger-dragging incident</a></h3>
                                        <div class="post__meta"><a href="#" class="post__comments"><i
                                                    class="mdicon mdicon-chat_bubble_outline"></i>12
                                                comments</a></div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div><!-- Widget posts list -->
                </div><!-- .mnmd-sub-col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .mnmd-block -->
</div>
@endsection