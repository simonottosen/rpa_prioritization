<?php
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
    <form align="right" name="form1" method="post" action="logout.php" style="margin: 10px;">
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

        <a href="frontpage.php"> <img src="skat-logo.png" alt="SKAT" style="height:75px;"> </a>
        <hr>

        <h2> <?php echo $name ?> </h2>
        <b> <?php echo $desc ?> </b>
        <hr/>
        <b>Projektet er blevet stillet af <?php echo $requestor ?> fra fagområdet ved navn <?php echo $fagomr ?>. <br/><br/>
          De har givet deres egenvurdering karakteren <?php echo $evalself ?> med følgende begrundelse </b>
          <p> "<?php echo $evaldesc ?>" </p>

    <!--  <b>Følgende parametre er den nuværende fordelingsnøgle fra 0 til 1</b></br></br>
      <p>Par1 = <span id="Par1"></span></b></br>
      <p>Par2 = <span id="Par2"></span></b></br>
      <p>Par3 = <span id="Par3"></span></b></br>
      <p>Par4 = <span id="Par4"></span></b></br>
      <p>Par5 = <span id="Par5"></span></b></br>
      <p>Par6 = <span id="Par6"></span></b></br>
      <p>Par7 = <span id="Par7"></span></b></br>
      <p>Par8 = <span id="Par8"></span></b></br>
      <p>Par9 = <span id="Par9"></span></b></br>
      <hr>
-->

      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <h4>Udvikler</h4>
          <form method = "post" action = "<?php $_PHP_SELF ?>">
            <p>Timer brugt til projektet</p>
          <input name = "Scr1" id='Scr1' type="text" class="form-control formBlock" name="Scr1"  value="<?php echo $var1dev ?>" disabled=true /><br />
          <br/><p>Mulighed for genbrug af kode </p>
          <input name = "Scr2" id='Scr2' type="text" class="form-control formBlock" name="Scr2"  value="<?php echo $var2dev ?>" disabled=true /><br />
          <br/><p>Mulighed for brug af byggeklodser</p>
          <input name = "Scr3" id='Scr3' type="text" class="form-control formBlock" name="Scr3"  value="<?php echo $var3dev ?>" disabled=true /><br />
          <br/><p>Vurdering af sværhedsgraden. 10 er meget let.</p>
          <input name = "Scr3" id='Scr3' type="text" class="form-control formBlock" name="Scr3"  value="<?php echo $var4dev ?>" disabled=true /><br />

          <br/><br/><br/><br/>Vægtet score: <b>     <?php echo $scoredev ?></b> <hr/>


          <br/>
        </div>
        <div class="col-md-4">
          <h4>Processkonsulent</h4>
          <p>Skærmbilleder i brug</p>
          <input name = "Scr1" id='Scr1' type="text" class="form-control formBlock" name="Scr1"  value="<?php echo $var1pro ?>" disabled=true /><br />
          <br/><p>Systemer der bliver interageret med</p>
          <input name = "Scr2" id='Scr2' type="text" class="form-control formBlock" name="Scr2"  value="<?php echo $var2pro ?>" disabled=true /><br />
          <br/><p>Kvalitet af nuværende dokumentation af processen(PDD o.lign)</p>
          <input name = "Scr3" id='Scr3' type="text" class="form-control formBlock" name="Scr3"  value="<?php echo $var3pro ?>" disabled=true /><br />
          <br/><p>Besparelser målt i antallet af FTEer. 10 er en høj besparelse</p>
          <input name = "Scr3" id='Scr3' type="text" class="form-control formBlock" name="Scr3"  value="<?php echo $var4pro ?>" disabled=true /><br />
          <br/><br/>Vægtet score: <b>     <?php echo $scorepro ?></b> <hr/>

          <br/>

        </div>
        <div class="col-md-4">
          <h4>Leverancekoordinator</h4>
          <p>Informationssikkerhed. 10 er god sikkerhed.</p>
          <input name = "Scr7" id='Scr7' type="text" class="form-control formBlock" name="Scr7"  value="<?php echo $var1lev ?>" disabled=true /><br />
          <br/><p>Forbedring af Kunde-tilfredshed.</p>
          <input name = "Scr8" id='Scr8' type="text" class="form-control formBlock" name="Scr8"  value="<?php echo $var2lev ?>" disabled=true /><br />
          <br/><p>Intern prioritering. Afdelingen som har indsendt ønsket, har prioriteret den som <?php echo $evalself ?>.</p>
          <input name = "Scr9" id='Scr9' type="text" class="form-control formBlock" name="Scr9"  value="<?php echo $var3lev ?>" disabled=true /><br />
          <br/><br/><br/><br/><br /><br /><br /> <br/>
          Vægtet score: <b>     <?php echo $scorelev ?></b>  <hr/>



        </div>
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
        $Scr1 = $_POST['Scr1'];
        $Scr2 = $_POST['Scr2'];
        $Scr3 = $_POST['Scr3'];
        $Scr4 = $_POST['Scr4'];
        $Scr5 = $_POST['Scr5'];
        $Scr6 = $_POST['Scr6'];
        $Scr7 = $_POST['Scr7'];
        $Scr8 = $_POST['Scr8'];
        $Scr9 = $_POST['Scr9'];


        $sql = "UPDATE projects ". "SET `var1` = $Scr1, `var2` = $Scr2, `var3` = $Scr3, `var4` = $Scr4, `var5` = $Scr5, `var6` = $Scr6, `var7` = $Scr7, `var8` = $Scr8, `var9` = $Scr9, `evaldev` = 1, `evalpro` = 1, `evallev` = 1, `evaladm` = 1 ". "WHERE id = $databaseselection";
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
      <h2>Resultat</h2>

      </p>
      <h2 class="card-title pricing-card-title"> <?php echo $score ?><small class="text-muted">/ 10</small></h2>
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
            Tidsforbrug:  <b><span id="Par1"></span></b><br/>
            Genbrug af kode: <b><span id="Par2"></span></b><br/>
            Byggeklodser: <b><span id="Par3"></span></b><br/>
            Sværhedsgrad: <b><span id="Par4"></span></b>
