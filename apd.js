angular.module('apd',['queryService']).controller('formCtrl', ['$scope','qS', function($scope,qS){
	$scope.user = {};
	$scope.answer = {};
	$scope.user.post_id = 0;
	$scope.submit = function(user){
			$scope.user.post_id++;
			qS.sendQuery(user);
	};
	$scope.reset_db = function(){
		qS.resetDB();
	};
	$scope.select = function(){
		qS.getQuery();
	}
}]);