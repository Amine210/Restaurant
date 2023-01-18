
<?php
function connect_to_data_base($servername,$dbname,$username,$password,)
{
    return new PDO("mysql:host=$servername ; dbname=$dbname",$username,$password) ;
}


function checkBook()
{
  
   if(isset($_POST["email"])&& !empty($_POST["email"]) && $_POST["firstName"] &&  !empty($_POST["firstName"]) && isset($_POST["lastName"]) && !empty(["lastName"]) && isset($_POST["phoneNumber"]) && !empty(["phoneNumber"]) && isset($_POST["date"]) && !empty($_POST["date"]) && isset($_POST["time"] ) &&  !empty($_POST["time"])  && isset($_POST["persons"])&& !empty($_POST["persons"])  )
  {
    return true ;
  }
}

?>