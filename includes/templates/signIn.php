

 <link rel="stylesheet" href="<?php echo $lyt?>css/signIn.css" > 
 
<div id="SingInContainer" class="scale">
    <div id="SingInMain" >
        <i  id="cross" class="fa-solid fa-xmark fa-xl"></i>
        <header>Log In</header>
        <form id="signInForm" method="post" action="action.php">
            <input type="text" placeholder="Your email" name="email">
            <input type="password" placeholder="Password" name="password1">
           
            <button  type="submit" name="submit">Log in</button>
        </form>
    </div>
</div>
