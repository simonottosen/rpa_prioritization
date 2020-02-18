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




    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115740420-2');
    </script>


<title>SKAT - Beslutningsprocess</title>
  </head>
  <body>

    <script type="text/javascript">
    $(document).ready(function() {
        $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    });
    </script>




    <div style="float:right">
    <form align="right" name="form1" method="post" action="../logout.php" style="margin: 10px;">
      <label class="logoutLblPos">
      <input name="submit2" type="submit" id="submit2" value="Log ud" class="btn btn-default btn-sm">
      </label>
    </form>
    </div>

    <div style="float:right">
    <form align="right" name="form2" method="post" style="margin: 10px;">
      <label class="weightLblPos">
        <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-default btn-sm">Se vægtning</button>
      </label>
    </form>
    </div>


    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <a href="frontpage.php"> <img src="skat-logo.png" alt="SKAT" style="height:75px;"> </a>
      <br/>
      <br/>
      <br/>

      <p class="lead">Vælg venligst herunder hvilken stilling du tilhører og derfor vil lave ændringer ud fra.<br/> Hvis du sidder til fredags-møde, så vælg venligst administrator menuen, da du her kan redigere i alle værdier.</p>




    </div>



    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Udvikler</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li data-toggle="tooltip" data-placement="right" title="Ved datatilgængelighed menes der hvor let det er at få adgang til data f.eks over et API."> Datatilgængelighed</li>
              <li data-toggle="tooltip" data-placement="right" title="Ved genbrug menes der 'uofficiel' genbrug, hvor man bruger kode som ikke er en i byggeklods."> Genbrug af kode</li>
              <li data-toggle="tooltip" data-placement="right" title="Ved byggeklods menes der brug af en officiel vedligeholdt byggeklods."> Byggeklodser</li>
              <li data-toggle="tooltip"  data-placement="right" title="Ved kompleksitet menes der hvor svært og stor robotten er at lave.">Kompleksitet</li>

            </ul>
            <a href="udvikler/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rediger Pipeline</a>
          </div>
        </div>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Proceskonsulent</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li data-toggle="tooltip"  data-placement="right" title="Med dette menes antallet af skærmbilleder der bliver vist under processen.">Antal skærmbilleder</li>
              <li data-toggle="tooltip"  data-placement="right" title="Antallet af systemer som interageres med af robotten.">Antal berørte systemer</li>
              <li data-toggle="tooltip"  data-placement="right" title="Kvaliteten af den nuværende procesbeskrivelse og anden relevant dokumentation.">Kvalitet af PDD</li>
              <li data-toggle="tooltip"  data-placement="right" title="Vurdering af hvor mange mennesker der kan spares.">Kundetilfredshed</li>
            </ul>
            <a href="processkonsulent/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rediger Pipeline</a>
          </div>
        </div>


        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Leverancekoordinator</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li data-toggle="tooltip"  data-placement="right" title="Vurdering af risikoen ved robotten. Mulighed for at inkludere ekspertbedømmelser.">Risikovurdering</li>
              <li data-toggle="tooltip"  data-placement="right" title="Forbedring af kundetilfredsheden ved brug af en robot.">FTE Besparelser</li>
              <li data-toggle="tooltip"  data-placement="right" title="I hvor stor grad dette projekt stemmer overens med SKATs overordnede vision.">Vision</li>
              <br/>
            </ul>
            <a href="leverancekoordinator/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-outline-primary">Rediger Pipeline</a>
          </div>
        </div>
      </div>
<hr/>
<br/>

    <div class="card-deck mb-2 text-center" style="max-width: 80rem;">
        <div class="card">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal" style="text-align:center">Administrator</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4" style="text-align:center;">
              <li>Udvikler</li>
              <li>Proceskonsulent</li>
              <li>Leverancekoordinator</li>
              <br/>
            </ul>
            <a href="admin/select.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-primary">Rediger Pipeline</a>
          </div>
        </div>

        <div class="card">

          <div class="card-header">
            <h4 class="my-0 font-weight-normal" style="text-align:center">Liste over alle projekter</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4" style="text-align:center;">
              <li>En liste over alle projekter </li>
              <li>Alle gamle og nye projekter er inkluderet</li>
              <li>Ingen mulighed for at redigere </li>
              <br/>
            </ul>
            <a href="list.php" style="text-decoration:none;"> <type="button" class="btn btn-lg btn-block btn-primary">Se listen</a>
          </div>
        </div>

      </div>

    </div>
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

            <b> Vægtning af udvikleren </b> <br/>
            Datatilgængelighed:  <b><span id="Par1"></span>%</b><br/>
            Genbrug af kode: <b><span id="Par2"></span>%</b><br/>
            Byggeklodser: <b><span id="Par3"></span>%</b><br/>
            Kompleksitet: <b><span id="Par4"></span>%</b>
<hr/>
            <b> Vægtning af proceskonsulent </b><br/>
            Antal skærmbilleder <b><span id="Par5"></span>%</b><br/>
            Antal berørte systemer <b><span id="Par6"></span>%</b><br/>
            Kvalitet <b><span id="Par7"></span>%</b><br/>
            Kundetilfredshed <b><span id="Par8"></span>%</b><br/>

<hr/>
            <b> Vægtning af leverancekoordinator </b><br/>
            Risikovurdering <b><span id="Par9"></span>%</b><br/>
            FTE Besparelser <b><span id="Par10"></span>%</b><br/>
            Vision <b><span id="Par11"></span>%</b><br/>




      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Luk</button>
      </div>
    </div>
  </div>
</div>

</div>
<script>

var Par1 = 0.25;
var Par2 = 0.15;
var Par3 = 0.20;
var Par4 = 0.40;

var Par5 = 0.20;
var Par6 = 0.20;
var Par7 = 0.10;
var Par8 = 0.50;

var Par9 = 0.25;
var Par10 = 0.50;
var Par11 = 0.25;


$('#Par1').html(Par1 * 100);
$('#Par2').html(Par2 * 100);
$('#Par3').html(Par3 * 100);
$('#Par4').html(Par4 * 100);
$('#Par5').html(Par5 * 100);
$('#Par6').html(Par6 * 100);
$('#Par7').html(Par7 * 100);
$('#Par8').html(Par8 * 100);
$('#Par9').html(Par9 * 100);
$('#Par10').html(Par10 * 100);
$('#Par11').html(Par11 * 100);

</script>



  </body>
</html>
