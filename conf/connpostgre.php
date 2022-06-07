<!-- awal dari koneksi postgre -->


<?php

//$conn_string = "host=10.255.200.252 port=5432 dbname=trustmedic user=postgres password=So3wandhi3";
$conn_string = "host=localhost port=5432 dbname=simrsserver user=postgres password=postgres";
//$conn_string = "host=10.255.200.69 port=5432 dbname=trustmedic user=postgres password=So3wandhi3";

$connection = pg_connect($conn_string);
/*
if (!$connection) {
print("Connection Failed");
exit;
}
else print("Connection Success");*/
?>

<!-- akhir dari koneksi postgre -->