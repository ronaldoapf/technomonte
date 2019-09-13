$(function(){
    $('.mask-telefone').mask("00000000000");
    $('.mask-cpf').mask("00000000000");

    $("input[name=estudante]").on("change", function(){
        var estudante = $('input[name=estudante]:checked').val();
        console.log(estudante);
        
        if(estudante == 'S') $("#instituicao").prop("disabled", false);
        
        else  $("#instituicao").prop("disabled", true);
    });
});