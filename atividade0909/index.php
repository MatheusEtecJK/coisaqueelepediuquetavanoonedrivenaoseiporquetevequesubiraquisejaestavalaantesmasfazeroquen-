<?php

function vd($arr){

    echo '<pre>';
    var_dump($arr);
}

$lista = array('1',2,'3',4,'5');
$lista[] = 6;
$lista['vilão'] = 'nic';
$lista[] = 7;

vd($lista);

$oi['oi'] = array('oi','oi1','oi2');
$oi['io'] = array('io','io1','io2');

vd($oi);

$pessoas['Abner'] = array('elogio'=>'Lindo','elogio2'=>'Fofo','elogio3'=>'sapeca','elogio4'=>'inteligente');
$pessoas['Nicolas'] = array('elogio'=>'chato','elogio2'=>'chatao','elogio3'=>'ruim','elogio4'=>'ruinzinho');
$pessoas['Eduardo'] = array('elogio'=>'edu','elogio2'=>'dudu','elogio3'=>'duardo','elogio4'=>'du');

vd($pessoas);

echo $pessoas['Eduardo']['elogio'].'<br><br>';

foreach ($pessoas['Abner'] as $elogio => $fala) {
    echo $fala.' corresponde ao '.$elogio.'<br>';
}



