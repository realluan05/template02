jQuery(function($y){

    $y(document).scroll(function() {
        var header = $y('#header'),
            btnIrTopo = $y('#btn-ir-topo');

        if($y(this).scrollTop() > 10) {
            header.addClass('fixed');
            btnIrTopo.css({
                'opacity':1,
                'visibility':'visible',
            });
        } else {
            header.removeClass('fixed');
            btnIrTopo.css({
                'opacity':0,
                'visibility':'hidden',
            });
        }
    })

    $y('#navbar ul.menu > li.item > a').click(function(e){
        e.preventDefault();

        if($y(this).parent().prevAll().hasClass('active') || $y(this).parent().nextAll().hasClass('active')) {
            $y(this).parent().prevAll().removeClass('active');
            $y(this).parent().nextAll().removeClass('active');
        }

        $y(this).parent().addClass('active');

        $y('html, body').animate({
            scrollTop: $y($y.attr(this, 'href')).offset().top
        }, 500);
    });

    $y('#btn-ir-topo').click(() => {
        $y('html, body').animate({scrollTop : 0}, 'slow');
    });

    $y('.faq .item > h4').click(function(){
        $y(this).children('span').toggleClass('act');
        $y(this).next().toggleClass('act');
    });

    if($y(window).width() < 768) {
        $y('.menu-mobile > .icon').click(function(){
            $y(this).parent().toggleClass('active');
        });
    }
});