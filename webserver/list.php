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
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<?php
$servername = "mysql";
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

<title>Master Thesis - CDSS for RPA</title>
  </head>
  <body>

    <div style="float:right">
    </div>



    <!--  <a href="index.html" download class="btn btn-info" role="button">Download kildekoden</a> -->

      <div class="container">
        <br/>

        <a href="index.php"> <img src="logo.png" alt="Logo" style="height:75px;"> </a>
        <hr>

        <h4>Choose the project that you would like to see further information on.</h4>
        <br>




<div class="card mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">

<div class="table-responsive">
  <table class="table table-bordered" id="datatables" width="100%" cellspacing="0">
    <thead>
      <th> </th>
      <th> </th>
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


      #One calculation for this
      $weight_combined_fte = $weight_timeusage + $weight_amountoftransactions;


      $weighted_timeusage = $timeusage * $weight_timeusage;
      $weighted_amountoftransactions = $amountoftransactions * $weight_amountoftransactions;
      $weighted_degreeofautomation = $degreeofautomation;

      $combined_fte = ($timeusage * $amountoftransactions) * (1-(1-($degreeofautomation/100)));
      $MAX = 110100;
      $relationship_fte = $combined_fte / $MAX;
      $rating_fte = ($relationship_fte * 1000) / 100;
      $weighted_rating_fte = $rating_fte * $weight_combined_fte;


      $process_rating_sum = ($weigted_processmaturity + $weighted_systemcount + $weighted_systemcomplexity + $weighted_rating_fte);
      $process_weight_sum = ($weight_processmaturity + $weight_systemcount + $weight_systemcomplexity + $weight_combined_fte);
      $process_sum = $process_rating_sum / $process_weight_sum;
      

      # Combined
      $score = round(($process_rating_sum + $developer_rating_sum + $quality_rating_sum + $leader_rating_sum) / ($process_weight_sum + $developer_weight_sum + $quality_weight_sum + $leader_weight_sum), 2);
      $url = '<a href="showproject.php?id=';
      $string_id = strval($id);
      $url .= $string_id;
      $url .='"class="btn btn-info" role="button">Expand</a>';



  echo '<tr>
      <td></td>
      <td>'.$url.'</td>
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


  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->

<script>

$(document).ready(function() {
    $('#datatables').DataTable( {
        responsive: {
            details: {
                type: 'column'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 9, 'desc' ]
    } );
} );


</script>

</div>
</div>
</div>
</div>
</div>
</div>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

  

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  </body>
</html>


<!--
-->