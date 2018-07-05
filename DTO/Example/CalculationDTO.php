<?php

require_once ('../../DTO/BaseDTO.php');

class CalculationDTO extends BaseDTO {

    private $ubicacionPrincipal;
    private $cantidadSucursales;
    private $totalActivos;
    private $numeroCertificados;
    private $smmlv;
    private $valorFormulario;
    private $totalFormularios;
    private $arrayActivosSucursales;
    private $arrayMunicipiosSucursales;
    /* Para ser usadas en funciones */
    private $res = 0;
    private $pagoSucursales;
    private $pagoTotalSucursales = 0;
    /* Valores definitivos */
    private $valorCerttificadosMatricula;
    private $valorCertificadosExistencia;
    private $valorCertificadosEspecial;
    private $pagoTotalCertificados;
    private $pagoTotal;

    function __construct($ubicacionPrincipal, $cantidadSucursales, $totalActivos, $numeroCertificados, $valorFormulario, $smmlv, $totalFormularios, $arrayActivosSucursales, $arrayMunicipiosSucursales) {
        $this->ubicacionPrincipal = $ubicacionPrincipal;
        $this->cantidadSucursales = $cantidadSucursales;
        $this->totalActivos = $totalActivos;
        $this->numeroCertificados = $numeroCertificados;
        $this->valorFormulario = $valorFormulario;
        $this->smmlv = $smmlv;
        $this->totalFormularios = $totalFormularios;
        $this->arrayActivosSucursales = $arrayActivosSucursales;
        $this->arrayMunicipiosSucursales = $arrayMunicipiosSucursales;
    }

    function getUbicacionPrincipal() {
        return $this->ubicacionPrincipal;
    }

    function getCantidadSucursales() {
        return $this->cantidadSucursales;
    }

    function getTotalActivos() {
        return $this->totalActivos;
    }

    function getNumeroCertificados() {
        return $this->numeroCertificados;
    }

    function getSmmlv() {
        return $this->smmlv;
    }

    function getValorFormulario() {
        return $this->valorFormulario;
    }

    function getTotalFormularios() {
        return $this->totalFormularios;
    }

    function getArrayActivosSucursales() {
        return $this->arrayActivosSucursales;
    }

    function getArrayMunicipiosSucursales() {
        return $this->arrayMunicipiosSucursales;
    }

    function getRes() {
        return $this->res;
    }

    function getPagoSucursales() {
        return $this->pagoSucursales;
    }

    function getPagoTotalSucursales() {
        return $this->pagoTotalSucursales;
    }

    function getValorCerttificadosMatricula() {
        return $this->valorCerttificadosMatricula;
    }

    function getValorCertificadosExistencia() {
        return $this->valorCertificadosExistencia;
    }

    function getValorCertificadosEspecial() {
        return $this->valorCertificadosEspecial;
    }

    function getPagoTotalCertificados() {
        return $this->pagoTotalCertificados;
    }

    function getPagoTotal() {
        return $this->pagoTotal;
    }

    function setUbicacionPrincipal($ubicacionPrincipal) {
        $this->ubicacionPrincipal = $ubicacionPrincipal;
    }

    function setCantidadSucursales($cantidadSucursales) {
        $this->cantidadSucursales = $cantidadSucursales;
    }

    function setTotalActivos($totalActivos) {
        $this->totalActivos = $totalActivos;
    }

    function setNumeroCertificados($numeroCertificados) {
        $this->numeroCertificados = $numeroCertificados;
    }

    function setSmmlv($smmlv) {
        $this->smmlv = $smmlv;
    }

    function setValorFormulario($valorFormulario) {
        $this->valorFormulario = $valorFormulario;
    }

    function setTotalFormularios($totalFormularios) {
        $this->totalFormularios = $totalFormularios;
    }

    function setArrayActivosSucursales($arrayActivosSucursales) {
        $this->arrayActivosSucursales = $arrayActivosSucursales;
    }

    function setArrayMunicipiosSucursales($arrayMunicipiosSucursales) {
        $this->arrayMunicipiosSucursales = $arrayMunicipiosSucursales;
    }

    function setRes($res) {
        $this->res = $res;
    }

    function setPagoSucursales($pagoSucursales) {
        $this->pagoSucursales = $pagoSucursales;
    }

