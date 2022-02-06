$('.add_carrinho').on('click', (e) => {
    let produto = $('.id_prod').get(0).innerHTML
    let quantidade = $('input[name=quantidade]').val()
    let valor = $('.valor_prod').get(0).innerHTML.replace('R$', '')


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').get(0).content
        }
    });
    $.ajax({
        method: "POST",
        url: "/carrinho/adicionar",
        data: {produto: produto, quantidade: quantidade, valor: valor}

    }).done((msg) => {
        let reetorno = JSON.parse(msg);
        if (reetorno['status']) {
            $('#toastRetorno').show()
        }
    })

})

$('.btn-close').on('click', () => {
    $('#toastRetorno').hide()
})

$('.btn_comprar').on('click', (e) => {
    e.preventDefault()
    let quantidade = $('input[name=quantidade]').val()
    let id = $('.id_prod').get(0).innerHTML
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').get(0).content
        }
    });
    $.ajax({
        method: "POST",
        url: "/comprar/temp_compra",
        data: {produto: id, quantidade: quantidade}

    }).done((msg) => {
        location.assign("/comprar/produto/" + id);
    })
    l

})
