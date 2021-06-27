function valoresCalc(){
    $("#calculadora").each(function(){
        this.reset();
    });
    $("#valoresCalc").show();
    $("#valorTab").hide();
}

function valoresTabuada(){
    $("#calculadora").each(function(){
        this.reset();
    });
    $("#valoresCalc").hide();
    $("#valorTab").show();
}

$(function(){
    $("#valorTab").hide();
});