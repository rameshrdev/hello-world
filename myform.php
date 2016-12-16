<!DOCTYPE html>
<html lang="en-US">
<script src="angular.js"></script>
<body>
<div ng-app="myFormApp" ng-controller="myFormCtrl" >
  <h1>Select statement example 1</h1> 
  <select ng-model="selectedName" ng-options="x for x in names">
  </select>
  <p>You selected: {{selectedName}}</p>
  <h1>Select statement example 2</h1> 
  <select ng-model="selectedCar" ng-options="x.model for x in cars">
  </select>
  <p>You selected: {{selectedCar.model}} Its color is: {{selectedCar.color}}</p>
  <h1>Select statement example 3</h1> 
  <select ng-model="selectedMyCar" ng-options="x for (x, y) in mycars">
</select>
  <p>You selected: {{selectedMyCar}}</p>
  <h1>Dom element hide show disable</h1> 
  <button ng-disabled="true">I am disbaled</button>
  <p ng-show="true">I am visible.</p>
  <p ng-hide="false">I am not visible.</p>
</div>
<script type="text/javascript">
var app = angular.module('myFormApp', []);
app.controller('myFormCtrl', function($scope) {
  $scope.names = ["Emil", "Tobias", "Linus"];
  $scope.cars = [
        {model : "Ford Mustang", color : "red"},
        {model : "Fiat 500", color : "white"},
        {model : "Volvo XC90", color : "black"}
    ];
	$scope.mycars = {
        car01 : "Ford",
        car02 : "Fiat",
        car03 : "Volvo"
    }
});

</script>
</body>
</html>