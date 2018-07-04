<?php

$smmlv = 781242; //Valor Salario Minimo Mensual Vigente

$parte0 = (isset($_REQUEST['parte0']) ? $_REQUEST['parte0'] : "");
$parte1 = (isset($_REQUEST['parte1']) ? $_REQUEST['parte1'] : "");
$parte2 = (isset($_REQUEST['parte2']) ? $_REQUEST['parte2'] : "");
$parte3 = (isset($_REQUEST['parte3']) ? $_REQUEST['parte3'] : "");

$objetoParte0 = json_decode($parte0);
$objetoParte1 = json_decode($parte1);
$objetoParte2 = json_decode($parte2);
$objetoParte3 = json_decode($parte3);

$ubicacionPrincipal = $objetoParte1->{'municipio'};         //Ubicacion de la sede principal de la empresa
$cantidadSucursales = $objetoParte1->{'sucursales'};        //Número de sucursales de la empresa
$totalActivos = $objetoParte2->{'totalActivos'};            //Total de activos de la empresa
$numeroCertificados = $objetoParte3->{'certificados'};      //Array de certificados 
$valorFormulario = 5500;                                    //Valor de formulario por la principal y por cada sucursal fuera de la cámara donde se encuentra la principal

$totalFormularios = $valorFormulario;                       //Suma el valor del formulario de la principal

