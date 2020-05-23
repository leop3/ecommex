var routes = ($stateProvider, $urlRouterProvider) => {

    $stateProvider
        .state('home', {
            url: "/home",
            templateUrl: "partials/home.html"
        })
        .state('coaching', {
            url: "/coaching",
            templateUrl: "partials/coaching.html"

        })
        .state('ecommerce', {
            url: "/ecommerce",
            templateUrl: "partials/ecommerce.html"

        })
        .state('exportacion', {
            url: "/expoimpo",
            templateUrl: "partials/exportacion.html"

        })
        .state('logistica', {
            url: "/logistica",
            templateUrl: "partials/logistica.html"

        })
        .state('trading', {
            url: "/feria-virtual",
            templateUrl: "partials/evento.html"

            })
        .state('contacto', {
            url: "/contacto",
            templateUrl: "partials/formu.html"

        })

    $urlRouterProvider.otherwise("/home")

}