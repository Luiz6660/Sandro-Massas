<?php

function ConverterEmMoeda($valor){
    return 'R$ '.number_format($valor,2,",",".");
}

?>