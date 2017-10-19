$(document).ready(function(){

	
        

//    jQuery.fn.center = function () {
//        // this.css("position","absolute");
////        this.css("top", Math.max(0, (($(window).height() - $(this).outerHeight()) / 2) + 
////                                                    $(window).scrollTop()) + "px");
//        // this.css("left", Math.max(0, (($(window).width() - $(this).outerWidth()) / 2) + 
//                                                    // $(window).scrollLeft()) + "px");
//        return this;
//    }
//    
     $('.logo-panel').delay(1000).fadeIn('slow');
     
    // $(".logo-panel").center();
    
    $(".little-to-big").animate({fontSize: "7em",
                        opacity: "1"
                        } ,2700); 

    

    $( ".cb-slideshow" ).mousemove(function( event ) {
        $(".menus").animate({bottom: "80px",
                        opacity: "1"
                        } ,1000); 
    });
    
    
});