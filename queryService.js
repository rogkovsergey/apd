angular.module('queryService',[]).factory('qS', function($http){
	return {
		sendQuery: function(user){
			return $http.post("insert.php", user).success(function(answer){
				console.log(answer);
			});
		},
		resetDB: function(){
			return $http.get("reset_db.php").success(function(reset){
				console.log(reset);
			});
		},
		getQuery: function(){
			return $http.get("select.php").success(function(result){
				console.log(result);
				// $scope.result = result;
			});
		}
	}
});