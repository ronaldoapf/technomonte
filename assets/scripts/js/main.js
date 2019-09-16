$(function () {
    $('.mask-telefone').mask("00000000000");
    $('.mask-cpf').mask("00000000000");

<<<<<<< HEAD
});

=======
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
>>>>>>> b5689ff0d263a892ae4489b9dc8925356c314015
