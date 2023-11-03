angular.module('app.controllers',[])

.controller('dashboardCtrl', function($scope, $interval, $timeout, $http, Dashboard, Division){
	console.log("Dashboard");

	// $scope.print(){
	// }

	$scope.divv = function(divv){
		$scope.division = divv;
		console.log(divv);
		Division.get_division_id($scope.division).then(function(response){
			$scope.q_d = response;
			// console.log(parseInt(response[0].count)+1);
			console.log($scope.q_d[0]);
			$scope.inc = parseInt(response[0].count)+1;
		},function(response){
		   console.log(response);
		});
	}


	$scope.add_cntr = function(id){
		var data = {
			'id_no' : id
		};
		Dashboard.add_cntr(data).then(function(response){
			// $scope.q = response;
			console.log(response);
		},function(response){
		   console.log(response);
		});
	}

	Dashboard.get().then(function(response){
		$scope.q = response;
	},function(response){
	   console.log(response);
	});
	
	$scope.old =null;
	$interval(function () {
		Dashboard.get().then(function(response){
			// console.log(response.length);
			$scope.q = response;
			for(var i=0;i<response.length;i++){
				// console.log(response[i].count)
				// console.log;
				if($scope.old == null){
					$scope.old = response;
					// console.log("not empty")
				}else{
					// console.log($scope.old);
					if($scope.old[i].count != response[i].count){
						// console.log("true");
						var base_url = 'http://' + window.location.hostname;
						$scope.q[i] = response[i];
						$scope.q[i].blink = "blink";
						$scope.old[i] = response[i];
						var audio = new Audio(base_url + '/q/assets/audio/bell_2.mp3');
    					audio.play();
						// blink(i);

					}else{
						// console.log("false");
						$scope.q[i] = response[i];
						$scope.q[i].blink = "off";
						// $scope.blink_on = ""
						// blink(i)

					}
				}
				

			}

		   // console.log(response);
	  	},function(response){
		   console.log(response);
		});
  	}, 3000);

})	

.controller('panelCtrl', function($scope, Dashboard){
	console.log("Panel");
	$scope.tryy = function(div){
		console.log(div)

	}
	// Dashboard.get_division().then(function(response){
	//    $scope.q = response;
	//    // console.log(response);
 //  	},function(response){
	//    console.log(response);
	// });
})	

.controller('divisionCtrl', function($scope, $interval, $timeout, $http, Division){
	$scope.division;

	$scope.div = function(divv){
		$scope.division = divv;
		Division.get($scope.division).then(function(response){
			$scope.q = response;
		},function(response){
		   console.log(response);
		});
	}
	
	
	$scope.old =null;
	$interval(function () {
		Division.get($scope.division).then(function(response){
			console.log(response.length);
			$scope.q = response;
			for(var i=0;i<response.length;i++){
				// console.log(response[i].count)
				// console.log;
				if($scope.old == null){
					$scope.old = response;
					// console.log("not empty")
				}else{
					// console.log($scope.old);
					if($scope.old[i].count != response[i].count){
						// console.log("true");
						var base_url = 'http://' + window.location.hostname;
						$scope.q[i] = response[i];
						$scope.q[i].blink = "blink";
						$scope.old[i] = response[i];
						var audio = new Audio(base_url + '/q/assets/audio/bell_2.mp3');
        				audio.play();
						// blink(i);

					}else{
						// console.log("false");
						$scope.q[i] = response[i];
						$scope.q[i].blink = "off";
						// $scope.blink_on = ""
						// blink(i)

					}
				}
				

			}

		   // console.log(response);
	  	},function(response){
		   console.log(response);
		});
  	}, 3000);

})	