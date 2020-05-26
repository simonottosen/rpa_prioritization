<?php
include('session.php');
?>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-115740420-2');
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <script>
    function myFunction() {
      window.location.reload(false);
    }
  </script>


  <script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
      output.innerHTML = this.value;
    }
  </script>


  <script>
    $(function() {
      var handle = $("#custom-handle");
      $("#slider").slider({
        create: function() {
          handle.text($(this).slider("value"));
        },
        slide: function(event, ui) {
          handle.text(ui.value);
        }
      });
    });
  </script>


  <?php
  $servername = "mysql";
  $username = "root";
  $password = "thesis";
  $dbname = "thesis";
  $databaseselection = $_GET["id"];
  $bFirstRun = true;

  if ($bFirstRun) {

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, "utf8");

    $sql = "SELECT * FROM projects where id = $databaseselection";
    $result = $conn->query($sql);


    $sql_weight = "SELECT * FROM weights";
    $result_weight = $conn->query($sql_weight);


    if ($result_weight->num_rows > 0) {
      while ($row = $result_weight->fetch_assoc()) {
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


    while ($row = $result->fetch_assoc()) {
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
    }

    $conn->close();
    $bFirstRun = false;
  }







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

  $weight_combined_fte = $weight_timeusage + $weight_amountoftransactions;


  $weighted_timeusage = $timeusage * $weight_timeusage;
  $weighted_amountoftransactions = $amountoftransactions * $weight_amountoftransactions;
  $weighted_degreeofautomation = $degreeofautomation;

  $combined_fte = ($timeusage * $amountoftransactions) * (1 - (1 - ($degreeofautomation / 100)));
  $MAX = 110100;
  $relationship_fte = $combined_fte / $MAX;
  $rating_fte = ($relationship_fte * 1000) / 100;
  $weighted_rating_fte = $rating_fte * $weight_combined_fte;


  $process_rating_sum = ($weigted_processmaturity + $weighted_systemcount + $weighted_systemcomplexity + $weighted_rating_fte);
  $process_weight_sum = ($weight_processmaturity + $weight_systemcount + $weight_systemcomplexity + $weight_combined_fte);
  $process_sum = $process_rating_sum / $process_weight_sum;


  # Combined
  $score = round(($process_rating_sum + $developer_rating_sum + $quality_rating_sum + $leader_rating_sum) / ($process_weight_sum + $developer_weight_sum + $quality_weight_sum + $leader_weight_sum), 2);
  $printable_process_sum = round($process_sum, 2);
  $printable_developer_sum = round($developer_sum, 2);
  $printable_quality_sum = round($quality_sum, 2);
  $printable_leader_sum = round($leader_sum, 2);




  ?>

  <title>CDSS for RPA</title>
</head>

<body>

  <div style="float:right">
  </div>
  <div style="float:right">
    <form align="right" name="form2" method="post" style="margin: 10px;">
      <label class="weightLblPos">
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-sm">See the weights</button>
      </label>
    </form>
  </div>





  <span id="select"></span></b>
  <div class="jumbotron">
    <!--  <a href="index.html" download class="btn btn-info" role="button">Download kildekoden</a> -->

    <div class="container">
      <br />

      <a href="index.php"> <img src="logo.png" alt="Logo" style="height:75px;"> </a>
      <hr>

      <h2> <?php echo $name ?> </h2>
      <h5> Current score: <?php echo $score ?> <small>/10</small> </h5>
      <hr />
      <p>The project have been proposed by <?php echo $requestor ?> from the department <?php echo $department ?>.</p>
      <p> Description: <br><i><?php echo $descr ?> </i></p>


    </div>
  </div>
  </div>
  </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col">


        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Developer</h3>
            <h5> Weigted score: <?php echo "$printable_developer_sum" ?> <small>/10</small> </h5>


            <div class="range-slider">
              <label for="customRange1">Reusable Modules</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $reusablemodules ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Workload</label> <br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $workload ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Clicks and Interactions</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $clicksandinteraction ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


          </div>
        </div>


      </div>
      <div class="col">


        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Leader</h3>
            <h5> Weigted score: <?php echo "$printable_leader_sum" ?> <small>/10</small> </h5>

            <div class="range-slider">
              <label for="customRange1">Legislation pressure</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $legislationpressure ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Internal Prioritization</label> <br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $internalprioritization ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Organisational Vision</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $organizationalvision ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


          </div>
        </div>


      </div>
      <div class="w-100"></div>
      <br><br>
      <div class="col">


        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Quality & Risk</h3>
            <h5> Weigted score: <?php echo "$printable_quality_sum" ?> <small>/10</small> </h5>

            <div class="range-slider">
              <label for="customRange1">Risk-evaluation</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $riskevaluation ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Documentation Quality</label> <br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $documentationquality ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Customer Satisfaction</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $customersatisfaction ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


          </div>
        </div>


      </div>
      <div class="col">


        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Processconsultant</h3>
            <h5> Weigted score: <?php echo "$printable_process_sum" ?> <small>/10</small> </h5>

            <div class="range-slider">
              <label for="customRange1">Process Maturity</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $processmaturity ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>

            <div class="range-slider">
              <label for="customRange1">System complexity</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $systemcomplexity ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">System count</label><br>
              <input class="custom-range range-slider__range" type="range" value="<?php echo $systemcount ?>" min="0" max="10" disabled="true">
              <span class="range-slider__value">0</span>
            </div>


            <div class="range-slider">
              <label for="customRange1">Time Usage <i> in minutes </i></label> <br>
              <input class="form-control" type="number" name="timeusage" id="timeusage" value="<?php echo $timeusage ?>">
            </div>


            <div class="range-slider">
              <label for="customRange1">Amount of Transactions <i> per month </i></label><br>
              <input class="form-control" type="number" name="amountoftransactions" id="amountoftransactions" value="<?php echo $amountoftransactions ?>">
            </div>


            <div class="range-slider">
              <label for="customRange1">Degree of Automation <i> in percentage </i></label><br>
              <input class="custom-range range-slider__range" type="range" name="degreeofautomation" id="degreeofautomation" value="<?php echo (int) $degreeofautomation ?>" min="0" max="100">
              <span class="range-slider__value">0</span>
            </div>




          </div>
        </div>
      </div>
    </div>
  </div>





  </ul>



  </form>


  <br><br>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 <span class="glyphicon glyphicon-lock"></span></h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">

              <b> Weights for the Developer </b> <br />
              Reusable Modules: <b><?php echo $weight_reusablemodules ?></b><br />
              Workload: <b><?php echo $weight_workload ?></b><br />
              Clicks and Interactions: <b><?php echo $weight_clicksandinteraction ?></b><br />

              <hr />

              <b> Weights for the Processconsultant </b><br />
              Process Maturity: <b><?php echo $weight_processmaturity ?></b><br />
              Time Usage: <b><?php echo $weight_timeusage ?></b><br />
              Amount of Transactions: <b><?php echo $weight_amountoftransactions ?></b><br />
              System complexity: <b><?php echo $weight_systemcomplexity ?></b><br />
              System count: <b><?php echo $weight_systemcount ?></b><br />

              <hr />

              <b> Weights for the Leader </b><br />
              Legislation Pressure: <b><?php echo $weight_legislationpressure ?></b><br />
              Internal Prioritization: <b><?php echo $weight_internalprioritization ?></b><br />
              Organisational Vision: <b><?php echo $weight_organizationalvision ?></b><br />

              <hr />


              <b> Weights for Quality and Risk </b><br />
              Risk-evaluation: <b><?php echo $weight_riskevaluation ?></b><br />
              Documentation Quality: <b><?php echo $weight_documentationquality ?></b><br />
              Customer Satisfaction: <b><?php echo $weight_customersatisfaction ?></b><br />



            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Luk</button>
            </div>
        </div>
      </div>
    </div>

</body>

</html>


<script>
  var rangeSlider = function() {
    var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');

    slider.each(function() {

      value.each(function() {
        var value = $(this).prev().attr('value');
        $(this).html(value);
      });

      range.on('input', function() {
        $(this).next(value).html(this.value);
      });
    });
  };

  rangeSlider();
</script>