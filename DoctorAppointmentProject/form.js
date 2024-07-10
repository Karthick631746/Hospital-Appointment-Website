const signupButton = document.getElementById("signup");
const loginButton = document.getElementById("login");
const container = document.getElementById("container");

signupButton.addEventListener('click',()=>{
    container.classList.add("right-panel-active");
})
loginButton.addEventListener('click',()=>{
    container.classList.remove("right-panel-active");
})


// function validateSignup(){
//     let name = document.getElementById("name").value;
//     let email = document.getElementById("email").value;
//     let password = document.getElementById("password").value;
//     let cpassword = document.getElementById("cpassword").value;

//     let namec = document.getElementById("pname");
//     let emailc = document.getElementById("pemail");
//     let passwordc = document.getElementById("ppassword");
//     let cpasswordc = document.getElementById("pcpassword");

//     if(name=="" || name== null){
//         namec.classList.remove("a");
//         namec.classList.add("validname");
//         return false;
//     }
//     if(email=="" || email==null){
//         emailc.classList.remove("a");
//         emailc.classList.add("validemail");
//         return false;
//     }
//     if(password!== cpassword || password=="" || cpassword==""){
//         passwordc.classList.remove("a");
//         cpasswordc.classList.remove("a");
//         passwordc.classList.add("validpass");
//         cpasswordc.classList.add("validpass");
//         return false;
//     }
    
//  }

