@extend('_layout')


@block('content')

<section id="blog-wrapper" class="section-padding">
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="center-heading text-center">
                    <h2>@( $article.title )</h2>
                    <span class="icon"><i class="fa fa-quote-left"></i></span>
                </div><!--center heading-->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="blog-post-wrap">
                    <div class="row">
                        <div class="col-sm-2 margin-btm-30 hidden-xs">
                            <div class="post-date   text-right">
                                <h2>@($article.createDate.format('d'))</h2>
                                <span>@($article.createDate.format('M Y'))</span>
                            </div>
                            <div class="post-left-info">
                                <p><i class="fa fa-user"></i> <a href="#">@($article.author)</a></p>
                                <p><i class="fa fa-tag"></i> <a href="#">@( $article.category )</a></p>
                                <p><i class="fa fa-comment"></i> <a href="#">3 Comments</a></p>
                            </div>
                        </div>

                        <div class="col-sm-10">
                            <div class="blog-post-info">
                                <img src="@( $article->getThumbnail(600,200) )" class="img-responsive" alt="">
                                <!--<h3>@( $article.title )</h3>-->
                                <ul class="list-inline xs-post-info visible-xs">
                                    <p><i class="fa fa-user"></i> <a href="#">@($article.author)</a></p>
                                    <p><i class="fa fa-tag"></i> <a href="#">@( $article.category )</a></p>
                                    <p><i class="fa fa-comment"></i> <a href="#">3 Comments</a></p>
                                </ul>

                                <br />
                                <div class="text-justify">

                                    @raw( $article.content )

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
        </div>
    </div>
</section><!--blog wrapper-->



@endblock

