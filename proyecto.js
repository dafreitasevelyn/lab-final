function validateName()
{ 
    var u_name=document.myForm.nombre;
    var u_submit=document.myForm.u_submit;
    var nameError=document.getElementById("u_name_msj")
    var check=document.getElementById("check-name")


    if (/\d/.test(u_name.value))
    {
        u_name.style.borderColor='red';
        nameError.innerHTML="No puede contener número" 
        nameError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
    }
    else if (u_name.value=="")
    {
        u_name.style.borderColor='red';
        nameError.innerHTML="Rellene este campo" 
        nameError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_name.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        nameError.innerHTML=""
        
    }
}
function validateLastname()
{ 
    var u_lastname=document.myForm.primer_apellido;
    var u_submit=document.myForm.u_submit;
    var lastnameError=document.getElementById("u_lastname_msj")
    var check=document.getElementById("check-lastname")

    if (/\d/.test(u_lastname.value))
    {
        u_lastname.style.borderColor='red';
        lastnameError.innerHTML="No puede contener número" 
        lastnameError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
    }
    else if (u_lastname.value=="")
    {
        u_lastname.style.borderColor='red';
        lastnameError.innerHTML="Rellene este campo" 
        lastnameError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_lastname.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        lastnameError.innerHTML=""
        
    }
}

function validateSecondlastname()
{ 
    var u_secondlastname=document.myForm.segundo_apellido;
    var u_submit=document.myForm.u_submit;
    var secondlastnameError=document.getElementById("u_secondlastname_msj")
    var check=document.getElementById("check-secondlastname")

    if (/\d/.test(u_secondlastname.value))
    {
        u_secondlastname.style.borderColor='red';
        secondlastnameError.innerHTML="No puede contener número" 
        secondlastnameError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
    }
    else if (u_secondlastname.value=="")
    {
        u_secondlastname.style.borderColor='red';
        secondlastnameError.innerHTML="Rellene este campo" 
        secondlastnameError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_secondlastname.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        secondlastnameError.innerHTML=""
        
    }
}

function validateEmail()
{ 
    var u_mail=document.myForm.email
    var mailError=document.getElementById("u_mail_msj")
    var check=document.getElementById("check-mail")

    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(u_mail.value))
    {
        u_mail.style.borderColor='green';
        mailError.innerHTML=""
        check.className="fa solid fa-check-circle"
    }
    else if (u_mail.value=="")
    {
        u_mail.style.borderColor='red';
        mailError.innerHTML="Rellene este campo" 
        mailError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_mail.style.borderColor='red';
        mailError.innerHTML="Email inválido" 
        mailError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
}

function validateUsername()
{ 
    var u_usuario=document.myForm.usuario;
    var u_submit=document.myForm.u_submit;
    var usuarioError=document.getElementById("u_usuario_msj")
    var check=document.getElementById("check-usuario")


    if (/^[a-zA-Z0-9]+$/.test(u_usuario.value))
    {
        u_usuario.style.borderColor= "green";
        check.className="fa solid fa-check-circle"
        usuarioError.innerHTML="";
       
    }
    else if (u_usuario.value=="")
    {
        u_usuario.style.borderColor='red';
        usuarioError.innerHTML="Rellene este campo" 
        usuarioError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_usuario.style.borderColor='red';
        usuarioError.innerHTML="No puede contener caracteres especiales" 
        usuarioError.className="error-message" 
        check.className="fa solid fa-exclamation-circle"
        
    }
}

function validatePasswordLength()
{ 
    var u_pass=document.myForm.clave
    var passError=document.getElementById("u_pass_msj")
    var check=document.getElementById("check-pass")


    if (u_pass.value.length > 8 || u_pass.value.length < 4) {
        u_pass.style.borderColor = 'red';
        passError.innerHTML = "No debe tener menos de 4 o más de 8 caracteres";
        passError.className = "error-message";
        check.className = "fa solid fa-exclamation-circle"; 
    }
    else if (u_pass.value=="")
    {
        u_pass.style.borderColor='red';
        passError.innerHTML="Rellene campo contraseña" 
        passError.className="error-message"
        check.className="fa solid fa-exclamation-circle"
    }
    else
    {
        u_pass.style.borderColor='green';
        passError.innerHTML=""
        check.className="fa solid fa-check-circle"
    }
}



