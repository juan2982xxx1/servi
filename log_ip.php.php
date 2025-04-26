<?php
// Obtener la IP del visitante
$visitor_ip = $_SERVER['REMOTE_ADDR'];

// Fecha y hora actual
$date_time = date("Y-m-d H:i:s");

// Guardar la IP y la fecha en un archivo de texto
$logfile = 'visitor_ips.txt'; // Nombre del archivo donde se guardarán las IPs
$log_entry = "IP: $visitor_ip - Date: $date_time\n";

// Abre el archivo en modo append para agregar la IP sin sobrescribir
file_put_contents($logfile, $log_entry, FILE_APPEND);

// Responder al navegador que todo ha ido bien
echo "IP registrada correctamente.";
?>
