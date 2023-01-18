function selectElement(element)
{
    return document.querySelector(element)
}

/*---------Nav bar scroll effect--------------------------------*/
let header=selectElement("#header")
let root=selectElement(":root")
window.addEventListener("scroll" ,()=>{

    if(window.pageYOffset!=0) 
    {
        header.classList.add("whiteHeader");
        root.style.setProperty('--NavBar-color', 'black');
        
    }
    else 
    {
        header.classList.remove("whiteHeader");
        root.style.setProperty('--NavBar-color', 'white');
    }
    console.log(window.pageYOffset) ;
} )

/*------------------Scroll animation ------------------------------------------ */

let circles= [selectElement('#circle1'), selectElement('#circle2'), selectElement('#circle3')]
let section2=selectElement("#section2")



window.addEventListener("scroll",(e)=>
{
   
    
    circles.forEach(circle=>
        {
            let y =section2.getBoundingClientRect().top-document.documentElement.clientHeight+150
            if(y<=0) circle.style.transform="translate(0px,0px)" ;
        })
    
        
})

    window.addEventListener("scroll",(e)=>
    {
       
             let section3=selectElement("#section3")
             let articles= Array.from(section3.children) 
            articles.forEach(article=>
                {
                    let arr =  Array.from(article.children) 
                    let y =article.getBoundingClientRect().top-document.documentElement.clientHeight+150
                    if(y<=0)  
                    {
                        arr.forEach(element=>
                            {
                                element.style.transform="translate(0px,0px)" ;
                            })
                    }
                    
                })
        
            
    })



    /*------------------Button animation ------------------------------------------ */
    let buttons= Array.from(selectElement("#nav").children)
    buttons.forEach(button=>
        
    {
      
        

       
        button.addEventListener("click",(e)=>
        {
              //Remove clickedButton Class from all the buttons before adding it to the clicked one 
            buttons.forEach(nonClickedButton=>
                {
                    nonClickedButton.classList.remove("clickedButton")
                })

             //Add clickedButton Class
            e.target.classList.add("clickedButton")
        })
    })



    /*-----------------------Menu Animation ---------------------------*/

    let divsNav=Array.from(selectElement("#menu").children)
    let section4=selectElement("#section4")
    window.addEventListener("scroll",(e)=>
{
   
    
    divsNav.forEach((div,index)=>
        {
            let y =section4.getBoundingClientRect().top-document.documentElement.clientHeight+150
            if(y<=0)  div.style.animation=`divAppair 2s forwards ${index*2}00ms `;
                   
            
        })
    

   
        
})


/*----------------------------------------Button submit ..........................*/
let btn = selectElement("#submit") ;
let myForm=selectElement("#myForm") ;

btn.addEventListener("click",()=>
{
    myForm.submit();
}
)

