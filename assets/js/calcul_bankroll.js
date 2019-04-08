var calc = document.getElementById('calcbankroll');

calc.addEventListener('click', (e) => {
    e.preventDefault();

    //INIT VARIABLES
    var capital  = Number(document.getElementById('capital').value)      || 200;
    var pourcent = Number(document.getElementById('pourcent').value)         || 3;

    var resultat = capital / 100 * pourcent;

    var result = document.getElementById('result');
    result.classList.add('alert-success')
    result.innerHTML = "Pour ce paris il faut placer "+resultat+"€"

})