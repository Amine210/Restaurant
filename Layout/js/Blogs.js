function selectElement(element)
{
    return document.querySelector(element)
}


//-------------------------------Make footer darker when hovering ------------------------------------
let breakingNews=[selectElement("#breakingNew1"),selectElement("#breakingNew2"),selectElement("#breakingNew3"),selectElement("#breakingNew4")]
breakingNews.forEach(element=>
    {
        element.addEventListener("mouseover",()=>
        {
        element.children[0].style.backgroundColor="rgba(0, 0, 0, 0.726)"
        element.style.color="white"
        })
    })

    breakingNews.forEach(element=>
        {
            element.addEventListener("mouseout",()=>
            {
            element.children[0].style.backgroundColor="white"
            element.style.color="var(--light-color)"
           
            })
        })

        
/*-------------------------------------------------Scroll Animation ----------------------*/
let main=selectElement("#mainSection2")
let divOfsection2=Array.from(main.children)   

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
  }



window.addEventListener("scroll",(e)=>
{
   
    
    divOfsection2.forEach(element=>
        {
            let y =element.getBoundingClientRect().top-document.documentElement.clientHeight
            if(y<=0) element.children[0].style.transform=`translateY(${getRandomInt(5)}0px)`
         

        })
    

   
        

    
   

})


/*-----------------------------Change imag each 2Sc ---------*/

let image =selectElement("#highLightImg") ;
let balls=document.querySelectorAll("#ball")
let n = 0;



window.onload = function () {
    setInterval(()=>
    {
        n++;
        image.src="highlight/"+(n%3+1)+".avif"
        balls[n%3].style.opacity="1" 
        balls.forEach(ball=>
            {
                if(ball!=balls[n%3]) ball.style.opacity="0.5" 
            })
    }, 4000);
};

