var routes = ($stateProvider, $urlRouterProvider) => {

    $stateProvider
        .state('home', {
            url: "/",
            templateUrl: "partials/home.html",
        })
        .state('coaching', {
            url: "/",
            templateUrl: "partials/coaching.html",

        })
        .state('ecommerce', {
            url: "/",
            templateUrl: "partials/ecommerce.html",

        })
        .state('exportacion', {
            url: "/",
            templateUrl: "partials/exportacion.html",

        })
        .state('logistica', {
            url: "/",
            templateUrl: "partials/logistica.html",

        })
        .state('trading', {
            url: "/",
            templateUrl: "partials/trading.html",

        })

    $urlRouterProvider.otherwise("/")

}