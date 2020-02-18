<?php
   include('../session.php');
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
<script>
function myFunction() {
      window.location.reload(false);
}
</script>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "thesis";
$dbname = "thesis";
$databaseselection = $_GET["id"];
$bFirstRun = true;

if( $bFirstRun ) {

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");

$sql = "SELECT * FROM projects where id = $databaseselection";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
  $name = $row['name'];
  $id = $row['id'];
  $desc = $row['descr'];
  $requestor = $row['requestor'];
  $evaldesc = $row['evaldesc'];
  $evalself= $row['evalself'];
  $fagomr = $row['fagomr'];
  $var1dev = $row['var1dev'];
  $var2dev = $row['var2dev'];
  $var3dev = $row['var3dev'];
  $var4dev = $row['var4dev'];
  $var1pro = $row['var1pro'];
  $var2pro = $row['var2pro'];
  $var3pro = $row['var3pro'];
  $var4pro = $row['var4pro'];
  $var1lev = $row['var1lev'];
  $var2lev = $row['var2lev'];
  $var3lev = $row['var3lev'];
  $scoredev = $row['scoredev'];
  $scorepro = $row['scorepro'];
  $scorelev = $row['scorelev'];
  $dok1 = $row['dok1'];
  $dok2 = $row['dok2'];
  $dok3 = $row['dok3'];
  $dok4 = $row['dok4'];
  $score = $row['score'];
  }

  $conn->close();
  $bFirstRun = false;
}

?>

<title>SKAT - Beslutningsprocess</title>
  </head>
  <body>



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



<span id="select"></span></b>
    <div class="jumbotron">
    <!--  <a href="index.html" download class="btn btn-info" role="button">Download kildekoden</a> -->

      <div class="container">
        <br/>

        <a href="../frontpage.php"> <img src="../skat-logo.png" alt="SKAT" style="height:75px;"> </a>
        <hr>

        <h2> <?php echo $name ?> </h2>
        <b> <?php echo $desc ?> </b>
        <hr/>
        <b>Projektet er blevet stillet af <?php echo $requestor ?> fra fagområdet ved navn <?php echo $fagomr ?>. <br/><br/>
          De har givet deres egenvurdering karakteren <?php echo $evalself ?> med følgende begrundelse </b>
          <p> "<?php echo $evaldesc ?>" </p>

          <hr/>

          <b>Stilleren har derudover svaret følgende til dokumentationen</b>
          <p> Er der dokumentation af processen? <?php echo $dok1 ?> </p>
          <p> Er dokumentationen opdateret til at reflektere den nuværende process helt? <?php echo $dok2 ?> </p>
          <p> Er dokumentationen digital? <?php echo $dok3 ?> </p>
          <p> Indeholder dokumentationen skærmbilleder af alle delprocesser? <?php echo $dok4 ?>  </p>
          <hr/>




      </div>
    </div>

    <div class="container">
      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Vurdering fra processkonsulenten</h4>
          </div>
          <hr class="mb-4">
          <form method = "post" action = "<?php $_PHP_SELF ?>">
          <p>Skærmbilleder i brug</p>
          <input name = "Scr1" id='Scr1' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr1"  value="<?php echo $var1pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"style="width:200px;"/>
          <hr/><p>Systemer der bliver interageret med</p>
          <input name = "Scr2" id='Scr2' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr2"  value="<?php echo $var2pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"style="width:200px;"/>
          <hr/><p>Kvalitet af nuværende dokumentation af processen(PDD o.lign)</p>
          <input name = "Scr3" id='Scr3' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr3"  value="<?php echo $var3pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"style="width:200px;"/>
          <hr/><p>Forbedring af Kundetilfredshed</p>
          <input name = "Scr4" id='Scr4' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr4"  value="<?php echo $var4pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"style="width:200px;"/>

          <br/>
      <button class="btn btn-success" name = "update" type = "submit" id = "update">Opdater værdierne</button>
        </form>
      </p>
      <hr/>
      <h2>Resultat</h2>
      <h2 class="card-title pricing-card-title"> <span id="UdrTot"></span><small class="text-muted">/ 10</small></h2>
      <hr/>
      <br/>
    </div>
    </div>



        <?php
        if(isset($_POST['update'])) {
        $servername = "127.0.0.1";
        $username = "root";
        $password = "passwd";
        $dbname = "skat";
        $databaseselection = $_GET["id"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $Scr1 = $_POST['Scr1'];
        $Scr2 = $_POST['Scr2'];
        $Scr3 = $_POST['Scr3'];
        $Scr4 = $_POST['Scr4'];
        $UdrTot = $_POST['UdrTot'];

        $Par1 = 0.20;
        $Par2 = 0.20;
        $Par3 = 0.10;
        $Par4 = 0.50;


        $UdrTot = ($Scr1 * $Par1 + $Scr2 * $Par2 + $Scr3 * $Par3 + $Scr4 * $Par4);

        $sql = "UPDATE projects ". "SET `var1pro` = $Scr1, `var2pro` = $Scr2, `var3pro` = $Scr3, `var4pro` = $Scr4, `scorepro` = $UdrTot,  `evaldev` = 1 ". "WHERE id = $databaseselection";
        //$sql = "UPDATE projects ". "SET var8 = $Scr8 ". "WHERE id = $databaseselection";

        $result = $conn->query($sql);


        $conn->close();
        echo '<script type="text/javascript">',
             'setTimeout(myFunction(), 3000);',
             '</script>'
        ;}
        ?>

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
              FTE Besparelser <b><span id="Par8"></span>%</b><br/>

  <hr/>
              <b> Vægtning af leverancekoordinator </b><br/>
              Risikovurdering <b><span id="Par9"></span>%</b><br/>
              Kundetilfredshed <b><span id="Par10"></span>%</b><br/>
              Vision <b><span id="Par11"></span>%</b><br/>




        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Luk</button>
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

    <script>
    function minmax(value, min, max)
    {
        if(parseInt(value) < min || isNaN(parseInt(value)))
            return 0;
        else if(parseInt(value) > max)
            return 10;
        else return value;
    }


    //Her definerer vi de variabler som skal bruges til udregningen og ikke bør ændres på
    $('input').keyup(function(){

    var Scr1 = Number($('#Scr1').val());
    var Scr2 = Number($('#Scr2').val());
    var Scr3 = Number($('#Scr3').val());
    var Scr4 = Number($('#Scr4').val());


    var Udr1 = Par1 * Scr1
    var Udr2 = Par2 * Scr2
    var Udr3 = Par3 * Scr3
    var Udr4 = Par4 * Scr4

    var UdrTot = (Udr1 + Udr2 + Udr3 + Udr4)


      //Dette er vores inputs som er taget fra de inputs der kan indtasts på siden. De bliver så defineret som variabler vi kan bruge i logikken senere i koden
      var UdrTot = UdrTot.toFixed(1)



      $('#UdrTot').html(UdrTot);
      $('#select').html(select);


    })
    window.onload = function() {
    $('input').keyup()
    };

    </script>
  </body>
</html>
