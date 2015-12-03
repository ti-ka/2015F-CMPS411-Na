<section id="blog" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-heading text-center">
                    <h2 class=" wow animated bounceIn"  data-wow-duration="700ms" data-wow-delay="100ms">Latest blogs ans news</h2>
                    <span class="icon"><i class="fa fa-calendar"></i></span>
                </div><!--center heading-->
            </div>
        </div><!--center heading-->


        <div class="divided-50"></div>

        <!--
            Note: we have divided these into segments of two so that rows are clear
        -->
        <div class="row">
        <!-- Segment 1-->
            @for ($i = 0; $i < count($posts) && $i < 3; $i++)
            @set($post = $posts[$i])

            <div class="col-sm-4 margin-btm-30 wow animated fadeInUp"  data-wow-duration="700ms" data-wow-delay="100ms">
                <div class="item-img-wrap ">
                    <img src="@( $post->getThumbnail(800,600) )" class="img-responsive" alt="workimg">
                    <div class="item-img-overlay">
                        <a href="@( $post.url() )" class="show-image">
                            <span></span>
                        </a>
                    </div>
                </div><!--item image hover-->
                <div class="blog-desc">
                    <h3><a href="@( $post.url() )">@( $post.title )</a></h3>
                    <span>@($post.createDate.format('l, d M Y'))</span>
                    <p>
                        @( substr($post.metaContent,0,100) )
                    </p>
                    <p class="text-right">
                        <a href="@( $post.url() )" class="btn btn-dark btn-xs">
                            Read More
                        </a>
                    </p>
                </div><!--blog desc-->
            </div><!--blog post col end-->

            @endfor
        </div><!--blog post row-->



        <div class="divided-50"></div>
        <!-- Segment 2-->
        @for ($i = 3; $i < count($posts) && $i < 6; $i++)
        @set($post = $posts[$i])

        <div class="col-sm-4 margin-btm-30 wow animated fadeInUp"  data-wow-duration="700ms" data-wow-delay="100ms">
            <div class="item-img-wrap ">
                <img src="@( $post->getThumbnail(800,600) )" class="img-responsive" alt="workimg">
                <div class="item-img-overlay">
                    <a href="@( $post.url() )" class="show-image">
                        <span></span>
                    </a>
                </div>
            </div><!--item image hover-->
            <div class="blog-desc">
                <h3><a href="@( $post.url() )">@( $post.title )</a></h3>
                <span>@($post.createDate.format('l, d M Y'))</span>
                <p>
                    @( substr($post.metaContent,0,100) )
                </p>
                <p class="text-right">
                    <a href="@( $post.url() )" class="btn btn-dark btn-xs">
                        Read More
                    </a>
                </p>
            </div><!--blog desc-->
        </div><!--blog post col end-->

        @endfor
        <div class="row">

        </div><!--blog post row-->


    </div>
</section><!--blog section end-->