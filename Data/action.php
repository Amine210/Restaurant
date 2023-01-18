
<?php include 'users.php';?>

<?php




function check()
{
  
   if(isset($_POST["email"])&& !empty($_POST["email"]) && $_POST["name"] &&  !empty($_POST["name"]) && isset($_POST["password1"]) && !empty(["password1"]) && isset($_POST["password2"]) && !empty(["password2"]) )
  {
    return true ;
  }
}



if (check() && filter_var($_POST['email'] ,FILTER_VALIDATE_EMAIL) && $password1===$password2){
  $email = $_POST['email'];
  $name=$_POST['name'];
  $password1 = $_POST['password1'];
  $password2=$_POST['password2'];
  try{


    $servername = "localhost:3306";
    $dbname = "users";
    $username = "root";
    $password = "30012003";
    
    $db=new PDO("mysql:host=$servername ; dbname=$dbname",$username,$password) ;
    $sql = " INSERT INTO users (email,name,password) VALUES('$email','$name','$password1') ;" ;
    $sql_e= "SELECT * FROM users WHERE email = '$email';" ;
    
    

      
        $result=$db->query($sql_e) ;
        
        if($result->fetch()==0)
        {
          $db->query($sql)  ;
        }
        else 
        {
          echo "USER ALREADY EXISTS" ;
        }
       
      
  
     
    
    
    }
       
    
  
  
  catch(PDOEception $e)
  {
    echo $e->getMessage();
  }
  
  

}
else 
{
  echo "<h1>ERROR</h1>" ;
}
?>


<?php include 'index.php';?>