<?php 
$host = "LAPTOP-OT6DG8IV"; //nama

$connInfo = array("Database"=> "TSQL", "UID"=> "", "PWD" => "");
$conn = sqlsrv_connect($host, $connInfo);

if ($conn) {
    echo "Koneksi berhasil.<br />";
} else {
    echo "Koneksi Gagal";
    die(print_r(sqlsrv_errors(), true));
}
?>