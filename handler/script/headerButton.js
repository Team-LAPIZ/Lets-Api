const toggleButton = document.getElementById("togglebtn");
const headerMobile = document.getElementById("header-mobile");
const dropdownMobile = document.getElementById("mobile-dropdown");

var visibleState = false;

toggleButton.addEventListener('click', () => {
    if(visibleState == false){
        fadeIn(dropdownMobile);
        
        headerMobile.style.borderBottom = 'none';
        visibleState = true;
    } else {
        fadeOut(dropdownMobile);
        
        headerMobile.style.borderBottom = '1px solid white';
        visibleState = false;
    }
});

function fadeOut(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1){
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 50);
}

function fadeIn(element) {
    var op = 0.1;  // initial opacity
    element.style.display = 'flex';
    var timer = setInterval(function () {
        if (op >= 1){
            clearInterval(timer);
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 10);
}

function getScreenWidth() {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0]
  
    return w.innerWidth || e.clientWidth || g.clientWidth
}

window.onresize = function() {
    if (getScreenWidth() > 700) { // If 
        dropdownMobile.style.display = 'none';

        headerMobile.style.borderBottom = '1px solid white';
    } else 
    if (getScreenWidth() < 700 && visibleState == true) { 
        fadeIn(dropdownMobile);

        headerMobile.style.borderBottom = 'none';
    } else {
        visibleState = false;
    }
}

// to apply when the window loaded
window.onresize();