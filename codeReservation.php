<?php 
   if(isset($_POST["reserver"]))
   {
          $nom=$_POST["nom"];
          $prenom=$_POST["prenom"];
          $adress=$_POST["adresse"];
          $telephone=$_POST["telephone"];
          $passport=$_POST["passeport"];
          $email=$_POST["email"];
          
       
        
        $query2="insert into client values(NULL,'".$nom."','".$prenom."','".$adress."','$telephone','".$email."','".$passport."')";
            $conn->exec($query2);

            $id = $conn->lastInsertId();
            $query="select nombreplace from vol where idvol='$idvol'";
            $result=$conn->query($query);
            $data=$result->fetchAll();
          $nombreplace=$data[0]['nombreplace'];
            $query4="update vol set nombreplace=$nombreplace-1 where idvol='$idvol'";
        $conn->exec($query4);

        $query3="insert into reservation values(NULL,$id,'$idvol','".date("Y/m/d")."')";
           $conn->exec($query3);
           $idResevation = $conn->lastInsertId();
           header("location:confirmation.php?idReservation=".$idResevation."");   
           ob_end_flush(); 
           
       }
 ?>