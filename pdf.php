<?php 
session_start()  ; 
require __DIR__."/vendor/autoload.php" ;
use Dompdf\Dompdf ; 

$dompdf = new Dompdf  ; 
echo $_SESSION["firstName"] ;   
echo "</br> " ;
echo  $_SESSION["lastName"]  ;
echo "</br> " ;
echo  $_SESSION["email"]  ;
echo "</br> " ;
echo  $_SESSION["phoneNumber"];
echo "</br> " ;
echo  $_SESSION["date"];
echo "</br> " ;
echo  $_SESSION["persons"];
echo "</br> " ;

    $html = '<body >
    <main >
        <h1>Thank You For Booking With Us </h1>
        <h2>February 9,2022 @ 17:30 am  </h2>
       <table>
        <tr style="color: rgb(136, 136, 136) ;">
            <td>First Name</td>
            <td>Last Name</td>
            <td>Phone Number </td>
            <td>Email</td>
        </tr>
        <tr style="font-weight: bold;">
            <td>'.$_SESSION["firstName"].'</td>
            <td>'.$_SESSION["lastName"].'</td>
            <td>'.$_SESSION["phoneNumber"].'</td>
            <td>'.$_SESSION["persons"].'</td>
        </tr>
       </table>
       <div id="info">
            <h2>'.$_SESSION["date"].'</h2>
            <h2>'.$_SESSION["persons"].'</h2>
            <h2>'.$_SESSION["time"].'</h2>
               
       </div>
    </main>
    <style>
        body
        {
            
            width:100%; 
            height:auto ;
         
        }
        main
        {
            text-align: center;
            width:70%; 
            height:350px ;
            background-color: rgb(216, 216, 216) ; 
            margin-top: 100px;
            position: relative;
			transform: translateX(-50%);
            left: 50%;
            
        }
        table{
            position: absolute;
            left: 50%;
            top: 100px;
            transform: translateX(-50%);
            width: 90%;
            height: 50px;
            text-align: start;
            letter-spacing: 2px;
        }
        #info
        {
            width: 90%;
            height: 150px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            font-size: 6px;
            letter-spacing: 2px;
            text-align: start;
        }
        h1 
        {
            font-size: 15px;
        }
        h2{
            font-size: 12px;
            font-family:"Times New Roman", Times, serif;
        }
     
      
    </style>
</body> ' ;

$dompdf->loadHtml($html) ;
$dompdf ->render() ;
$dompdf->stream("YourBooking.pdf",["Attachment" => 0 ]);




?>