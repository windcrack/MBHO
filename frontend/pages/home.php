<?php
/** <title>Главная</title> */
require_once __DIR__ . '/parts/header.php';
?>

<main>
    <div class="wrapper">
        <section class="hero main-right">
            <div class="hero__body">
                <div class="hero-info">
                    <h1 class="title">Домашний интернет и&nbsp;мобильная связь</h1>
                    <div class="sub-title">Одно решение для вашего комфорта</div>
                    <div class="hero-info__button">
                        <button class="btn btn_hero">подключить</button>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <img src="/frontend/src/img/home/hero-1-new.png" alt="" class="pict">
            </div>
            <div class="lines">
                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/lines.svg") ?>
            </div>
        </section>
        <section class="home-advantages full-page">
            <div class="wrapper-inner">
                <div class="home-advantages__body">
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Переход
                                с сохранением
                                номера
                            </div>
                            <div class="home-advantage__text">
                                Сохраняйте свой
                                номер телефона при
                                смене оператора</div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Раздача интернета
                                без доплат
                            </div>
                            <div class="home-advantage__text">
                                Используйте интернет на ноутбуке, планшете
                                и других устройствах без ограничений
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/cardId.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Единый лицевой
                                счет за все услуги
                            </div>
                            <div class="home-advantage__text">
                                Интернет, мобильная
                                связь, ТВ — оплачивайте
                                все разом, одним
                                платежом
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/staff.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Большие пакеты
                                минут и интернета
                            </div>
                            <div class="home-advantage__text">
                                До 2000 минут и 50 ГБ
                                в одном пакете
                                — хватит для всего
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/gb.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Перенос остатков
                            </div>
                            <div class="home-advantage__text">
                                Не израсходовали
                                пакет? Остатки минут,
                                интернета переходят
                                на следующий месяц
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/star.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Дополнительные опции
                            </div>
                            <div class="home-advantage__text">
                                Подключайте безлимит на мессенджеры, соцсети, музыку, видео
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/people.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Группа для близких и друзей
                            </div>
                            <div class="home-advantage__text">
                                Делитесь пакетами минут, SMS и ГБ с семьей и друзьями
                            </div>
                        </div>
                    </div>
                    <div class="home-advantage">
                        <div class="home-advantage__header">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/world.svg") ?>
                            </div>
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/info.svg") ?>
                            </div>
                        </div>
                        <div class="home-advantage__info">
                            <div class="home-advantage__title">
                                Международный роуминг
                            </div>
                            <div class="home-advantage__text">
                                1 ГБ интернета
                                или 30 минут связи
                                в популярных странах
                                и по всему миру
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-tariffs full-page">
            <div class="wrapper-inner">
                <div class="home-tariffs__section-header section-header">
                    <h2 class="title-second">выберите свой тариф</h2>
                </div>
                <div class="home-tariffs__filters">
                    <div class="home-tariffs__location">
                        <div class="home-tariffs__location-title">Населенный пункт</div>
                        <details class="select">
                            <summary class="select__header">
                                <span class="select__title">Тбилисская</span>
                                <span class="select__icon icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/select-icon.svg"); ?>
                                </span>
                            </summary>
                            <div class="select__body">
                                <div class="select__text">Тбилисская</div>
                                <div class="select__text">Тбилисская 2</div>
                            </div>
                        </details>
                    </div>
                    <div class="home-tariffs__tabs tabs">
                        <button class="btn btn_tab active">2в1</button>
                        <button class="btn btn_tab">3в1</button>
                        <button class="btn btn_tab">4в1</button>
                    </div>
                </div>
                <div class="home-tariffs__body">
                    <div class="home-tariff">
                        <div class="home-tariff__slider swiper js-slider-home-tariff">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="home-tariff__card">
                                        <div class="home-tariff__header">
                                            <div class="home-tariff__title">
                                                ТАРИФ 2 в 1
                                            </div>
                                            <div class="home-tariff__icons">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim-blue.svg"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__content">
                                            <div class="home-tariff__bg">
                                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/bg-tariff-card.svg"); ?>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Домашний интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        200 Мб/c
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/phone-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Звонки
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 мин
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/mob-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Мобильный интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        50 Гб
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sms-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Cмс
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 шт
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__list">
                                            <div class="home-tariff__item">Переход с сохранением номера</div>
                                            <div class="home-tariff__item">Безлимит на мессенджеры, соцсети и т.д.</div>
                                            <div class="home-tariff__item">Перенос остатков минут, SMS и интернета</div>
                                        </div>
                                        <div class="home-tariff__footer">
                                            <div class="home-tariff__price">390 ₽/мес</div>
                                            <div class="home-tariff__button">
                                                <button class="btn btn_card">подключить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="home-tariff__card">
                                        <div class="home-tariff__header">
                                            <div class="home-tariff__title">
                                                ТАРИФ 2 в 1
                                            </div>
                                            <div class="home-tariff__icons">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/tv-blue.svg"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__content">
                                            <div class="home-tariff__bg">
                                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/bg-tariff-card.svg"); ?>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Домашний интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        200 Мб/c
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/phone-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Звонки
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 мин
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/mob-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Мобильный интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        50 Гб
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sms-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Cмс
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 шт
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/tv-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Комбо Лайт
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        до 190 каналов
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__list">
                                            <div class="home-tariff__item">Переход с сохранением номера</div>
                                            <div class="home-tariff__item">Безлимит на мессенджеры, соцсети и т.д.</div>
                                            <div class="home-tariff__item">Перенос остатков минут, SMS и интернета</div>
                                        </div>
                                        <div class="home-tariff__footer">
                                            <div class="home-tariff__price">390 ₽/мес</div>
                                            <div class="home-tariff__button">
                                                <button class="btn btn_card">подключить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="home-tariff__card">
                                        <div class="home-tariff__header">
                                            <div class="home-tariff__title">
                                                ТАРИФ 2 в 1
                                            </div>
                                            <div class="home-tariff__icons">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/tv-blue.svg"); ?>
                                                </div>
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/star-blue.svg"); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__content">
                                            <div class="home-tariff__bg">
                                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/bg-tariff-card.svg"); ?>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Домашний интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        200 Мб/c
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/phone-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Звонки
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 мин
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/mob-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Мобильный интернет
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        50 Гб
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sms-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Cмс
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        300 шт
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="home-tariff__row" data-row-info="+ Кинотеатр Premier">
                                                <div class="icon">
                                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/tv-bg.svg"); ?>
                                                </div>
                                                <div class="home-tariff__row-info">
                                                    <div class="home-tariff__row-title">
                                                        Комбо Микс
                                                    </div>
                                                    <div class="home-tariff__row-text">
                                                        до 290 каналов
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home-tariff__list">
                                            <div class="home-tariff__item">Переход с сохранением номера</div>
                                            <div class="home-tariff__item">Безлимит на мессенджеры, соцсети и т.д.</div>
                                            <div class="home-tariff__item">Перенос остатков минут, SMS и интернета</div>
                                        </div>
                                        <div class="home-tariff__footer">
                                            <div class="home-tariff__price">390 ₽/мес</div>
                                            <div class="home-tariff__button">
                                                <button class="btn btn_card">подключить</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-tariff__pagination js-pagination-home-tariff"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-connect">
            <div class="chip-bg">
                <img src="/frontend/src/img/home/hc-bg.png" alt="">
            </div>
            <div class="home-connect__section-header section-header">
                <h2 class="home-connect__title-second title-second">Как подключить?</h2>
            </div>
            <div class="home-connect__body">
                <div class="home-connect__card">
                    <div class="home-connect__icons">
                        <div class="home-connect__icon">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                        <div class="home-connect__icon">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                    </div>
                    <div class="home-connect__info">
                        <div class="home-connect__icons">
                            <div class="home-connect__icon">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                            <div class="home-connect__icon">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="home-connect__title">Есть интернет и SIM, но по отдельности</div>
                        <div class="home-connect__text">
                            Заявка на объединение → подбираем тариф с интернетом и связью → SIM и номер
                            сохраняются, интернет без изменений → всё в одном пакете, один счёт и кабинет.
                        </div>
                    </div>
                </div>
                <div class="home-connect__card">
                    <div class="home-connect__icons">
                        <div class="home-connect__icon white">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                        <div class="home-connect__icon">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                    </div>
                    <div class="home-connect__info">
                        <div class="home-connect__icons">
                            <div class="home-connect__icon">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                            <div class="home-connect__icon">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="home-connect__title">
                            Есть интернет, нет SIM 
                        </div>
                        <div class="home-connect__text">
                            Заявка онлайн или звонок → уточняем детали, оформляем SIM → доставляем
                            (можно с сохранением номера) → связь и интернет сразу активны в одном решении.
                        </div>
                    </div>
                </div>
                <div class="home-connect__card">
                    <div class="home-connect__icons">
                        <div class="home-connect__icon">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                        <div class="home-connect__icon white">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                    </div>
                    <div class="home-connect__info">
                        <div class="home-connect__icons">
                            <div class="home-connect__icon">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                            <div class="home-connect__icon white">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="home-connect__title">Есть SIM, нет интернета </div>
                        <div class="home-connect__text">
                            Заявка → подбираем тариф и время → подключаем интернет,
                            настраиваем оборудование → SIM активна, интернет работает, всё в одном счёте.
                        </div>
                    </div>
                </div>
                <div class="home-connect__card">
                    <div class="home-connect__icons">
                        <div class="home-connect__icon white">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                        <div class="home-connect__icon white">
                            <div class="icon">
                                <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                            </div>
                            <div class="home-connect__simbol">
                                +
                            </div>
                            <div class="home-connect__simbol">
                                -
                            </div>
                        </div>
                    </div>
                    <div class="home-connect__info">
                        <div class="home-connect__icons">
                            <div class="home-connect__icon white">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/sim.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                            <div class="home-connect__icon white">
                                <div class="icon">
                                    <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/wifi.svg"); ?>
                                </div>
                                <div class="home-connect__simbol">
                                    +
                                </div>
                                <div class="home-connect__simbol">
                                    -
                                </div>
                            </div>
                        </div>
                        <div class="home-connect__title">Нет интернета, нет SIM </div>
                        <div class="home-connect__text">
                            Заявка или звонок → мы подбираем тариф → подключаем интернет,
                            ставим оборудование и SIM → сразу работает «интернет + связь» с одним счетом.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-question">
            <div class="home-question__section-header section-header">
                <h2 class="home-question__title-second title-second">Ответы на&nbsp;частые&nbsp;вопросы </h2>
            </div>
            <div class="home-question__wrap">
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Как перейти  с сохранением номера?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Где найти подробную информацию об акционном тарифе?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">В каких регионах можно подключить акционный тариф?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Как скачать приложение , если у меня iPhone?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Почему могут отказать в переносе номера?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Как происходит переход с сохранением номера?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
                <details name="FAQ" class="home-question__card">
                    <summary class="home-question__header">
                        <span class="home-question__title">Как пользоваться связью, пока номер переносится?</span>
                        <span class="icon">
                            <?= file_get_contents($_SERVER["DOCUMENT_ROOT"]."/frontend/src/svg/q-icon.svg"); ?>
                        </span>
                    </summary>
                    <div class="home-question__body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Asperiores autem corporis cum, explicabo necessitatibus odit optio quos recusandae tempore,
                        totam unde vel vitae voluptate? Dolorem facilis id neque nulla tempore.
                    </div>
                </details>
            </div>
        </section>
    </div>
</main>

<?php require_once __DIR__ . '/parts/footer.php'; ?>
