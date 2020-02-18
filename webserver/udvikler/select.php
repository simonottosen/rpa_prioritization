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
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css" rel="stylesheet"/>


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

$sql = "SELECT * FROM projects WHERE evaladm = 0";
$result = $conn->query($sql);

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



    <!--  <a href="index.html" download class="btn btn-info" role="button">Download kildekoden</a> -->

      <div class="container">
<br/>
        <a href="../frontpage.php"> <img src="../skat-logo.png" alt="SKAT" style="height:75px;"> </a>
        <hr>

        <h4>Vælg det projekt i listen, som du ønsker at redigere</h4>
        <br>



<form action="edit.php" method="get">
<input type="text" name="id" class="form-control formBlock" placeholder="Indtast et ID" style="width:300px;"><br/>
<input type="submit" type="button" class="btn btn-success" id="button" disabled=true value="Rediger projekt" style="width:150px;">
</form>



<table class="table table-striped table-bordered" >
  <br/>
  <hr/>

    <tr>
      <th>ID</th>
      <th>Navn</th>
      <th>Beskrivelse</th>
      <th>Evalueret?</th>
      <th>Egenevaluering</th>
      <th>Score</th>


    </tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $value = '';
      $evaldev = $row['evaldev'];

      if ($evaldev == 1){
        $evalval = 'Ja';
      } else {
        $evalval = 'Nej';
      }


  echo '<tr>
      <td>'.$row['id'].'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['descr'].'</td>
      <td>'.$evalval.'</td>
      <td>'.$row['evalself'].'</td>
      <td>'.$row['scoredev'].'</td>

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
