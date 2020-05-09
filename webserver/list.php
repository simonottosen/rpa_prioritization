<?php
header('Content-type: text/html; charset=utf-8');
   include('session.php');
?>
<html lang="en">
  <head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115740420-2');
</script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js"></script>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "thesis";
$dbname = "thesis";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$sql = "SELECT * FROM projects";
$result = $conn->query($sql);

$sql_weight = "SELECT * FROM weights";
$result_weight = $conn->query($sql_weight);

?>

<title>SKAT - Beslutningsprocess</title>
  </head>
  <body>

    <div style="float:right">
    <form align="right" name="form1" method="post" action="logout.php" style="margin: 10px;">
      <label class="logoutLblPos">
      <input name="submit2" type="submit" id="submit2" value="Log ud" class="btn btn-default btn-sm">
      </label>
    </form>
    </div>



    <!--  <a href="index.html" download class="btn btn-info" role="button">Download kildekoden</a> -->

      <div class="container">
        <br/>

        <a href="frontpage.php"> <img src="logo.png" alt="Logo" style="height:75px;"> </a>
        <hr>

        <h4>Vælg det projekt i listen, som du ønsker at redigere</h4>
        <br>



<form action="showproject.php" method="get">
<input type="text" name="id" class="form-control formBlock" placeholder="Indtast et ID" style="width:300px;"><br/>
<input type="submit" type="button" class="btn btn-success" id="button" disabled=true value="Vis yderligere information om projektet">
</form>



<table class="table table-striped table-bordered" data-toggle="table" data-sort-order="desc">
  <br/>
  <hr/>
  <thead>

    <tr>
      <th data-field="id"  data-sortable="true">ID</th>
      <th>Name</th>
      <th>Department</th>
      <th data-field="Processconsultant"  data-sortable="true">Processconsultant</th>
      <th data-field="Developer"  data-sortable="true">Developer</th>
      <th data-field="Quality"  data-sortable="true">Quality & Risk</th>
      <th data-field="Leader"  data-sortable="true">Leader</th>
      <th data-field="Score"  data-sortable="true">Score</th>

    </tr>
  </thead>

<?php



if ($result_weight->num_rows > 0) {
  while($row = $result_weight->fetch_assoc()) {
    $weight_reusablemodules = $row['reusablemodules'];
    $weight_workload = $row['workload'];
    $weight_processmaturity = $row['processmaturity'];
    $weight_internalprioritization = $row['internalprioritization'];
    $weight_riskevaluation = $row['riskevaluation'];
    $weight_organizationalvision = $row['organizationalvision'];
    $weight_systemcount = $row['systemcount'];
    $weight_systemcomplexity = $row['systemcomplexity'];
    $weight_documentationquality = $row['documentationquality'];
    $weight_clicksandinteraction = $row['clicksandinteraction'];
    $weight_legislationpressure = $row['legislationpressure'];
    $weight_customersatisfaction = $row['customersatisfaction'];
    $weight_timeusage = $row['timeusage'];
    $weight_amountoftransactions = $row['amountoftransactions'];
  }
};

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $id = $row['id'];
      $name = $row['name'];
      $descr = $row['descr'];
      $requestor = $row['requestor'];
      $department = $row['department'];
      $reusablemodules = $row['reusablemodules'];
      $workload = $row['workload'];
      $processmaturity = $row['processmaturity'];
      $internalprioritization = $row['internalprioritization'];
      $riskevaluation = $row['riskevaluation'];
      $organizationalvision = $row['organizationalvision'];
      $systemcount = $row['systemcount'];
      $systemcomplexity = $row['systemcomplexity'];
      $documentationquality = $row['documentationquality'];
      $clicksandinteraction = $row['clicksandinteraction'];
      $legislationpressure = $row['legislationpressure'];
      $customersatisfaction = $row['customersatisfaction'];
      $timeusage = $row['timeusage'];
      $amountoftransactions = $row['amountoftransactions'];
      $degreeofautomation = $row['degreeofautomation'];

      

      # Leader
      $weighted_legislationpressure = $legislationpressure * $weight_legislationpressure;
      $weighted_internalprioritization = $internalprioritization * $weight_internalprioritization;
      $weighted_organizationalvision = $organizationalvision * $weight_organizationalvision;

      $leader_rating_sum = ($weighted_legislationpressure + $weighted_internalprioritization + $weighted_organizationalvision);
      $leader_weight_sum = ($weight_legislationpressure + $weight_internalprioritization + $weight_organizationalvision);
      $leader_sum = $leader_rating_sum / $leader_weight_sum;

      # Quality
      $weighted_riskevaluation = $riskevaluation * $weight_riskevaluation;
      $weighted_documentationquality = $documentationquality * $weight_documentationquality;
      $weighted_customersatisfaction = $customersatisfaction * $weight_customersatisfaction;
      
      $quality_rating_sum = ($weighted_riskevaluation + $weighted_documentationquality + $weighted_customersatisfaction);
      $quality_weight_sum = ($weight_riskevaluation + $weight_documentationquality + $weight_customersatisfaction);
      $quality_sum = $quality_rating_sum / $quality_weight_sum;


      # Developer
      $weigted_reusablemodules = $reusablemodules * $weight_reusablemodules;
      $weigted_workload = $workload * $weight_workload;
      $weighted_clicksandinteraction = $clicksandinteraction * $weight_clicksandinteraction;

      $developer_rating_sum = ($weigted_reusablemodules + $weigted_workload + $weighted_clicksandinteraction);
      $developer_weight_sum = ($weight_reusablemodules + $weight_workload + $weight_clicksandinteraction);
      $developer_sum = $developer_rating_sum / $developer_weight_sum;

      # Process
      $weigted_processmaturity = $processmaturity * $weight_processmaturity;
      $weighted_systemcount = $systemcount * $weight_systemcount;
      $weighted_systemcomplexity = $systemcomplexity * $weight_systemcomplexity;
      $weighted_timeusage = $timeusage * $weight_timeusage;
      $weighted_amountoftransactions = $amountoftransactions * $weight_amountoftransactions;

      $process_rating_sum = ($weigted_processmaturity + $weighted_systemcount + $weighted_systemcomplexity + $weighted_timeusage + $weighted_amountoftransactions);
      $process_weight_sum = ($weight_processmaturity + $weight_systemcount + $weight_systemcomplexity + $weight_timeusage + $weight_amountoftransactions);
      $process_sum = $process_rating_sum / $process_weight_sum;


      # Combined
      $score = round(($process_sum + $developer_sum + $quality_sum + $leader_sum) / 4, 2);

  echo '<tr>
      <td>'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$department.'</td>
      <td>'.round($process_sum, 2).'</td>
      <td>'.round($developer_sum, 2).'</td>
      <td>'.round($quality_sum, 2).'</td>
      <td>'.round($leader_sum, 2).'</td>
      <td><b>'.$score.'</b></td>

    </tr>';
}
} else {
    echo "0 results";
}

$conn->close();

?>

<script>
$('input').keyup(function(){
  document.getElementById("button").disabled = false;

});
</script>
  </body>
</html>
