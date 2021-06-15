

function LoginVa()
        {
            //alert("working")
            var Name1=document.LoginRegFrm.txtname.value
            if(Name1==="")
            {
                alert("Please Give Your UserNAme")
                document.LoginRegFrm.txtname.focus()
                return false
                window.location('Register.html');
            }
          
            var password=document.LoginRegFrm.psw.value;
            if(password=="")
            {
                alert("Password Can't Be Blank");
                document.adminRegister.psw.focus();  
                return false;
                window.location('Register.html');
            } 
            var passwdLength=password.length;
            if(passwdLength <= 7 )
			{
				alert("Password Length Mustbe Minimum 8 Character Length");
				document.LoginRegFrm.psw.value==""; 
				document.LoginRegFrm.psw.focus(); 
				return false
			}
            var conpassword=document.LoginRegFrm.Conpsw.value;
            if(password != conpassword)
            {
                alert("Passwords Do Not Match");
                document.LoginRegFrm.Conpsw.focus();  
                return false;
            }   
            
        }
 
function myLogFunction(){
  
     var x = document.getElementById("pass");
    
     if (x.type === "password"  ) {
       x.type = "text";
    
     } else {
       x.type = "password";
  
    }
}
function logValidate(){
  var id =document.forms.loginForm.txtname.value;
  if (id == "")
  {
    
    alert("You Must Fill The Id");
    document.loginForm.txtname.focus()
    return false;
    
  }
  var LogPass = document.forms.loginForm.pass.value;
  if (LogPass == "")
  {
    confirm("You Must Fill The Pasword");
    document.loginForm.pass.focus();
    return false;
    
  }
}

function myFunction() {
  var id=document.getElementById("gallery");
  id.style.display = "block";

}

        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('#img').css("display" , "none");
                $('#profile').css("display" , "none");
            } else {
              $('#img').css("display","block");
              $('#profile').css("display","block");
            }
        })

        
