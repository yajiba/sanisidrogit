jQuery(function($){
    $(window).scroll(function(){
        var pos = $(window).scrollTop();
        if(pos > 100) {
            $('#header-top').fadeOut();
            $('#master-header').css('transition','all 0.5s linear 0.5s');
            $('#master-header').css('border-bottom','2px solid #d01c1f ');
            
        }else {
            $('#header-top').fadeIn();
            $('#master-header').css('transition','all 0.5s linear 0.5s');
            $('#master-header').css('border-bottom','unset');
        }
    });
    $('a.menu-toggle').click(function(){
        var x = document.getElementById("primary-menu");
        if (x.style.display === "none") {
            x.style.display = "flex";
          } else {
            x.style.display = "none";
          }
    });
  });