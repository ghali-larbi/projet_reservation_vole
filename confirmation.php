<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('connexion.php');
$idReservation=$_GET["idReservation"];
$queryConfirmation="select * from reservation r,vol v,client c where v.idvol=r.idvol and idReservation=$idReservation and c.idClient=r.idClient ";
$result=$conn->query($queryConfirmation);
$data=$result->fetchAll(); 
?>
    <li><?php echo $data[0]['idReservation'] ?></li>
    <li><?php echo $data[0]['dateResr'] ?></li>
    <li><?php echo $data[0]['nombrelimite'] ?></li>
    <li><?php echo $data[0]['lieuDepart'] ?></li>
    <li><?php echo $data[0]['destination'] ?></li>
    <li><?php echo $data[0]['dateVole'] ?></li>
    <li><?php echo $data[0]['prix'] ?></li>
    <li><?php echo $data[0]['nom'] ?></li>
    <li><?php echo $data[0]['prenom'] ?></li>
    <li><?php echo $data[0]['adress'] ?></li>
    <li><?php echo $data[0]['numTelephone'] ?></li>
    <li><?php echo $data[0]['email'] ?></li>
    <li><?php echo $data[0]['passport'] ?></li>




</body>
</html>