$(document).ready(function(){
    function changeProfile(){
        let email = $("#emailP").val();
        let name = $("#name").val();
        let surname = $("#surname").val();
        let userAlias = $("#userAlias").val();
        let phone = $("#phone").val();

        if (!$("#formP")[0].checkValidity()) {
            $("#formP").find(':submit').click();
        }
        else{
            $.ajax({
                url: "./includes/changeProfile-inc.php",
                type: "POST",
                data:{"email": email, "name": name, "surname": surname, "userAlias": userAlias, "phone": phone, "action": "changeProf"},
                success: function(response){
                    if(response=="true"){
                        swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Cambios guardados correctamente"});
                    }
                    else{
                        swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos. Inténtelo de nuevo mas tarde."});
                    }
                },
                error: function(jqXHR, status, error){
                    swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                },
                complete: function(jqXHR, status){}
            });
        }
    }

    function changePass(){
        let email = $("#emailP").val();
        let pass1 = $("#pass1").val();
        let pass2 = $("#pass2").val();

        if (!$("#formC")[0].checkValidity()) {
            $("#formC").find(':submit').click();
        }
        else{
            if(pass1==pass2){
                $.ajax({
                    url: "./includes/changePass-inc.php",
                    type: "POST",
                    data:{"email": email, "pwd": pass1, "action": "changePass"},
                    success: function(response){
                        if(response=="true"){
                            swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Cambios guardados correctamente"});
                        }
                        else{
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos. Inténtelo de nuevo mas tarde."});
                        }
                    },
                    error: function(jqXHR, status, error){
                        swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
                    },
                    complete: function(jqXHR, status){}
                });
            }
            else{
                swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Las contraseñas no coinciden"});
            }
        }
    }

    function changePic(){
        let email = $("#emailP").val();
        let profPic = $("#image")[0].files;

        if (!$("#formImg")[0].checkValidity()) {
            $("#formImg").find(':submit').click();
        }
        else{
            var reader = new FileReader();
            reader.onloadend = function(){
                imgUrl = reader.result;
                $.ajax({
                    url: "./includes/changeImage-inc.php",
                    type: "POST",
                    data:{"email": email, "profile_pic": imgUrl, "action": "changeImage"},
                    success: function(response){
                        if(response=="true"){
                            swal.fire({icon:"success",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Cambios guardados correctamente"}).then(function(){
                                $("#imgCon").attr("src", imgUrl);
                            });
                        }
                        else{
                            swal.fire({icon:"error",confirmButtonText:"Aceptar",confirmButtonColor:"#593196", text:"Error en la base de datos, inténtelo de nuevo mas tarde"});
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

    $(document).on("keydown", "form", function(event) { 
        return event.key != "Enter";
    });

    $("#subP").on("click", changeProfile);
    $("#subC").on("click", changePass);
    $("#image").on("change", changePic);
});