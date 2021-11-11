jQuery(function($y){

    $y(document).scroll(() => {
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

    $y('#btn-ir-topo').click(() => {
        $y('html, body').animate({scrollTop : 0}, 'slow');
    });

});