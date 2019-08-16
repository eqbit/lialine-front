$(function () {
  handleHeader();
  handleTopScreenSlider();
  handleDatepicker('[data-date-range-from]');
  handleDatepicker('[data-date-range-from-s-f]');
  handleDatepicker('[data-date-range-from-f-f]');
  handleSelects();
  handleCountrySelect();
  handleCommonSliders();
  handleCountrySlider();
  handleSwipe();
  maskPhone();
  handleAnchorClick();
  handlePossibilitiesSlider();
  handleMaps();
  handleOfferDetail();
  handleGallerySlider();
  handleFixedOfferDetail();
  handleForms();
  handleFormClose();
  handleOfferSubmit();
  handleOverlayClick();
  
  $(window).scroll(function () {
    handleWindowScrollEvents();
  });
});

const handleWindowScrollEvents = function() {
  windowScrollEvents.forEach(function(f) {
    f();
  })
};

const $header = $('.header');
let windowScrollEvents = [];

const handleHeader = function () {
  windowScrollEvents.push(checkHeader);
  checkHeader();
};

const checkHeader = function () {
  if (!isMobile()) {
    let scroll = $(window).scrollTop();
    
    if (scroll >= 100 && !isMobile()) {
      $header.addClass('fixed');
    } else {
      if ($header.is('.fixed')) {
        $header.removeClass('fixed');
      }
    }
  }
};

const isMobile = function () {
  return $(window).width() < 999;
};

const handleDatepicker = function (selector) {
  const $datePickerFrom = $(selector);
  
  if ($datePickerFrom.length) {
    
    $datePickerFrom.parent().on('click', function (e) {
      e.stopPropagation();
      $datePickerFrom.trigger('click');
    });
    
    $datePickerFrom.dateRangePicker({
      language: 'ru',
      startOfWeek: 'monday',
      singleMonth: true,
      showShortcuts: false,
      showTopbar: false,
      time: {
        enabled: false
      },
      startDate: new Date(),
      separator: ' по ',
      setValue: function (s, s1, s2) {
        let date = new Date(s1).toLocaleDateString("ru-RU"),
          startDate= new Date(s1),
          endDate = new Date(s2),
          totalDays = Math.floor((Math.abs(endDate - startDate) / 1000) / 86400),
          string = totalDays > 0
            ? date + ', ' + totalDays + ' ' + getDays(totalDays)
            : date;
        
        $datePickerFrom.val(string);
      },
      hoveringTooltip: false
    });

    const date = new Date(),
      currentMonth = date.getMonth(),
      currentYear = date.getFullYear();

    if(currentMonth != 12 && currentMonth != 1 && currentMonth != 2) {
      $datePickerFrom.data('dateRangePicker').setStart(currentYear + '-12-1').setEnd(currentYear + '-12-1');
      $datePickerFrom.val('');
    }
  }
};

const getDays = function(number) {
  if(number > 4 && number < 21) return 'дней';
  
  let remainder =  number % 10;
  
  return remainder < 2
    ? 'день'
    : remainder > 4
      ? 'дней'
      : 'дня'
};

const handleTopScreenSlider = function () {
  const $topSlider = $('[data-top-slider]');
  
  if ($topSlider.length) {
    $topSlider.slick({
      infinite: true,
      dots: true,
      appendDots: '.top-screen-dots',
      arrows: false,
      lazyLoad: 'progressive',
      adaptiveHeight: true,
      swipeToSlide: true,
      responsive: [
        {
          breakpoint: 760,
          settings: {
            dots: false
          }
        }
      ]
    });
  }
};

const handleSelects = function () {
  const $selects = $('[data-nice-select]');
  
  $selects.niceSelect();
};

const handleCountrySelect = function () {
  const $countrySelect = $('[data-coutnry-select]');
  
  if ($countrySelect.length) {
    $countrySelect.on('change', function (e) {
      let country = e.target.value;
      
      changeCountryEverywhere($countrySelect, country);
      
      $.ajax({
        url: '/api/ajax.php',
        data: {
          type: 'getCountries',
          country: country
        },
        type: 'POST',
        dataType: 'json',
        success: function (resorts) {
          fillResortsSelect(resorts);
        }
      });
    });
  }
};

const changeCountryEverywhere = function ($countrySelect, country) {
  $countrySelect.each(function () {
    let $select = $(this);
    $select.find('option').removeAttr('selected').each(function () {
      let $option = $(this);
      
      if ($option.val() === country) {
        $option.attr('selected', 'selected');
      }
    });
  });
  
  $countrySelect.niceSelect('update');
};

