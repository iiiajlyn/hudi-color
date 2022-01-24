//сбрасываем hash
if (document.location.hash) {
    document.location.hash = ""
}

//слайдер
$('.parameters-box__head').owlCarousel({
    loop: false,
    center: true,
    // autoWidth: true,
    slideBy: 1,
    margin: 10,
    dots: false,
    nav: true,
    navText: ["<a href='#'><</a>", "<a href='#'>></a>"],
    URLhashListener: true,
    responsive: {
        1000: {
            items: 4,
        },
        800: {
            items: 4,
        },
        500: {
            items: 2,
        },
        0: {
            items: 2,
        }
    }
});
$('.parameters-box__main').owlCarousel({
    items: 1,
    touchDrag: false,
    mouseDrag: false,
    pullDrag: false,
    freeDrag: false,
    nav: false,
    margin: 5,
    dots: false,
    URLhashListener: true,
});
//массив со всеми параметрами для рандома
let parametersAllArr = {
    color: [
        "#000000",
        "#804E82",
        "#E4CAF1",
        "#FDD9E8",
        "#E5CCAE",
        "#997D68",
        "#FFFFFF",
        "#BAC1BF",
        "#57555A",
        "#E42C36",
        "#FE6203",
        "#FFE270",
        "#F2EC7A",
        "#E33D85",
        "#74C86A",
        "#64762C",
        "#97A38F",
        "#1F9480",
        "#B3E2D8",
        "#2E4393",
        "#83A3EC",
        "#BB847F",
        "#A2BEEE",
        "#91B4B8",
        "#EDBFC1",
        "#FDAE97",
        "#E2E4E6",
        "#E5E4EA"
    ],
    cut: ["bochonok", "pryamoy", "classic"],
    length: ["long", "midi", "short", "krop"],
    bottom: [
        "na-zatyashke-so-shnurkom",
        "na-rezinke",
        "oborka",
        "obrezanniy-kray",
        "kashkorse",
        "shirokiy-manzhet",
        "shov"
    ],
    bottomKrop: [
        "na-zatyashke-so-shnurkom",
        "na-rezinke",
        "oborka",
        "obrezanniy-kray",
        "kashkorse",
        "shirokiy-manzhet",
        "shov"
    ],
    pocket: ["pocket-no", "kenguru", "na-grudi", "bokovie", "taynik"],
    cuff: ["na-rezinke", "obrezanniy", "manshet-s-dirkoy", "kashkorse", "shov"],
    hood: [
        "klassika-s-verevkami",
        "vnakhlest-bez-verovok",
        "anorak",
        "dvoynoy-vorotnik",
        "anorak-dvoynoy",
        "na-molnii",
        "s-molniyey-sboku",
        "vnakhlest-vorotnik",
        "dino",
        "rabbit",
        "fox",
    ],
    fastener: ["000000", "FFFFFF", "804E82", "997D68", "E4CAF1", "E5CCAE"]
}
//Добавляем класс .human
document.querySelector(".display-selection .clothes").addEventListener('click', delHuman)
document.querySelector(".display-selection .person").addEventListener('click', addHuman)
function addHuman() {
    document.querySelector(".constructor-hoodie__design").classList.add("human")
}
function delHuman() {
    document.querySelector(".constructor-hoodie__design").classList.remove("human")
}
//Добавляем класс .active и делаем активной кнопку далее
let choiceArr = document.querySelectorAll("div[data-choice] li");
choiceArr.forEach(element => {
    element.addEventListener('click', choiceActive)
}
);
//Всплывающая подсказка
function choiceTitle(elem, title) {
    document.querySelector(".title-choice").classList.remove("title-anim")
    setTimeout(animAdd, 200)
    //document.querySelector(".title-choice span").innerHTML = elem
    document.querySelector(".title-choice b").innerHTML = title
}
function animAdd() {
    document.querySelector(".title-choice").classList.add("title-anim")
}

//Активируем кнопки вперед назад красим пройденые пути а также где мы находимся
let btnNext = document.querySelector('.parameters-progress .btn_next'),
    lineProgress = document.querySelector('.parameters-progress__line-activ'),
    owlNext = document.querySelector('.owl-nav .owl-next'),
    owlPrev = document.querySelector('.owl-nav .owl-prev')
owlNext.classList.add('disable')

