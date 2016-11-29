<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <script src="js/angular/angular.min.js"></script>
    <script src="js/angular/angular-route.js"></script>
<!--    <script src="js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
</head>
<body ng-app="crudApp">
    <div class="container">
        <div class="row">
            <div ng-include="'frontEnd/inc/header.php'"></div>
        </div>
        <div class="row">
            <div ng-view></div>
        </div>
        <div class="row">
            <div ng-include="'frontEnd/inc/footer.php'"></div>
        </div>
    </div>
    <script src="js/app/app.js"></script>
    <script src="js/app/route.js"></script>
    <script src="js/app/controllers/userController.js"></script>
</body>
</html>