const fillResortsSelect = function (resorts) {
  const $resortSelect = $('[data-resort-select]');
  
  $resortSelect.html('');
  $resortSelect.append('<option value="">Любой курорт</option>');
  
  resorts.forEach(function (resort) {
    $resortSelect.append('<option value="' + resort + '">' + resort + '</option>');
  });
  
  $resortSelect.niceSelect('update');
};

const handleCommonSliders = function () {
  const commonSliders = $('[data-common-slider]');
  
  if (commonSliders.length) {
    commonSliders.each(function () {
      const $slider = $(this);
      
      $slider.find('[data-common-slider-inner]').slick({
        infinite: true,
        dots: true,
        slidesToShow: 4,
        appendDots: $slider.find('.custom-slick-dots'),
        prevArrow: $slider.find('[data-common-prev]'),
        nextArrow: $slider.find('[data-common-next]'),
        swipeToSlide: true,
        responsive: [
          {
            breakpoint: 1300,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 700,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    });
  }
};

const handleCountrySlider = function () {
  const $countrySlider = $('[data-country-slider]');
  
  if ($countrySlider.length) {
    $countrySlider.find('[data-country-slider-inner]').slick({
      infinite: true,
      dots: true,
      slidesToShow: 3,
      appendDots: $countrySlider.find('.custom-slick-dots'),
      prevArrow: $countrySlider.find('[data-common-prev]'),
      nextArrow: $countrySlider.find('[data-common-next]'),
      swipeToSlide: true,
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 1000,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
  }
};

const handleSwipe = function () {
  const $swipe = $('[data-swipe]'),
    $swipeText = $('[data-swipe-text]');
  
  if ($swipe.length) {
    $swipe.btnSwitch({
      Theme: 'Light',
      OnCallback: function () {
        $('[data-tour-selection-form-small]').hide();
        $('[data-tour-selection-form-full]').fadeIn('fast');
        $swipeText.text('Я знаю, куда хочу поехать, подберите мне оптимальный вариант');
      },
      OffCallback: function () {
        $('[data-tour-selection-form-full]').hide();
        $('[data-tour-selection-form-small]').fadeIn('fast');
        $swipeText.text('Я не знаю,куда хочу поехать, предложите мне лучший вариант');
      }
    });
  }
};

const maskPhone = function () {
  const $phone = $('[data-phone]');
  
  if ($phone.length) {
    $phone.inputmask({mask: '+7(999)999-99-99'});
  }
};

const handleAnchorClick = function () {
  const $anchor = $('[data-anchor]');
  
  $anchor.on('click', function (e) {
    e.preventDefault();
    
    $([document.documentElement, document.body]).animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 300);
  });
};

const handlePossibilitiesSlider = function () {
  const $possibilitiesSliderContainer = $('[data-possibilities-slider-container]'),
    $possibilitiesSlider = $possibilitiesSliderContainer.find('[data-possibilities-slider]');
  
  if ($possibilitiesSlider.length) {
    $possibilitiesSlider.slick({
      infinite: true,
      dots: true,
      slidesToShow: 1,
      appendDots: $possibilitiesSliderContainer.find('.custom-slick-dots'),
      prevArrow: $possibilitiesSliderContainer.find('[data-possibilities-prev]'),
      nextArrow: $possibilitiesSliderContainer.find('[data-possibilities-next]')
    });
  }
};

const handleMaps = function () {
  ymaps.ready(mapInit);
};

const mapInit = function () {
  const $map = $('#footer-map'),
    $eMap = $('#e-map');
  
  if ($map.length) {
    createFooterMap();
  }
  
  if ($eMap.length) {
    createEMap();
  }
};

const createFooterMap = function () {
  let coordinates = [55.651186, 37.483095];
  
  const smallZoomControl = new ymaps.control.ZoomControl({
    options: {
      size: 'small',
      float: 'none',
      position: {
        top: 158,
        right: 50
      }
    }
  });
  
  const map = new ymaps.Map('footer-map', {
    center: coordinates,
    zoom: 15,
    controls: [smallZoomControl]
  });
  
  map.behaviors.disable('scrollZoom');
  
  map.geoObjects.add(new ymaps.Placemark(coordinates, {
    iconCaption: 'офис 204/220'
  }, {
    preset: 'islands#redIcon'
  }));
};

const createEMap = function () {
  
  $.ajax({
    url: '/api/ajax.php',
    data: {
      type: 'getEMapData'
    },
    type: 'POST',
    dataType: 'json',
    success: function (response) {
      
      const smallZoomControl = new ymaps.control.ZoomControl({
        options: {
          size: 'small',
          float: 'none',
          position: {
            top: 158,
            right: 50
          }
        }
      });
      
      let coordinates = response.coordinates;
      
      const map = new ymaps.Map('e-map', {
        center: coordinates,
        zoom: 7,
        type: 'yandex#satellite',
        controls: [smallZoomControl]
      });
      
      response.resorts.forEach(function (data) {
        addPlacemark(map, data);
      });
    }
  });
  
  
};

const addPlacemark = function (map, data) {
  let layout = ymaps.templateLayoutFactory.createClass(
    '<div>$[properties.iconContent]</div>'
    ),
    
    placeMark = new ymaps.Placemark(data.coordinates, {
      iconContent: '' +
      '<div class="e-map-btn">' +
      '<div class="e-map-btn__title">' + data.title + '</div>' +
      '<div class="e-map-btn__price">' + data.price + '</div>' +
      '<div class="e-map-btn__arrow">' +
      '<svg xmlns="http://www.w3.org/2000/svg" width="35.45" height="18" viewBox="0 0 35.45 18">\n' +
      '  <path id="Path_210" data-name="Path 210" d="M247.9,899.288l5.593-10.171a10.348,10.348,0,0,1,7.735-5.249h-35.45a10.348,10.348,0,0,1,7.735,5.249l5.593,10.171A5.038,5.038,0,0,0,247.9,899.288Z" transform="translate(-225.775 -883.867)" fill="#f77b00"/>\n' +
      '</svg>\n' +
      '</div>' +
      '</a>'
    }, {
      iconLayout: 'default#imageWithContent',
      iconImageHref: '/app/images/eMapBtn.png',
      iconImageSize: [194, 98],
      iconImageOffset: [-100, -100],
      iconContentOffset: [15, 15],
      iconContentLayout: layout
    });
  
  map.geoObjects
    .add(placeMark);
  
  placeMark.events.add('click', function () {
    window.location.assign(data.link);
  });
};

const handleOfferDetail = function () {
  const $offerDetail = $('[data-offer-detail]');
  
  if ($offerDetail.length) {
    $(window).resize(function () {
      checkOfferDetail();
    });
  }
};

const checkOfferDetail = function () {
  const $offerDetail = $('[data-offer-detail]'),
    $top = $('[data-offer-detail-top-container]'),
    $bottom = $('[data-offer-detail-bottom-container]');
  let height = $offerDetail.outerHeight();
  
  $top.css('padding-bottom', height / 2 + (isMobile() ? 75 : 120));
  $bottom.css('padding-top', height / 2);
  
};

const handleFixedOfferDetail = function() {
  windowScrollEvents.push(checkFixedOfferDetail);
  checkFixedOfferDetail();
};

const checkFixedOfferDetail = function() {
  const $offerDetail = $('[data-offer-detail]'),
    $body = $('body');
  
  if($offerDetail.length && !isMobile()) {
    let windowScroll = $(window).scrollTop(),
      offerScroll = $offerDetail.offset().top + $offerDetail.outerHeight();
    
    if(windowScroll > offerScroll) {
      $body.addClass('show-fixed-offer');
    } else {
      $body.removeClass('show-fixed-offer');
    }
  }
};


const handleGallerySlider = function () {
  const $sliderFull = $('[data-offer-gallery-full]'),
    $sliderThumbs = $('[data-offer-gallery-thumbs]');
  
  if ($sliderFull.length && $sliderThumbs.length) {
    $sliderFull.slick({
      infinite: true,
      slidesToShow: 1,
      asNavFor: $sliderThumbs,
      prevArrow: $('[data-offer-slider-prev]'),
      nextArrow: $('[data-offer-slider-next]'),
      dots: true,
      appendDots: '.offer-gallery-slider-dots',
      lazyLoad: 'progressive'
    });
    
    $sliderThumbs.slick({
      infinite: true,
      slidesToShow: 7,
      asNavFor: $sliderFull,
      arrows: false,
      focusOnSelect: true,
      swipeToSlide: true,
      prevArrow: $('[data-offer-slider-prev]'),
      nextArrow: $('[data-offer-slider-next]'),
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            slidesToShow: 6
          }
        },
        {
          breakpoint: 1100,
          settings: {
            slidesToShow: 5
          }
        }
      ]
    });
  }
};

const callPopup = function(popup) {
  const $popup = $('[data-popup=' + popup + ']');
  $popup.addClass('visible');
};

const hidePopup = function(popup) {
  const $popup = $('[data-popup=' + popup + ']');
  $popup.removeClass('visible');
};

const fillPopupRequest = function(data) {
  const $popup = $('[data-popup=request]');
  
  $popup.find('[data-country]').text(data.country);
  
  if(data.resort) {
    $popup.find('[data-resort]').text(data.resort).show();
  } else {
    $popup.find('[data-resort]').hide();
  }
  
  if(!data.hotelName) {
    $popup.find('[data-hotel-data]').hide();
  } else {
    $popup.find('[data-hotel-data-name]').text(data.hotelName);
    $popup.find('[data-hotel-data-dates]').text(data.hotelDates);
    $popup.find('[data-hotel-data-days]').text(data.hotelDays);
    $popup.find('[data-hotel-data-price]').text(data.hotelPrice);
    $popup.find('[data-hotel-data-img]').attr('src', data.hotelImg);
  
    $('[data-hotel-data-stars]').html('');
    for(let i = 0; i < data.hotelStars; i++) {
      $('[data-hotel-data-stars]').append('<img src="/app/images/star.png">');
    }
  }
  
  if(!data.kids) {
    data.kids = '0';
  }
  
  $popup.find('[data-kids]')
    .find('option')
    .removeAttr('selected')
    .each(function() {
      if(data.kids == $(this).val()) {
        $(this).attr('selected', 'selected');
      }
    });
  
  $popup.find('[data-adults]')
    .find('option')
    .removeAttr('selected')
    .each(function() {
      if(data.adults == $(this).val()) {
        $(this).attr('selected', 'selected');
      }
    });
  
  $('[data-nice-select]').niceSelect('update');
};

const handleForms = function () {
  const $bottomFormFull = $('[data-tour-selection-form-full]'),
    $bottomFormSmall = $('[data-tour-selection-form-small]'),
    $topForm = $('[data-top-form]'),
    $popupForm = $('[data-popup-form]');
  
  $topForm.on('submit', function(e) {
    e.preventDefault();
    let data = {};
    $topForm.serializeArray().map(function(item) {
      data[item.name] = item.value;
    });
    
    window.formData = data;
    
    fillPopupRequest(data);
    
    callPopup('request');
  });
  
  $popupForm.on('submit', function(e) {
    e.preventDefault();
    
    let popupData = {};
    $popupForm.serializeArray().map(function(item) {
      popupData[item.name] = item.value;
    });
    
    $.ajax({
      url: '/api/ajax.php',
      type: 'POST',
      dataType: 'json',
      data: Object.assign({
        type: 'handleForm'
      }, window.formData, popupData),
      success: function(response) {
        if(response.status === 'success') {
          hidePopup('request');
          callPopup('success');
          
          setTimeout(function () {
            hidePopup('success');
          }, 3000);
        }
      }
    })
  });
  
  $bottomFormFull.on('submit', handleBottomForm);
  $bottomFormSmall.on('submit', handleBottomForm);
};

function handleBottomForm(e) {
  e.preventDefault();
  let data = {},
    $form = $(this);
  
  $form.serializeArray().map(function(item) {
    data[item.name] = item.value;
  });
  
  $.ajax({
    url: '/api/ajax.php',
    type: 'POST',
    dataType: 'json',
    data: Object.assign({
      type: 'handleForm'
    }, data),
    success: function(response) {
      if(response.status === 'success') {
        $form.find('[type=submit]').attr('disabled', 'disabled');
        callPopup('success');
        
        setTimeout(function () {
          hidePopup('success');
        }, 3000);
      }
    }
  })
}

const handleFormClose = function() {
  const $close = $('[data-popup-close]');
  
  $close.on('click', function() {
    $(this).closest('[data-popup]').removeClass('visible');
  })
};

const handleOfferSubmit = function() {
  const $submitBtn = $('[data-offer-submit]'),
    $form = $('[data-hidden-hotel-form]');
  
  $submitBtn.on('click', function() {
    $form.submit();
  });
  
  $form.on('submit', function(e){
    e.preventDefault();
  
    let data = {},
      $form = $(this);
  
    $form.serializeArray().map(function(item) {
      data[item.name] = item.value;
    });
  
    window.formData = data;
  
    fillPopupRequest(data);
  
    callPopup('request');
  })
};

const handleOverlayClick = function() {
  $('.overlay').on('click', function (e) {
    if(!$(e.target).closest('.popup').length) {
      $(this).closest('[data-popup]').removeClass('visible');
    }
  });
};