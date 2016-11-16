// main top slider
$('.top-slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 7000,
});

// main review slider
$('.review-slider').slick({
  dots: false,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 7000,
});

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// fancybox
// create & show titles
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}

// Find .post>a>img and create fancybox image gallery
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) });

var posts = jQuery(".item-images"); //find post
var posts2 = jQuery("#tabs-2"); //find post

posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
posts2.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts2.index(this)).getTitle()
});

// fancybox on
jQuery("a.fancybox").fancybox({
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

function sendMyForm(myclass, myfile, mytext) {
  jQuery(document).ready(function($) {
    $('#'+myclass).submit(function() {
      var str = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: '/mail/'+myfile+'.php',
        data: str,
        success: function(msg){
          if(msg == 'OK'){
            result = '<h3 class="centered senk">'+mytext+'</h3>';
            $('#'+myclass).html(result);
            yaCounter36641615.reachGoal('click-form');
          }else{
            result = 'нее';
            $('#'+myclass).html(result);
          }
        }
      });
      return false;
    });
  });
};

sendMyForm('call-form', 'call-form', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('catalog-form', 'catalog-form', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('zarabotok-form', 'zarabotok-form', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('questions-form', 'questions-form', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('zakaz-form', 'zakaz-form', 'Спасибо за заказ, скоро мы с Вами свяжемся!');

// zakaz
function zakaz(tovar) {
  $('.tovar-input').val(tovar);
}

// menu slow scrol
$(document).ready(function(){
  $(".pro-menu ul").on("click","a.scroll", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 500);
  });
});
$(document).ready(function(){
  $("#about").on("click","a.scroll", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 500);
  });
});