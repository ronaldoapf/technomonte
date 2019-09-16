$(function () {
    $('.mask-telefone').mask("00000000000");
    $('.mask-cpf').mask("00000000000");

    $(".atualizar").click(function(){
        $(".enable").prop("disabled", false);
    });
});