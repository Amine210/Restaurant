<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Layout/css/booking.css">
    <link rel="stylesheet" href="../../Layout/css/print.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Nanum+Pen+Script&family=Sevillana&display=swap" rel="stylesheet">
    <title>Thank You For Booking </title>
</head>
<?php session_start()  ;  ?>
<body>
   
    <main>     
       <h1>Thank You For Booking <h1> 
        <h2> Staying With Us Should Be Good Fun !  Feel At Home Away From Home </h2>
        <div id="container">
       
            <div>
                <h3>DownLoad Your Booking </h3>
                <button onclick="window.print()" > Click Here </button>
            </div>

            <div>
                <h3>Let Stay in contact </h3>
                <div id="contact">
                  
                    <div>
                        
                        <p>amineboukhari20@gmail.com</p>
                    </div>
                    <div> 
                        <p>@_amx_xine_</p>
                    </div>
                    <div> 
                        <p>0665393603</p>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <body>
  
    <div class="ticket">
        <div class="admitOne" >   
        </div>
        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <header style="height: 12%;width: 90%;" >
                <h2>Tuesday</h2>
                <h2>28 Juin</h2>
                <h2>2022</h2>
            </header>
            <main class="ticketMain" style="height: 50%;width: 90%;">
                <h2 style="font-size: 2.5vw;">Label And Frame  </h2>
                <h2 style="font-size: 1.7vw; "><?php echo $_SESSION["firstName"]." ".$_SESSION["lastName"] ;   ?> </h2>
                <h2 style="font-size: 1.5vw"><?php echo $_SESSION["time"] ?></h2>
            </main>
            <footer style="height: 12%;width: 90%;" >
                <h5> Feel At Home Away From Home  </h5>
            </footer>
               
    
        </div>
        <div class="barreCode">
            <div style=" width:100%;height:100%;transform: rotate(180deg) ; text-align: center;  writing-mode: vertical-rl; ">
            <span>ADMIT ONE &nbsp</span>
            <span>ADMIT ONE &nbsp</span>
            <span> ADMIT ONE &nbsp</span>
            </div>
            <img src="../../../wallpaper/frame.png">
        </div>
        
    </div>
   
    <script>
      
    </script>
</body>
</html>
    
</body>
</html>