$(document).ready(function(){

    var cpt = 0;
    $('#menu-sm').click(function(){

        if(cpt == 0){

            // on récupère l'élément
            var sousmenu = document.getElementById("sous-menu-sm");

            // on modifie son style
            sousmenu.style.visibility = "visible";

            cpt = 1;
        }else{

            // on récupère l'élément
            var sousmenu = document.getElementById("sous-menu-sm");

            // on modifie son style
            sousmenu.style.visibility = "hidden";

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
        nextArrow: '.offre-slide .control-right',
        prevArrow: '.offre-slide .control-left'
    });

    $('#divers').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

});
