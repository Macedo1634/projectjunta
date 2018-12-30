<?php
include_once("config.php");
$sqlEvents = "SELECT id, titulo, data_inicio, data_fim FROM agenda LIMIT 20";
$resultset = mysqli_query($conn, $sqlEvents) or die("database error:". mysqli_error($conn));
$calendar = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
// convert date to milliseconds
$data_inicio = strtotime($rows['data_inicio']) * 1000;
$data_fim = strtotime($rows['data_fim']) * 1000;
$calendar[] = array(
'id' =>$rows['id'],
'title' => $rows['titulo'],
'url' => "#",
"class" => 'event-important',
'start' => "$data_inicio",
'end' => "$data_fim"
);
}
$calendarData = array(
"success" => 1,
"result"=>$calendar);
echo json_encode($calendarData);
?>