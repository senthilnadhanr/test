<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>

<!-- <div ng-app="myApp" ng-controller="myCtrl">
  First Name:<input type="text" name="fname" ng-model="firstName">
  Last Name:<input type="text" name="lname" ng-model="lastName">
  Full Name : <p>{{fullName()}}</p>
</div>
<script src="myCtrl.js"></script> -->
<div ng-app="myApp" ng-controller="myCtrl">
<input type="text" name="test" ng-model="test">
<ul>
<li ng-repeat="x in names | filter:test | orderBy:'Country'">
{{x.Name+','+x.Country}}
</li>
</ul>
</div>
<script>
var app = angular.module('myApp',[]); 
app.controller('myCtrl',function($scope,$http){
	$http.get('http://localhost/test/angular/customers.php').success(function(reponse){
		$scope.names = reponse.records;
		});
	
});
</script>
</body>
</html>