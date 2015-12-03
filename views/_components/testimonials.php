<section class="parallax testimonials bg-heading" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="center-heading text-center">
                    <h2 class="wow animated bounceIn"  data-wow-duration="700ms" data-wow-delay="100ms">Testimonials</h2>
                    <span class="icon"><i class="fa fa-quote-left"></i></span>
                </div><!--center heading-->
            </div>
        </div><!--center heading-->
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <div id="testi-carousel" class="owl-carousel">

                    @foreach ($testimonials as $testimonial)

                    <div>
                        <h4>
                            <i class="fa fa-quote-left"></i>

                            @( $testimonial.content )

                        </h4>
                        <p>
                            - @( $testimonial.author )
                        </p>
                    </div><!--testimonials item like paragraph-->

                    @endforeach

                </div>
            </div>
        </div>

    </div>
</section><!--testimonials-->