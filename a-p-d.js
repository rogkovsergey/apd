angular.module('a-p-d',[])
.controller('formCtrl', function($scope,$http){
	$scope.user = {};
	$scope.answer = {};
	$scope.user.post_id = 0;
	$scope.submit = function(user){
		if ($scope.user.name){
			$http.post("insert.php", user).success(function(answer){
				$scope.answer = answer;
				console.log(answer);
			});
		};
	};
	$scope.user.post_id++;
	$scope.reset_db = function(){
		// reset = 'true';
		$http.get("reset_db.php").success(function(reset){
			console.log(reset);
		})
	}
});