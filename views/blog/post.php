@extend('_layout')


@block('content')


<section id="blog-wrapper" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-heading text-center">
                    <h2>@( $post.title )</h2>
                    <span class="icon"><i class="fa fa-quote-left"></i></span>
                </div><!--center heading-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-9">
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
                                <img src="@( $post->getThumbnail(600,200) )" class="img-responsive" alt="">
                                <!--<h3>@( $post.title )</h3>-->
                                <ul class="list-inline xs-post-info visible-xs">
                                    <p><i class="fa fa-user"></i> <a href="#">@($post.author)</a></p>
                                    <p><i class="fa fa-tag"></i> <a href="#">@( $post.category )</a></p>
                                    <p><i class="fa fa-comment"></i> <a href="#">3 Comments</a></p>
                                </ul>

                                <br />
                                <div class="text-justify">

                                    @raw( $post.content )

                                </div>

                            </div>
                        </div>
                    </div>
                </div><!--blog post wrap-->
                <div class="post-cmnt-wrap">
                    <h4>3 Comments</h4>
                    <div class="comment-list">
                        <h4><img src="img/team-1.jpg" class="img-responsive" alt="">
                            by User on 27 Aug <a href="#">Reply</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                        </p>
                    </div><!--comment-list-->
                    <div class="comment-list">
                        <h4><img src="img/team-5.jpg" class="img-responsive" alt="">
                            by User on 27 Aug <a href="#">Reply</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                        </p>
                    </div><!--comment-list-->
                    <div class="comment-list">
                        <h4><img src="img/team-3.jpg" class="img-responsive" alt="">
                            by User on 27 Aug <a href="#">Reply</a>
                        </h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie
                        </p>
                    </div><!--comment-list-->
                </div><!--post comment wrap end-->

                <div class="comment-form margin-btm-30">
                    <h4>Leave a Comment</h4>
                    <form role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control comment-textarea" rows="5" placeholder="Enter your comment here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark btn-sm comment-send-btn">Submit</button>
                    </form>
                </div>
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
                    <h4>Text</h4>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
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
            </div><!--blog sidebar col-->
        </div>
    </div>
</section><!--blog wrapper-->



@endblock

