$(function () {
    $('.cadeiras-thumbs li').click(function(){
        
        var atributoLi = $(this).attr('class');
        $('.cadeiras-thumbs li').removeClass('active');
        $(this).addClass('active');

        atributoLi = atributoLi.replace('item-thumbs','.conteudo_cadeiras');
        atributoLi = atributoLi.replace(' ca', '.ca');
        
        $('.conteudo_cadeiras').removeClass('active');
        
        $(atributoLi).addClass('active');
    });
});