$(document).ready(function(){

    
$('.nav-menu').css('height',$(window).height());
    $(window).on('scroll',check_if_in_view);
    $(window).trigger('scroll');
    $('.hidden-hamburger').click(function(){
        if($('.nav-menu').css('display')==="none")
        {
        $('.nav-menu').css('display','flex');
        $('.nav-menu').animate({opacity:1});
        }
        else{
            $('.nav-menu').animate({opacity:0},() => $('.nav-menu').css('display','none'));
        }
    });
    function check_if_in_view()
{

    var scroll = $(window).scrollTop();
    if(scroll>50)
    {
        $('nav').addClass('nav_onmove');
        $('.nav-header').css('color','white');
        $('a').css('color','white');

    }
    if(scroll<50)
    {
        $('nav').removeClass('nav_onmove');
        $('.nav-header').css('color','#0E74B0');
        $('a').css('color','#0E74B0');
    }
}
});