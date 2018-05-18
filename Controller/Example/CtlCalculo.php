<?php


$parte0 = (isset($_REQUEST['parte0']) ? $_REQUEST['parte0'] : "");
$parte1 = (isset($_REQUEST['parte1']) ? $_REQUEST['parte1'] : "");
$parte2 = (isset($_REQUEST['parte2']) ? $_REQUEST['parte2'] : "");
$parte3 = (isset($_REQUEST['parte3']) ? $_REQUEST['parte3'] : "");


$res = 'valor calculado';

echo(json_encode(['res' => 'Success', "msg" => $res]));
