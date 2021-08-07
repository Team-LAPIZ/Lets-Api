const toggleButton = document.getElementById("togglebtn");
const headerMobile = document.getElementById("header-mobile");
const dropdownMobile = document.getElementById("mobile-dropdown");
const dropdownItem = document.getElementById("dropdown-list");

var visibleState = false;

// Dropdown menu
toggleButton.addEventListener('click', () => {
    if(visibleState == false){
        fadeInDropdown(dropdownMobile, dropdownItem);
        
        headerMobile.style.borderBottom = 'none';
        visibleState = true;
    } else {
        fadeOutDropdown(dropdownMobile, dropdownItem);
        
        headerMobile.style.borderBottom = '1px solid #DDDDDD;';
        visibleState = false;
    }
});

// Dropdown animation
function fadeOutDropdown(element, elementlist) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            elementlist.style.opacity = 0;
            element.style.display = 'none';
        }
        element.style.opacity = op;
        elementlist.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 30);
}

// Dropdown animation
function fadeInDropdown(element, elementlist) {
    var op = 0.1;  // initial opacity
    element.style.display = 'flex';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        elementlist.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
}

// Border animation
function fadeOutBorder(element) {
    var op = 2.5;  // initial opacity
    var args = 'px solid #189AB4';
    // element.style.borderBottom = 'none';

    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.borderBottom = 'none';
        } else {
            element.style.borderBottom = op + '' + args;
            op -= op * 0.1;
        }
    }, 0.1);
}

// Border animation
function fadeInBorder(element) {
    var op = 0.1;  // initial opacity
    var args = 'px solid #189AB4';
    var timer = setInterval(function () {
        if (op >= 2.5){
            clearInterval(timer);
        }
        element.style.borderBottom = op + '' + args;
        op += op * 0.1;
    }, 0.1);
}

function getScreenWidth() {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0]
  
    return w.innerWidth || e.clientWidth || g.clientWidth
}

function goHome() {
    window.open("/" , "_self");
}

window.onresize = function() {
    if (getScreenWidth() > 700) { // If 
        dropdownMobile.style.display = 'none';

        headerMobile.style.borderBottom = '1px solid #DDDDDD;';
    } else 
    if (getScreenWidth() < 700 && visibleState == true) { 
        dropdownMobile.style.display = 'flex';
        
        headerMobile.style.borderBottom = 'none';
    } else {
        visibleState = false;
    }
}

// to apply when the window loaded
window.onresize();