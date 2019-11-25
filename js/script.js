  function validateForm() {
    var n = document.getElementById('name').value;
    var e = document.getElementById('email').value;
    var m = document.getElementById('message').value;
    var onlyLetters =/^[a-zA-Z\s]*$/; 
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    
    
    if(n == "" || n == null){
        document.getElementById('nameLabel').innerHTML = ('Please enter your name');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }       
  
    if (!n.match(onlyLetters)) {
        document.getElementById('nameLabel').innerHTML = ('Please enter only letters');
        document.getElementById('name').style.borderColor = "red";
        return false;
    }
  
    if(e == "" || e == null ){
          document.getElementById('emailLabel').innerHTML = ('Please enter your email');
          document.getElementById('email').style.borderColor = "red";
          return false;
      }
  
    if (!e.match(onlyEmail)) {
        document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }
  
    if(m == "" || m == null){
        document.getElementById('messageLabel').innerHTML = ('Please enter your message');
        document.getElementById('message').style.borderColor = "red";
        return false;
    }
  
    else{
          return true;
      }
      
}
$(document).ready(function () {

  <!-- Initialize Swiper --> 
  var swiper = new Swiper('#swiper-projects', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 10,     
        mousewheelControl: true,     
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
  });

  var swiper = new Swiper('#swiper-mockups', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 2,
    spaceBetween: 50,
    mousewheelControl: true,
    grabCursor: true,
    effect: 'slide',
    autoplay: 5000,
    speed: 1000,
    breakpoints: {
        768: {
            slidesPerView: 1
        }
    }
  });  

  var swiper = new Swiper('.logos', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 3,
    mousewheelControl: true,
    grabCursor: true,
    effect: 'slide',
    autoplay: 10000,
    speed: 1000,
    breakpoints: {
        1024: {
            slidesPerView: 4,
            spaceBetween: 40
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        640: {
            slidesPerView: 2,
            spaceBetween: 20
        },
        320: {
            slidesPerView: 1,
            spaceBetween: 10
        }
    }
  });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97208927-2', 'auto');
  ga('send', 'pageview');
  
});

window.onload = function() {
  $("#fade").delay(1000).fadeIn(1000);
  $("#temp").delay(1000).hide(0);
  $( "#fade" ).delay(1000).addClass( "fadeInUp animated" );

  $("#go-btn").delay(1100).fadeIn(1000);  
  $("#temp-btn").delay(1100).hide(0); 
  $("#go-btn").delay(1100).addClass( "fadeInUp animated" );

  $(".swiper-container").hover(
    function() {
      $(this).children(".swiper-button-prev").fadeToggle();
      $(this).children(".swiper-button-next").fadeToggle();
      $(this).children(".btn-pane").fadeToggle();
    },
    function() {
      $(this).children(".swiper-button-prev").fadeToggle();
      $(this).children(".swiper-button-next").fadeToggle();
      $(this).children(".btn-pane").fadeToggle();
    }
  );  
};

// $(".swiper-slide").on('click', function() {
//   // window.location = $(this).value;
//   console.log(this.value);    
// });

var slides = document.getElementsByClassName("project-slide");
for (var i = slides.length - 1; i >= 0; i--) {
  slides[i].addEventListener("click",linkProject);
}    

function linkProject() {
  window.location = this.title;
}

var slides = document.getElementsByClassName("mockup");
for (var i = slides.length - 1; i >= 0; i--) {
  slides[i].addEventListener("click",link);
}

function link() {
  window.open(this.title,'_blank');
}