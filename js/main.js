$(document).ready(function(){
  var menuButton = document.querySelector(".menu-button");
  menuButton.addEventListener("click", function(){
    document.querySelector(".navbar-bottom").classList.toggle("navbar-bottom--visible");
  });
  //===============================================
    var hotelSlider = new Swiper('.hotel-slider', {
      // Optional parameters
      loop: true,
    
      // Navigation arrows
      navigation: {
        nextEl: '.hotel-slider__button--next',
        prevEl: '.hotel-slider__button--prev',
      },
      keyboard: {
          enabled: true,
          onlyInViewport: true,
        },
    });
  //===============================================
    var reviewsSlider = new Swiper('.reviews-slider', {
      // Optional parameters
      loop: true,
    
      // Navigation arrows
      navigation: {
        nextEl: '.reviews-slider__button--next',
        prevEl: '.reviews-slider__button--prev',
      },
    });
  //===============================================
    ymaps.ready(init);
    function init(){
        var myMap = new ymaps.Map("map", {center: [7.890730, 98.294727], zoom: 17});
        var myGeoObject = new ymaps.GeoObject({
          geometry: {
              type: "Point", // тип геометрии - точка
              coordinates: [7.890730, 98.294727] // координаты точки
          }
        });
        myMap.geoObjects.add(myGeoObject); 
    }
  //===============================================
  $('.newsletter').parallax({
      imageSrc: 'img/nlbg.jpg',
      speed: 0.4
  });
  //===============================================  

  var modalButton = $('[data-toggle=modal]'); 
  var modalCloseButton = $('[data-toggle=closeModal]'); 
  modalButton.on('click', openModal);
  modalCloseButton.on('click', closeModal);
  $(document).keydown(function(e) {
    if (e.keyCode == 27) {
      closeModal(event);
    }
  });
  function openModal(){
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.addClass("modal__overlay--visible");
    modalDialog.addClass("modal__dialog--visible");
  }
  function closeModal(event){
    event.preventDefault();
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.removeClass("modal__overlay--visible");
    modalDialog.removeClass("modal__dialog--visible");
  }
  });