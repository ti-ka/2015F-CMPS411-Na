<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-heading text-center">
                    <h2 class=" wow animated bounceIn"  data-wow-duration="700ms" data-wow-delay="100ms">Alyssa Carson</h2>
                    <span class="icon"><i class="fa fa-image"></i></span>
                </div><!--center heading-->
            </div>
        </div><!--center heading-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p class="lead margin-btm-30">
                    @raw( string(1) )
                </p>
            </div>
        </div>
        <div class="divided-50"></div>
        <div class="row">
            <div id="work-slide" class="owl-carousel">

                @foreach ( $articles as $article )

                <div>
                    <div class="col-md-6 margin-btm-30">
                        <img src="@( $article.getThumbnail(800,600) )" class="img-responsive" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="work-detail">
                            <h1>

                                @( $article.title )

                            </h1>

                            <div class="text-justify">

                                @( $article.getMetaContent(800) )

                            </div>
                            <br />
                            <p><a href="@( $article.url() )" class="btn btn-dark">Read more</a></p>
                        </div>
                    </div>
                </div><!--testimonials item like paragraph-->

                @endforeach

            </div>
        </div><!--portfolio carousel slide use for single item detail-->
    </div>
    <div class="divided-50"></div>
</section><!--work-->



<section class="fun-facts parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 margin-btm-30 text-center">
                <div class="fact-inner">
                    <h3>Witnessed</h3><br />
                    <h1 class="counter">3</h1>
                    <h3>Shuttle Launches</h3>
                </div>
            </div><!--facts col-->
            <div class="col-md-4 margin-btm-30 text-center">
                <div class="fact-inner">
                    <h3>Been to</h3><br />
                    <h1><span class="counter">7</span></h1>
                    <h3>Space Camps</h3>
                </div>
            </div><!--facts col-->
            <div class="col-md-4 margin-btm-30 text-center">
                <div class="fact-inner">
                    <h3>Part of NASA's</h3><br />
                    <h1><span class="counter">14</span></h1>
                    <h3>Passport Program</h3>
                </div>
            </div><!--facts col-->
        </div>
    </div>
</section><!--fun facts-->