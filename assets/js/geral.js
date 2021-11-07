jQuery(function($y){
    
    $y(document).scroll(() => {
        var header = $y('#header');

        $y(this).scrollTop() > 10 ? header.addClass('fixed') : header.removeClass('fixed');
    })

});