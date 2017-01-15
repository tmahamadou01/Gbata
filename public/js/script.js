$(document).ready(function(){

    var cpt = 0;
    var sousmenu = document.getElementById("menu-sm");

    $('#menu-sm-nav').click(function(){

        if(cpt == 0){

            sousmenu.style.marginTop = "6em";
            sousmenu.style.transition = "0.5s";
            //var searchbox = document.getElementById("search-box");

            cpt = 1;
        }else{

            sousmenu.style.marginTop = "-6.2em";

            cpt = 0;
        }


    });

    $('.offre-slide-content').slick({
        infinite: true,
        speed: 500,
        fade: false,
        cssEase: 'linear',
        autoplay: true,
        arrows: true,
        dot: true,
        nextArrow: '.offre-slide .control-right',
        prevArrow: '.offre-slide .control-left'
    });

    $('#divers').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false
    });

});
