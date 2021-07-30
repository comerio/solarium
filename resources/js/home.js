jQuery(document).ready(function(){
    jQuery('.banner-home').slick({
                dots: true,
                arrows: true,
                slidesToShow: 1,
                infinite: true,
                centerMode: false
    });

    jQuery('.menu-principal nav a').click(function(e){
        e.preventDefault;
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top,
            menuHeight = $('.menu-principal').innerHeight();
        
        jQuery('html, body').animate({
            scrollTop: targetOffset - menuHeight
        }, 700);
    })
})

