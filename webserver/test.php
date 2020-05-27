
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "thesis";
$dbname = "thesis";
$databaseselection = 89;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$NEWsystemcomplexity = 1;
$NEWsystemcount = 1;
$NEWamountoftransactions = 1;
$NEWtimeusage = 1;
$NEWprocessmaturity = 1;
$NEWdegreeofautomation = 1;




$sql = "UPDATE projects " . "SET `systemcomplexity` = $NEWsystemcomplexity, `systemcount` = $NEWsystemcount, `amountoftransactions` = $NEWamountoftransactions, `timeusage` = $NEWtimeusage, `processmaturity` = $NEWprocessmaturity, `degreeofautomation` = $NEWdegreeofautomation " . "WHERE id = $databaseselection";

$result = $conn->query($sql);


$conn->close();


?>
