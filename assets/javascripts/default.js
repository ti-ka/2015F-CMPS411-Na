function scrollTo(target){
    target = $(target);
    if(target.length) {
        $('html,body').animate({
            scrollTop: target.offset().top
        }, 1000);
        return false;
    }
}

function loading(bool){
    //console.log(bool);
    if(bool || bool == undefined){
        $("#loading").show();
    } else {
        $("#loading").hide();
    }
}

var dev = true;
var app = {};
app.log = function(log){
    if(dev){
        console.log(log);
    }
};

$(function() {
    $('body').on('click','a[href*=#]:not([href=#])', function() {

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

            var target = $(this.hash);

            //target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            //target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }

        }

    });
});

$("#cart-window").on("click", function(){
    return false;
});
$("#cart-dragger,#cart-window-cover").on("click", function(){
    event.stopPropagation();
    $("#cart-window-cover").toggle(0);
    $("#cart-window").css("right",0);
    return false;
});


/*
$("#homepage-news-grid #right-pane .row .col-md-12").width($("#homepage-news-grid #right-pane .row .col-md-12").width());
$("#homepage-news-grid .small-set .row .col-md-6").width($("#homepage-news-grid .small-set .row .col-md-6").width() - 15/2);
    */

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$(document).ready(function(){
    $('a[href="http://editor.froala.com"]').remove();
});
