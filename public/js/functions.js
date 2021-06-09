function validarSenha() {
    var senha1 = document.getElementById("pass1").value;
    var senha2 = document.getElementById("pass2").value;

    if (senha1 != "" && senha2 != "" && senha1 != senha2) {
        alert('Password Diferentes');
    }
}