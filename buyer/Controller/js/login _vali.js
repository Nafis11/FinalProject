function validateform(){  
    const email=document.loginform.email.value;  
    const password=document.loginform.password.value;  

    if (email=="" || password==""){   
        if (email==""){   
            document.getElementById('span').style.visibility="visible"; 
        } 
        if (password==""){   
            document.getElementById('span1').style.visibility="visible";
        } 
        return false;  
    }  
    
}

function alert_email(){
    document.getElementById('span').style.visibility="hidden";

}

function alert_password(){
    document.getElementById('span1').style.visibility="hidden";
}

function alert_wrng(){
    const y=document.getElementById('wrngpass');
    y.style.position="absolute";
	y.style.visibility="hidden";
}

