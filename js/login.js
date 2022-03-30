$(document).ready(function(){
    function loginUser(){
        let email = $("#mail").val();
        let passw = $("#passw").val();

        if (!$("#formI")[0].checkValidity()) {
            $("#formI").find(':submit').click();
        }
        else{
            $.ajax({
                url: "./includes/login-inc.php",
                type: "POST",
                data:{"email": email, "passw": passw, "action": "login"},
                success: function(response){
                    if(response=="true"){
                        swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Sesión iniciada correctamente"}).then(function(){
                            window.location.replace("./index.php");
                        });
                    }
                    else{
                        if(response=="false"){
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Contraseña incorrecta"});
                        }
                        else{
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"El correo electrónico no esta registrado"});
                        }
                    }
                },
                error: function(jqXHR, status, error){
                    swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                },
                complete: function(jqXHR, status){}
            });
        }
    }

    $(document).on("keydown", "form", function(event) { 
        return event.key != "Enter";
    });

    $("#subI").on("click", loginUser);
});