/* Determina el valor a pagar por los activos de la empresa */
if ($totalActivos > 0 and $totalActivos <= ($smmlv * 2)) {
    $res = $smmlv * 0.0524;
} elseif ($totalActivos > ($smmlv * 2) and $totalActivos <= ($smmlv * 4)) {
    $res = $smmlv * 0.0734;
} elseif ($totalActivos > ($smmlv * 4) and $totalActivos <= ($smmlv * 5)) {
    $res = $smmlv * 0.0979;
} elseif ($totalActivos > ($smmlv * 5) and $totalActivos <= ($smmlv * 7)) {
    $res = $smmlv * 0.1084;
} elseif ($totalActivos > ($smmlv * 7) and $totalActivos <= ($smmlv * 9)) {
    $res = $smmlv * 0.1294;
} elseif ($totalActivos > ($smmlv * 9) and $totalActivos <= ($smmlv * 11)) {
    $res = $smmlv * 0.1468;
} elseif ($totalActivos > ($smmlv * 11) and $totalActivos <= ($smmlv * 12)) {
    $res = $smmlv * 0.1608;
} elseif ($totalActivos > ($smmlv * 12) and $totalActivos <= ($smmlv * 14)) {
    $res = $smmlv * 0.1783;
} elseif ($totalActivos > ($smmlv * 14) and $totalActivos <= ($smmlv * 16)) {
    $res = $smmlv * 0.2028;
} elseif ($totalActivos > ($smmlv * 16) and $totalActivos <= ($smmlv * 18)) {
    $res = $smmlv * 0.2238;
} elseif ($totalActivos > ($smmlv * 18) and $totalActivos <= ($smmlv * 19)) {
    $res = $smmlv * 0.2378;
} elseif ($totalActivos > ($smmlv * 19)and $totalActivos <= ($smmlv * 21)) {
    $res = $smmlv * 0.2552;
} elseif ($totalActivos > ($smmlv * 21) and $totalActivos <= ($smmlv * 23)) {
    $res = $smmlv * 0.2692;
} elseif ($totalActivos > ($smmlv * 23) and $totalActivos <= ($smmlv * 25)) {
    $res = $smmlv * 0.2867;
} elseif ($totalActivos > ($smmlv * 25) and $totalActivos <= ($smmlv * 26)) {
    $res = $smmlv * 0.3077;
} elseif ($totalActivos > ($smmlv * 26) and $totalActivos <= ($smmlv * 28)) {
    $res = $smmlv * 0.3182;
} elseif ($totalActivos > ($smmlv * 28) and $totalActivos <= ($smmlv * 30)) {
    $res = $smmlv * 0.3357;
} elseif ($totalActivos > ($smmlv * 30) and $totalActivos <= ($smmlv * 31)) {
    $res = $smmlv * 0.3566;
} elseif ($totalActivos > ($smmlv * 31) and $totalActivos <= ($smmlv * 33)) {
    $res = $smmlv * 0.3741;
} elseif ($totalActivos > ($smmlv * 33) and $totalActivos <= ($smmlv * 35)) {
    $res = $smmlv * 0.3881;
} elseif ($totalActivos > ($smmlv * 35) and $totalActivos <= ($smmlv * 52)) {
    $res = $smmlv * 0.4545;
} elseif ($totalActivos > ($smmlv * 52) and $totalActivos <= ($smmlv * 70)) {
    $res = $smmlv * 0.5454;
} elseif ($totalActivos > ($smmlv * 70) and $totalActivos <= ($smmlv * 87)) {
    $res = $smmlv * 0.6399;
} elseif ($totalActivos > ($smmlv * 87) and $totalActivos <= ($smmlv * 105)) {
    $res = $smmlv * 0.7343;
} elseif ($totalActivos > ($smmlv * 105) and $totalActivos <= ($smmlv * 123)) {
    $res = $smmlv * 0.8357;
} elseif ($totalActivos > ($smmlv * 123) and $totalActivos <= ($smmlv * 140)) {
    $res = $smmlv * 0.9301;
} elseif ($totalActivos > ($smmlv * 140) and $totalActivos <= ($smmlv * 158)) {
    $res = $smmlv * 1.0315;
} elseif ($totalActivos > ($smmlv * 158) and $totalActivos <= ($smmlv * 175)) {
    $res = $smmlv * 1.1329;
} elseif ($totalActivos > ($smmlv * 175) and $totalActivos <= ($smmlv * 192)) {
    $res = $smmlv * 1.3147;
} elseif ($totalActivos > ($smmlv * 192) and $totalActivos <= ($smmlv * 210)) {
    $res = $smmlv * 1.3392;
} elseif ($totalActivos > ($smmlv * 210) and $totalActivos <= ($smmlv * 228)) {
    $res = $smmlv * 1.3636;
} elseif ($totalActivos > ($smmlv * 228) and $totalActivos <= ($smmlv * 245)) {
    $res = $smmlv * 1.3881;
} elseif ($totalActivos > ($smmlv * 245) and $totalActivos <= ($smmlv * 262)) {
    $res = $smmlv * 1.4161;
} elseif ($totalActivos > ($smmlv * 262) and $totalActivos <= ($smmlv * 280)) {
    $res = $smmlv * 1.4371;
} elseif ($totalActivos > ($smmlv * 280) and $totalActivos <= ($smmlv * 297)) {
    $res = $smmlv * 1.4650;
} elseif ($totalActivos > ($smmlv * 297) and $totalActivos <= ($smmlv * 316)) {
    $res = $smmlv * 1.4895;
} elseif ($totalActivos > ($smmlv * 316) and $totalActivos <= ($smmlv * 332)) {
    $res = $smmlv * 1.5105;
} elseif ($totalActivos > ($smmlv * 332) and $totalActivos <= ($smmlv * 350)) {
    $res = $smmlv * 1.5420;
} elseif ($totalActivos > ($smmlv * 350) and $totalActivos <= ($smmlv * 524)) {
    $res = $smmlv * 1.5944;
} elseif ($totalActivos > ($smmlv * 524) and $totalActivos <= ($smmlv * 700)) {
    $res = $smmlv * 1.6608;
} elseif ($totalActivos > ($smmlv * 700) and $totalActivos <= ($smmlv * 875)) {
    $res = $smmlv * 1.7133;
} elseif ($totalActivos > ($smmlv * 875) and $totalActivos <= ($smmlv * 1050)) {
    $res = $smmlv * 1.7552;
} elseif ($totalActivos > ($smmlv * 1050) and $totalActivos <= ($smmlv * 1224)) {
    $res = $smmlv * 1.7902;
} elseif ($totalActivos > ($smmlv * 1224) and $totalActivos <= ($smmlv * 1399)) {
    $res = $smmlv * 1.8182;
} elseif ($totalActivos > ($smmlv * 1399) and $totalActivos <= ($smmlv * 1574)) {
    $res = $smmlv * 1.8392;
} elseif ($totalActivos > ($smmlv * 1574) and $totalActivos <= ($smmlv * 1748)) {
    $res = $smmlv * 1.8601;
} elseif ($totalActivos > ($smmlv * 1748) and $totalActivos <= ($smmlv * 2098)) {
    $res = $smmlv * 1.8846;
} elseif ($totalActivos > ($smmlv * 2098) and $totalActivos <= ($smmlv * 2448)) {
    $res = $smmlv * 1.9126;
} elseif ($totalActivos > ($smmlv * 2448) and $totalActivos <= ($smmlv * 2797)) {
    $res = $smmlv * 1.9336;
} elseif ($totalActivos > ($smmlv * 2797) and $totalActivos <= ($smmlv * 3147)) {
    $res = $smmlv * 1.9475;
} elseif ($totalActivos > ($smmlv * 3147) and $totalActivos <= ($smmlv * 3497)) {
    $res = $smmlv * 1.9685;
} elseif ($totalActivos > ($smmlv * 3497) and $totalActivos <= ($smmlv * 5245)) {
    $res = $smmlv * 2.0035;
} elseif ($totalActivos > ($smmlv * 5245) and $totalActivos <= ($smmlv * 6993)) {
    $res = $smmlv * 2.0594;
} elseif ($totalActivos > ($smmlv * 6993) and $totalActivos <= ($smmlv * 8741)) {
    $res = $smmlv * 2.1294;
} elseif ($totalActivos > ($smmlv * 8741) and $totalActivos <= ($smmlv * 10490)) {
    $res = $smmlv * 2.1888;
} elseif ($totalActivos > ($smmlv * 10490) and $totalActivos <= ($smmlv * 12238)) {
    $res = $smmlv * 2.2098;
} elseif ($totalActivos > ($smmlv * 12238) and $totalActivos <= ($smmlv * 13986)) {
    $res = $smmlv * 2.2378;
} elseif ($totalActivos > ($smmlv * 13986) and $totalActivos <= ($smmlv * 15734)) {
    $res = $smmlv * 2.2692;
} elseif ($totalActivos > ($smmlv * 15734) and $totalActivos <= ($smmlv * 17483)) {
    $res = $smmlv * 2.3147;
} elseif ($totalActivos > ($smmlv * 17483) and $totalActivos <= ($smmlv * 34965)) {
    $res = $smmlv * 2.4406;
} elseif ($totalActivos > ($smmlv * 34965) and $totalActivos <= ($smmlv * 69930)) {
    $res = $smmlv * 2.4510;
} elseif ($totalActivos > ($smmlv * 69930) and $totalActivos <= ($smmlv * 104895)) {
    $res = $smmlv * 2.4615;
} elseif ($totalActivos > ($smmlv * 104895) and $totalActivos <= ($smmlv * 139860)) {
    $res = $smmlv * 2.4685;
} elseif ($totalActivos > ($smmlv * 139860) and $totalActivos <= ($smmlv * 174825)) {
    $res = $smmlv * 2.4755;
} elseif ($totalActivos > ($smmlv * 174825) and $totalActivos <= ($smmlv * 349650)) {
    $res = $smmlv * 2.4825;
} elseif ($totalActivos > ($smmlv * 349650) and $totalActivos <= ($smmlv * 699300)) {
    $res = $smmlv * 2.5105;
} elseif ($totalActivos > ($smmlv * 699300) and $totalActivos <= ($smmlv * 874125)) {
    $res = $smmlv * 2.5699;
} else {
    $res = $smmlv * 2.5979;
}

