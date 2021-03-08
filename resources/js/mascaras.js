//.celular
$('.celular').mask('(99) 99999-9999');
//.phone
$('.phone').mask('(99) 9999-9999');
//.cep
$('.cep').mask('99.999-999');
//.cpf_cnpj
$('.cpf_cnpj').mask('999.999.999-99');
//.datanota
$('.datanota').mask('99/99/9999');
//.macaddress
/* $('.macaddress').mask('99 99 99 99 99 99'); */


/**
 * função devido a classe ser "cpf" ou "cnpj", ficando assim automático.
 */
var field = '.cpf_cnpj';

$(field).keydown(function(){
    try {
        $(field).unmask();
    } catch (e) {}

    var tamanho = $(field).val().length;
banda
    if(tamanho < 11){
        $(field).mask("999.999.999-99");
    } else {
        $(field).mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function(){
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});
