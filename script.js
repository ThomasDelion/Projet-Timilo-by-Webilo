window.onload = function(){

    var seconds = 00;
    var tens = 00;

    var appendTens = document.getElementById("tens");
    var appendSeconds = document.getElementById("seconds");
    var buttonStart = this.document.getElementById("button-start");
    var buttonStop = this.document.getElementById("button-stop");

    var Interval;

    /*première fonction qui démarre la minuterie*/
    function startTimer(){
        tens++;
        //console.log(tens);
        if(tens < 9){
            appendTens.innerHTML = "0" + tens;
        }
        if(tens > 9){
            appendTens.innerHTML = tens;
        }
        if(tens > 99){
            seconds++;
            console.log(seconds);
            appendSeconds.innerHTML = "0" + seconds;
            tens = 0;
            appendTens.innerHTML = "0" + tens;
        }
        if(seconds > 9){
            appendSeconds.innerHTML = seconds;
        }
    }
    /*Bouton pour démarrer la minuterie*/
    buttonStart.onclick = function(){
        clearInterval(Interval);
        Interval = setInterval(startTimer, 10);
    }

    /*Bouton pour arrêter la minuterie*/
    buttonStop.onclick = function(){
        clearInterval(Interval);
    }


}