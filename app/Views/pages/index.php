<?php $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
<div class="section">
    <div class="left-sidebar">
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-1.svg"></div>
            <a href="">
                <span class="menu-item__text">Мой кабинет</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-2.svg"></div>
            <a href="">
                <span class="menu-item__text">Мой кошелёк</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-3.svg"></div>
            <a href="">
                <span class="menu-item__text">Сообщения</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-4.svg"></div>
            <a href="">
                <span class="menu-item__text">Мои дипломы</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-5.svg"></div>
            <a href="">
                <span class="menu-item__text">Мои курсы</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-6.svg"></div>
            <a href="">
                <span class="menu-item__text">Мои бонусы</span>
            </a>
        </div>
        <span class="menu-separator">Инструменты</span>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-7.svg"></div>
            <a href="">
                <span class="menu-item__text">Опубликовать документ</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-8.svg"></div>
            <a href="">
                <span class="menu-item__text">Тексты и конкурсы</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-9.svg"></div>
            <a href="">
                <span class="menu-item__text">Создать диплом</span>
            </a>
        </div>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-10.svg"></div>
            <a href="">
                <span class="menu-item__text">Проверка диплома</span>
            </a>
        </div>
        <span class="menu-separator">Мой заработок</span>
        <div class="menu-item">
            <div class="menu-item__icon"><img src="/assets/img/icon-11.svg"></div>
            <a href="">
                <span class="menu-item__text">Партнёрский кабинет</span>
            </a>
        </div>
    </div>
    <div class="main-section">
        <div class="main-section__download">
            <form class="main-section__form" action="" method="post">
                <h2 class="check-content__heading">Заголовок</h2>
                <input class="check-content__heading__input" type="text">
                <div class="check-content__heading__characters">
                    <span class="check-content__heading__characters__now">0</span>
                    <span> из </span>
                    <span class="check-content__heading__characters__max">70</span>
                    <span> символов</span>
                </div>
                <h2 class="editor__heading">Текст</h2>
                <div class="editor">
                    <div class="editor__controls">
                        <span id="btn-paragraph">P</span>
                        <span id="btn-bold">B</span>
                        <span id="btn-italics">I</span>
                        <span id="btn-underline">U</span>
                    </div>
                    <div id="editorjs"></div>
                    <div class="check-content__text__characters">
                        <span class="check-content__text__characters__now">0</span>
                        <span> символов </span>
                        <span>(минимум </span>
                        <span class="check-content__text__characters__min">1200</span>
                        <span>)</span>
                    </div>
                </div>
                <input type="submit" id="btn-content-check" value="Проверить материал">
                <p class="new-experts-content">Новым экспертам доступно <span>3</span> проверки на одну публикацию.</p>
            </form>
            <div class="right-sidebar">
                <h3 class="right-sidebar__heading">Только в ООО "Солнечный Свет"</h3>
                <p class="right-sidebar__desc">Вы можете сделать полностью уникальный материал и получить свидетельство за вклад в методическое обеспечение учебного процесса по преподаваемой дисциплин.</p>
                <img src="/assets/img/sert-sidebar.png" class="right-sidebar__certificate">
                <div class="certificate-hover">
                    <div class="certificate-hover__desc">Чтобы получить <span>Благодарность</span> Вам необходимо:</div>
                    <div class="certificate-hover__condition">Опубликовать <span>3</span> авторских материала</div>
                </div>
                <span class="right-sidebar__subheading">Ваше имя и материал увидят более 30.000 коллег</span>
                <div class="right-sidebar__stat">
                    <div class="right-sidebar__stat__text">
                        <span>Символов</span>
                        <div class="right-sidebar__stat__value">
                            <span class="right-sidebar__stat__symbols-now">0</span>
                            <span class="right-sidebar__stat__symbols-min"><span> > </span>1200</span>
                        </div>
                    </div>
                    <div class="right-sidebar__stat__text">
                        <span>Уникальность</span>
                        <div class="right-sidebar__stat__value">
                            <span class="right-sidebar__stat__unique-now">0<span>%</span></span>
                            <span class="right-sidebar__stat__unique-min"><span> = </span>100<span>%</span></span>
                        </div>
                    </div>
                    <div class="right-sidebar__stat__text">
                        <span>Символов</span>
                        <div class="right-sidebar__stat__value">
                            <span class="right-sidebar__stat__spam-now">0<span>%</span></span>
                            <span class="right-sidebar__stat__span-min"><span> < </span>7<span>%</span></span>
                        </div>
                    </div>
                    <div class="published">
                        <span class="published-heading">Вы уже опубликовали:</span>
                        <div class="published__content">
                            <span class="published__content-numbers">0</span>
                            <span class="published__content-text">материалов</span>
                        </div>
                        <span class="publish-content">Опубликуйте ещё <span class="publish-content-value">3</span> материала</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="calculator-section">
            <span class="calculator__heading">Рассчитайте выгоду загрузки материалов на «Солнечный свет»</span>
            <div class="calculator">
                <div class="calculator-top">
                    <span class="calculator-top_text">Количество материалов в день</span>
                    <span class="calculator-top_value"></span>
                </div>
                <form class="slider">
                    <input class="calculator-slider" type="range" min="1" max="100" step="1" value="50">
                </form>
                <div class="calculator-bottom">
                    <div class="calculator-bottom__day">
                        <span class="calculator-bottom__day-text">Ваш заработок за день</span>
                        <span class="calculator-bottom__day-value"><span class="ruble"></span></span>
                    </div>
                    <div class="calculator-bottom__month">
                        <span class="calculator-bottom__month-text">Ваш заработок за месяц</span>
                        <span class="calculator-bottom__month-value"><span class="ruble"></span></span>
                    </div>
                </div>
            </div>
            <img class="calculator__certificate" src="/assets/img/serts-calc.png">
            <span class="calculator__certificate-desc">Также вы бесплатно получите благодарственные и поощрительные документы в зависимости от количества опубликованных материалов.</span>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
