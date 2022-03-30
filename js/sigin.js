$(document).ready(function(){
    $("#form").submit(function(){
        var pass1;
        var pass2;
        var pass = false;

        pass1 = $("#pass1").val();
        pass2 = $("#pass2").val();
        if (pass1 == pass2) {
            pass = true;
        }
        else{
            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Las contraseñas no coinciden"});
        }

        return pass;
    });

    $("#formcr").submit(function(){
        var pass = false;
        var check = $("#passcbox");
        if(check[0].checked==false){
            var pass1;
            var pass2;

            pass1 = $("#pass1").val();
            pass2 = $("#pass2").val();
            if (pass1 == pass2) {
                pass = true;
            }
            else{
                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Las contraseñas no coinciden"});
            }
        }else{
            pass = true;
        }
        return pass;
    });

    $("#passcbox").change(function(){
        if(this.checked){
            $("#pass1").attr('disabled','disabled');
            $("#pass2").attr('disabled','disabled');
            pass1 = $("#pass1").val("");
            pass2 = $("#pass2").val("");
        }
        else{
            $("#pass1").removeAttr('disabled');
            $("#pass2").removeAttr('disabled');
        }
    });

    function registerUser(){
        let email = $("#mail").val();
        let passw = $("#pass1").val();
        let name = $("#name").val();
        let surname = $("#surname").val();
        let phone = $("#phone").val();
        let userAlias = $("#userAlias").val();
        let profPic = $("#image")[0].files;
        var imgUrl = null;

        if (!$("#form")[0].checkValidity()) {
            $("#form").find(':submit').click();
        }
        else{
            var pass1 = $("#pass1").val();;
            var pass2 = $("#pass2").val();;
            if(pass1 == pass2){
                var reader = new FileReader();
                reader.onloadend = function(){
                     imgUrl = reader.result;
                     $.ajax({
                        url: "./includes/register-inc.php",
                        type: "POST",
                        data:{"email": email, "passw": passw, "name": name, "surname": surname, "profile_pic": imgUrl, "phone": phone, "userAlias": userAlias, "action": "register"},
                        success: function(response){
                            if(response=="true"){
                                swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Usuario registrado correctamente"}).then(function(){
                                window.location.replace("./index.php");
                                });
                            }
                            else{
                                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Este correo electrónico ya está en uso"});
                            }
                        },
                        error: function(jqXHR, status, error){
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                        },
                        complete: function(jqXHR, status){}
                    });
                }
                reader.readAsDataURL(profPic[0]);
                
            }
            else{
                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Las contraseñas no coinciden"});
            }
        }
    }

    function registerReporter(){
        var check = $("#passcbox");
        let email = $("#mail").val();
        let passw = $("#pass1").val();
        let name = $("#name").val();
        let surname = $("#surname").val();
        let phone = $("#phone").val();
        let userAlias = $("#userAlias").val();
        let profPic = $("#image")[0].files;

        if (!$("#formcr")[0].checkValidity()) {
            $("#formcr").find(':submit').click();
        }
        else{
            if(check[0].checked==false){
                var pass1 = $("#pass1").val();;
                var pass2 = $("#pass2").val();;
                if(pass1 == pass2){
                    var reader = new FileReader();
                    reader.onloadend = function(){
                        imgUrl = reader.result;
                        $.ajax({
                            url: "./includes/registerRep-inc.php",
                            type: "POST",
                            data:{"email": email, "passw": passw, "name": name, "surname": surname, "profile_pic": imgUrl, "phone": phone, "userAlias": userAlias, "action": "register"},
                            success: function(response){
                                if(response=="true"){
                                    swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Reportero registrado correctamente"}).then(function(){
                                        window.location.replace("./createReporter.php");
                                    });
                                }
                                else{
                                    swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Este correo electrónico ya está en uso"});
                                }
                            },
                            error: function(jqXHR, status, error){
                                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                            },
                            complete: function(jqXHR, status){}
                        });
                    }
                    reader.readAsDataURL(profPic[0]);
                }
                else{
                    swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Las contraseñas no coinciden"});
                }
            }
            else{
                var reader = new FileReader();
                reader.onloadend = function(){
                    imgUrl = reader.result;
                    $.ajax({
                        url: "./includes/registerRepNP-inc.php",
                        type: "POST",
                        data:{"email": email, "name": name, "surname": surname, "profile_pic": imgUrl, "phone": phone, "userAlias": userAlias, "action": "register"},
                        success: function(response){
                            if(response=="true"){
                                swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Reportero registrado correctamente"}).then(function(){
                                    window.location.replace("./createReporter.php");
                                });
                            }
                            else{
                                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Este correo electrónico ya está en uso"});
                            }
                        },
                        error: function(jqXHR, status, error){
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                        },
                        complete: function(jqXHR, status){}
                    });
                }
                reader.readAsDataURL(profPic[0]);
            }
        }
    }

    $(document).on("keydown", "form", function(event) { 
        return event.key != "Enter";
    });

    $("#sub").on("click", registerUser);
    $("#subR").on("click", registerReporter);
    $("#subI").on("click", loginUser);
});