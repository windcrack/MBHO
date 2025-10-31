import { sliders } from "./module/sliders";
import {toggleMenuMob} from "./module/mobile";
import {InitSizeVar} from "./module/initSizeVar";
import {Tabs} from "./module/tabs";
import {showInfo} from "./module/showInfo";

(function() {
    /**
     * Корректировка округления десятичных дробей.
     *
     * @param {String}  type  Тип корректировки.
     * @param {Number}  value Число.
     * @param {Integer} exp   Показатель степени (десятичный логарифм основания корректировки).
     * @returns {Number} Скорректированное значение.
     */
    function decimalAdjust(type, value, exp) {
        // Если степень не определена, либо равна нулю...
        if (typeof exp === 'undefined' || +exp === 0) {
            return Math[type](value);
        }
        value = +value;
        exp = +exp;
        // Если значение не является числом, либо степень не является целым числом...
        if (isNaN(value) || !(typeof exp === 'number' && exp % 1 === 0)) {
            return NaN;
        }
        // Сдвиг разрядов
        value = value.toString().split('e');
        value = Math[type](+(value[0] + 'e' + (value[1] ? (+value[1] - exp) : -exp)));
        // Обратный сдвиг
        value = value.toString().split('e');
        return +(value[0] + 'e' + (value[1] ? (+value[1] + exp) : exp));
    }

    // Десятичное округление к ближайшему
    if (!Math.round10) {
        Math.round10 = function(value, exp) {
            return decimalAdjust('round', value, exp);
        };
    }
    // Десятичное округление вниз
    if (!Math.floor10) {
        Math.floor10 = function(value, exp) {
            return decimalAdjust('floor', value, exp);
        };
    }
    // Десятичное округление вверх
    if (!Math.ceil10) {
        Math.ceil10 = function(value, exp) {
            return decimalAdjust('ceil', value, exp);
        };
    }
})();

document.addEventListener("DOMContentLoaded", function (){
    const isMobile = window.matchMedia("(max-width: 850px)").matches;
    /** Отключено за не надобностью */
    // new InitSizeVar('header', {
    //     spaceNameClass: '.top-space',
    // });

    // if(isMobile){
    //     toggleMenuMob();
    // }
    /** ------------- */
    sliders();

    try {
        new Tabs({
            tabsInit: '.js-tabs-home-tariffs',
            contentInit: '.js-home-tariffs-body-1',
            addActiveClassFirst: true
        });

        function changeTubs() {
            const selectBody = document.querySelector('.js-select-body');
            const selectText = selectBody.querySelectorAll('.select__text');
            const details = document.querySelectorAll('.js-home-tariffs-settlement details');
            const tarifTabs = document.querySelectorAll('.js-tabs-home-tariffs [data-tab-name]');
            const selectTitle = selectBody.previousElementSibling.querySelector('.select__title');
            // console.log(selectBody.previousElementSibling.querySelector('.select__title'));
            selectText.forEach((text, index) => {
                text.addEventListener('click', () => {
                    const curTextVal = text.getAttribute('data-text-val');
                    selectBody.closest('.select').removeAttribute('open');
                    console.log(text);
                    selectTitle.innerText = text.innerHTML.trim();


                    // Скрываем все details
                    details.forEach(detail => detail.removeAttribute('open'));
                    // Показываем нужный
                    details[index].setAttribute('open', '');

                    // Меняем data-tab-name
                    tarifTabs.forEach((item, indx) => {
                        const defData = item.getAttribute('data-tab-name');

                        // Проверяем, есть ли уже добавленное значение
                        if (!defData.endsWith(`-${curTextVal}`)) {
                            // Если было добавлено раньше другое значение, убираем его
                            const baseName = defData.split('-')[0];
                            item.setAttribute('data-tab-name', `${baseName}-${curTextVal}`);
                        }

                        if(indx === 0) item.click();
                    });

                    const tabs = new Tabs({
                        tabsInit: '.js-tabs-home-tariffs',
                        contentInit: `.js-home-tariffs-body-${curTextVal}`,
                        addActiveClassFirst: true
                    });
                });
            });
        }

        changeTubs();

        showInfo();
    }catch (e){
        console.log(e)
    }

});