    function setPagoTotalSucursales($pagoTotalSucursales) {
        $this->pagoTotalSucursales = $pagoTotalSucursales;
    }

    function setValorCerttificadosMatricula($valorCerttificadosMatricula) {
        $this->valorCerttificadosMatricula = $valorCerttificadosMatricula;
    }

    function setValorCertificadosExistencia($valorCertificadosExistencia) {
        $this->valorCertificadosExistencia = $valorCertificadosExistencia;
    }

    function setValorCertificadosEspecial($valorCertificadosEspecial) {
        $this->valorCertificadosEspecial = $valorCertificadosEspecial;
    }

    function setPagoTotalCertificados($pagoTotalCertificados) {
        $this->pagoTotalCertificados = $pagoTotalCertificados;
    }

    function setPagoTotal($pagoTotal) {
        $this->pagoTotal = $pagoTotal;
    }

    
    /* Determina el valor a pagar por los activos de la empresa */

    function calcularActivosEmpresa() {
        if ($this->totalActivos > 0 and $this->totalActivos <= ($this->smmlv * 2)) {
            $this->res = $this->smmlv * 0.0524;
        } elseif ($this->totalActivos > ($this->smmlv * 2) and $this->totalActivos <= ($this->smmlv * 4)) {
            $this->res = $this->smmlv * 0.0734;
        } elseif ($this->totalActivos > ($this->smmlv * 4) and $this->totalActivos <= ($this->smmlv * 5)) {
            $this->res = $this->smmlv * 0.0979;
        } elseif ($this->totalActivos > ($this->smmlv * 5) and $this->totalActivos <= ($this->smmlv * 7)) {
            $this->res = $this->smmlv * 0.1084;
        } elseif ($this->totalActivos > ($this->smmlv * 7) and $this->totalActivos <= ($this->smmlv * 9)) {
            $this->res = $this->smmlv * 0.1294;
        } elseif ($this->totalActivos > ($this->smmlv * 9) and $this->totalActivos <= ($this->smmlv * 11)) {
            $this->res = $this->smmlv * 0.1468;
        } elseif ($this->totalActivos > ($this->smmlv * 11) and $this->totalActivos <= ($this->smmlv * 12)) {
            $this->res = $this->smmlv * 0.1608;
        } elseif ($this->totalActivos > ($this->smmlv * 12) and $this->totalActivos <= ($this->smmlv * 14)) {
            $this->res = $this->smmlv * 0.1783;
        } elseif ($this->totalActivos > ($this->smmlv * 14) and $this->totalActivos <= ($this->smmlv * 16)) {
            $this->res = $this->smmlv * 0.2028;
        } elseif ($this->totalActivos > ($this->smmlv * 16) and $this->totalActivos <= ($this->smmlv * 18)) {
            $this->res = $this->smmlv * 0.2238;
        } elseif ($this->totalActivos > ($this->smmlv * 18) and $this->totalActivos <= ($this->smmlv * 19)) {
            $this->res = $this->smmlv * 0.2378;
        } elseif ($this->totalActivos > ($this->smmlv * 19)and $this->totalActivos <= ($this->smmlv * 21)) {
            $this->res = $this->smmlv * 0.2552;
        } elseif ($this->totalActivos > ($this->smmlv * 21) and $this->totalActivos <= ($this->smmlv * 23)) {
            $this->res = $this->smmlv * 0.2692;
        } elseif ($this->totalActivos > ($this->smmlv * 23) and $this->totalActivos <= ($this->smmlv * 25)) {
            $this->res = $this->smmlv * 0.2867;
        } elseif ($this->totalActivos > ($this->smmlv * 25) and $this->totalActivos <= ($this->smmlv * 26)) {
            $this->res = $this->smmlv * 0.3077;
        } elseif ($this->totalActivos > ($this->smmlv * 26) and $this->totalActivos <= ($this->smmlv * 28)) {
            $this->res = $this->smmlv * 0.3182;
        } elseif ($this->totalActivos > ($this->smmlv * 28) and $this->totalActivos <= ($this->smmlv * 30)) {
            $this->res = $this->smmlv * 0.3357;
        } elseif ($this->totalActivos > ($this->smmlv * 30) and $this->totalActivos <= ($this->smmlv * 31)) {
            $this->res = $this->smmlv * 0.3566;
        } elseif ($this->totalActivos > ($this->smmlv * 31) and $this->totalActivos <= ($this->smmlv * 33)) {
            $this->res = $this->smmlv * 0.3741;
        } elseif ($this->totalActivos > ($this->smmlv * 33) and $this->totalActivos <= ($this->smmlv * 35)) {
            $this->res = $this->smmlv * 0.3881;
        } elseif ($this->totalActivos > ($this->smmlv * 35) and $this->totalActivos <= ($this->smmlv * 52)) {
            $this->res = $this->smmlv * 0.4545;
        } elseif ($this->totalActivos > ($this->smmlv * 52) and $this->totalActivos <= ($this->smmlv * 70)) {
            $this->res = $this->smmlv * 0.5454;
        } elseif ($this->totalActivos > ($this->smmlv * 70) and $this->totalActivos <= ($this->smmlv * 87)) {
            $this->res = $this->smmlv * 0.6399;
        } elseif ($this->totalActivos > ($this->smmlv * 87) and $this->totalActivos <= ($this->smmlv * 105)) {
            $this->res = $this->smmlv * 0.7343;
        } elseif ($this->totalActivos > ($this->smmlv * 105) and $this->totalActivos <= ($this->smmlv * 123)) {
            $this->res = $this->smmlv * 0.8357;
        } elseif ($this->totalActivos > ($this->smmlv * 123) and $this->totalActivos <= ($this->smmlv * 140)) {
            $this->res = $this->smmlv * 0.9301;
        } elseif ($this->totalActivos > ($this->smmlv * 140) and $this->totalActivos <= ($this->smmlv * 158)) {
            $this->res = $this->smmlv * 1.0315;
        } elseif ($this->totalActivos > ($this->smmlv * 158) and $this->totalActivos <= ($this->smmlv * 175)) {
            $this->res = $this->smmlv * 1.1329;
        } elseif ($this->totalActivos > ($this->smmlv * 175) and $this->totalActivos <= ($this->smmlv * 192)) {
            $this->res = $this->smmlv * 1.3147;
        } elseif ($this->totalActivos > ($this->smmlv * 192) and $this->totalActivos <= ($this->smmlv * 210)) {
            $this->res = $this->smmlv * 1.3392;
        } elseif ($this->totalActivos > ($this->smmlv * 210) and $this->totalActivos <= ($this->smmlv * 228)) {
            $this->res = $this->smmlv * 1.3636;
        } elseif ($this->totalActivos > ($this->smmlv * 228) and $this->totalActivos <= ($this->smmlv * 245)) {
            $this->res = $this->smmlv * 1.3881;
        } elseif ($this->totalActivos > ($this->smmlv * 245) and $this->totalActivos <= ($this->smmlv * 262)) {
            $this->res = $this->smmlv * 1.4161;
        } elseif ($this->totalActivos > ($this->smmlv * 262) and $this->totalActivos <= ($this->smmlv * 280)) {
            $this->res = $this->smmlv * 1.4371;
        } elseif ($this->totalActivos > ($this->smmlv * 280) and $this->totalActivos <= ($this->smmlv * 297)) {
            $this->res = $this->smmlv * 1.4650;
        } elseif ($this->totalActivos > ($this->smmlv * 297) and $this->totalActivos <= ($this->smmlv * 316)) {
            $this->res = $this->smmlv * 1.4895;
        } elseif ($this->totalActivos > ($this->smmlv * 316) and $this->totalActivos <= ($this->smmlv * 332)) {
            $this->res = $this->smmlv * 1.5105;
        } elseif ($this->totalActivos > ($this->smmlv * 332) and $this->totalActivos <= ($this->smmlv * 350)) {
            $this->res = $this->smmlv * 1.5420;
        } elseif ($this->totalActivos > ($this->smmlv * 350) and $this->totalActivos <= ($this->smmlv * 524)) {
            $this->res = $this->smmlv * 1.5944;
        } elseif ($this->totalActivos > ($this->smmlv * 524) and $this->totalActivos <= ($this->smmlv * 700)) {
            $this->res = $this->smmlv * 1.6608;
        } elseif ($this->totalActivos > ($this->smmlv * 700) and $this->totalActivos <= ($this->smmlv * 875)) {
            $this->res = $this->smmlv * 1.7133;
        } elseif ($this->totalActivos > ($this->smmlv * 875) and $this->totalActivos <= ($this->smmlv * 1050)) {
            $this->res = $this->smmlv * 1.7552;
        } elseif ($this->totalActivos > ($this->smmlv * 1050) and $this->totalActivos <= ($this->smmlv * 1224)) {
            $this->res = $this->smmlv * 1.7902;
        } elseif ($this->totalActivos > ($this->smmlv * 1224) and $this->totalActivos <= ($this->smmlv * 1399)) {
            $this->res = $this->smmlv * 1.8182;
        } elseif ($this->totalActivos > ($this->smmlv * 1399) and $this->totalActivos <= ($this->smmlv * 1574)) {
            $this->res = $this->smmlv * 1.8392;
        } elseif ($this->totalActivos > ($this->smmlv * 1574) and $this->totalActivos <= ($this->smmlv * 1748)) {
            $this->res = $this->smmlv * 1.8601;
        } elseif ($this->totalActivos > ($this->smmlv * 1748) and $this->totalActivos <= ($this->smmlv * 2098)) {
            $this->res = $this->smmlv * 1.8846;
        } elseif ($this->totalActivos > ($this->smmlv * 2098) and $this->totalActivos <= ($this->smmlv * 2448)) {
            $this->res = $this->smmlv * 1.9126;
        } elseif ($this->totalActivos > ($this->smmlv * 2448) and $this->totalActivos <= ($this->smmlv * 2797)) {
            $this->res = $this->smmlv * 1.9336;
        } elseif ($this->totalActivos > ($this->smmlv * 2797) and $this->totalActivos <= ($this->smmlv * 3147)) {
            $this->res = $this->smmlv * 1.9475;
        } elseif ($this->totalActivos > ($this->smmlv * 3147) and $this->totalActivos <= ($this->smmlv * 3497)) {
            $this->res = $this->smmlv * 1.9685;
        } elseif ($this->totalActivos > ($this->smmlv * 3497) and $this->totalActivos <= ($this->smmlv * 5245)) {
            $this->res = $this->smmlv * 2.0035;
        } elseif ($this->totalActivos > ($this->smmlv * 5245) and $this->totalActivos <= ($this->smmlv * 6993)) {
            $this->res = $this->smmlv * 2.0594;
        } elseif ($this->totalActivos > ($this->smmlv * 6993) and $this->totalActivos <= ($this->smmlv * 8741)) {
            $this->res = $this->smmlv * 2.1294;
        } elseif ($this->totalActivos > ($this->smmlv * 8741) and $this->totalActivos <= ($this->smmlv * 10490)) {
            $this->res = $this->smmlv * 2.1888;
        } elseif ($this->totalActivos > ($this->smmlv * 10490) and $this->totalActivos <= ($this->smmlv * 12238)) {
            $this->res = $this->smmlv * 2.2098;
        } elseif ($this->totalActivos > ($this->smmlv * 12238) and $this->totalActivos <= ($this->smmlv * 13986)) {
            $this->res = $this->smmlv * 2.2378;
        } elseif ($this->totalActivos > ($this->smmlv * 13986) and $this->totalActivos <= ($this->smmlv * 15734)) {
            $this->res = $this->smmlv * 2.2692;
        } elseif ($this->totalActivos > ($this->smmlv * 15734) and $this->totalActivos <= ($this->smmlv * 17483)) {
            $this->res = $this->smmlv * 2.3147;
        } elseif ($this->totalActivos > ($this->smmlv * 17483) and $this->totalActivos <= ($this->smmlv * 34965)) {
            $this->res = $this->smmlv * 2.4406;
        } elseif ($this->totalActivos > ($this->smmlv * 34965) and $this->totalActivos <= ($this->smmlv * 69930)) {
            $this->res = $this->smmlv * 2.4510;
        } elseif ($this->totalActivos > ($this->smmlv * 69930) and $this->totalActivos <= ($this->smmlv * 104895)) {
            $this->res = $this->smmlv * 2.4615;
        } elseif ($this->totalActivos > ($this->smmlv * 104895) and $this->totalActivos <= ($this->smmlv * 139860)) {
            $this->res = $this->smmlv * 2.4685;
        } elseif ($this->totalActivos > ($this->smmlv * 139860) and $this->totalActivos <= ($this->smmlv * 174825)) {
            $this->res = $this->smmlv * 2.4755;
        } elseif ($this->totalActivos > ($this->smmlv * 174825) and $this->totalActivos <= ($this->smmlv * 349650)) {
            $this->res = $this->smmlv * 2.4825;
        } elseif ($this->totalActivos > ($this->smmlv * 349650) and $this->totalActivos <= ($this->smmlv * 699300)) {
            $this->res = $this->smmlv * 2.5105;
        } elseif ($this->totalActivos > ($this->smmlv * 699300) and $this->totalActivos <= ($this->smmlv * 874125)) {
            $this->res = $this->smmlv * 2.5699;
        } else {
            $this->res = $this->smmlv * 2.5979;
        }
    }

