<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <title>Конструктор Худи</title>
    <link rel="stylesheet" href="./css/index.min.css?v=<?= time() ?>">
    <style></style>
</head>

<body>
    <header>

    </header>
    <div class="constructor-hoodie">
        <div class="container">
            <div class="constructor-hoodie__design human">
                <div class="display-selection">
                    <div class="clothes"><img src='./img/ico-1.png' alt='img' srcset='./img/svg/ico-1.svg'></div>
                    <div class="person"><img src='./img/ico-2.png' alt='img' srcset='./img/svg/ico-2.svg'></div>
                </div>
                <div class="hoodie-nav_bottom">
                    <div id="random-btn">

                        <p>Мне повезет</p>
                    </div>
                    <!-- <div class="clue">?</div> -->
                </div>
                <div class="title-choice title-anim">
                    <p><span></span> <b>Всего 10 простых шагов<br>и худи твое!</b></p>
                </div>
                <div class="design-box">
                    <div class="design-box__legs">

                    </div>
                    <div class="design-box__cuff_left">

                    </div>
                    <div class="design-box__cuff_right">

                    </div>
                    <div class="design-box__sleeve_left">

                    </div>
                    <div class="design-box__sleeve_right">

                    </div>
                    <div class="design-box__length">

                    </div>
                    <div class="design-box__bottom">

                    </div>
                    <div class="design-box__pocket">

                    </div>
                    <div class="design-box__logo">
                    </div>
                    <div class="design-box__hood-person">

                    </div>
                    <div class="design-box__hood">

                    </div>
                </div>
            </div>
            <div class="constructor-hoodie__parameters">
                <div class="parameters-box">
                    <div class="parameters-box__head owl-carousel">
                        <a href="#sleeve-left" class="item" data-hash="sleeve-left">
                            <p>Левый рукав</p>
                        </a>
                        <a href="#sleeve-right" class="item" data-hash="sleeve-right">
                            <p>Правый рукав</p>
                        </a>
                        <a href="#cuff-left" class="item" data-hash="cuff-left">
                            <p>Левый манжет</p>
                        </a>
                        <a href="#cuff-right" class="item" data-hash="cuff-right">
                            <p>Правый манжет</p>
                        </a>
                        <a href="#front" class="item" data-hash="front">
                            <p>Спереди</p>
                        </a>
                        <a href="#back" class="item" data-hash="back">
                            <p>Спина</p>
                        </a>
                        <a href="#bottom" class="item" data-hash="bottom">
                            <p>Низ</p>
                        </a>
                        <a href="#hood" class="item" data-hash="hood">
                            <p>Капюшон</p>
                        </a>
                        <a href="#pocket" class="item" data-hash="pocket">
                            <p>Карман</p>
                        </a>
                        <a href="#cloth" class="item" data-hash="cloth">
                            <p>Ткань</p>
                        </a>
                        <a href="#embroidery" class="item" data-hash="embroidery">
                            <p>Вышивка</p>
                        </a>
                        <a href="#size" class="item" data-hash="size">
                            <p>Размер</p>
                        </a>
                        <a href="#growth" class="item" data-hash="growth">
                            <p>Рост</p>
                        </a>
                    </div>
                    <div class="parameters-box__mob"></div>
                    <div class="parameters-box__main owl-carousel">
                        <div class="choice" data-hash="sleeve-left">
                            <div class="choice-color" data-choice="sleeve-left">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="sleeve-right">
                            <div class="choice-color" data-choice="sleeve-right">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="cuff-left">
                            <div class="choice-color" data-choice="cuff-left">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="cuff-right">
                            <div class="choice-color" data-choice="cuff-right">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="front">
                            <div class="choice-color" data-choice="front">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="back">
                            <div class="choice-color" data-choice="back">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="bottom">
                            <div class="choice-color" data-choice="bottom">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="hood">
                            <div class="choice-color" data-choice="hood">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="pocket">
                            <div class="choice-color" data-choice="pocket">
                                <ul class="choice-color__free">
                                    <li data-title="Черный" data-item="#000000" style="background-color: #000000"></li>
                                    <li data-title="Фиолет" data-item="#804E82" style="background-color: #804E82"></li>
                                    <li data-title="Лаванда" data-item="#E4CAF1" style="background-color: #E4CAF1"></li>
                                    <li data-title="Маршмеллоу" data-item="#FDD9E8" style="background-color: #FDD9E8"></li>
                                    <li data-title="Песок" data-item="#E5CCAE" style="background-color: #E5CCAE"></li>
                                    <li data-title="Кофе" data-item="#997D68" style="background-color: #997D68"></li>
                                </ul>
                                <ul class="choice-color__price">
                                    <li data-title="Белый" data-item="#FFFFFF" style="background-color: #FFFFFF"></li>
                                    <li data-title="Дымчатый" data-item="#BAC1BF" style="background-color: #BAC1BF;"></li>
                                    <li data-title="Графит" data-item="#57555A" style="background-color: #57555A"></li>
                                    <li data-title="Красный" data-item="#E42C36" style="background-color: #E42C36"></li>
                                    <li data-title="Хеллуин" data-item="#FE6203" style="background-color: #FE6203"></li>
                                    <li data-title="Желтый" data-item="#FFE270" style="background-color: #FFE270"></li>
                                    <li data-title="Лимонный" data-item="#F2EC7A" style="background-color: #F2EC7A"></li>
                                    <li data-title="Фуксия" data-item="#E33D85" style="background-color: #E33D85"></li>
                                    <li data-title="Лайм" data-item="#74C86A" style="background-color: #74C86A"></li>
                                    <li data-title="Хаки" data-item="#64762C" style="background-color: #64762C"></li>
                                    <li data-title="Оливка" data-item="#97A38F" style="background-color: #97A38F"></li>
                                    <li data-title="Изумруд" data-item="#1F9480" style="background-color: #1F9480"></li>
                                    <li data-title="Тиффани" data-item="#B3E2D8" style="background-color: #B3E2D8"></li>
                                    <li data-title="Синий" data-item="#2E4393" style="background-color: #2E4393"></li>
                                    <li data-title="Голубой" data-item="#83A3EC" style="background-color: #83A3EC"></li>
                                    <li data-title="Пыльная роза" data-item="#BB847F" style="background-color: #BB847F"></li>
                                    <li data-title="Пыльный деним" data-item="#A2BEEE" style="background-color: #A2BEEE"></li>
                                    <li data-title="Снежная мята" data-item="#91B4B8" style="background-color: #91B4B8"></li>
                                    <li data-title="Персик" data-item="#EDBFC1" style="background-color: #EDBFC1"></li>
                                    <li data-title="Коралл" data-item="#FDAE97" style="background-color: #FDAE97"></li>
                                    <li data-title="Молочный меланж" data-item="#E2E4E6" style="background-color: #E2E4E6"></li>
                                    <li data-title="Тофу" data-item="#E5E4EA" style="background-color: #E5E4EA"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="choice" data-hash="cloth">
                            <div class="choice-img" data-choice="cloth">
                                <ul class="choice-img__cloth">
                                    <li data-item="no" data-title="Без начеса">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/cloth/img-1.webp">
                                            <img alt="img" src="./img/params/cloth/img-1.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="yes" data-title="С начесом - теплый">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/cloth/img-2.webp">
                                            <img alt="img" src="./img/params/cloth/img-2.jpg">
                                        </picture>
                                    </li>
                                </ul>
                            </div>
                            <div class="choice__info">
                                <div class="choice__info-box">
                                    <picture>
                                        <source type="image/webp" srcset="./img/img-text-1.webp">
                                        <img alt="img" src="./img/img-text-1.jpg">
                                    </picture>
                                    <p>Сейчас еще <span class="num-random">25</span> человек собирают худи в конструкторе!</p>
                                </div>
                            </div>
                        </div>
                        <div class="choice" data-hash="embroidery">
                            <div class="choice-img" data-choice="embroidery">
                                <ul class="choice-img">
                                    <li data-item="embroidery-no" data-title="Без вышивки">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-3.webp">
                                            <img alt="img" src="./img/params/embroidery/img-3.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="na-grudi" data-title="Спереди на груди">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-6.webp">
                                            <img alt="img" src="./img/params/embroidery/img-6.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="na-kapushone" data-title="Hooli сбоку на капюшоне">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-1.webp">
                                            <img alt="img" src="./img/params/embroidery/img-1.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="s-zadi" data-title="Hooli сзади на лопатке">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-2.webp">
                                            <img alt="img" src="./img/params/embroidery/img-2.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="kartinka" data-title="Печать своей картинки">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-4.webp">
                                            <img alt="img" src="./img/params/embroidery/img-4.jpg">
                                        </picture>
                                    </li>
                                    <li data-item="svoia-vyshivka" data-title="Своя вышивка">
                                        <picture>
                                            <source type="image/webp" srcset="./img/params/embroidery/img-5.webp">
                                            <img alt="img" src="./img/params/embroidery/img-5.jpg">
                                        </picture>
                                    </li>
                                </ul>
                            </div>
                            <div class="choice__info">
                                <div class="choice__info-box">
                                    <picture>
                                        <source type="image/webp" srcset="./img/img-text-1.webp">
                                        <img alt="img" src="./img/img-text-1.jpg">
                                    </picture>
                                    <p>Сейчас еще <span class="num-random">25</span> человек собирают худи в конструкторе!</p>
                                </div>
                            </div>
                        </div>
                        <div class="choice" data-hash="size">
                            <div class="choice-size" data-choice="size">
                                <ul>
                                    <li data-item="XS">
                                        <p>xs</p>
                                    </li>
                                    <li data-item="S">
                                        <p>s</p>
                                    </li>
                                    <li data-item="M">
                                        <p>m</p>
                                    </li>
                                    <li data-item="L">
                                        <p>l</p>
                                    </li>
                                    <li data-item="XL">
                                        <p>xl</p>
                                    </li>
                                    <li data-item="XXL">
                                        <p>xxl</p>
                                    </li>
                                    <li data-item="3XL">
                                        <p>3xl</p>
                                    </li>
                                    <li data-item="4XL">
                                        <p>4xl</p>
                                    </li>
                                    <li data-item="5XL">
                                        <p>5xl</p>
                                    </li>
                                    <li data-item="6XL">
                                        <p>6xl</p>
                                    </li>
                                    <li data-item="7XL">
                                        <p>7xl</p>
                                    </li>
                                </ul>
                                <p class="table-size" data-modal="size">Таблица размеров</p>

                            </div>
                            <div class="choice__info">
                                <div class="choice__info-box">
                                    <picture>
                                        <source type="image/webp" srcset="./img/img-text-1.webp">
                                        <img alt="img" src="./img/img-text-1.jpg">
                                    </picture>
                                    <p>Сейчас еще <span class="num-random">25</span> человек собирают худи в конструкторе!</p>
                                </div>
                            </div>
                        </div>
                        <div class="choice" data-hash="growth">
                            <div class="choice-growth" data-choice="growth">
                                <ul>
                                    <li data-item="143-154">
                                        <p>143-154 см</p>
                                    </li>
                                    <li data-item="155-166">
                                        <p>155-166 см</p>
                                    </li>
                                    <li data-item="167-178">
                                        <p>167-178 см</p>
                                    </li>
                                    <li data-item="179-190">
                                        <p>179-190 см</p>
                                    </li>
                                    <li data-item="191-201">
                                        <p>191-201 см</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="parameters-box__footer">
                        <div class="parameters-progress">
                            <div class="parameters-progress__line">
                                <div class="parameters-progress__line-activ" style="width: 0%;"></div>
                            </div>
                        </div>
                        <p class="price"><span>4 990</span><i> 14 990 ₽</i></p>
                        <div class="btn-box">
                            <div id="btn_next" class="btn_next">Далее</div>
                            <div class="btn_ico_cart disable" data-modal="form">
                                <p>В корзину</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal">
                <div class="modal__prev"></div>
                <div class="modal__box"></div>
            </div>

        </div>
    </div>
    <script src="https://unpkg.com/cookielib/src/cookie.min.js"></script>
    <script src="./js/main.min.js?v=<?= time() ?>"></script>
    <script src="./js/main.js?v=<?= time() ?>"></script>
</body>

</html>
