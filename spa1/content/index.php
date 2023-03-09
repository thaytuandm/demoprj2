<html lang="en">

<head>
	<title>Angular JS - Demo Application</title>

    <!-- CSS style -->
	<link rel="stylesheet" href="assets/css/boostrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Script Library -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/angular-route.min.js"></script>

	<!-- My App -->
	<script src="app/routes.js"></script>
	<script src="app/helper/myHelper.js"></script>

	<!-- App Controller -->
	<script src="app/config.js"></script>
	<script src="app/controllers/PostController.js"></script>
    <script src="app/controllers/UserController.js"></script>

</head>

<body ng-app="main-App">
	<ul>
		<li><a href="#/">Home</a></li>
		<li><a href="#/user">User</a></li>
		<li><a href="#/login">Login</a></li>
		<li><a href="#/about">About</a></li>
	</ul>
	<div class="container">
		<div ng-view></div>
	</div>
</body>
</html>