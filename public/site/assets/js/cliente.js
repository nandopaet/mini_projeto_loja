$('form').on('submit', (e)=>{
    e.preventDefault()
    let dados = {
        'nome' : $('#inputNome').val(),
        'cpf' : $('#inputCpf').val(),
        'email' : $('#inputEmail').val(),
        'estado' : $('#inputEstado').val(),
        'cep' : $('#inputCep').val(),
        'cidade': $('#inputCidade').val(),
        'bairro' : $('#inputBairro').val(),
        'logradouro' : $('#inputLogradouro').val(),
        'numero' : $('#inputNumero').val(),
        'complemento' : $('#inputComplemento').val()
    }
    console.log(dados)

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').get(0).content
        }
    });
    $.ajax({
        method: "POST",
        url: "/cliente/adicionar",
        data: dados,

    }).done((msg)=>{
        let reetorno = JSON.parse(msg);
        if(reetorno['status']){
            location.assign(window.location.href);
        }else{
            $('#toastRetorno').show()
        }
    })
})

$('.btn_acessar').on('click', (e)=>{
    let email = $('#inputMailUser').val()

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').get(0).content
        }
    });
    $.ajax({
        method: "POST",
        url: "/cliente/acessar",
        data: {'email': email},

    }).done((msg)=>{
        let reetorno = JSON.parse(msg);
        if(reetorno['status']){
            location.assign(window.location.href);
        }else{
            $('#toastRetorno').show()
        }
    })

})
