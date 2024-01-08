// Bottone per tornare sù
let mybutton = document.getElementById('backToTop');

// Quando scrolli verso il basso, viene chiamata la funzione
// per far visualizzare il bottone
window.onscroll = function() {scrollFunction()};

function tornaSu() {
    // Al click del bottone si torna a 0, ovvero all'inizio della pagina/elemento
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// Funzione per far visualizzare il bottone raggiunta una certa "distanza"
// verso il basso
function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}


function spinningBeforeSubmit() {
    let secondAlert = document.getElementById('secondAlert');
    firstAlert.style.display = 'none';
    secondAlert.style.display = 'block';
    thirdAlert.style.display = 'none';
    setTimeout(() => {
        secondAlert.style.display = 'none';
        fourthAlert.style.display = 'block';
      }, 1000);
    setTimeout(() => {
        return true;
      }, 10000);
}