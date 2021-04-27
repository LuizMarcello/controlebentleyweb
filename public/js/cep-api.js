window.onload = function() {
    var cep = document.getElementById('cep1');

    cep.addEventListener("keyup", function(e) {
        if(cep.value.length == 9) {
            autoComplete(cep.value);
        }
    })
};

/*
var cep = document.getElementById('cep1');

cep.addEventListener("keyup", function(e) {
    if(cep.value.length == 9) {
        autoComplete(cep.value);
    }
});
*/

function autoComplete(cep) {
    let url = `https://webmaniabr.com/api/1/cep/${cep}/?app_key=XXXyCDSLbfFqk0DXCzV5J4CPT8Oi445Y&app_secret=gPLAm0O6EHOC6thdBhqACiUiRXlmprVaG8sqUdnOzhDxlY3y`;

    fetch(url).then(function(response) {

            if(response.ok) {
            response.json().then(function(endereco) {
                console.log(endereco);
            });
        }
    });
}

