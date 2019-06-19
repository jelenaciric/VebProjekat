    var submit_button=document.querySelector("#submit_button");
    submit_button.onclick=function(){
    var error=document.querySelector("#error");
    
    var registration_form = document.querySelector("#submit_button");
    /* provera username */
    var username;
    var username_element;

    username_element = document.querySelector("#username");
    username=username_element.value;
    if(username.length<5){
        error.textContent = "Short username!";
        username_element.style = "border : 2px solid red;";
        return;
    }
    else{
        username_element.style="";
    }

    /* provera za sifru */
    var password_element= document.querySelector("#password");
    var password = password_element.value;

    if(password.length==0){
        return;
    }
    var broj = false;
    for(var i = 0;i<password.length ; i++){
        if("0123456789".indexOf(password[i]) != -1){
            broj=true;
        }
    }
    if(broj == false){
        window.alert("Password has no digits!");
    }

    /* email */
    var email_element = document.querySelector("#email");
    var email= email_element.value;

    var pozicija = email.indexOf("@");
    var poztacka = email.lastIndexOf(".");
    if(pozicija == -1 || poztacka == -1 || poztacka<pozicija){
        window.alert("Wrong format of the email address!");
        return;
    }
}
