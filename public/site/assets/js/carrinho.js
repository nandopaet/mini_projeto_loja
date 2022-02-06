$('.remover_item').on('click', (e)=>{
    let id = e.currentTarget.parentElement.parentElement.firstChild.nextSibling.innerHTML

    $.ajax({
        method: "GET",
        url: "/carrinho/deletar_item/"+id

    }).done((msg)=>{
        let reetorno = JSON.parse(msg);
        if(reetorno['status']){
            location.assign(window.location.href);
        }
    })

})
