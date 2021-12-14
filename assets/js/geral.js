jQuery(function($y){

    // Função Scroll
    $y(document).scroll(function() {
        // Criando variaveis do header e do botão de voltar ao topo da página
        var header = $y('#header'),
            btnIrTopo = $y('#btn-ir-topo');

        // Verificando se o scroll aplicado é maior do que 10
        if($y(this).scrollTop() > 10) {
            /* Se for verdadeiro, adiciona a classe "fixed" ao header
               e exibir o botão de voltar ao topo */
            header.addClass('fixed');
            btnIrTopo.css({
                'opacity':1,
                'visibility':'visible',
            });
        } else {
            /* Senão, remove a classe "fixed" e esconde o botão de voltar
               ao topo da página */
            header.removeClass('fixed');
            btnIrTopo.css({
                'opacity':0,
                'visibility':'hidden',
            });
        }
    })

    /* Função para adicionar uma classe no item atual que foi clicado e redirecionar
       para a seção desejada com uma animação */
    $y('#navbar ul.menu > li.item > a,' +
       '#navbar-mobile ul.menu > li:not(.has-children) > a').click(function(e){
        /* função para evitar que o item atual clicado seja cancelado, ou seja,
           não funcionará */
        e.preventDefault();

        /* Condição para verificar se qualquer item atual possui a classe "active",
           se possuir, o item atual que foi clicado irá obter a classe "active" e o outro item
           que possuia a classe, será removida a classe dele */
        if($y(this).parent().prevAll().hasClass('active')
           || $y(this).parent().nextAll().hasClass('active')) {
            $y(this).parent().prevAll().removeClass('active');
            $y(this).parent().nextAll().removeClass('active');
        }

        // Adicionando uma classe no elemento pai = li
        $y(this).parent().addClass('active');

        // Animação para quando clicar nos links e obter um efeito
        $y('html, body').animate({
            scrollTop: $y($y.attr(this, 'href')).offset().top
        }, 500);
    });

    // Animação para voltar ao topo da página
    $y('#btn-ir-topo').click(() => {
        $y('html, body').animate({scrollTop : 0}, 'slow');
    });

    // Código para mostrar/fechar resposta da seção de FAQ da Home
    $y('.faq .item > h4').click(function(){
        $y(this).children('span').toggleClass('act');
        $y(this).next().toggleClass('act');
    });

    // Condição para verificar se a largura da tela é menor que 769px
    if($y(window).width() < 769) {
        // Se ativo, é exibido o ícone de fechar no menu mobile
        $y('.menu-mobile > .icon').click(function(){
            $y(this).parent().toggleClass('active');
        });

        // Quando clicar em qualquer link do menu, fechar o menu
        $y('#navbar-mobile ul.menu > li:not(.has-children)').click(function(){
            $y('.menu-mobile').removeClass('active');
        });

        // Animação para exibir os itens ao clicar no item Pages do menu
        $y('#navbar-mobile ul.menu > li.has-children > a').click(function(){
            $y(this).next().slideToggle(300);
        });
    }
});