    /* Determina el valor a pagar por los activos de cada sucursal de la empresa */

    function calcularActivosSucursalEmpresa() {
        if ($this->cantidadSucursales > 0) {
            for ($i = 0; $i < $this->cantidadSucursales; $i++) {
                if ($this->arrayMunicipiosSucursales[$i] === $this->ubicacionPrincipal) {
                    if ($this->arrayActivosSucursales[$i] >= 0 and $this->arrayActivosSucursales[$i] < (3 * $this->smmlv)) {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.0524);
                    } elseif ($this->arrayActivosSucursales[$i] > (3 * $this->smmlv) and $this->arrayActivosSucursales[$i] < (17 * $this->smmlv)) {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.1119);
                    } else {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.1678);
                    }
                } else {
                    $this->totalFormularios += $this->valorFormulario;
                    if ($this->arrayActivosSucursales[$i] >= 0 and $this->arrayActivosSucursales[$i] < (3 * $this->smmlv)) {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.1119);
                    } elseif ($this->arrayActivosSucursales[$i] > (3 * $this->smmlv) and $this->arrayActivosSucursales[$i] < (17 * $this->smmlv)) {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.1678);
                    } else {
                        $this->pagoSucursales[$i] = ($this->smmlv * 0.2237);
                    }
                }
            }

            $this->calcularTotalPagoSucursales();
            $this->calcularTotalPagoCertificados();
        }
    }

    /* Calcula el total de pago por sucursales */

    function calcularTotalPagoSucursales() {
        for ($i = 0; $i < $this->cantidadSucursales; $i++) {
            $this->pagoTotalSucursales += $this->pagoSucursales[$i];
        }
    }

    /* Determina el total a pagar por certificados */

    function calcularTotalPagoCertificados() {

        $max = sizeof($this->numeroCertificados);
        for ($i = 0; $i < $max; $i++) {
            if ($this->numeroCertificados[$i] === "matriculaMercantil") {
                $this->certificadoMatriculaMercantil = $this->numeroCertificados[$i + 1];
            } elseif ($this->numeroCertificados[$i] === "existencia") {
                $this->certificadoExistencia = $this->numeroCertificados[$i + 1];
            } elseif ($this->numeroCertificados[$i] === "certificadoEspecial") {
                $this->certificadoEspecial = $this->numeroCertificados[$i + 1];
            }
        }

        $this->valorCerttificadosMatricula = $this->certificadoMatriculaMercantil * ($this->smmlv * 0.0035);
        $this->valorCertificadosExistencia = $this->certificadoExistencia * ($this->smmlv * 0.0070);
        $this->valorCertificadosEspecial = $this->certificadoEspecial * ($this->smmlv * 0.0070);
        $this->pagoTotalCertificados = $this->valorCertificadosEspecial + $this->valorCertificadosExistencia + $this->valorCerttificadosMatricula;

        $this->pagoTotal = $this->res + $this->pagoTotalSucursales + $this->totalFormularios + $this->pagoTotalCertificados;

        /* Adiciona signo pesos a los pagoSucursales */
        setlocale(LC_MONETARY, 'en_US');
        for ($i = 0; $i < $this->cantidadSucursales; $i++) {
            $this->pagoSucursales[$i] = round($this->pagoSucursales[$i]);
            $this->pagoSucursales[$i] = "$ " . number_format($this->pagoSucursales[$i], 0, '', '.');
        }
    }

}
