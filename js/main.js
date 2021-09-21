const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.slider-button--next',
      prevEl: '.slider-button--prev',
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
      },
  });
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