/* Determina el valor a pagar por los activos de cada sucursal de la empresa */
$pagoSucursales;            //Almacena el pago por cada una de las sucursales
if ($cantidadSucursales > 0) {
    $arrayActivosSucursales = $objetoParte2->{'activosSucursales'};
    $arrayMunicipiosSucursales = $objetoParte2->{'municipioSucursales'};
    for ($i = 0; $i < $cantidadSucursales; $i++) {
        if ($arrayMunicipiosSucursales[$i] === $ubicacionPrincipal) {
            if ($arrayActivosSucursales[$i] >= 0 and $arrayActivosSucursales[$i] < (3 * $smmlv)) {
                $pagoSucursales[$i] = ($smmlv * 0.0524);
            } elseif ($arrayActivosSucursales[$i] > (3 * $smmlv) and $arrayActivosSucursales[$i] < (17 * $smmlv)) {
                $pagoSucursales[$i] = ($smmlv * 0.1119);
            } else {
                $pagoSucursales[$i] = ($smmlv * 0.1678);
            }
        } else {
            $totalFormularios += $valorFormulario;
            if ($arrayActivosSucursales[$i] >= 0 and $arrayActivosSucursales[$i] < (3 * $smmlv)) {
                $pagoSucursales[$i] = ($smmlv * 0.1119);
            } elseif ($arrayActivosSucursales[$i] > (3 * $smmlv) and $arrayActivosSucursales[$i] < (17 * $smmlv)) {
                $pagoSucursales[$i] = ($smmlv * 0.1678);
            } else {
                $pagoSucursales[$i] = ($smmlv * 0.2237);
            }
        }
    }

    /* Calcula el total de pago por sucursales */
    $pagoTotalSucursales=0;
    for ($i = 0; $i < $cantidadSucursales; $i++) {
        $pagoTotalSucursales += $pagoSucursales[$i];
    }

    /* Determina el total a pagar por certificados */

    $max = sizeof($numeroCertificados);
    for ($i = 0; $i < $max; $i++) {
        if ($numeroCertificados[$i] === "matriculaMercantil") {
            $certificadoMatriculaMercantil = $numeroCertificados[$i + 1];
        } elseif ($numeroCertificados[$i] === "existencia") {
            $certificadoExistencia = $numeroCertificados[$i + 1];
        } elseif ($numeroCertificados[$i] === "certificadoEspecial") {
            $certificadoEspecial = $numeroCertificados[$i + 1];
        }
    }

    $valorCerttificadosMatricula = $certificadoMatriculaMercantil * ($smmlv * 0.0035);
    $valorCertificadosExistencia = $certificadoExistencia * ($smmlv * 0.0070);
    $valorCertificadosEspecial = $certificadoEspecial * ($smmlv * 0.0070);
    $pagoTotalCertificados = $valorCertificadosEspecial + $valorCertificadosExistencia + $valorCerttificadosMatricula;

    $pagoTotal = $res + $pagoTotalSucursales + $totalFormularios + $pagoTotalCertificados;
}



$array = ([
    "pagoTotal" => $pagoTotal,
    "pagoPrincipal" => "$res",
    "arrayPagoSucursales" => json_encode($pagoSucursales),
    "pagoFormularios" => "$totalFormularios",
    "pagoCertificadosMatricula" => "$valorCerttificadosMatricula",
    "pagoCertificadosExistencia" => "$valorCertificadosExistencia",
    "pagoCertificadosEspecial" => "$valorCertificadosEspecial"
        ]);



echo(json_encode(['res' => 'Success', "msg" => 'Valor calculado correctamente',
    "data" => json_encode($array)]));
