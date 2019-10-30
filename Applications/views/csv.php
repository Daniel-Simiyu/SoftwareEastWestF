<?php 

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('ID', 'ITEM', 'AMOUNT' , 'BUY_PRICE' , 'SELL_PRICE'));

$host = "localhost";
		$user = "root";
		$password="";
		$db = "butinvent";

		$con = new mysqli($host,$user,$password,$db);

		$sql= "SELECT * FROM `inventory`";

		$result = $con->query($sql);

// loop over the rows, outputting them
while ($row = $result->fetch_assoc()) fputcsv($output, $row);

?>