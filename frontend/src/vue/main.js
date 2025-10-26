import Vue from 'vue';
// import store from './vuex/store'

document.addEventListener("DOMContentLoaded", function (event) {

    if (document.getElementById("vue-calc")) {
        const Calc = require('./Calc').default;
        Vue.config.productionTip = false;

        let calcApp = new Vue({
            el: '#vue-calc',
            components: {Calc},
            template: '<Calc/>',
        });
    }

    if (document.getElementById("vue-calc-detail")) {
        const CalcDetail = require('./CalcDetail').default;
        Vue.config.productionTip = false;

        let calcApp = new Vue({
            el: '#vue-calc-detail',
            components: {CalcDetail},
            template: '<CalcDetail/>',
        });
    }

});