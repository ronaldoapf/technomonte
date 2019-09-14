$(function () {
    $('.mask-telefone').mask("00000000000");
    $('.mask-cpf').mask("00000000000");

    $("#nome").focusout(function () {
        var nome = $("#nome").val();
        if (nome.indexOf(" ") == -1) {
            alert("Digite o nome completo");
        }
    });

    $("#cpf").focusout(function () {
        var cpf = $("#cpf").val();

        if (cpf.length < 11) alert("Digite um cpf válido");
    
    });

});