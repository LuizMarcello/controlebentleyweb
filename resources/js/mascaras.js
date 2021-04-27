/* const { then } = require("laravel-mix"); */

//.celular
$('.celular').mask('(99) 99999-9999');
//.phone
$('.phone').mask('(99) 9999-9999');
//.cep
$('.cep1').mask('99999-999');
//.documento
$('.documento').mask('999.999.999-99');
//.cpf_cnpj
/* $('.cpf_cnpj').mask('999.999.999-99'); */
//.datanota */
$('.datanota').mask('99/99/9999');
//.macaddress
$('.macaddress').mask('AA:AA:AA:AA:AA:AA');
//.diametro
$('.diametro').mask('999 cm');
//.voltagem
$('.voltagem').mask('999volts');
//.valordecusto
$('.valordecusto').mask('R$ 9.999,99');
//.valormensal
$('.valormensal').mask('R$ 9.999,99');
//.velocmaxdown
$('.velocmaxdown').mask('99 Mbps');
//.velocmaxup
/* $('.velocmaxup').mask('999 Abps'); */
//.velocmindown
$('.velocmindown').mask('999,9 Kbps');
//.velocminup
$('.velocminup').mask('999 Kbps');
//.cir
$('.cir').mask('99:9');
//.banda
$('.banda').mask('AA-Band');
//.ie_rg
$('.ie_rg').mask('9.999.999-9');
//.dataNascimento */
$('.dataNascimento').mask('99/99/9999');

/**
 * função devido a classe ser "cpf" ou "cnpj", assim
 * aplicando a máscara automaticamente.
 */
var field = '.documento';

$(field).keydown(function(){
    try {
        $(field).unmask();
    } catch (e) {}

    var tamanho = $(field).val().length;

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

var cep = document.getElementById('cep1');

cep.addEventListener("keyup", function(e) {
    if(cep.value.length == 9) {
        autoComplete(cep.value);
    }
});

function autoComplete(cep) {
    let url = `https://webmaniabr.com/api/1/cep/${cep}/?app_key=XXXyCDSLbfFqk0DXCzV5J4CPT8Oi445Y&app_secret=gPLAm0O6EHOC6thdBhqACiUiRXlmprVaG8sqUdnOzhDxlY3y`;

    /* O fetch(), com sua nova API, é para fazer requisições. Ele retorna uma "promise", mas como não se sabe quanto
       tempo vai demorar para ficar pronto(depende da API), então usa-se o método then(), para quando ficar pronto, executar uma função.
       Esta função terá um parâmetro "response" que será a resposta que a API(do correio) irá dar pra gente. */
    fetch(url).then(function(response) {
            /* Verificando se a resposta foi ok, se foi código http 200 */
            if(response.ok) {
            response.json().then(function(endereco) {
                console.log(endereco);
            });
        }
    });
}




