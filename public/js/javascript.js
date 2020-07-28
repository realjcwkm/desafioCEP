
(function (win, doc) {
    'use strict';

    //Delete
    function confirmDel(event) {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token = doc.getElementsByName("_token")[0].value;
        if (confirm("Deseja mesmo apagar?")) {
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function () {
                if (ajax.readyState === 4 && ajax.status === 200) {
                    win.location.href = "books";
                }
            };
            ajax.send();
        } else {
            return false;
        }
    }
    if (doc.querySelector('.js-del')) {
        let btn = doc.querySelectorAll('.js-del');
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click', confirmDel, false);
        }
    }
})(window, document);

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('logradouro').value=(conteudo.logradouro);
        document.getElementById('bairro').value=(conteudo.bairro);
        document.getElementById('cidade').value=(conteudo.localidade);
        document.getElementById('uf').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        alert("CEP não encontrado.");
    }
}

function buscarCEP() {
    var valor = document.getElementById('cep').value;

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('logradouro').value="...";
            document.getElementById('bairro').value="...";
            document.getElementById('cidade').value="...";
            document.getElementById('uf').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            alert("Formato de CEP inválido.");
        }
    } //end if.
};