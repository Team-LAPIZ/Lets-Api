const toggleButton = document.getElementById("togglebtn");
const iniHeader = document.getElementsByClassName('header')[0];

var visibleState;

toggleButton.addEventListener('click', () => {
    if(visibleState == false){
        iniHeader.style.display = 'flex';
        visibleState = true;

        // debug statement
        // console.log("visible");
    } else {
        iniHeader.style.display = 'none';
        visibleState = false;

        // debug statement
        // console.log("hidden");
    }

    // debug function
    // console.log(iniHeader.style.display);
});

function getScreenWidth() {
    var w = window,
        d = document,
        e = d.documentElement,
        g = d.getElementsByTagName('body')[0]
  
    return w.innerWidth || e.clientWidth || g.clientWidth
  }
  
function wheelListener() {
    console.log(getScreenWidth())
}

window.onresize = function() {
    if (getScreenWidth() > 700) {
        iniHeader.style.display = 'flex';
        visibleState = true;
    } else { 
        iniHeader.style.display = 'none';
        visibleState = false;
    }
    // debug function
    // wheelListener();
}

// to apply when the window loaded
window.onresize()