btnNext.addEventListener('click', disableAdd)
owlNext.addEventListener('click', disableAdd)
owlPrev.addEventListener('click', disableAdd)

function disableAdd() {
    owlNext.classList.add('disable')
    btnNext.classList.add('disable')
}
//Шкала прогресса
function progres() {
    let progresCheck = document.querySelectorAll(".parameters-box__head .owl-item"),
        progresOccupancy = true,
        progresSum = document.querySelectorAll(".parameters-box__head .owl-item .item:not([data-optional])").length,
        hudiProgress = 100;

    progresCheck.forEach(element => {
        if (!element.classList.contains("check") && !element.childNodes[0].hasAttribute("data-optional")) {
            progresOccupancy = false;
            hudiProgress -= 100 / progresSum
        }
    });
    lineProgress.style.width = hudiProgress + "%";
    if (hudiProgress == 100) {
        btnNext.classList.add("none")
    }
    if (progresOccupancy) {
        finishBtn.classList.remove("disable")
    }
}
//Формирование цены
let basePrice = 2990,
    finalPrice = 2990,
    basePriceElem = document.querySelector(".parameters-box__footer .price span");
function basePriceHTML() {
    let priceItem = basePrice;
    for (let key in choiceElem) {
        if (choiceElem[key][3] === undefined) {
            choiceElem[key][3] = 0;
        }
        priceItem += Number(choiceElem[key][3]);
        finalPrice = priceItem;
        basePriceElem.innerHTML = new Intl.NumberFormat('ru-RU').format(priceItem);
    }
}
// Параметры по умолчанию
document.querySelector(".parameters-box__head [data-hash=fastener]").parentNode.classList.add("disable");
document.querySelector(".choice [data-choice=fastener]").parentNode.classList.add("disable");

let choiceElem,
    zipper = false,
    itemNum = 0,
    choiceGetJson = getCookie('hudi', json = true);

if (choiceGetJson) {
    choiceElem = choiceGetJson;
} else {
    choiceElem = {
        color: ["#997D68", "Кофе", false, 0],
        cut: ["pryamoy", "Прямой", false, 0],
        length: ["midi", "Средний", false, 0],
        bottom: ["kashkorse", "Декоративная резинка кашкорсе", false, 0],
        pocket: ["kenguru", "Кенгуру", false, 0],
        cuff: ["kashkorse", "Декоративная резинка кашкорсе", false, 0],
        hood: ["vnakhlest-bez-verovok", "Внахлест без веревок", false, 0],
        cloth: ["yes", "С начесом - теплый, лучше держит форму", false, 0],
        embroidery: ["no", "Уточнить у клиента", false, 0],
        size: ["no", "Уточнить у клиента", false, 0],
        growth: ["no", "Уточнить у клиента", false, 0],
    }
}

