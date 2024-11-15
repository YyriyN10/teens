jQuery(function($) {

  /*const longForm = new Plumsail.Form("#plumsail-form-72j5", "f22ae698-edf1-4436-b11e-751a1a34a050");*/
  /*const fd = new Plumsail.Form("#plumsail-form-1efs", "8b4b65f-a4c2-49de-83bc-5e5d44ca6920");*/
  /*const longForm = new Plumsail.Form("#plumsail-form-72j5", "f22ae698-edf1-4436-b11e-751a1a34a050");
  const shortform = new Plumsail.Form("#plumsail-form-1efs", "f8b4b65f-a4c2-49de-83bc-5e5d44ca6920");*/
  /**
   * Menu
   */

  //SCROLL MENU

  if ( $('.page-template-template-home').length ){

    $('#main-menu .anchor a').addClass('scroll-to');
    $('#info-menu .anchor a').addClass('scroll-to');

  }else{

    let siteUrl = $('.site-header .logo').attr('href');

    $('#main-menu .anchor a').each(function () {

      let thisLink = $(this);

      let thisAnchor = thisLink.attr('href');

      thisLink.attr('href', siteUrl + thisAnchor);
    });

    $('#info-menu .anchor a').each(function () {

      let thisLink = $(this);

      let thisAnchor = thisLink.attr('href');

      thisLink.attr('href', siteUrl + thisAnchor);
    });
  }
  
  $(document).on('click', '.scroll-to', function (e) {
      e.preventDefault();

      let href = $(this).attr('href');

      $('html, body').animate({
          scrollTop: $(href).offset().top
      }, 1000);

  });

  //Get Window Width, Height

  let windWid = $(window).width();
  let windHeig = $(window).height();

  $(window).resize(function () {
    windWid = $(window).width();
    windHeig = $(window).height();
  });

  /**
   * We are it slider
   */

  if ( $('#we-are-it-slider') ){

    $('#we-are-it-slider').slick({
      autoplay: true,
      autoplaySpeed: 3250,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
    });

    $('.we-are-it .prev-btn').click(function(e){
      e.preventDefault();

      $('#we-are-it-slider').slick('slickPrev');
      $('#we-are-it-slider').slick('slickPause');
    });

    $('.we-are-it .next-btn').click(function(e){
      e.preventDefault();

      $('#we-are-it-slider').slick('slickNext');
      $('#we-are-it-slider').slick('slickPause');
    });

    let weAreItSliderLength = $('#we-are-it-slider .slide').length;

    let weAreItSliderCounter = $('.we-are-it .slide-counter');

    weAreItSliderCounter.find('.all').text(weAreItSliderLength);

    $('#we-are-it-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

      weAreItSliderCounter.find('.current').text(nextSlide+1);

    });

    $('#we-are-it-slider').on('swipe', function (){
      $('#we-are-it-slider').slick('slickPause');
    })


    $('.inner-gallery-slider').slick({
      autoplay: true,
      autoplaySpeed: 3250,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      dots: true
    });

    $('.inner-gallery-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

      event.stopPropagation()

    });


  }
  /**
   * Curses
   */

  if( $('.about-us__curses-list ').length ){

    if ( windWid <= 575 ){
      $('.about-us__curses-list').marquee({
        duration: 10000,
        startVisible: true,
        direction: 'left',
        duplicated: true
      });

    }else{
      $('.about-us__curses-list').marquee({
        duration: 30000,
        startVisible: true,
        direction: 'left',
        duplicated: true
      });
      
    }

  }


  /**
   * Active position gallery
   */

  $('#active-social-position-slider').slick({
    autoplay: true,
    autoplaySpeed: 2000,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    dots: true
  });

  /**
   * Home student works
   */

  if ( $('.page-template-template-home') && $('.student-works')){

    const firstCategory = $('.student-works__category-list .student-works__category:first-child');

    firstCategory.addClass('active');

    function ajaxChangeCategory( catId ){

      let data = {
        action: 'student_works_change_cat',
        catId: catId,
      };

      $.post( ua_teens_ajax.url, data, function(response) {

        if( $.trim(response) !== ''){

          $('#student-works_slider').html(response);

          $('#student-works_slider').slick({
            autoplay: false,
            autoplaySpeed: 5000,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
          });

          $('.student-works .prev-btn').click(function(e){
            e.preventDefault();

            $('#student-works_slider').slick('slickPrev');
          });

          $('.student-works .next-btn').click(function(e){
            e.preventDefault();

            $('#student-works_slider').slick('slickNext');
          });

          let studentWorksSliderLength = jQuery('#student-works_slider .slide').length;

          let studentWorksSliderCounter = $('.student-works .slide-counter');

          studentWorksSliderCounter.find('.current').text(1);

          studentWorksSliderCounter.find('.all').text(studentWorksSliderLength);

          $('#student-works_slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){

            studentWorksSliderCounter.find('.current').text(nextSlide+1);

          });

          $('#student-works_slider').css({'opacity' : '1'});

          $('.student-works .controls-wrapper').css({'opacity' : '1'});

          $('#student-works_slider .play').on('click', function (e){
            e.preventDefault();

            let videoId = $(this).attr('data-videoid');

            $('#videoModal .video').html('<iframe src="https://www.youtube-nocookie.com/embed/'+videoId+'?rel=0&autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"></iframe>');

            $('#videoModal').modal("show");
          });

          $('#videoModal').on('hidden.bs.modal', function (e) {
            $("#videoModal iframe").each(function() {
              $(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')});
          });

          //Fancybox Init

          $('[data-fancybox]').fancybox({
            protect: true,
            loop : true,
            fullScreen : true,
            scrolling : 'yes',
            image : {
              preload : "auto",
              protect : true
            },
            buttons: [
              "zoom",
              "slideShow",
              "fullScreen",
              "close"
            ]

          });
        }

      });

    }

    ajaxChangeCategory( firstCategory.attr('data-cat-id'));

    $('.student-works__category-list .student-works__category').on('click', function (e){
      e.preventDefault();

      let thisCategory = $(this);

      $('.student-works__category-list .student-works__category.active').removeClass('active');

      thisCategory.addClass('active');

      $('#student-works_slider').css({'opacity' : '0'});
      $('.student-works .controls-wrapper').css({'opacity' : '0'});

      $('#student-works_slider').slick('unslick');

      ajaxChangeCategory( thisCategory.attr('data-cat-id'));

    });

  }

  // Lazy load

  $('.lazy').lazy();

  //Fixed Menu

  $(document).scroll(function() {

    let y = $(this).scrollTop();

    if (y > 1) {
      $('header').addClass('fixed-header');
    } else {
      $('header').removeClass('fixed-header');
    }
  });

  let positionScrolHeader = $(window).scrollTop();

  $(window).scroll(function() {

    let scroll = $(window).scrollTop();

    if(scroll > positionScrolHeader) {

      if ( $('.main-nav.open-menu').length ){
        $('header').addClass('fixed-header-visible');
      }else{
        $('header').removeClass('fixed-header-visible');
      }


    } else {
      $('header').addClass('fixed-header-visible');

    }

    positionScrolHeader = scroll;
  });

  //Mob Menu

  $('#menu-btn').on('click', function (e) {
    e.preventDefault();

    $(this).toggleClass('active');
    $('header').toggleClass('active-menu');
    $('header nav').toggleClass('open-menu');
    $('html').toggleClass("fixedPosition");

  });

  if ( $(windWid <= 992 ) ){

    $('.header-navigation .anchor a').on('click', function (e) {

      $('#menu-btn').removeClass('active');
      $('header').removeClass('active-menu');
      $('header nav').removeClass('open-menu');
      $('html').removeClass("fixedPosition");

    });
  }


  /**
   * Model Modal
   */

  if ( $('.page-template-template-home') && $('.education-model') ){

    const modelList = $('.education-model__item');

    modelList.each(function (){

      let thisModel = $(this);

      thisModel.find('.detail').on('click', function (e){
        e.preventDefault();

        let thisTitle = thisModel.find('.name').html();
        let thisSmallDescription = thisModel.find('.description').html();
        let thisQuote = thisModel.attr('data-quote');
        let thisImageId = thisModel.attr('data-image');
        let thisTextContent = thisModel.find('.modal-desc').html();

        let data ={
          title: thisTitle,
          description: thisSmallDescription,
          quote: thisQuote,
          image: thisImageId,
          text: thisTextContent,
          action: 'model_modal'
        }

        $.post( ua_teens_ajax.url, data, function(response) {

          if( $.trim(response) !== ''){

            $('#modelModal .modal-body').html(response);

          }

        });

        $("#modelModal").modal("show");
      });
    });
  }

  /**
   * Map
   */

  function initMap() {

    let lat = Number($('#map').attr('data-lat'));
    let lng = Number($('#map').attr('data-lng'));
    /*var monument = [-77.0353, 38.8895];
    var zoom = 2.5;*/

    mapboxgl.accessToken = 'pk.eyJ1IjoidWF0ZWVucyIsImEiOiJjbHRzZjNydXEwb3l6MmludjVucHgwcjh2In0.iDVAMRZCg1WXhaoRDjF0gQ';

    //var monument = [-77.0353, 38.8895];
    var monument = [lng , lat];

    var map = new mapboxgl.Map({
      container: 'map',
      center: [lng , lat ],
      zoom: 15,
      /*scrollZoom: false,*/
      dragPa: false,
      dragRotate: false,
      style: 'mapbox://styles/uateens/cltsk4dy100hm01qwghqn4kpj',

    });

    var el = document.createElement('div');
    el.className = 'map-marker';

    new mapboxgl.Marker(el)
      .setLngLat(monument)
      .addTo(map);

  }

  if ( $('#map').length) {
    initMap();
  }

  /**
   *Basic Fade In Scroll Animation
   */

  let animationTracking = $('.animation-tracking');
  let startAnimationDelay = 200;

  animationTracking.each(function () {

    let thisTrack = $(this);

    thisTrack.viewportChecker({

      offset: startAnimationDelay,

      callbackFunction: function (elem, action) {

        $('.visible .first-up').addClass('animate');

        setTimeout(function () {

          $('.visible .second-up').addClass('animate');
        }, 500);

        setTimeout(function () {

          $('.visible .third-up').addClass('animate');
        }, 1000);

      }
    });
  });

  //SCROLL MENU

  /*jQuery('#primary-menu li a').addClass('scroll-to');*/

 $(document).on('click', '.scroll-to', function (e) {
    e.preventDefault();

    let href = $(this).attr('href');

    $('html, body').animate({
      scrollTop: $(href).offset().top
    }, 1000);

  });

  /**
   * For whom slider
   */

  if ( $('#for-whom-slider') ){

    $('#for-whom-slider').slick({
      autoplay: false,
      autoplaySpeed: 2500,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      variableWidth: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            variableWidth: false,
            fade: true
          }
        },
      ]
    });

  }

  /**
   * Team men automatic sliders
   */

    if ( $('#men-big-gallery') ){

      $('#men-big-gallery').slick({
        autoplay: true,
        autoplaySpeed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false
      });
    }

    if ( $('#men-main-gallery') ){

      $('#men-main-gallery').slick({
        autoplay: true,
        autoplaySpeed: 1700,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false
      });
    }

    if ( $('#men-small-gallery') ){

      $('#men-small-gallery').slick({
        autoplay: true,
        autoplaySpeed: 1400,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        draggable: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        swipe: false,
        touchMove: false
      });
    }

  /**
   * Team change category
   */

  if ( $('#team-list') ){

    $('.directions-list .item').on('click', function (e) {
      e.preventDefault();

      $('.directions-list .item.active').removeClass('active');

      $(this).addClass('active');

      let catId = $(this).attr('data-catid');

      let data = {
        action: 'change_team_direction',
        catId: catId
      };

      $.post( ua_teens_ajax.url, data, function(response) {

        if( $.trim(response) !== ''){

          $('#team-list').html(response);
        }
      });

    })
  }

  /**
   * Form focus/blur
   */

  $('.form-control').on('focus', function() {
    $(this).closest('.form-group').find('label').addClass('active');
  });
  $('.form-control').on('blur', function() {
    let $this = $(this);
    if ($this.val() == '') {
      $this.closest('.form-group').find('label').removeClass('active');
      $this.removeClass('data-in');
    }else{
      $this.addClass('data-in');
    }
  });

  /**
   * PHONE MASK
    */

  $("input[type=tel]").mask("+38(999) 999-99-99");

  /**
   * Form integration
   */

  function getQueryVariable(variable) {
      let query = window.location.search.substring(1);
      let vars = query.split('&');
      for (leti = 0; i < vars.length; i++) {
          let pair = vars[i].split('=');
          if (decodeURIComponent(pair[0]) == variable) {
              return decodeURIComponent(pair[1]);
          }
      }
  }
  utm_source = getQueryVariable('utm_source') ? getQueryVariable('utm_source') : "";
  utm_medium = getQueryVariable('utm_medium') ? getQueryVariable('utm_medium') : "";
  utm_campaign = getQueryVariable('utm_campaign') ? getQueryVariable('utm_campaign') : "";
  utm_term = getQueryVariable('utm_term') ? getQueryVariable('utm_term') : "";
  utm_content = getQueryVariable('utm_content') ? getQueryVariable('utm_content') : "";

  let forms = $('form');
  $.each(forms, function (index, form) {
      jQueryform = $(form);
      jQueryform.append('<input type="hidden" name="utm_source" value="' + utm_source + '">');
      jQueryform.append('<input type="hidden" name="utm_medium" value="' + utm_medium + '">');
      jQueryform.append('<input type="hidden" name="utm_campaign" value="' + utm_campaign + '">');
      jQueryform.append('<input type="hidden" name="utm_term" value="' + utm_term + '">');
      jQueryform.append('<input type="hidden" name="utm_content" value="' + utm_content + '">');
  });

  $('.ajax-form').on('submit', function (e) {
    e.preventDefault();

    let thisForm = $(this);

    /*thisForm.find('button').addClass('disable');*/

    let utmSource = thisForm.find('input[name = utm_source]').val();
    let utmMedium = thisForm.find('input[name = utm_medium]').val();
    let utmCampaign = thisForm.find('input[name = utm_campaign]').val();
    let utmTerm = thisForm.find('input[name = utm_term]').val();
    let utmContent = thisForm.find('input[name = utm_content]').val();

    let name = thisForm.find('input[name = name]').val();
    let phone = thisForm.find('input[name = phone]').val();
    let email = thisForm.find('input[name = email]').val();
    let birthday = thisForm.find('input[name = birthday]').val();
    let message = thisForm.find('textarea[name = message]').val();
    let lastName = thisForm.find('input[name = last_name]').val();

    let action = thisForm.find('input[name = action]').val();
    let siteUrl = thisForm.find('input[name = site_url]').val();
    let siteLang = thisForm.find('input[name = site-lang]').val();
    let pageName = thisForm.find('input[name = page-name]').val();
    let pageLink = thisForm.find('input[name = page_link]').val();

    const formData = {
      action: action,
      pageName: pageName,
      pageLink: pageLink,
      name: name,
      lastName: lastName,
      phone: phone,
      email: email,
      birthday: birthday,
      message: message,
      utmSource: utmSource,
      utmMedium: utmMedium,
      utmCampaign: utmCampaign,
      utmTerm: utmTerm,
      utmContent: utmContent
    }

    let thxPage = siteUrl + '/dyakuyemo';

    $.post( ua_teens_ajax.url, formData, function(response) {

      window.location.href = thxPage;

    });

  });

  $('form').on('submit', function () {
    $(this).find('button').addClass('disable');
    fbq("track","Lead");

  })

  /**
   * Files added
   */

  $('.form-control-file').on('change', function (e) {
    $(this).parent('label').addClass('added');

    $(this).closest('svg').addClass('added');
  })

    /*$('#file_1').on('change', function (e) {

      $(this).parent('label').addClass('added');

      $(this).closest('svg').addClass('added');

    });*/

  //Смена категории курсов

  /*jQuery('.page-template-template-home .curses-cat-wrapper .cat').on('click', function (e) {
    e.preventDefault();

    jQuery('.page-template-template-home .curses-cat-wrapper .cat').removeClass('active-cat');

    jQuery(this).addClass('active-cat');

    var subCatId = jQuery(this).data('subcatid');

    var allCat = jQuery(this).data('allcat');

    var currentLang = jQuery(this).data('lang');

    var pageCatNavWrapper = jQuery('#mor-curses-dtn-wrap');

    var allCatPosts = Number(jQuery(this).attr('data-allposts'));

    pageCatNavWrapper.attr('data-allposts', allCatPosts);

    var targetAllPosts = Number(pageCatNavWrapper.attr('data-allposts'));

    if ( targetAllPosts <= 6 ){
      pageCatNavWrapper.addClass('d-none');
    }else{
      pageCatNavWrapper.removeClass('d-none');
    }

    let data = {

      action: 'change_curses_category',
      allCat: allCat,
      currentLang: currentLang,
      subCatId: subCatId
    };

    jQuery.post( myajax.url, data, function(response) {

      if(jQuery.trim(response) !== ''){

        jQuery('#curses-list').html(response);
      }
    });

  });*/

  //Вывод больше курсов

  /*if ( jQuery('.page-template-template-home').length ){

    var activeCat = jQuery('.curses-cat-wrapper .cat.active-cat');
    var allPosts = Number(activeCat.attr('data-allposts'));

    jQuery('#mor-curses-dtn-wrap').attr('data-allposts', allPosts);

    var targetAllPosts = Number(jQuery('#mor-curses-dtn-wrap').attr('data-allposts'));

    var btnMore = jQuery('#more-curses');

    btnMore.attr('data-currentcat', activeCat.attr('data-subcatid'));
    btnMore.attr('data-allcat', activeCat.attr('data-allcat'));

    btnMore.on('click', function (e) {
      e.preventDefault();

      var curseLeng = jQuery(this).attr('data-lang');
      var curseCurrentCat = Number(jQuery(this).attr('data-currentcat'));
      var curseAllCat = Number(jQuery(this).attr('data-allcat'));

      var moreCurses = {
        action: 'more_curses',
        currentLang: curseLeng,
        allCat: curseAllCat,
        currentCat: curseCurrentCat
      };

      jQuery.post( myajax.url, moreCurses, function(response) {

        if(jQuery.trim(response) !== ''){

          jQuery('#curses-list').append(response);
        }
      });

      jQuery('#mor-curses-dtn-wrap').addClass('d-none');

    });

  }*/



  //Webinar Countdown Timer

  /*if ( jQuery('.courses-template-template-webinar-page').length ){

    let startData = Number(jQuery('#timer').data('start'));

    const date = new Date(startData*1000);

    startData = new Date(date).getTime();

    // Update the count down every 1 second
    let dataTimer = setInterval(function() {

      // Get today's date and time
      let getDate = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = startData - getDate;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"

      jQuery('#timer .day .date').text(days);
      jQuery('#timer .hour .date').text(hours);
      jQuery('#timer .minute .date').text(minutes);
      jQuery('#timer .second .date').text(seconds);


      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(dataTimer);

      }
    }, 1000);

  }*/
    // MAP INIT

    /*function initMap() {
        var location = {
            lat: 48.268376,
            lng: 25.9301257
        };

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: location,
            scrollwheel: false
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map
        });

        var marker = new google.maps.Marker({ // кастомный марекр + подпись
            position: location,
            title:"Город, Улица, \n" +
            "Дом, Квартира",
            map: map,
            icon: {
                url: ('img/marker.svg'),
                scaledSize: new google.maps.Size(141, 128)
            }
        });

        jQuery.getJSON("map-style_dark.json", function(data) { // подключения стиля для гугл карты
            map.setOptions({styles: data});
        });

    }

    initMap();*/

    // MOB-MENU

    /*jQuery('#menu-btn').on('click', function (e) {
       e.preventDefault();

       jQuery('#mob-menu').toggleClass('active-menu');
       jQuery(this).toggleClass('open-menu');
    });

    jQuery('#mob-menu a').on('click', function (e) {
        e.preventDefault();

        jQuery('#mob-menu').removeClass('active-menu');
        jQuery('#menu-btn').removeClass('open-menu');
    });*/




    // CASTOME SLIDER ARROWS

    /*jQuery('.mein-slider').slick({
        autoplay: false,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true

    });

    jQuery('.main-page .arrow-left').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickPrev');
    });

    jQuery('.main-page .arrow-right').click(function(e){
        e.preventDefault();

        jQuery('.mein-slider').slick('slickNext');
    });*/



    // DTA VALUE REPLACE

    /*jQuery('.open-form').on('click', function (e) {
        e.preventDefault();
        var type = jQuery(this).data('type');
        jQuery('#type-form').find('input[name=type]').val(type);
    });*/

    // FORM LABEL FOCUS UP

    /*jQuery('.form-control').on('focus', function() {
        jQuery(this).closest('.form-control').find('label').addClass('active');
    });

    jQuery('.form-control').on('blur', function() {
        var jQuerythis = jQuery(this);
        if (jQuerythis.val() == '') {
            jQuerythis.closest('.form-control').find('label').removeClass('active');
        }
    });*/

    // SCROLL TOP.

    /*jQuery(document).on('click', '.up-btn', function() {
        jQuery('html, body').animate({
            scrollTop: 0
        }, 300);
    });*/

    // SHOW SCROLL TOP BUTTON.

    /*jQuery(document).scroll(function() {
        var y = jQuery(this).scrollTop();

        if (y > 800) {
            jQuery('.up-btn').fadeIn();
        } else {
            jQuery('.up-btn').fadeOut();
        }
    });*/



});

// PRELOADER

/*jQuery(window).on('load', function () {

    jQuery('#loader').fadeOut(400);
});*/
