var click_btn1 = false;
var click_btn2 = false;

var btn_el1 = document.getElementById("btn1");
var btn_el2 = document.getElementById("btn2");
var el_1 = document.getElementById("form1")
var el_2 = document.getElementById("form2")

const hideEl = (type) => {
    switch (type) {
        case 1:
            el_1.classList.toggle("fadeOut-fast");
            setTimeout(() => {
                el_1.classList.remove("show-block");
                el_1.classList.remove("fadeOut-fast");
            }, 400);

            el_1.classList.toggle("hidden");
            break;
        case 2:
            el_2.classList.toggle("fadeOut-fast");
            setTimeout(() => {
                el_2.classList.remove("show-block");
                el_2.classList.remove("fadeOut-fast");
            }, 400);

            el_2.classList.toggle("hidden");
            break;
        default:
            break;
    }
}

const showEl = (type) => {
    switch (type) {
        case 1:
            el_1.classList.remove("hidden");
            el_1.classList.toggle("show-block");
            break;
        case 2:
            el_2.classList.remove("hidden");
            el_2.classList.toggle("show-block");
            break;
        default:
            break;
    }
}

const reset = (type) => {
    switch (type) {
        case 1:
            btn_el1.style.background = "#60A3D9";
            btn_el2.style.background = "#f6f6f7";
            break;
        case 2:
            btn_el2.style.background = "#60A3D9";
            btn_el1.style.background = "#f6f6f7";
            break;
        default:
            break;
    }

    if (getScreenWidth() < 700) {
        btn_el1.style.background = "#f6f6f7";
        btn_el2.style.background = "#f6f6f7";
    }

    click_btn2 = false;
    click_btn1 = false;
}

const clickBtn1 = () => {
    if (el_2.classList.contains("show-block")) {
        hideEl(2);
        setTimeout(() => {showEl(1);}, 600);
    } else {
        showEl(1);
    }
    btn_el1.style.background = "rgba(36, 62, 206, 0.6)";
    btn_el2.style.background = "#f6f6f7";
    click_btn1 = true;
    click_btn2 = false;
}

const clickBtn2 = () => {
    if (el_1.classList.contains("show-block")) {
        hideEl(1);
        setTimeout(() => {showEl(2);}, 600);
    } else {
        showEl(2);
    }
    btn_el2.style.background = "rgba(36, 62, 206, 0.6)";
    btn_el1.style.background = "#f6f6f7";
    click_btn2 = true;
    click_btn1 = false;
}

btn_el1.addEventListener('click', () => {
    if (click_btn1 == false) {
        clickBtn1();
    } else {
        hideEl(1);
        reset(1);
    }
});

btn_el2.addEventListener('click', () => {
    if (click_btn2 == false) {
        clickBtn2();
    } else {
        hideEl(2);
        reset(2);
    }
});

mouseEnter_1 = (el) => {
    if (!click_btn1) {
        el.style.background = "#60A3D9";
    }
}

mouseLeave_1 = (el) => {
    if (!click_btn1) {
        el.style.background = "#f6f6f7"
    }
}

mouseEnter_2 = (el) => {
    if (!click_btn2) {
        el.style.background = "#60A3D9";
    }
}

mouseLeave_2 = (el) => {
    if (!click_btn2) {
        el.style.background = "#f6f6f7"
    }
}