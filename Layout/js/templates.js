function selectElement(element)
{
    return document.querySelector(element)
}

let body=selectElement("body")

//set Logo animation
let logo =selectElement("#logo")


for(let delay=0;delay<logo.children.length;delay++)
{
   logo.children[delay].style.animationDelay=delay*80+"ms";
}


//Toggle sideBar

let toggleSIdeBarButton=selectElement('#toggleSIdeBarButton')
let sideBar=selectElement('#sideBar')
let exitleSIdeBarButton =selectElement("#exitleSIdeBarButton")
let sideBarMain=selectElement("#sideBarMain")


console.log(this.clientWidth)


toggleSIdeBarButton.addEventListener("click",function(){

    sideBarMain.classList.remove('hideElement')
    sideBar.style.right="0px"
    



})

exitleSIdeBarButton.addEventListener("click",()=>
{
    sideBarMain.classList.add('hideElement')
    sideBar.style.right="-40%"
  
})


//-------------------------------------------------SignIn/Up PopUP---------------------
 
let signUpBtn=document.querySelectorAll("#signUp")
let signInBtn=document.querySelectorAll("#signIn")
let signUpPopUp=selectElement("#SingUpContainer")
let signInPopUp=selectElement("#SingInContainer")
let crossBtn=document.querySelectorAll("#cross")
function hide(popUpElement)
{
popUpElement.style.display="none"
popUpElement.classList.add('scale')

}

function popUp(popUpElement)
{

popUpElement.style.display="flex"
popUpElement.classList.remove('scale') 
}

signUpBtn.forEach(btn =>btn.addEventListener("click", e => 
{
    popUp(signUpPopUp)
    hide(signInPopUp)
} )

            )

signInBtn.forEach(btn => btn.addEventListener("click",e=> 
{

popUp(signInPopUp)
hide(signUpPopUp)
})
)





crossBtn.forEach(btn=> 
btn.addEventListener("click",()=>
{

hide(signInPopUp)
hide(signUpPopUp)
})

)


/*--------------------------------Form validation ----------------------------*/
let forms=document.querySelectorAll("form")
let submitButton=selectElement("#submitButton")

   

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

function checkPassword(password,passwordfield)
{
    let strength = 0 ;
      if (password.match(/[a-z]+/)) {
        strength += 1;
      }
      if (password.match(/[A-Z]+/)) {
        strength += 1;
      }
      if (password.match(/[0-9]+/)) {
        strength += 1;
      }
      if (password.match(/[$@#&!]+/)) {
        strength += 1;
    
      }
      return strength 
}



let emailchecked =false ;
let passwordchecked1=false ;
let passwordchecked2=false ;



forms.forEach(form=>
    {
        let email=form["email"]
        let password1=form["password1"]
        let passwordStrength=selectElement("#passwordStrength")
        let rods=passwordStrength.children
        
  

        email.addEventListener('input',(e)=>{
            if(!validateEmail(e.target.value))
            {
                e.target.style.borderColor="red"
                emailchecked=false ;
                
            }
            else 
            {
                e.target.style.borderColor="green"
                emailchecked=true ;
            }
        })

        email.addEventListener("focusout",(e)=>
        {
            e.target.style.borderColor="black"
        })

        

        password1.addEventListener('input',(e)=>
        {
            passwordStrength.style.display="flex"
            for(let i=0;i<checkPassword(e.target.value);i++)
            {
                rods[i].style.backgroundColor='green'
            }

            
            for(let j=rods.length-1;j>=checkPassword(e.target.value);j--)
            {
                rods[j].style.backgroundColor='white'
            }

            if(checkPassword(e.target.value)>=1 && e.target.value.length>=6) passwordchecked1=true 
        })

        password1.addEventListener('focusout',(e)=>
        {
            passwordStrength.style.display="none"
          
        })




        if(form["password2"])
        {
            let password2=form["password2"] 
            password2.addEventListener('input',(e)=>{
               if(password2.value.length===password1.value.length) 
               {
                    for(let i=0;i<password1.value.length;i++)
                    {
                        if(password1.value[i]!=password2 .value[i])
                        {
                            e.target.style.borderColor="red"
                            break 
                        }
                        else   
                        {
                            e.target.style.borderColor="green"
                            passwordchecked2=true ;
                        }
                            
                    }
               }
               else
               {
                e.target.style.borderColor="red"
               }
            })
            
        }

      
       
    })
