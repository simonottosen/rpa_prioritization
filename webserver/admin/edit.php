<?php
   include('../session.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-115740420-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-115740420-2');
</script>


<script>
function myFunction() {
      window.location.reload(false);
}
</script>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "passwd";
$dbname = "skat";
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
  $aarsvcost = $row['aarsvcost'];
  $aarsvbesp = $row['aarsvbesp'];
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

      <div class="row">
        <div class="col-md-4">
          <h4>Udvikler</h4>
          <form method = "post" action = "<?php $_PHP_SELF ?>">
            <p>Datatilgængelighed</p><div class="input-group" style='margin-top: 10px;'>
            </div>
            <input name = "Scr1dev" id='Scr1dev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr1dev"  value="<?php echo $var1dev ?>" onkeyup="this.value = minmax(this.value, 0, 10)" style="width:200px;"/>
            <hr/><p>Mulighed for genbrug af kode </p>
            <input name = "Scr2dev" id='Scr2dev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr2dev"  value="<?php echo $var2dev ?>" onkeyup="this.value = minmax(this.value, 0, 10)" style="width:200px;"/>
            <hr/><p>Mulighed for brug af byggeklodser</p>
            <input name = "Scr3dev" id='Scr3dev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr3dev"  value="<?php echo $var3dev ?>" onkeyup="this.value = minmax(this.value, 0, 10)" style="width:200px;"/>
            <hr/><p>Vurdering af kompleksiteten. 10 er en lav kompleksitet.</p>
            <input name = "Scr4dev" id='Scr4dev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr4dev"  value="<?php echo $var4dev ?>" onkeyup="this.value = minmax(this.value, 0, 10)" style="width:200px;"/>

          <br/><br/><br/><br/><p>Vægtet score: <b><span id="UdrUdv"></span></b>
            <hr/>


          <br/>
        </div>
        <div class="col-md-4">
          <h4>Processkonsulent</h4>
          <p>Skærmbilleder i brug</p>
          <input name = "Scr1pro" id='Scr1pro' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr1pro"  value="<?php echo $var1pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <br/><p>Systemer der bliver interageret med</p>
          <input name = "Scr2pro" id='Scr2pro' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr2pro"  value="<?php echo $var2pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <br/><p>Kvalitet af nuværende dokumentation af processen(PDD o.lign)</p>
          <input name = "Scr3pro" id='Scr3pro' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr2pro"  value="<?php echo $var3pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <br/><p>Forbedring af Kunde-tilfredshed.</p>
          <input name = "Scr4pro" id='Scr4pro' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr4pro"  value="<?php echo $var4pro ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
