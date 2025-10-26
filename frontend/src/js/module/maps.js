export function maps(){
    const mabSelector = document.getElementById('map');
    const center = [54.77638906989717,32.04451399999998];
    function init(){
        let map = new ymaps.Map(mabSelector, {
            // center: [],
            center: center,
            zoom: 13
        });

        let placemark = new ymaps.Placemark(center,{},{});

        map.controls.remove('geolocationControl'); // удаляем геолокацию
        map.controls.remove('searchControl'); // удаляем поиск
        map.controls.remove('trafficControl'); // удаляем контроль трафика
        map.controls.remove('typeSelector'); // удаляем тип
        map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
        map.controls.remove('zoomControl'); // удаляем контрол зуммирования
        map.controls.remove('rulerControl'); // удаляем контрол правил
        // map.behaviors.disable(['scrollZoom']);

        map.geoObjects.add(placemark);
    }
    if (!!mabSelector){
        ymaps.ready(init)
    }
}