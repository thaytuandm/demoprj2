var app =  angular.module('main-App',['ngRoute']);
app.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
	        when('/', {
	            templateUrl: 'views/posts.html',
	            controller: 'PostController'
	        }).
			when('/login', {
	            templateUrl: 'views/login.html',
	            controller: 'LoginController'
	        }).		
			when('/about', {
	            templateUrl: 'views/about.html'
	        }).					
            when('/user', {
	            templateUrl: 'views/users.html',
	            controller: 'UserController'
	        });
}]);

//http://localhost:8084/#/
//http://localhost:8084/#/user