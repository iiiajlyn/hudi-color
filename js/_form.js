let formFlag = true;

function modalForm() {
    let prevForm = document.querySelector(".left .modal__prev");
    prevForm.addEventListener("click", modalDel);
    //Формирует POST для отправки
    let formHudiInput = document.getElementById("modal-form__hidi"),
        formHudiPrice = document.getElementById("modal-form__price"),
        formHudiCountry = document.getElementById("modal-form__country"),
        formBtn = document.querySelector(".modal-form__item [type=submit]"),
        formHudiValue;

    formBtn.addEventListener("mousedown", formHudiFun);
    function formHudiFun() {
        for (let key in choiceElem) {
            formHudiValue += key + ": ";
            formHudiValue += choiceElem[key][1] + ",";
        }

        formHudiInput.value = formHudiValue;
        formHudiPrice.value = finalPrice;
        formHudiCountry.value = document.querySelector(".iti__flag-container .iti__selected-flag").getAttribute("title");
    }

    //Проверка все ли поля заполнены
    let inputArr = document.querySelectorAll("#modal-form input[required]"),
        inputCheckbox = document.getElementById("modal-form__checkbox"),
        formButton = document.querySelector(".modal-form__item .btn"),
        labelCheckbox = document.querySelector("[for='modal-form__checkbox']");

    labelCheckbox.addEventListener("click", () => inputCheck(true));
    inputArr.forEach(element => {
        element.addEventListener("focusout", () => inputCheck(false))
    });

    function inputCheck(param) {
        let check = false;

        if (inputCheckbox.checked && (param === true)) {
            check = true;
        }
        if (!inputCheckbox.checked && (param === false)) {
            check = true;
        }
        inputArr.forEach(element => {
            if (element.value == "") {
                check = true;
            }
        }

        );

        if (check) {
            formButton.classList.add("disable")
        }

        else {
            formButton.classList.remove("disable")
        }
    }

    //Отправка формы
    $("#modal-form").submit(function (e) {
        e.preventDefault();

        $.ajax({

            type: "POST",
            url: "/form.php",
            data: $("#modal-form").serialize(),
            success: async function (data) {
                const promise = new Promise(async (resolve, reject) => {
                    let ModalRight = document.querySelector(".modal__box .right"),
                        submitModal = await fetch(`./modal/_submit.html`);
                    if (submitModal.ok) {
                        let text = await submitModal.text();
                        ModalRight.innerHTML = text;
                    }
                    resolve(submitInfo = document.querySelector(".submit-modal"))
                });
                promise.then(
                    function (result) {
                        if (data == "yes") {
                            submitInfo.classList.add("yes");
                            document.getElementById("price-info").innerHTML = finalPrice + " руб."
                            document.getElementById("price-economy").innerHTML = (14990 - finalPrice) + " руб."
                            prevForm.classList.add("none")
                            deleteCookie('hudiColor');
                        }

                        else {
                            submitInfo.classList.add("no")
                        }
                    },
                    function (error) {
                        submitInfo.classList.add("no")
                    }
                );

            }
        }

        );
    }

    );

    //Инпут маска
    $("#modal-form__tel").mask("(999) 999-9999");
    let input = document.querySelector("#modal-form__tel");
    window.intlTelInput(input, {
        //nationalMode: false,
        // preferredCountries: ["ru", "kz", "by", "ua",],
        autoPlaceholder: false,
        preferredCountries: ["ru"],
        utilsScript: "js/intlTelInput/utils.js",
    }

    );
    //формируем что собрал человек
    let hudiInfoParm = document.querySelector(".modal-hudi__params"),
        hudiInfoPice = document.querySelector(".modal-hudi__description .price"),
        hudiInfoImg = document.querySelector(".modal-hudi__img");
    hudiInfoPice.innerHTML = finalPrice + " руб.";
    for (let key in choiceElem) {
        let hudiInfoParmLi = document.createElement('li');
        hudiInfoParmLi.innerHTML = `<b>${choiceKeyRu[key]}: </b><span>${choiceElem[key][1]}</span>`;
        hudiInfoParm.append(hudiInfoParmLi);
    }
    hudiInfoImg.innerHTML = document.querySelector(".design-box").innerHTML;
    //Показываем промокод
    let promo = document.querySelector(".constructor-hoodie .modal-form__head p.promo");
    promo.onclick = function () {
        this.classList.toggle("active")
    }
}
