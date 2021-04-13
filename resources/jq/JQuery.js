/* $(document).ready(function() {
    $('.divModem').hide();
    $('.divAntena').hide();
    $('.d3').hide();
    $('.d4').hide();
        $("#banda").change(function(){
    $('.divModem').hide();
    $('.divAntena').hide();
    $('.d3').hide();
    $('.d4').hide();
            var numero = 'd'+$(this).val();
            $('.'+numero).show();
            });
    }); */

    $("#divModem,#divAntena").hide();
    $("#banda").change(function(){
    var num = parseInt($('#banda option:selected').val());
    for (var i = 1; i <= num; i++) {
        $("#"+i).show();
    }
});