<br /><br />
          <br/><br/>Vægtet score: <b>     <span id="UdrPro"></span></b>          <hr/>


          <br/>

        </div>
        <div class="col-md-4">
          <h4>Leverancekoordinator</h4>
          <p>Risikovurdering. 10 er lav risiko.</p>
          <input name = "Scr1lev" id='Scr1lev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr1lev"  value="<?php echo $var1lev ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <br/><p>Besparelser målt i antallet af FTEer. 10 er en høj besparelse.</p>
          <input name = "Scr2lev" id='Scr2lev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr2lev"  value="<?php echo $var2lev ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <hr/><p>Overensstemmelse med samlet vision </p>
          <input name = "Scr3lev" id='Scr3lev' type="number" min="0" max="10" step="1" class="form-control formBlock" name="Scr3lev"  value="<?php echo $var3lev ?>" onkeyup="this.value = minmax(this.value, 0, 10)"/>
          <br/><br/><br/><br/><br /><br /><br /><br /><br /><br />
          Vægtet score: <b>     <span id="UdrLev"></span></b>          <hr/>

        </div>
        <input name = "update" type = "submit" id = "update" value = "Opdater i databasen" class="btn btn-success" data-toggle="modal" data-target="#myModal">
      </form>


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
        $Scr1dev = $_POST['Scr1dev'];
        $Scr2dev = $_POST['Scr2dev'];
        $Scr3dev = $_POST['Scr3dev'];
        $Scr4dev = $_POST['Scr4dev'];
        $Scr1pro = $_POST['Scr1pro'];
        $Scr2pro = $_POST['Scr2pro'];
        $Scr3pro = $_POST['Scr3pro'];
        $Scr4pro = $_POST['Scr4pro'];
        $Scr1lev = $_POST['Scr1lev'];
        $Scr2lev = $_POST['Scr2lev'];
        $Scr3lev = $_POST['Scr3lev'];


        #DEV
        $Par1dev = 0.25;
        $Par2dev = 0.15;
        $Par3dev = 0.20;
        $Par4dev = 0.40;

        #PRO
        $Par1pro = 0.20;
        $Par2pro = 0.20;
        $Par3pro = 0.10;
        $Par4pro = 0.50;

        #LEV
        $Par1lev = 0.25;
        $Par2lev = 0.50;
        $Par3lev = 0.25;



        $UdrDev = ($Scr1dev * $Par1dev + $Scr2dev * $Par2dev + $Scr3dev * $Par3dev + $Scr4dev * $Par4dev);
        $UdrPro = ($Scr1pro * $Par1pro + $Scr2pro * $Par2pro + $Scr3pro * $Par3pro + $Scr4pro * $Par4pro);
        $UdrLev = ($Scr1lev * $Par1lev + $Scr2lev * $Par2lev + $Scr3lev * $Par3lev);
        $UdrTot = (($UdrDev + $UdrPro + $UdrLev)/3);



        $sql = "UPDATE projects ". "SET `var1dev` = $Scr1dev, `var2dev` = $Scr2dev, `var3dev` = $Scr3dev, `var4dev` = $Scr4dev, `var1pro` = $Scr1pro, `var2pro` = $Scr2pro, `var3pro` = $Scr3pro, `var4pro` = $Scr4pro, `var1lev` = $Scr1lev, `var2lev` = $Scr2lev, `var3lev` = $Scr3lev, `scoredev` = $UdrDev, `scorepro` = $UdrPro, `scorelev` = $UdrLev, `score` = $UdrTot, `evaldev` = 1, `evalpro` = 1, `evallev` = 1, `evaladm` = 1 ". "WHERE id = $databaseselection";
        //$sql = "UPDATE projects ". "SET var8 = $Scr8 ". "WHERE id = $databaseselection";

        $result = $conn->query($sql);


        $conn->close();
        echo '<script type="text/javascript">',
             'setTimeout(myFunction(), 1000);',
             '</script>'
        ;

}

        ?>



      </div>
      <br/>
    <hr/>
      <h2>Resultat</h2>

      </p>
      <h2 class="card-title pricing-card-title"> <span id="UdrTot"></span><small class="text-muted">/ 10</small></h2>
      <hr/>
      <br/>
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
    //Samlet pointscore = 3

    var Scr1 = Number($('#Scr1dev').val());
    var Scr2 = Number($('#Scr2dev').val());
    var Scr3 = Number($('#Scr3dev').val());
    var Scr4 = Number($('#Scr4dev').val());
    var Scr5 = Number($('#Scr1pro').val());
    var Scr6 = Number($('#Scr2pro').val());
    var Scr7 = Number($('#Scr3pro').val());
    var Scr8 = Number($('#Scr4pro').val());
    var Scr9 = Number($('#Scr1lev').val());
    var Scr10 = Number($('#Scr2lev').val());
    var Scr11 = Number($('#Scr3lev').val());

    var aacost = Number($('#aarsvcost').val());
    var aabesp = Number($('#aarsvbesp').val());

    var RoI = aabesp / aacost

    var Udr1 = Par1 * Scr1
    var Udr2 = Par2 * Scr2
    var Udr3 = Par3 * Scr3
    var Udr4 = Par4 * Scr4
    var Udr5 = Par5 * Scr5
    var Udr6 = Par6 * Scr6
    var Udr7 = Par7 * Scr7
    var Udr8 = Par8 * Scr8
    var Udr9 = Par9 * Scr9
    var Udr10 = Par10 * Scr10
    var Udr11 = Par11 * Scr11

    var UdrUdv = Udr1 + Udr2 + Udr3 + Udr4
    var UdrPro = Udr5 + Udr6 + Udr7 + Udr8
    var UdrLev = Udr9 + Udr10 + Udr11
    var UdrTot = (UdrUdv + UdrPro + UdrLev)/3


      //Dette er vores inputs som er taget fra de inputs der kan indtasts på siden. De bliver så defineret som variabler vi kan bruge i logikken senere i koden
      var UdrUdv = UdrUdv.toFixed(1)
      var UdrPro = UdrPro.toFixed(1)
      var UdrLev = UdrLev.toFixed(1)
      var UdrTot = UdrTot.toFixed(2)
      var RoI = RoI.toFixed(1)


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


      $('#UdrUdv').html(UdrUdv);
      $('#UdrPro').html(UdrPro);
      $('#UdrLev').html(UdrLev);
      $('#UdrTot').html(UdrTot);
      $('#select').html(select);

      $('#RoI').html(RoI);





    })
    window.onload = function() {
    $('input').keyup()
    };

    </script>
  </body>
</html>
