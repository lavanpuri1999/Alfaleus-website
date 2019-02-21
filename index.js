$(document).ready(function(){

    $window = $(window);
    $animation_elements = $('.intro_text');

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

$('.contact-submit').click(function(e){
    e.preventDefault();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email = $('#e-mail').val();
    var phone = $('#phone').val();
    var msg = $('.msg-pane').val();
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'datastore.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        // do something to response
    console.log(this.responseText);
};
    xhr.send('first_name='+first_name + '&last_name='+last_name + '&email='+email + '&phone='+phone +'&message='+msg);
   
});

$('.nav-list').children().hover(function(){
    $(this).find("div").toggleClass('width-toggle');
});


$('.siema').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 2,
    autoplay : true,
    prevArrow : $('.prev-img'),
    nextArrow : $('.next-img'),
    responsive: [
      {
        breakpoint: 1100,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 900,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });


function check_if_in_view()
{

    
    
function elementScrolled(elem)
{
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
}





if(elementScrolled('.feature-box')){

    $('.fb1').addClass('fadeIn');
    $('.fb2').addClass('fadeIn');
    $('.fb3').addClass('fadeIn');
    $('.fb4').addClass('fadeIn');
 }


    if(elementScrolled('.intro-container-new')){
        $('.intro_text').removeClass('text-anim');
        $('.intro_text').addClass('fadeandslideIn');
        $('.globe_img').addClass('fadeIn');

    }
    
    if(elementScrolled('.vrbox_img')){
        $('.vrbox_img').addClass('fadeIn');
    }



    

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
        $('.nav-header').css('color','white');
        $('a').css('color','white');
    }
}


});