<hr/>
            <b> Vægtning af processkonsulent </b><br/>
            Antal skærmbilleder <b><span id="Par5"></span></b><br/>
            Antal berørte systemer <b><span id="Par6"></span></b><br/>
            Kvalitet <b><span id="Par7"></span></b><br/>
            FTE Besparelser <b><span id="Par8"></span></b><br/>

<hr/>
            <b> Vægtning af leverancekoordinator </b><br/>
            Informationssikkerhed <b><span id="Par9"></span></b><br/>
            Kundetilfredshed <b><span id="Par10"></span></b><br/>
            Intern prioritering <b><span id="Par11"></span></b><br/>




      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Luk</button>
      </div>
    </div>
  </div>
</div>

    <script>

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
      //Samlet pointscore = 100

    var Scr1 = Number($('#Scr1').val());
    var Scr2 = Number($('#Scr2').val());
    var Scr3 = Number($('#Scr3').val());
    var Scr4 = Number($('#Scr4').val());
    var Scr5 = Number($('#Scr5').val());
    var Scr6 = Number($('#Scr6').val());
    var Scr7 = Number($('#Scr7').val());
    var Scr8 = Number($('#Scr8').val());
    var Scr9 = Number($('#Scr9').val());


    var Udr1 = Par1 * Scr1
    var Udr2 = Par2 * Scr2
    var Udr3 = Par3 * Scr3
    var Udr4 = Par4 * Scr4
    var Udr5 = Par5 * Scr5
    var Udr6 = Par6 * Scr6
    var Udr7 = Par7 * Scr7
    var Udr8 = Par8 * Scr8
    var Udr9 = Par9 * Scr9
    var UdrUdv = Udr1 + Udr2 + Udr3
    var UdrPro = Udr4 + Udr5 + Udr6
    var UdrLev = Udr7 + Udr8 + Udr9
    var UdrTot = (Udr1 + Udr2 + Udr3 + Udr4 + Udr5 + Udr6 + Udr7 + Udr8 + Udr9)/3


      //Dette er vores inputs som er taget fra de inputs der kan indtasts på siden. De bliver så defineret som variabler vi kan bruge i logikken senere i koden
      var UdrUdv = UdrUdv.toFixed(1).replace(".", ",")
      var UdrPro = UdrPro.toFixed(1).replace(".", ",")
      var UdrLev = UdrLev.toFixed(1).replace(".", ",")
      var UdrTot = UdrTot.toFixed(2).replace(".", ",")


      $('#Par1').html(Par1);
      $('#Par2').html(Par2);
      $('#Par3').html(Par3);
      $('#Par4').html(Par4);
      $('#Par5').html(Par5);
      $('#Par6').html(Par6);
      $('#Par7').html(Par7);
      $('#Par8').html(Par8);
      $('#Par9').html(Par9);
      $('#Par10').html(Par9);
      $('#Par11').html(Par9);



      $('#UdrUdv').html(UdrUdv);
      $('#UdrPro').html(UdrPro);
      $('#UdrLev').html(UdrLev);
      $('#UdrTot').html(UdrTot);
      $('#select').html(select);




    })
    window.onload = function() {
    $('input').keyup()
    };

    </script>
  </body>
</html>
