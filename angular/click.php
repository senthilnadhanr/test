<!DOCTYPE html>
<html>
<script
	src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>
	<div ng-app="myApp" ng-controller="myCtrl">

		<button ng-click="toggle()">Toggle</button>
		<p>{{count}}</p>
	<div ng-show="myVar">
		First Name: <input type="text" ng-model="firstName"><br>
		Last Name: <input type="text" ng-model="lastName"><br> <br>
		Full Name: {{firstName + "" + lastName}}
		</div>
	</div>
	<script>
var app = angular.module('myApp',[]);
app.controller('myCtrl',function($scope){
	$scope.firstName="senthil";
	$scope.lastName="nadhan";
	$scope.myVar = true;
	$scope.toggle=function(){
		$scope.myVar=!$scope.myVar;
	};
	
});
</script>
</body>
</html>