<?php
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="signin.css" rel="stylesheet">
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



<title>Master Thesis - CDSS for RPA</title>
  </head>
<body class="text-center">

  <div class="row">
    <div class="span4">
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <a href="index.php"> <img src="logo.png" alt="Logo" style="height:75px;"> </a> <br/><br/><br/>
    <br />
    <div class="container">
      <h1>Opret projekt </h1>
        <h8 class="mb-3" style="text-align: center; ">Udfyld venligst alle felter i nedenstående</h8>
          </div>
          <hr class="mb-4">

          <form method = "post" action = "<?php $_PHP_SELF ?>">
          <div class="form-group">
            <h3>Kontakt</h3>

            <p>Kontaktperson</p>
            <input name = "name" id='name' type="text" class="form-control formBlock" placeholder="Jens Hansen" /><br />

            <p>W-Nummer</p>
            <input name = "wnum" id='wnum' type="text" class="form-control formBlock" placeholder="Indtast dit W-Nummer" /><br />

            <p>Fagområde</p>
            <input name = "fagomr" id='fagomr' type="text" class="form-control formBlock" placeholder="Indtastet navnet på dit fagområde" /><br />

            <p>Processejer</p>
            <input name = "proejer" id='proejer' type="text" class="form-control formBlock" placeholder="Indtastet mailen på processejeren" /><br />

            <p>Systemejer</p>
            <input name = "sysejer" id='sysejer' type="text" class="form-control formBlock" placeholder="Indtastet mailen på systemejeren" /><br />

            <p>Platformsejer</p>
            <input name = "platejer" id='platejer' type="text" class="form-control formBlock" placeholder="Indtastet e-mailen på platformsejeren" /><hr />

            <h3>Projekt</h3>

            <p>Titlen til projektet</p>
            <textarea name = "title" class="form-control" id="title" rows="3" placeholder="Vælg titlen der skal bruges for projektet. En god titel er f.eks 'Automatisering af process vedr. momsrefundering ved rejser'."></textarea>
            <br/>

            <p>Beskrivelse af projektet</p>
            <textarea name = "descr" class="form-control" id="descr" rows="3" placeholder="Beskriv dit projekt. Sørg for at få alle detaljerne med i din beskrivelse."></textarea>
            <br />

            <p>Systemer i brug</p>
            <textarea name = "systemer" class="form-control" id="systemer" rows="3" placeholder="Nævn de systemer som processen bruger. Adskil med komma."></textarea>

            <p>Hyppighed</p>
            <textarea name = "hyppighed" class="form-control" id="hyppighed" rows="3" placeholder="Beskriv hvor ofte opgaven skal udføres."></textarea>

            <p>Antal sager per år</p>
            <textarea name = "sager" class="form-control" id="sager" rows="3" placeholder="Hvor mange sager der udføres om året i antal."></textarea>

            <p>Behandlingstid per sag</p>
            <textarea name = "behtid" class="form-control" id="behtid" rows="3" placeholder="Hvor lang tid bruges der på at behandle én sag i gennemsnit."></textarea>

            <p>Risikofaktor</p>
            <textarea name = "risikofakt" class="form-control" id="risikofakt" rows="3" placeholder="Beskriv risikoen for projektet."></textarea>

            <br/>
            <p>Finanslovsmål</p>
            <select name = "finanslov" class="form-control" id="finanslov">
              <option>Nedbringe restancer</option>
              <option>Nedbringe skattegab</option>
              <option>Øge kundetilfredshed</option>
              <option>Øge produktiviteten</option>
            </select>

            <hr/>
            <h3>Prioritering</h3>

            <p>Vælg afdelingens prioritering af projektet. 10 er højt, 1 er lavt. </p>

            <input name = "evalself" class="form-control" type="number" id="evalself" min="0" max="10" step="1" onkeyup="this.value = minmax(this.value, 0, 10)"/>
            <br/>
            <p>Årsag til prioritering</p>

            <textarea name = "evaldesc" class="form-control" id="evaldesc" rows="3" placeholder="Forklar grunden til ovenstående prioritering."></textarea>
            <hr/>
            <div class="form-check">


              <h3>Dokumentation</h3>

              <p> Er der dokumentation af processen? </p>

<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok1" type="radio" id="dok11" value="Ja">
  <label class="form-check-label" for="inlineCheckbox1">Ja</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok1" type="radio" id="dok12" value="Nej">
  <label class="form-check-label" for="inlineCheckbox2">Nej</label>
</div>
<hr /><br />

<p> Er dokumentationen opdateret til at reflektere den nuværende process helt? </p>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok2" type="radio" id="dok12" value="Ja">
  <label class="form-check-label" for="inlineCheckbox1">Ja</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok2" type="radio" id="dok22" value="Nej">
  <label class="form-check-label" for="inlineCheckbox2">Nej</label>
</div>

<hr /><br />

<p> Er dokumentationen digital? </p>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok3" type="radio" id="dok31" value="Ja">
  <label class="form-check-label" for="inlineCheckbox1">Ja</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok3" type="radio" id="dok32" value="Nej">
  <label class="form-check-label" for="inlineCheckbox2">Nej</label>
</div>

<hr /><br />

<p> Indeholder dokumentationen skærmbilleder af alle delprocesser? </p>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok4" type="radio" id="dok41" value="Ja">
  <label class="form-check-label" for="inlineCheckbox1">Ja</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" name="dok4" type="radio" id="dok42" value="Nej">
  <label class="form-check-label" for="inlineCheckbox2">Nej</label>
</div>



        </div>

          <br/>
      <button class="btn btn-success" name = "update" type = "submit" id = "update"> Opdater værdierne</button>
        </form>
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

</script>
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
$name = $_POST['name'];
$wnum = $_POST['wnum'];
$fagomr = $_POST['fagomr'];
$proejer = $_POST['proejer'];
$sysejer = $_POST['sysejer'];
$platejer = $_POST['platejer'];


$title = $_POST['title'];
$descr = $_POST['descr'];
$systemer = $_POST['systemer'];
$hyppighed = $_POST['hyppighed'];
$sager = $_POST['sager'];
$behtid = $_POST['behtid'];
$risikofakt = $_POST['risikofakt'];
$finanslov = $_POST['finanslov'];


$evalself = $_POST['evalself'];
$evaldesc = $_POST['evaldesc'];


$dok1 = $_POST['dok1'];
$dok2 = $_POST['dok2'];
$dok3 = $_POST['dok3'];
$dok4 = $_POST['dok4'];

$sql = "INSERT INTO projects (requestor, wnum, fagomr, proejer, sysejer, platejer, name, descr, systemer, hyppighed, sager, behtid, risikofakt, finanslov, evalself, evaldesc, dok1, dok2, dok3, dok4) VALUES ('$name', '$wnum', '$fagomr', '$proejer', '$sysejer', '$platejer', '$title', '$descr', '$systemer', '$hyppighed', '$sager', '$behtid', '$risikofakt', '$finanslov', '$evalself', '$evaldesc', '$dok1', '$dok2', '$dok3', '$dok4')";

$result = $conn->query($sql);


$conn->close();

;}

?>

            </div>


   </body>
</html>
