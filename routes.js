var routes = ($stateProvider, $urlRouterProvider) => {

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "partials/home.html",
            // controller: "homeController"
        })
        .state('coaching', {
            url: "/",
            templateUrl: "partials/coaching.html",
            // controller: "finalizarPedidoController as finPedido"

        })
        // .state('ecommerce', {
        //     url: "/",
        //     templateUrl: "partials/ecommerce.html",
        //     // controller: "finalizarPedidoController as finPedido"

        // })
        // .state('exportacion', {
        //     url: "/",
        //     templateUrl: "partials/exportacion.html",
        //     // controller: "finalizarPedidoController as finPedido"

        // })
        // .state('algo', {
        //     url: "/",
        //     templateUrl: "partials/nosequees.html",
        //     // controller: "finalizarPedidoController as finPedido"

        // })
        // .state('transporte', {
        //     url: "/",
        //     templateUrl: "partials/transporte.html",
        //     // controller: "finalizarPedidoController as finPedido"

        // })

    $urlRouterProvider.otherwise("/")

}