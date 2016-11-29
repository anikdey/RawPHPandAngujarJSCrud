app.controller("userController", ['$scope', '$http', '$location', '$routeParams', '$route', function($scope, $http, $location, $routeParams, $route) {

    $http.get("././phpScripts/getAllUser.php")
        .then(function(response){
            $scope.records = response.data;
        }, function(response){
            $scope.errorMessage = "Something Went Wrong";
        });



    $scope.saveUser = function(userObject) {
        $http.post('././phpScripts/saveUser.php', userObject).then(function(response) {
            $location.path("/");
        });
    }
    
    $scope.findUserById = function () {
        var id = $routeParams.id;
        $http.post('././phpScripts/findUserById.php', {'id' : id}).then(function (response) {
            var users = response.data;
            $scope.user = users[0];
        });
    }


    $scope.updateUser = function(userObject) {
        $http.post('././phpScripts/updateUser.php', userObject).then(function(response) {
            $location.path("/");
        });
    }

    $scope.deleteUser = function(userId) {
        $http.post('././phpScripts/deleteUser.php', {'id': userId}).then(function(response) {
            $route.reload();
        });
    }

}]);