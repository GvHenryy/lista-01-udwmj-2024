const TurnOn = document.getElementById (    'TurnOn'   );
const TurnOff = document.getElementById (    'TurnOff'   );
const Lamp = document.getElementById (    'Lamp'   );


function   lampOn () {  
    Lamp.src = './img/LampadaAcesa.jpg' ; 
}

function   lampOff () {  
    Lamp.src = './img/Lampada.jpg' ;     
}
function   lampBroken () {
    Lamp.src = './img/LampadaQuebrada.jpg' ;  
}

TurnOn.addEventListener (  'click' , lampOn  );
TurnOff.addEventListener (  'click' , lampOff  );
Lamp.addEventListener (  'dblclick' , lampBroken  );

