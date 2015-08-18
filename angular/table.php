<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>
<div ng-app="myApp" ng-controller="myCtrl">
<input type="text" name="test" ng-model="test">

<table>
<tr>
<th>S.No</th>
<th>Name</th>
<th>Country</th>
</tr>
<tr ng-repeat="x in names | filter:test | orderBy:'Country'">
<td>{{$index+1}}</td>
<td ng-if="$odd"  style="background-color:#f5f5f5">{{x.Name}}</td>
<td ng-if="$even">{{x.Name}}</td>
<td ng-if="$odd"  style="background-color:#f5f5f5">{{x.Country | uppercase}}</td>
<td ng-if="$even">{{x.Country | uppercase}}</td>
</tr>
</table>
</div>
 <style>
table, th , td {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style> 
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