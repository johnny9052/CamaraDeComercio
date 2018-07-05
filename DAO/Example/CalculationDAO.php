<?php

/**
 * Definicion de acciones para la gestion de los usuarios
 *
 * @author Johnny Alexander Salazar
 * @version 0.1
 */
class CalculationDAO {

    private $repository;

    function CalculationDAO() {
        require_once '../../Infraestructure/Repository.php';
        $this->repository = new Repository();
    }

    public function GeneratePDF(CalculationDTO $obj) {

        //Longitud maxima de los caracteres del listado
        $max = 200;


        require_once('../../Resource/html2pdf/html2pdf.class.php'); // Se carga la libreria

        $descripcion = '';
        $cadenaHTML = "<page>";
        $cadenaHTML .= '<link href="../../Resource/Style/estilosPDF.css" type="text/css" rel="stylesheet">';
        $cadenaHTML .= "<div><img class='logo' src='../../Resource/Images/logo.png'></div><br><br>";


        $cadenaHTML .= "<div><h4>RESULTADOS</h4><br></div>";

        $cadenaHTML .= "<table>";
        $cadenaHTML .= "<tr><td class='subtitleBlue'>Categoria</td><td class='subresultblue'>$ Valor</td></tr>";
        $cadenaHTML .= "<tr><td class='subtitle'>Pago principal</td><td class='subresult'>$" . number_format($obj->getRes(), 0, '', '.') . "</td></tr>";
        $cadenaHTML .= "<tr><td class='subtitle backgroundGray'>Pago formularios</td><td class='subresult backgroundGray'>$" . number_format($obj->getTotalFormularios(), 0, '', '.') . "</td></tr>";
        $cadenaHTML .= "<tr><td class='subtitle'>Pago certificados matricula</td><td class='subresult'>$" . number_format($obj->getValorCerttificadosMatricula(), 0, '', '.') . "</td></tr>";
        $cadenaHTML .= "<tr><td class='subtitle backgroundGray'>Pago certificados existencia</td><td class='subresult backgroundGray'>$" . number_format($obj->getValorCertificadosExistencia(), 0, '', '.') . "</td></tr>";
        $cadenaHTML .= "<tr><td class='subtitle'>Pago certificado especial</td><td class='subresult'>$" . number_format($obj->getValorCertificadosEspecial(), 0, '', '.') . "</td></tr>";

        $contSucursales = 1;

        foreach ($obj->getPagoSucursales() as $valor) {

            if ($contSucursales % 2 == 0) {
                $cadenaHTML .= "<tr><td class='subtitle'>Pago Sucursal" . $contSucursales . "</td><td class='subresult'>" . $valor . "</td></tr>";
            } else {
                $cadenaHTML .= "<tr><td class='subtitle backgroundGray'>Pago Sucursal" . $contSucursales . "</td><td class='subresult backgroundGray'>" . $valor . "</td></tr>";
            }
            $contSucursales++;
        }

        $contSucursales++;

        if ($contSucursales % 2 == 0) {
            
            $cadenaHTML .= "<tr><td class='resulttitle backgroundGray'>Pago total</td><td class='result backgroundGray'>$" . number_format($obj->getPagoTotal(), 0, '', '.') . "</td></tr>";
        } else {
            $cadenaHTML .= "<tr><td class='resulttitle'>Pago total</td><td class='result'>$" . number_format($obj->getPagoTotal(), 0, '', '.') . "</td></tr>";
        }

        

        $cadenaHTML .= "</table>";
        $cadenaHTML .= "</page>";


        //formato del pdf (posicion (P=vertical L=horizontal), tamaño del pdf, lenguaje)
        $html2pdf = new HTML2PDF('P', 'A4', 'es');
        $html2pdf->WriteHTML($cadenaHTML); //Lo que tenga content lo pasa a pdf
        ob_end_clean(); // se limpia nuevamente el buffer
        $html2pdf->Output('example' . '.pdf'); //se genera el pdf, generando por defecto el nombre indicado para guardar
    }

}
