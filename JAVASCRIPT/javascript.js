function validarchave(form) {
    let mensagem = "";
    let valido = "s";

    if (!validarNome()) {
        valido = "n";
        mensagem += "O nome deve conter apenas letras e possuir entre 3 a 15 caracteres\n";
    }

    if (!validarApelido()) {
        valido = "n";
        mensagem += "O apelido deve conter apenas letras e possuir entre 3 a 15 caracteres\n";
    }

    if (!isEmailValid()) {
        valido = "n";
        mensagem += "Email inválido\n";
    }
 
    if(!validarPrazo()){
        valido = "n";
        mensagem += "Por favor, insira apenas números\n";
    }

    if (valido === "n") {
        alert(mensagem);
        return false;
    }

    alert("Formulário enviado com sucesso!");
    return true;
}

function validarNome() {
    const nome = document.getElementById("nome").value;
    const nomePattern = /^[a-zA-Z]{3,15}$/;
    return nomePattern.test(nome);
}

function validarApelido() {
    const apelido = document.getElementById("apelido").value;
    const apelidoPattern = /^[a-zA-Z]{3,15}$/;
    return apelidoPattern.test(apelido);
}

function isEmailValid() {
    const email = document.getElementById("email").value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}

function validarPrazo(){
    const numero = document.getElementById("telemovel").value;
    const numeroPattern = /^[0-9]+$/;
    return numeroPattern.test(numero);

}

