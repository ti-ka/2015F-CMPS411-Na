@extend('_layout')


@block('splash')
<?php
/*@*( component('HomePageSplash') )*/
?>
@endblock


@block('content')

    @( component('HomePageSlideShow') )
    @( component('RecentBlogs') )
@( component('Testimonials') )
@( component('Gallery') )
    @( component('HomePageContact') )


@endblock

