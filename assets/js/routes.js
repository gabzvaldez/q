angular.module('app.routes', [])

 .config(function($stateProvider, $stateParams) {
	  var profile = {
	    name: 'profile',
	    url: '/profile',
	    // controller: 'bikeCtrl',
	    templateUrl:   'assets/staff/profile.php'
	  }  

	  var home = {
	    name: 'home',
	    url: '/home',
	    // controller: 'bikeCtrl',
	    templateUrl:   'assets/staff/home.php'
	  } 

	  var index = {
	    name: 'index',
	    url: '/index',
	    // controller: 'bikeCtrl',
	    templateUrl:   'assets/pages/index.php'
	  }   


	  $stateProvider.state(profile);
	  $stateProvider.state(home);
	  $stateProvider.state(index);
	  
});