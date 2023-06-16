with(document.index){
    onsubmit = function (e){
        e.preventDefault();
        ok = true;

        if(ok && txtContraseña.value!= txtConfirmarContraseña.value){
            ok = false;
            alert("Las contraseñas no coinciden...");
            txtConfirmarContraseña.focus();
        }

        if(ok){
            submit();
        }

    }
}