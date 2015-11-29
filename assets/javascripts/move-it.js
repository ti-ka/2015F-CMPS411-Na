var app = {};
app.speed = 0.01/20;
$(document).ready(function(){
    randomise();
    animateDiv();

});



function randomise(){
    var items = $(".home-cover-box");
    var i = 0;
    $.each(items, function(){

        var left = (i < items.length/2) ? (Math.random() * 15) : (Math.random() * 15 + 70);
        var top =  (Math.random() * 70);

        $(this).css("top", "" + top + "%");
        $(this).css("left", "" + left + "%");

        console.log(left);
        console.log($(this).css("left"));


        i++;
    });

};

function makeNewPosition(){

    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 250;
    var w = $(window).width() - 250;

    var nh = Math.floor(Math.random() * h *.7);
    var nw = Math.floor(Math.random() * w *.8);

    return [nh,nw];

}

function animateDiv(){
    $.each($(".home-cover-box"), function(){

        var oldq = $(this).offset();

        var newq = makeNewPosition(oldq.top, oldq.left);
        var speed = calcSpeed([oldq.top, oldq.left], newq);

        $(this).animate({ top: newq[0] , left : newq[1]}, speed, function(){
           animateDiv();
        });

    });

};

function calcSpeed(prev, next) {

    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);

    var greatest = x > y ? x : y;

    var speedModifier = app.speed;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}