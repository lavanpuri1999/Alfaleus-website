$(document).ready(function(){

    $('.nav-menu').css('height',$(window).height());
    
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

    $('.nav-list').children().hover(function(){
        $(this).find("div").toggleClass('width-toggle');
    });
    

    function check_if_in_view()
{

    var scroll = $(window).scrollTop();
    if(scroll>50)
    {
        $('nav').addClass('nav_onmove');
        $('.nav-header').css('color','white');
        $('a').css('color','white');
        $('.temp-img-1').css('display','none');
        $('.temp-img-2').css('display','block');
    }
    if(scroll<50)
    {
        $('nav').removeClass('nav_onmove');
        $('.nav-header').css('color','#0E74B0');
        $('a').css('color','#0E74B0');
        $('.temp-img-1').css('display','block');
        $('.temp-img-2').css('display','none');
    }
}
});