var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope){
	$scope.firstName="Senthil";
	$scope.lastName="nadhan";
	$scope.fullName = function(){
		return $scope.firstName+" "+$scope.lastName;
		}
});