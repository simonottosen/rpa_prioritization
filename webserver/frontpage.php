<?php
   include('session.php');
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115740420-2');
    </script>


<title>Master Thesis - CDSS for RPA</title>
  </head>
  <body>

    <script type="text/javascript">
    $(document).ready(function() {
        $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    });
    </script>




    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <a href="frontpage.php"> <img src="logo.png" alt="LOGO" style="height:75px;"> </a>
      <br/>
      <br/>
      <br/>

      <p class="lead">A computerized decision support system for Robotic Process Automation.</p>




    </div>





      <div class="container">
  <div class="row">
    <div class="col">          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Developer</h6>
                </div>
                <div class="card-body">
                <li>Reusable Modules</li>
              <li>Workload</li>
              <li>Clicks and Interactions</li>
              <br><br><br>

              <div class="d-flex justify-content-center">
<a>
      <span class="text">You're not a Developer, so you don't have access</span>
    </a>
</div>


                </div>
                
</div></div>
    <div class="col">          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Leader</h6>
                </div>
                <div class="card-body">
                <li>Legislation pressure</li>
              <li>Internal Prioritization</li>
              <li>Organisational Vision</li>
              <br><br><br>

<div class="d-flex justify-content-center">
<a>
      <span class="text">You're not a Leader, so you don't have access</span>
    </a>
</div>

                </div>
                </div></div>
    <div class="w-100"></div>
    <div class="col">          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Quality and Risk</h6>
                </div>
                <div class="card-body">
                <li>Risk-evaluation</li>
              <li>Documentation Quality</li>
              <li>Customer Satisfaction</li>
              <br><br><br>

              <div class="d-flex justify-content-center">
<a>
      <span class="text">You're not a Quality and Risk employee, so you don't have access</span>
    </a>
</div>

                </div>
                </div></div>
    <div class="col">          <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Processconsultant</h6>
                </div>
                <div class="card-body">
                <li>Process Maturity</li>
              <li>Time Usage</li>
              <li>Amount of Transactions</li>
              <li>System complexity</li>
              <li>System count</li>
              <br>

<div class="d-flex justify-content-center">
<a href="process/select.php" class="btn btn-primary  text-center">
      <span class="icon text-white">
        <i class="fas fa-arrow-right"></i>
      </span>
      <span class="text">  Rate projects</span>
    </a>
</div>

                </div>
</div>
  </div>
</div>



          <!--
            <h4 class="my-0 font-weight-normal">Developer</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Reusable Modules</li>
              <li>Workload</li>
              <li>Clicks and Interactions</li>
            </ul>
            <br>
            <br>

            <a href="developer/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rate projects</a>
          </div>
        </div>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Processconsultant</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Process Maturity</li>
              <li>Time Usage</li>
              <li>Amount of Transactions</li>
              <li>System complexity</li>
              <li>System count</li>

            </ul>
            <a href="process/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rate projects</a>
          </div>
        </div>

        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Quality & Risk</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Risk-evaluation</li>
              <li>Documentation Quality</li>
              <li>Customer Satisfaction</li>
            </ul>
            <br>
            <br>

            <a href="quality/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rate projects</a>
          </div>
        </div>



        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Leader</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Legislation pressure</li>
              <li>Internal Prioritization</li>
              <li>Organisational Vision</li>
            </ul>
            <br>
            <br>

            <a href="leader/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rate projects</a>
          </div>
        </div>
      </div>
<hr/>
<br/>

  -->
        <div class="card">

          <div class="card-header">
            <h4 class="my-0 font-weight-normal" style="text-align:center">Prioritzationboard</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4" style="text-align:center;">
              <li>Click this to see the completed rating of all projects.</li>
              <br/>
            </ul>
            <a href="list.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-primary">Prioritized List</a>
          </div>
        </div>

      </div>

    </div>
    <!-- Modal -->

</div>

<script src="js/sb-admin-2.min.js"></script>

  </body>
</html>
