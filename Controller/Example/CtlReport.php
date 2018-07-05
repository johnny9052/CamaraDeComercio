<?php

/* IMPORTS */
require '../../DTO/Example/CalculationDTO.php';
require '../../DAO/Example/CalculationDAO.php';
include '../../Helper/Action/Action.php';


/* RECEPCION DE DATOS */
$action = (isset($_REQUEST['action']) ? $_REQUEST['action'] : "");

$parte0 = (isset($_REQUEST['parte0']) ? $_REQUEST['parte0'] : "");
$parte1 = (isset($_REQUEST['parte1']) ? $_REQUEST['parte1'] : "");
$parte2 = (isset($_REQUEST['parte2']) ? $_REQUEST['parte2'] : "");
$parte3 = (isset($_REQUEST['parte3']) ? $_REQUEST['parte3'] : "");

$objetoParte0 = json_decode($parte0);
$objetoParte1 = json_decode($parte1);
$objetoParte2 = json_decode($parte2);
$objetoParte3 = json_decode($parte3);


/* DEFINICION DE OBJETOS */
$obj = new CalculationDTO($objetoParte1->{'municipio'}, $objetoParte1->{'sucursales'}, $objetoParte2->{'totalActivos'}, $objetoParte3->{'certificados'}, 5500, 781242, 5500, $objetoParte2->{'activosSucursales'}, $objetoParte2->{'municipioSucursales'});
$obj->calcularActivosEmpresa();
$obj->calcularActivosSucursalEmpresa();

$dao = new CalculationDAO();

/* CONTROL DE ACCIONES */
ExecuteAction($action, $obj, $dao);


