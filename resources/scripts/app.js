/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';
import Typewriter from 'typewriter-effect/dist/core';

import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';

Swiper.use([Navigation, Pagination, EffectFade]);

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import Lottie from 'lottie-web';

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

$(document).ready(() => {
  // console.log('Hello world');

  var typing = document.getElementById('beeris');
  var typewriter = new Typewriter(typing, {
    delay: '60',
  });
  //console.log(titles[0])
  typewriter.typeString(titles[0]);

  ScrollTrigger.create({
    trigger: '#beeris',
    start: 'top 80%',
    end: 'bottom 20%',
    //markers: true,
    onEnter: function() {
      typewriter.start()

      var tl = gsap.timeline();
      //console.log(item)
      tl.fromTo('.job-0 .job-img', {
        autoAlpha: 0,
        y: 25,
        }, {
        autoAlpha: 1,
        y: 0,
        duration: 1,
      }, 'start');
      tl.fromTo('.job-0 .job-img', {
        scale: 1.1,
        }, {
        scale: 1,
        duration: 1,
      }, 'start');

    }
  });

  gsap.fromTo("#hero-img", {
    autoAlpha: 0,
      y: 25,
    }, {
    scrollTrigger: {
      trigger: '#hero-img',
      start: "0 75%",
      //markers: true,
    },
    autoAlpha: 1,
    y: 0,
    duration: 1,
  });
   

  const studySwiper = new Swiper('.study-swiper', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    navigation: {
      nextEl: '.study-swiper-next',
      prevEl: '.study-swiper-prev',
    },
    on: {
      slideChange: function() {
        // $(".study-swiper .slide-title").text("");
        var swiper = this;
        var index = swiper.activeIndex
        typewriter.deleteAll(2)
          .start().stop();
        $('.study-btn-container').children().removeClass('active');
        $('.study-btn-container').find(`[data-index='${index}']`).addClass('active');

        var tl = gsap.timeline();
        //console.log(item)
        gsap.fromTo('.job-' + index + ' .job-img', {
          autoAlpha: 0,
          y: 25,
          }, {
          autoAlpha: 1,
          y: 0,
          duration: 1,
        }, 'start');
        gsap.fromTo('.job-' + index + ' .job-img', {
          scale: 1.1,
          }, {
          scale: 1,
          duration: 1,
        }, 'start');
      },
      slideChangeTransitionEnd: function() {
        var swiper = this;
        var index = swiper.activeIndex
        typewriter.typeString(titles[index]).start();
      }
    }
  });

  $('#report').on({
    mouseenter: function() {
      gsap.to('#report .report-text text', {
        fill: "white",
      });
    },
    mouseleave: function() {
      gsap.to('#report .report-text text', {
        fill: "transparent",
      });
    },
  });

  $('.study-btn-container').on('click', 'button', function(e) {
    var index = $(this).data('index');
    $(this).siblings().removeClass('active');
    $(this).addClass('active');
    //console.log(index);
    studySwiper.slideTo(index);
  })

  // var title = $("#text").data("text");
  // console.log(title)

  gsap.fromTo(".statue", {
    rotation: -25
    }, {
    rotation: 25,
    // transformOrigin: 'bottom right',
    duration: 1.5,
    repeat: -1,
    yoyo: true,
    ease: "none",
  })

  let lottie3 = Lottie.loadAnimation({
    container: document.getElementById('lottie-3'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim3,
  })

  $('#grid-3').hover(function() {
    lottie3.setDirection(1);
    lottie3.play();
    gsap.to('#lottie-3 path', {
      color: "white",
    });
  }, function() {
    lottie3.stop();
    gsap.to('#lottie-3 path', {
      color: "#C65956",
    });
  });

  let lottie0 = Lottie.loadAnimation({
    container: document.getElementById('lottie-0'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim0,
  })

  $('#grid-0').hover(function() {
    lottie0.setDirection(1);
    lottie0.play();
    gsap.to('#lottie-0 path', {
      color: "white",
    });
  }, function() {
    lottie0.stop();
    gsap.to('#lottie-0 path', {
      color: "#C65956",
    });
  });

  let lottie1 = Lottie.loadAnimation({
    container: document.getElementById('lottie-1'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim1,
  })

  $('#grid-1').hover(function() {
    lottie1.setDirection(1);
    lottie1.play();
    gsap.to('#lottie-1 path', {
      color: "white",
    });
  }, function() {
    lottie1.stop();
    gsap.to('#lottie-1 path', {
      color: "#C65956",
    });
  });

  let lottie2 = Lottie.loadAnimation({
    container: document.getElementById('lottie-2'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim2,
  })

  $('#grid-2').hover(function() {
    lottie2.setDirection(1);
    lottie2.play();
    gsap.to('#lottie-2 path', {
      color: "white",
    });
  }, function() {
    lottie2.stop();
    gsap.to('#lottie-2 path', {
      color: "#C65956",
    });
  });

  let lottie4 = Lottie.loadAnimation({
    container: document.getElementById('lottie-4'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim4,
  })

  $('#grid-4').hover(function() {
    lottie4.setDirection(1);
    lottie4.play();
    gsap.to('#lottie-4 path', {
      color: "white",
    });
  }, function() {
    lottie4.stop();
    gsap.to('#lottie-4 path', {
      color: "#C65956",
    });
  });

  let lottie5 = Lottie.loadAnimation({
    container: document.getElementById('lottie-5'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim5,
  })

  $('#grid-5').hover(function() {
    lottie5.setDirection(1);
    lottie5.play();
    gsap.to('#lottie-5 path', {
      color: "white",
    });
  }, function() {
    lottie5.stop();
    gsap.to('#lottie-5 path', {
      color: "#C65956",
    });
  });

  let lottie6 = Lottie.loadAnimation({
    container: document.getElementById('lottie-6'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim6,
  })

  $('#grid-6').hover(function() {
    lottie6.setDirection(1);
    lottie6.play();
    gsap.to('#lottie-6 path', {
      color: "white",
    });
  }, function() {
    lottie6.stop();
    gsap.to('#lottie-6 path', {
      color: "#C65956",
    });
  });

  let lottie7 = Lottie.loadAnimation({
    container: document.getElementById('lottie-7'),
    renderer: 'svg',
    loop: true,
    autoplay: false,
    path: anim7,
  })

  $('#grid-7').hover(function() {
    lottie7.setDirection(1);
    lottie7.play();
    gsap.to('#lottie-7 path', {
      color: "white",
    });
  }, function() {
    lottie7.stop();
    gsap.to('#lottie-7 path', {
      color: "#C65956",
    });
  });

  
  
  
  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  const navLinks = gsap.utils.toArray(".nav-container .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 50 }});
      }
    });
  });

  const boxLinks = gsap.utils.toArray("#key .job-box");
  //console.log(navLinks);
  boxLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        var index = $(this).data('index');
        $('.study-btn-container').children().removeClass('active');
        $('.study-btn-container').find(`[data-index='${index}']`).addClass('active');
        studySwiper.slideTo(index);
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 50 }});
      }
    });
  });

  // gsap.utils.toArray(".job-img").forEach((item, i) => {
  //   var tl = gsap.timeline({
  //     scrollTrigger: {
  //       trigger: item,
  //       start: "0 75%",
  //       //end: "0 25%"
  //       //scrub: 0.4
  //     },
  //   });
  //   //console.log(item)
  //   tl.fromTo(item, {
  //     autoAlpha: 0,
  //     y: 25,
  //     }, {
  //     autoAlpha: 1,
  //     y: 0,
  //     duration: 1,
  //   }, 'start');
  //   tl.fromTo(item, {
  //     scale: 1.2,
  //     }, {
  //     scale: 1,
  //     duration: 1.5,
  //   }, 'start');
  // });

});
