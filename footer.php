<footer>
        <?php include("partial/footer-template.php") ?> 
    </footer>
    <div class="filter-shadow"></div>
    <script>
    function init() {
    var imgDefer = document.getElementsByTagName('img');
    for (var i=0; i<imgDefer.length; i++) {
    if(imgDefer[i].getAttribute('data-src')) {
    imgDefer[i].setAttribute('src',imgDefer[i].getAttribute('data-src'));
    } } }
    window.onload = init;
</script>
    <script>
        jQuery(document).ready(function(){
        jQuery('.js-toggle-menu').click(function(e){
            e.preventDefault();
            if(jQuery('.search-field').hasClass("active")){
            jQuery('.search-field').slideToggle();
            jQuery('.search-field').removeClass("active");
            }
            jQuery('.menu-mobile').slideToggle();

            jQuery(this).toggleClass('open');
        });

        jQuery('.search-mobile').click(function(e){
            e.preventDefault();
            jQuery('.search-wrapper-mobile form #searchform').css("display","block");
            jQuery('.search-wrapper-mobile form input[type="submit"]').css("display","block");
            jQuery('.search-wrapper-mobile form input[type="text"]').css("display","block");
            jQuery('.search-wrapper-mobile form').slideToggle();

        });

        var faqItem = $(".faq-container .question"),
            faqItemContent = $(".faq-container .answer");
            faqItem.click(function (event) {
            event.preventDefault();

        if ($(this).hasClass("active")) {
            $(this).next().slideUp(250);
            $(this).removeClass("active");
        } else {
            faqItemContent.slideUp(250);
            $(this).next().slideToggle(250);
            faqItem.removeClass("active");
            $(this).addClass("active");
        }
    });


    })
    </script>
</script>
    <?php WP_Footer(); ?>
    </body>
</html>