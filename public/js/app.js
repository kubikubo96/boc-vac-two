//Get the button
let goToTop = document.getElementById("goTop");
let infoTop = document.getElementById("info-top");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
    scrollTopFunction()
};

function scrollTopFunction() {
    if (document.documentElement.scrollTop > 100) {
        goToTop.style.display = "block";
    } else {
        goToTop.style.display = "none";
    }if (document.documentElement.scrollTop > 100) {
        goToTop.style.display = "block";
    } else {
        goToTop.style.display = "none";
    }
}

// Go to top
function goTopFunc() {
    let currentYOffset = self.pageYOffset;
    let initYOffset = currentYOffset;

    let intervalId = setInterval(function(){
        currentYOffset -= initYOffset*0.05;
        document.body.scrollTop = currentYOffset ;
        document.documentElement.scrollTop = currentYOffset;

        if(self.pageYOffset === 0){
            clearInterval(intervalId);
        }
    }, 20);
}

if(window.location.pathname === '/about-us' || window.location.pathname === '/home' || window.location.pathname === '/') {
    document.getElementById('menu1').style.color = '#e53935';
}
if(window.location.pathname === '/news') {
    document.getElementById('menu2').style.color = '#e53935';
}
if(window.location.pathname === '/main_service') {
    document.getElementById('menu3').style.color = '#e53935';
}
if(window.location.pathname === '/moving_house') {
    document.getElementById('menu4').style.color = '#e53935';
}
if(window.location.pathname === '/contact') {
    document.getElementById('menu5').style.color = '#e53935';
}
