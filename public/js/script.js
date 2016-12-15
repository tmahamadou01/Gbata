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


});
