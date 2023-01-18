<!DOCTYPE html>
<html lang="en">
<?php include "init.php" ; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?php echo $lyt?>css/style.css" > 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kaushan+Script&family=Philosopher:ital@1&display=swap" rel="stylesheet"> 
</head>




<?php include $tpl."sideBar.php";?>
<?php include $tpl."signIn.php";?>
<?php include $tpl."signUp.php";?>
<?php include $tpl."header.php";?>

<section id="section1">

    <main>
       <h2>Premium </h2>
       <h3>Quality </h3>
       
       <h1 id="firstH1" >Restaurant </h1> 
       <h1 id="secondH1" >& Dishes  </h1>
    
    </main>

</section>


<section id="section2">
       <h1>What We Can Offer  </h1>
       <main> 
        <div id="circle1">
            <div  style="background-image:url('../../wallpaper/circle/1.jpg') ; " class="imageCircle">
            </div>
            <div id="footer">
            <h2>Eco Products</h2>
                <p> 
                Nulla dapibus tempus malesuada. Duis </br>
                ultrices lacinia eleifend. Etiam vel luctus nibh.</br>
                Donec eu volutpat
                <p>
            </div>

        </div>
        <div id="circle2" >
        <div style="background-image:url('../../wallpaper/circle/2.jpg') ; " class="imageCircle" >
            </div>
            <div id="footer">
            <h2>Healthy Deserts</h2>
                <p> 
                Nulla dapibus tempus malesuada. Duis </br>
                ultrices lacinia eleifend. Etiam vel luctus nibh.</br>
                Donec eu volutpat
                <p>
            </div>
        </div>
        <div id="circle3" >
        <div style="background-image:url('../../wallpaper/circle/3.jpg') ; " class="imageCircle">
            
            </div>
            <div id="footer">
                <h2>Always Fresh</h2>
                <p> 
                Nulla dapibus tempus malesuada. Duis </br>
                ultrices lacinia eleifend. Etiam vel luctus nibh.</br>
                Donec eu volutpat
                <p>
            </div>
        </div>
      </main>
</section>


<section id="section3">
    <article>
        <div style="background-image: url('../../wallpaper/article/1.jpg');  box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; ">

        </div>
        <div>
            <h1> Welcome to Jevelin </br>  Restaurant </h1>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br>
            Suspendisse sagittis tortor eget sodales ultrices. </br>
             Pellentesque bibendum condimentum neque, nec </br>
              iaculis augue ultrices ac. Fusce interdum viverra aliquet. </br>
            <p>
        </div>
    </article>
    <article>
        
        <div  >
            <h1> Chef & Owner Kate </br> Fuson and Her Husband Jack </h1>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br>
            Suspendisse sagittis tortor eget sodales ultrices. </br>
             Pellentesque bibendum condimentum neque, nec </br>
              iaculis augue ultrices ac. Fusce interdum viverra aliquet. </br>
            <p>
        </div>

        <div style="background-image: url('../../wallpaper/article/2.jpg'); box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px; ">

        </div>
        
    </article>
    <article>
    <div style="background-image: url('../../wallpaper/article/3.jpg'); box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;     ">

    </div>
    <div>
        <h1> Welcome to Jevelin </br>  Restaurant </h1>
         <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br>
        Suspendisse sagittis tortor eget sodales ultrices. </br>
        Pellentesque bibendum condimentum neque, nec </br>
        iaculis augue ultrices ac. Fusce interdum viverra aliquet. </br>
            <p>
        </div>
    </article>
</section>

<section id="section4"> 
    <h1>Enjoy The Best Cuisine</h1>
    <main>
        <div id="nav">
            <buutton>All Menu</buutton>
            <buutton>Breakfast</buutton>
            <buutton>Lunch</buutton>
            <buutton>Dinner</buutton>
            <buutton>Budget Meal </buutton>
            <buutton>BUffet</buutton>
        </div>
        <div id="menu">
            <div>
                <h1> Cappuccion  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>

            <div>
                 <h1> Macchiato  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>

            <div>
                <h1> Piccolo Latte  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>
                
            <div>
                <h1> Americano  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>

            <div>
                <h1> Mocha  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>

            <div>
                <h1> Ristretto  </h1>
                <p>
                     Usage of the Internet is becoming more common due to rapid advance. 
                </p>
            </div>
        </div>
    </main>
</section>



<section id="section5">


    <main>
       <h1>Select a Date & Book Now </h1>
        <form  action ="action.php" id="myForm" method="post">

            <div>
                <input placeholder="First Name " name="firstName" type="text">
                <input  placeholder="Last  Name " name="lastName" type="text">
            </div>
            <div>
               <input placeholder="Email Adress  "  name="email" type="text">
               <input placeholder="Phone Number"  name="phoneNumber" type="text">
            </div>
            <div>
                <input placeholder="mm/dd/yyy" name="date" type="date">
                <select name="time"  >
                <option value="" disabled selected>Time</option>
                    <option value="17:00">17:00</option>
                    <option value="17:30">17:30</option>
                    <option value="18:00">18:00</option>
                    <option value="18:30">18:30</option>
                    <option value="19:00">19:00"</option>
                    <option value="19:30">19:30</option>
                    <option value="20:00">20:00</option>
                    <option value="20:30">20:30</option>
                    <option value="21:00">21:00"</option>
                    <option value="21:30">21:30</option>
                    <option value="22:00">22:00</option>
                </select>
                <select name="persons" >
                   <option value="" disabled selected>Persons*</option>
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                    <option value=5>5</option>
                    <option value=6>6</option>
                    <option value=7>7</option>
            

                </select>

            </div>
            
        </form>
        <button   id="submit"  type="submit" name="submit">Submit</button>
    
      
    </main>

</section>


<section id="section6" >
    <div id="left">
        <h1> 
        How to Find </br> & Contact Us 
        </h1>

        <div>
            <div><h2>Monday - Thursday </h2>  <h3> 10:00 - 22:00 </h3> </div>
            <div><h2>Monday - Thursday </h2>  <h3> 10:00 - 22:00 </h3> </div>
            <div><h2>Monday - Thursday </h2>  <h3> 10:00 - 22:00 </h3> </div>
       </div>

       <h2 style=" margin-bottom: 10px; " >Postal Address: </h2>
       <h3 style=" margin-bottom: 30px; "  > Mánatún 35 105 Reykjavík</h3>

       <h2 style="margin-bottom: 10px; "> Restaurant: </h2>
       <h3 style="margin-bottom: 30px; "  > Grafarvogur 69, ON K2P 0G1, Reykjavík</h3>

       <h2 style="margin-bottom: 10px; " > Business Phone:</h2>
       <h3 style="margin-bottom: 30px; " > +1 844 295 0715</h3>

    </div>
    <div id="right" >

    </div>


</section>


<?php include $tpl."footer.php";?>




<script src="<?php echo $lyt?>js/templates.js"> </script>
<script src="<?php echo $lyt?>js/index.js"> </script>
<script src="https://kit.fontawesome.com/14803e08cc.js" crossorigin="anonymous"></script>
</body>
</html>