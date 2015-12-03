@extend('_layout')


@block('content')

<div class="divided-50"></div>
<section id="blog-wrapper" class="section-padding">
    <div class="container">
        <div class="row">

            <div class="col-sm-9">

                @foreach ($posts as $post)

                <div class="blog-post-wrap">
                    <div class="row">
                        <div class="col-sm-2 margin-btm-30 hidden-xs">
                            <div class="post-date   text-right">
                                <h2>@($post.createDate.format('d'))</h2>
                                <span>@($post.createDate.format('M Y'))</span>
                            </div>
                            <div class="post-left-info">
                                <p><i class="fa fa-user"></i> <a href="#">@($post.author)</a></p>
                                <p><i class="fa fa-tag"></i> <a href="#">@( $post.category )</a></p>
                                <p><i class="fa fa-comment"></i> <a href="#">3 Comments</a></p>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="blog-post-info">
                                <a href="@( $post.url() )">
                                    <img src="@( $post->getThumbnail(600,200) )" class="img-responsive" alt="">
                                </a>
                                <h3><a href="@( $post.url() )">@( $post.title )</a></h3>
                                <ul class="list-inline xs-post-info visible-xs">
                                    <p><i class="fa fa-user"></i> <a href="#">@($post.author)</a></p>
                                    <p><i class="fa fa-tag"></i> <a href="#">@( $post.category )</a></p>
                                    <p><i class="fa fa-comment"></i> <a href="#">3 Comments</a></p>
                                </ul>
                                <p>

                                    @( $post.metaContent )

                                </p>
                                <p class="text-right">
                                    <a href="@( $post.url() )" class="btn btn-dark btn-sm">
                                        Read more
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--blog post wrap-->


                @endforeach



                <ul class="pager">
                    <li><a href="#">Previous Page</a></li>
                    <li><a href="#">Next Page</a></li>
                </ul>
            </div><!--blog-post col-->

            <div class="col-sm-3">
                <div class="post-sidebar-box">
                    <form role="form" action="blog/search/" method="get" >
                        <input type="text" class="form-control" name="q" placeholder="type and hit enter for search">
                        <button  class="btn btn-dark btn-sm margin-5-0">
                            Search
                        </button>
                    </form>
                </div><!--sidebar box-->
                <div class="post-sidebar-box">
                    <h4>Welcome to my Blog</h4>
                    <p>
                        Thank you for visiting my blog. You can comment on each blogs and let me know things where I can improve.
                    </p>
                </div>

                <div class="sidebar-box margin40">
                    <h4>Categories</h4>
                    <ul class="list-unstyled cat-list">
                        <li> <a href="#">Marketing</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">Sports</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">Fashion</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">Media</a> <i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <br />
                <div class="sidebar-box margin40">
                    <h4>Archives</h4>
                    <ul class="list-unstyled cat-list">
                        <li> <a href="#">October 2014</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">November 2014</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">December 2014</a> <i class="fa fa-angle-right"></i></li>
                        <li> <a href="#">January 2014</a> <i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
            </div><!--blog sidebar col-->
        </div>
    </div>
</section><!--blog wrapper-->



@endblock


