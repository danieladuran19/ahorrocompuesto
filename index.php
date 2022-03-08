<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    if(null !== $_GET['efectivo'] && null !==$_GET['tiempo'] && null !== $_GET['interes'] ){

        $efectivo = floatval($_GET['efectivo']);
        $tiempo = floatval($_GET['tiempo']);
        $interes = floatval($_GET['interes']);
        $monto_comp = $efectivo * pow((1+$interes), $tiempo);
        header("HTTP/1.1 200 OK");
        echo json_encode($monto_comp);
    }

}
else {
    header("HTTP/1.1 Bad Request");
}

?>