//Конструктор
async function choiceActive() {
    let attr = this.parentNode.parentNode.getAttribute("data-choice"),
        elem = document.querySelector(`div[data-choice*=${attr}] li.active`),
        title = this.getAttribute("data-title"),
        item = this.getAttribute("data-item"),
        price = Number(this.getAttribute("data-price"));

    if (elem) {
        elem.classList.remove("active");
    }
    this.classList.add("active");

    btnNext.classList.remove("disable");
    owlNext.classList.remove('disable');
    //Цвет
    if (attr == "color") {
        choiceElem[attr] = [item, title, true, price];
        style = document.querySelector('style');
        style.innerHTML = `.color-shadow-dark, .color-shadow, .color-base {fill: ${choiceElem[attr][0]}; stroke: ${choiceElem[attr][0]};}`;
        choiceTitle("Цвет: ", choiceElem[attr][1]);

    }
    //Крой
    if (attr == "cut") {
        choiceElem[attr] = [item, title, true, price];
        let lengthItem = await fetch(`./img/svg/gerl/${choiceElem[attr][0]}/length/${choiceElem["length"][0]}.svg`),
            bottomItem = await fetch(`./img/svg/gerl/${choiceElem[attr][0]}/bottom/${choiceElem["length"][0]}/${choiceElem["bottom"][0]}.svg`),
            cuffItem = await fetch(`./img/svg/gerl/${choiceElem[attr][0]}/cuff/${choiceElem["cuff"][0]}.svg`);
        choiceTitle("Крой: ", choiceElem[attr][1]);
        if (lengthItem.ok) {
            let text = await lengthItem.text();
            let urlDoom = document.querySelector(".design-box__length");
            urlDoom.innerHTML = text;
        }
        if (bottomItem.ok) {
            let text = await bottomItem.text();
            let urlDoom = document.querySelector(".design-box__bottom");
            urlDoom.innerHTML = text;
        }
        if (cuffItem.ok) {
            let text = await cuffItem.text();
            let urlDoom = document.querySelector(".design-box__cuff");
            urlDoom.innerHTML = text;
        }

    }
    //Длина
    if (attr == "length") {
        choiceElem[attr] = [item, title, true, price];
        let lengthItem,
            bottomItem,
            pocketItem;
        if (item == "krop") {
            choiceElem["pocket"] = ["pocket-no", "Без карманов", false, 0];
            choiceElem["bottom"] = ["shov", "Шов", false, 0];
            lengthItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/length/${choiceElem[attr][0]}.svg`);
            bottomItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/bottom/${choiceElem[attr][0]}/${choiceElem["bottom"][0]}.svg`);
            pocketItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/pocket/${choiceElem["pocket"][0]}.svg`);
            document.querySelector(".parameters-box__head [data-hash=pocket]").parentNode.classList.add("disable");
            document.querySelector(".choice [data-choice=pocket]").parentNode.classList.add("disable");
        }
        else {
            // choiceElem["pocket"] = ["kenguru", "Кенгуру", 0];
            // choiceElem["bottom"] = ["kashkorse", "Декоративная резинка кашкорсе", 0];
            lengthItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/length/${choiceElem[attr][0]}.svg`);
            bottomItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/bottom/${choiceElem[attr][0]}/${choiceElem["bottom"][0]}.svg`);
            pocketItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/pocket/${choiceElem["pocket"][0]}.svg`);
            document.querySelector(".parameters-box__head [data-hash=pocket]").parentNode.classList.remove("disable");
            document.querySelector(".choice [data-choice=pocket]").parentNode.classList.remove("disable");
        }
        choiceTitle("Длина: ", choiceElem[attr][1]);
        if (lengthItem.ok) {
            let text = await lengthItem.text();
            let urlDoom = document.querySelector(".design-box__length");
            urlDoom.innerHTML = text;
        }
        if (bottomItem.ok) {
            let text = await bottomItem.text();
            let urlDoom = document.querySelector(".design-box__bottom");
            urlDoom.innerHTML = text;
        }
        if (pocketItem.ok) {
            let text = await pocketItem.text();
            let urlDoom = document.querySelector(".design-box__pocket");
            urlDoom.innerHTML = text;
        }
    }
    //Низ
    if (attr == "bottom") {
        choiceElem[attr] = [item, title, true, price];
        let bottomItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/bottom/${choiceElem["length"][0]}/${choiceElem[attr][0]}.svg`);
        choiceTitle("Низ: ", choiceElem[attr][1]);
        if (bottomItem.ok) {
            let text = await bottomItem.text();
            let urlDoom = document.querySelector(".design-box__bottom");
            urlDoom.innerHTML = text;
        }

    }
    //Карман
    if (attr == "pocket") {
        choiceElem[attr] = [item, title, true, price];
        let pocketItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/pocket/${choiceElem[attr][0]}.svg`);
        choiceTitle("Карман: ", choiceElem[attr][1]);
        if (pocketItem.ok) {
            let text = await pocketItem.text();
            let urlDoom = document.querySelector(".design-box__pocket");
            urlDoom.innerHTML = text;
        }

    }
    //Манжеты
    if (attr == "cuff") {
        choiceElem[attr] = [item, title, true, price];
        let cuffItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/cuff/${choiceElem[attr][0]}.svg`);
        choiceTitle("Манжеты: ", choiceElem[attr][1]);
        if (cuffItem.ok) {
            let text = await cuffItem.text();
            let urlDoom = document.querySelector(".design-box__cuff");
            urlDoom.innerHTML = text;
        }

    }
    //Капюшон
    if (attr == "hood") {
        choiceElem[attr] = [item, title, true, price];
        let hoodItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/hood/${choiceElem[attr][0]}.svg`);
        let hoodPersonItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/hood-person/${choiceElem[attr][0]}.svg`);
        choiceTitle("Капюшон: ", choiceElem[attr][1]);
        if (hoodItem.ok) {
            let text = await hoodItem.text();
            let urlDoom = document.querySelector(".design-box__hood");
            urlDoom.innerHTML = text;
        }
        if (hoodPersonItem.ok) {
            let text = await hoodPersonItem.text();
            let urlDoom = document.querySelector(".design-box__hood-person");
            urlDoom.innerHTML = text;
        }
        if (item == "s-molniyey-sboku" || item == "na-molnii") {
            document.querySelector(".parameters-box__head [data-hash=fastener]").parentNode.classList.remove("disable");
            document.querySelector(".choice [data-choice=fastener]").parentNode.classList.remove("disable");

        }
        else {
            document.querySelector(".parameters-box__head [data-hash=fastener]").parentNode.classList.add("disable");
            document.querySelector(".choice [data-choice=fastener]").parentNode.classList.add("disable");
        }
    }
    //Молния
    if (attr == "fastener") {
        choiceElem[attr] = [item, title, true, price];
        choiceTitle("Цвет молнии: ", choiceElem[attr][1]);
    }
    //Начес
    if (attr == "cloth") {
        choiceElem[attr] = [item, title, true, price];
        choiceTitle("Ткань: ", choiceElem[attr][1]);
    }
    //вышивка
    if (attr == "embroidery") {
        choiceElem[attr] = [item, title, true, price];
        choiceTitle("Вышивка: ", choiceElem[attr][1]);
    }
    //Размер
    if (attr == "size") {
        choiceElem[attr] = [item, item, true, price];
        choiceTitle("Размер: ", choiceElem[attr][1]);

    }
    //Рост
    if (attr == "growth") {
        choiceElem[attr] = [item, item + " см", true, price];
        choiceTitle("Рост: ", choiceElem[attr][1]);
    }
    document.querySelector(".owl-item.active.center").classList.add("check");
    //Прогресс
    progres();
    //проверки на на детали по параметрам
    if (choiceElem["length"][0] == "short") {
        document.querySelector("[data-item=bokovie]").classList.add("none")
    } else {
        document.querySelector("[data-item=bokovie]").classList.remove("none")
    }
    if (choiceElem["length"][0] == "krop") {
        document.querySelector("[data-choice=bottom] [data-item=oborka]").classList.add("none")
        document.querySelector("[data-choice=bottom] [data-item=shirokiy-manzhet]").classList.add("none")
        document.querySelector("[data-choice=bottom] [data-item=kashkorse]").classList.add("none")
    } else {
        document.querySelector("[data-choice=bottom] [data-item=oborka]").classList.remove("none")
        document.querySelector("[data-choice=bottom] [data-item=shirokiy-manzhet]").classList.remove("none")
        document.querySelector("[data-choice=bottom] [data-item=kashkorse]").classList.remove("none")
    }
    basePriceHTML();
    let choiceSetJson = JSON.stringify(choiceElem);
    setCookie('hudi', choiceSetJson, { expires: Date(14) });
}
//Рандомные числа
let numRandomArr = document.querySelectorAll(".choice__info-box .num-random"),
    numRandom = Math.floor(Math.random() * 17) + 8;
numRandomArr.forEach(element => {
    element.innerHTML = numRandom
});
//Сворачиваем параметры на мобилке
let parametersMobBtn = document.querySelector(".parameters-box__mob"),
    parametersMobItem = document.querySelector(".container");

parametersMobBtn.addEventListener("click", parametersMobFun)
function parametersMobFun() {
    this.classList.toggle("active");
    parametersMobItem.classList.toggle("active");
}
//Форма обратной связи
let finishBtn = document.querySelector(".btn_ico_cart"),
    finishPrev = document.querySelector(".finish-form__prev"),
    finishForm = document.querySelector(".finish-form");

finishBtn.addEventListener("click", finishFormAdd)
finishPrev.addEventListener("click", finishFormDel)
function finishFormAdd() {
    finishForm.classList.add("active")
    finishBtn.classList.add("none")
}
function finishFormDel() {
    finishForm.classList.add("del")
    finishBtn.classList.remove("none")
    setTimeout(function () {
        finishForm.classList.remove("del")
        finishForm.classList.remove("active")
    }, 50);
}
//Формирует POST для отправки
let finishHudiInput = document.getElementById("finish-form__hidi"),
    finishHudiPrice = document.getElementById("finish-form__price"),
    finishHudiCountry = document.getElementById("finish-form__country"),
    finishHudiValue = "";
finishBtn.addEventListener("click", finishHudiFun)
function finishHudiFun() {
    for (let key in choiceElem) {
        finishHudiValue += key + ": ";
        finishHudiValue += choiceElem[key][1] + ",";
    }
    finishHudiInput.value = finishHudiValue;
    finishHudiPrice.value = finalPrice;
    finishHudiCountry.value = document.querySelector(".iti__flag-container .iti__selected-flag").getAttribute("title");
}
//Проверка все ли поля заполнены
let inputArr = document.querySelectorAll(".finish-form input[required]"),
    inputCheckbox = document.getElementById("finish-form__checkbox"),
    formButton = document.querySelector(".finish-form__item .btn"),
    labelCheckbox = document.querySelector("[for='finish-form__checkbox']");

labelCheckbox.addEventListener("click", inputCheck)
inputArr.forEach(element => {
    element.addEventListener("focusout", inputCheck)
});

function inputCheck() {
    setTimeout(function () {
        let check = false;
        if (!inputCheckbox.checked) {
            check = true;
        }
        inputArr.forEach(element => {
            if (element.value == "") {
                check = true;
            }
        });
        if (check) {
            formButton.classList.add("disable")
        } else {
            formButton.classList.remove("disable")
        }
    }, 50);

}

//Решаем баг на айфонах с 100vh
let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

window.addEventListener('resize', () => {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
});
//Таблица размеров
let sizeBtn = document.querySelector(".choice-size .table-size"),
    sizeModal = document.querySelector(".size-modal"),
    sizePrev = document.querySelector(".size-modal .size-modal__prev")

sizeBtn.addEventListener("click", sizeAdd)
sizePrev.addEventListener("click", sizeDel)

function sizeAdd() {
    sizeModal.classList.add("active")
}

function sizeDel() {
    sizeModal.classList.add("del")
    setTimeout(function () {
        sizeModal.classList.remove("del")
        sizeModal.classList.remove("active")
    }, 50);
}

// Go to the next item
$('.parameters-box__head').on('translated.owl.carousel', function (event) {
    let nextElem = document.querySelector(".owl-item.active.center").nextElementSibling.childNodes[0].getAttribute("data-hash")
    if (!(nextElem == false)) {
        btnNext.href = "#" + nextElem
    } else {
        btnNext.href = "#"
    }
    btnNext.classList.add("disable")
})

$('.btn_next').click(clickNextNone);
$('.owl-nav .owl-next').click(clickNextNone);
$('.owl-nav .owl-prev').click(clickPrevNone);

function clickNextNone() {
    setTimeout(function () {
        if (document.querySelector(".owl-item.active.center").classList.contains("disable")) {
            $('.parameters-box__head').trigger('next.owl.carousel', [200]);
            $('.parameters-box__main').trigger('next.owl.carousel', [200]);
        }
    }, 20);
}
function clickPrevNone() {
    setTimeout(function () {
        if (document.querySelector(".owl-item.active.center").classList.contains("disable")) {
            $('.parameters-box__head').trigger('prev.owl.carousel', [200]);
            $('.parameters-box__main').trigger('prev.owl.carousel', [200]);
        }
    }, 20);
}

//Отправка формы
$("#finish-form").submit(function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "/form.php",
        data: $("#finish-form").serialize(),
        success: function (data) {
            let submitModal = document.querySelector(".submit-modal"),
                submitInfo = document.querySelector(".submit-modal__info");
            submitModal.classList.add("active");
            if (data == "yes") {
                submitInfo.classList.add("yes");
                document.getElementById("price-info").innerHTML = finalPrice + " руб."
                document.getElementById("price-economy").innerHTML = (14990 - finalPrice) + " руб."
            } else {
                submitInfo.classList.add("no")
            }
        }
    });
});
//Инпут маска
$("#finish-form__tel").mask("(999) 999-9999");
let input = document.querySelector("#finish-form__tel");
window.intlTelInput(input, {
    //nationalMode: false,
    preferredCountries: ["ru", "kz", "by", "ua",],
    autoPlaceholder: false,
    preferredCountries: ["ru"],
    utilsScript: "js/intlTelInput/utils.js",
});

//Заполняем прогресс констуктора из кук
async function startHudi() {
    for (let key in choiceElem) {
        if (choiceElem[key][2]) {
            //навигация
            let elem = document.querySelector(`.parameters-box__head [data-hash*=${key}]`).parentNode
            elem.classList.add("check");
            //что выбрано елементы
            let colorArr = document.querySelectorAll(`.choice [data-choice*=${key}] li`);
            colorArr.forEach(element => {
                if (element.getAttribute("data-item") == choiceElem[key][0]) {
                    element.classList.add("active")
                }
            });
        }
    }

    //собираем svg
    let style = document.querySelector('style');
    style.innerHTML = `.color-shadow-dark, .color-shadow, .color-base {fill: ${choiceElem["color"][0]}; stroke: ${choiceElem["color"][0]};}`;
    let bottomItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/bottom/${choiceElem["length"][0]}/${choiceElem["bottom"][0]}.svg`),
        lengthItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/length/${choiceElem["length"][0]}.svg`),
        pocketItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/pocket/${choiceElem["pocket"][0]}.svg`),
        cuffItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/cuff/${choiceElem["cuff"][0]}.svg`),
        hoodItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/hood/${choiceElem["hood"][0]}.svg`),
        hoodPersonItem = await fetch(`./img/svg/gerl/${choiceElem["cut"][0]}/hood-person/${choiceElem["hood"][0]}.svg`),
        hoodLegs = await fetch(`./img/svg/gerl/legs.svg`);
    hudiLogo = await fetch(`./img/svg/gerl/logo.svg`);
    //Проверка на кроп
    if (choiceElem["length"][0] == "krop") {
        document.querySelector(".parameters-box__head [data-hash=pocket]").parentNode.classList.add("disable");
        document.querySelector(".choice [data-choice=pocket]").parentNode.classList.add("disable");
    }
    //Проверка на молнию
    if (choiceElem["hood"][0] == "s-molniyey-sboku" || choiceElem["hood"][0] == "na-molnii") {
        document.querySelector(".parameters-box__head [data-hash=fastener]").parentNode.classList.remove("disable");
        document.querySelector(".choice [data-choice=fastener]").parentNode.classList.remove("disable");
    }
    //Проверка на длину
    if (choiceElem["length"][0] == "short") {
        document.querySelector("[data-item=bokovie]").classList.add("none")
    }
    if (choiceElem["length"][0] == "krop") {
        document.querySelector("[data-choice=bottom] [data-item=oborka]").classList.add("none")
        document.querySelector("[data-choice=bottom] [data-item=shirokiy-manzhet]").classList.add("none")
        document.querySelector("[data-choice=bottom] [data-item=kashkorse]").classList.add("none")
    }
    //
    if (bottomItem.ok) {
        let text = await bottomItem.text();
        let urlDoom = document.querySelector(".design-box__bottom");
        urlDoom.innerHTML = text;
    }
    if (lengthItem.ok) {
        let text = await lengthItem.text();
        let urlDoom = document.querySelector(".design-box__length");
        urlDoom.innerHTML = text;
    }
    if (pocketItem.ok) {
        let text = await pocketItem.text();
        let urlDoom = document.querySelector(".design-box__pocket");
        urlDoom.innerHTML = text;
    }
    if (cuffItem.ok) {
        let text = await cuffItem.text();
        let urlDoom = document.querySelector(".design-box__cuff");
        urlDoom.innerHTML = text;
    }
    if (hoodItem.ok) {
        let text = await hoodItem.text();
        let urlDoom = document.querySelector(".design-box__hood");
        urlDoom.innerHTML = text;
    }
    if (hoodPersonItem.ok) {
        let text = await hoodPersonItem.text();
        let urlDoom = document.querySelector(".design-box__hood-person");
        urlDoom.innerHTML = text;
    }
    if (hoodLegs.ok) {
        let text = await hoodLegs.text();
        let urlDoom = document.querySelector(".design-box__legs");
        urlDoom.innerHTML = text;
    }
    if (hudiLogo.ok) {
        let text = await hudiLogo.text();
        let urlDoom = document.querySelector(".design-box__logo");
        urlDoom.innerHTML = text;
    }
}
startHudi();
progres();
