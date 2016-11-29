app.config(['$routeProvider', function($routeProvider) {


    $routeProvider
        .when("/", {
            templateUrl : "frontEnd/home/userList.php",
            controller : "userController"
        })
        .when("/add-new-user", {
            templateUrl : "frontEnd/home/addUser.php",
            controller : "userController"
        })
        .when("/user/show/:id", {
            templateUrl : "frontEnd/home/showUser.php",
            controller : "userController"
        })
        .when("/user/edit/:id", {
            templateUrl : "frontEnd/home/editUser.php",
            controller : "userController"
        })
        .when("/demo", {
            templateUrl : "frontEnd/home/demo.php",
            controller : "userController"
        })



}]);