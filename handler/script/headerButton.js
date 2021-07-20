const toggleButton = document.getElementById("togglebtn");
const iniHeaderMobile = document.getElementById("mobile-dropdown");

var visibleState = false;

toggleButton.addEventListener('click', () => {
    if(visibleState == false){
        iniHeaderMobile.style.display = 'flex';
        visibleState = true;
    } else {
        iniHeaderMobile.style.display = 'none';
        visibleState = false;
    }
});

function getScreenWidth() {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0]
  
    return w.innerWidth || e.clientWidth || g.clientWidth
}

window.onresize = function() {
    if (getScreenWidth() > 700) {
        iniHeaderMobile.style.display = 'none';
        visibleState = true;
    } else { 
        visibleState = false;
    }
}

// to apply when the window loaded
window.onresize();