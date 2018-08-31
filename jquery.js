function remover() {
    return $('#routers').removeClass('fondocoach').removeClass('fondohome').removeClass('fondotrading').removeClass('fondoecommerce').removeClass('fondologistica').removeClass('fondoexpoimpo')
}

$(function () {
    $("#home").on('click', function () {
        remover()
        $('#routers').addClass('fondohome')

    })
    $("#coaching").on('click', function () {
        remover()
        $('#routers').addClass('fondocoach')

    })
    $("#ecommerce").on('click', function () {
        remover()
        $('#routers').addClass('fondoecommerce')

    })
    $("#expoimpo").on('click', function () {
        remover()
        $('#routers').addClass('fondoexpoimpo')

    })
    $("#logistica").on('click', function () {
        remover()
        $('#routers').addClass('fondologistica')

    })
    $("#trading").on('click', function () {
        remover()
        $('#routers').addClass('fondotrading')

    })
})