let mybutton = document.getElementById('backToTop');

window.onscroll = function() {scrollFunction()};

function tornaSu() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}