var calc = document.getElementById('calcroi');

calc.addEventListener('click', (e) => {
    e.preventDefault();

    //INIT VARIABLES
    var initial_wallet = Number(document.getElementById('capital').value)      || 200;
    var cote_moyenne   = Number(document.getElementById('cote').value)         || 1.31;
    var bankroll       = Number(document.getElementById('bankroll').value)/100 || 0.14;
    var month          = Number(document.getElementById('month').value)        || 12;
    var day_in_month   = Number(document.getElementById('day').value)          || 15;
    var success_rate   = Number(document.getElementById('success').value)      || 92;
    var abonnement     = Number(document.getElementById('price').value)        || 30;
    var nb_simulation  = Number(document.getElementById('simu').value)         || 100;

    var simulations = [];

    for (k = 0; k < nb_simulation; k++){
        simulations.push(simulation(initial_wallet, month, day_in_month, bankroll, success_rate, cote_moyenne, abonnement))
    }
    
    var calc_moyenne = 0;
    for (o = 0; o < simulations.length; o++) {
        calc_moyenne += simulations[o];
    }
    
    calc_moyenne = calc_moyenne / (simulations.length - 1)
    
    calc_moyenne = calc_moyenne.toFixed(2);

    //PRINT RESULT
    var result = document.getElementById('result');
    resultString = "Sur "+nb_simulation+" simulations, la moyenne du wallet finale est de "+calc_moyenne+"€. Vous avez joué "+day_in_month+" jours par mois pendant "+month+" mois. La mise initiale était de "+initial_wallet+"€";
    if (calc_moyenne < initial_wallet) {
        result.classList.add('alert-warning');
    } else {
        result.classList.add('alert-success')
    }
    result.innerHTML = resultString;
})



function getRandomArbitrary(min, max) {
    return Math.random() * (max - min) + min;
}

function simulation(initial_wallet, month, day_in_month, bankroll, success_rate, cote_moyenne, abonnement) {
    var wallet = initial_wallet;
    for (i = 0; i<month; i++) {
        for (j = 0; j < day_in_month; j++) {
            paris       = wallet * bankroll;
            wallet      = wallet - paris;
            var success = getRandomArbitrary(0, 101);

            if(success < success_rate){
                var ca = paris * cote_moyenne
                wallet = wallet + ca;
            }
        }
    }
    wallet = wallet - (abonnement * month);
    return wallet;
}