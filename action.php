

<?php include "includes/functions/functions.php";?>

<?php
  
session_start();


$db= connect_to_data_base("localhost:3306","eCommerce" ,"root"  ,"30012003" ) ;



    if(checkBook())
    {


        $sql="SELECT * FROM booking;";
        $firstName= $_POST["firstName"] ;
        $lastName=$_POST["lastName"] ;
        $email=$_POST["email"] ;
        $numberPhone=$_POST["phoneNumber"] ;  
        $date= $_POST["date"] ;
        $time=$_POST["time"] ; 
        $numberOfPersons=$_POST["persons"]  ;
        $sql_e="INSERT INTO booking VALUES (?,?,?,?,?,?,?); " ; 
        $db->prepare($sql_e)->execute([$firstName,$lastName,$email,$numberPhone ,$date ,$time ,(int)$numberOfPersons]) ;
        $_SESSION["firstName"] = $firstName ;
        $_SESSION["lastName"] = $lastName ;
        $_SESSION["email"] = $email ;
        $_SESSION["phoneNumber"] = $numberPhone ;
        $_SESSION["date"] = $date ;
        $_SESSION["time"] = $time ;
        $_SESSION["persons"] = $numberOfPersons ;
        

        header("Location:includes/templates/booking.php");
    }

    else 
    {
        echo "ERROR" ;
    }
   






?>