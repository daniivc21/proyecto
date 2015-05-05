
$(document).ready(function(){
    $("#O1").click(function(){
        $("#DivO1").show();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA1").hide();
        $("#DivA2").hide();
        $("#DivA3").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#G1").click(function(){
        $("#DivG1").show();
        $("#DivO1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA1").hide();
        $("#DivA2").hide();
        $("#DivA3").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#G2").click(function(){
        $("#DivG2").show();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG3").hide();
        $("#DivA1").hide();
        $("#DivA2").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#G3").click(function(){
        $("#DivG3").show();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivA1").hide();
        $("#DivA2").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#A1").click(function(){
        $("#DivA1").show();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA2").hide();
        $("#DivA3").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#A2").click(function(){
        $("#DivA1").hide();
        $("#DivA2").show();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA3").hide();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#A3").click(function(){
        $("#DivA1").hide();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA1").hide();
        $("#DivA2").hide();
        $("#DivA3").show();
        $("#DivAS1").hide();
        $("#DivAS2").hide();
        return false;
    });
    $("#AS1").click(function(){
        $("#DivA1").hide();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA2").hide();
        $("#DivA3").hide();
        $("#DivAS2").hide();
        $("#DivAS1").show();
        return false;
    });
    $("#AS2").click(function(){
        $("#DivA1").hide();
        $("#DivO1").hide();
        $("#DivG1").hide();
        $("#DivG2").hide();
        $("#DivG3").hide();
        $("#DivA2").hide();
        $("#DivA3").hide();
        $("#DivAS1").hide();
        $("#DivAS2").show();
        return false;
    });
});
//$('input:radio[name=check]').click(function () {
//    valrad = $('input:radio[name=opciones]:checked').val(); 
//    if(valrad==1) $("#ING").hide();
//    else $("#ING").show();
//});


$(document).ready(function()
{
    $("input[name=opciones1]").click(function () {    
        varl= $('input:radio[name=opciones1]:checked').val();
        if (varl==2)$("#ING").show();
            else 
             if (varl==1)$("#ING").hide();
        
    });
    
});
