angular.module('a-p-d',[])
.controller('formCtrl', function($scope,$http){
	$scope.user = {};
	$scope.answer = {};
	$scope.user.post_id = 0;
	$scope.submit = function(user){
		if ($scope.user.name){
			$http.post("connection.php", user).success(function(answer){
				$scope.answer = answer;
				console.log(answer);
			});
		};
	};
	$scope.user.post_id++;
});