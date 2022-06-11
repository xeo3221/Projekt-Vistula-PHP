<?php
// skrypt nie pozwoli nam wejść do ponelu gdy nie jesteśmy zalogowani
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php' ?>
</head>
<body class="bg-secondary">
    <div class="bg-secondary d-flex justify-content-between align-items-center">
        <div><a class="btn btn-danger btn-lg" href="index.php">Home</a></div>
        <div class="h5 text-white font-weight-bold">Newsletter list</div>
        <div><a class="btn btn-danger btn-lg"" href="logout.php">Wyloguj</a></div>
    </div>

<?php
$json = file_get_contents("data.json");
$json_decoded = json_decode($json,TRUE);
?>
<div class="table-responsive-lg">
 <table id="table" class="table table-light table-striped table-sm">
  <thead class="table-dark">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th></th>
    </tr>
</thead>    
<tbody>
<?php
    foreach($json_decoded as $result){
        ?>
        <tr>
            <td><?php echo $result['imie']; ?></td>
            <td><?php echo $result['nazwisko']; ?></td>
            <td><?php echo $result['email']; ?></td>
            <td><a href="#">Usuń</a></td>
        </tr>
<?php   
}
?>
</tbody>
</table>
</div>
<script>
    var index, table = document.getElementById('table');
    for(var i = 1; i < table.rows.length; i++)
    {
        table.rows[i].cells[3].onclick = function()
        {
            var conf = confirm("Napewno chcesz usunąć te dane?");
            if(conf === true)
            {
                index = this.parentElement.rowIndex;
                table.deleteRow(index);
            }
        };    
    }
</script>
<?php


?>
</body>
</html>