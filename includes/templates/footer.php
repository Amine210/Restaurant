<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="../../Layout/css/footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <footer>
       <div id="company">
       <div id="titleContainer" > <h3>Company</h3>  <i class="fa-solid fa-arrow-down fa-lg"></i> </i> </div>
            <ul>
                <a> <li>About Us</li> </a>
                <a><li>Our Services</li> </a>
                <a><li>Privacy Policy</li></a>
                <a><li>Affiliate Program</li></a>
            </ul>
       </div>
       <div id="getHelp">
            <div id="titleContainer" > <h3>get help </h3>  <i class="fa-solid fa-arrow-down fa-lg"></i> </i> </div>
            <ul>
                <a> <li>FAQ</li> </a>
                <a><li>Shipping</li> </a>
                <a><li>Returns</li></a>
                <a><li>Order Status </li></a>
            </ul>
       </div>
       <div id="onlineShop">
       <div id="titleContainer" > <h3>Shop Online  </h3>  <i class="fa-solid fa-arrow-down fa-lg"></i> </i> </div>
            <ul>
                <a> <li>Watch</li> </a>
                <a><li>Bag</li> </a>
                <a><li>Shoes</li></a>
                <a><li>Dres</li></a>
            </ul>
       </div>
       
       <div id="followUs">
       <div id="titleContainer" > <h3>Follow Us</h3>  <i class="fa-solid fa-arrow-down fa-lg"></i> </i> </div>
        <div id="iconsContainer">
        <i class="fa-brands fa-facebook fa-xl"></i>
        <i class="fa-brands fa-instagram fa-xl "></i>
        <i class="fa-brands fa-twitter fa-xl "></i>
        <i class="fa-brands fa-youtube fa-xl"></i>
        </div>
        
       </div> 
   
    </footer>
</body>


<script>
    let  iconsContainers=document.querySelectorAll("#titleContainer")
    let footer  = document.querySelector("footer")
    let previous = 0 ; 
    iconsContainers.forEach((element,index)=> {
    let arrow = element.children[1]
    arrow.addEventListener("click",()=>
    {
            if( arrow.style.transform=="rotate(180deg)")
            {
                footer.children[previous].children[0].children[1].style.transform="rotate(0deg)"
                footer.children[previous].style.height='70px'
            }
            else 
            {
                footer.children[previous].children[0].children[1].style.transform="rotate(0deg)"
                footer.children[previous].style.height='70px'
                arrow.style.transform="rotate(180deg)"
                element.parentNode.style.height='200px'
                previous=index
            }
            
        
       
            
       
        
   
    })
});
  

</script>

<script src="https://kit.fontawesome.com/14803e08cc.js" crossorigin="anonymous"></script>
</html>