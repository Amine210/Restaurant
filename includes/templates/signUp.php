
<link rel="stylesheet" href="<?php echo $lyt?>css/signUp.css" > 

<div id="SingUpContainer" class="scale" >
    <div id="SingUpMain" >
    <i  id="cross" class="fa-solid fa-xmark fa-xl"></i>
    <header>Create Account</header>
    <form  id="signUpForm" method="post" action="Data/action.php">
        <input type="text" placeholder="Your name" name="name">
        <input type="text" placeholder="Your email" name="email">
        <input type="password" placeholder="Password" name="password1">
        <div id="passwordStrength"> 
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <input type="password" placeholder="Repeat your password" name="password2">
        <fieldset>
            <input type="checkbox" id="agree">
            <label for="agree">I agree all statement in Terms service</label>
        </fieldset>
        <button id="submitButton"  name="submit">Submit</button>
    </form>

   </div>
    
</div>
