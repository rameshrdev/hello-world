<!DOCTYPE html>
<html lang="en-US">
<script src="angular.js"></script>
<body>
<style>
input.ng-invalid {
    background-color: lightblue;
}
</style>
<!--<form ng-app="" name="myForm" ng-init="myText = 'post@myweb.com'">
    Email:
    <input type="email" name="myAddress" ng-model="text" required>
    <span ng-show="myForm.myAddress.$error.email">Not a valid e-mail address</span>
	
	Email:
<input type="email" name="myAddress1" ng-model="myText" required>
<p>Edit the e-mail address, and try to change the status.</p>
<h1>Status</h1>
<p>Valid: {{myForm.myAddress1.$valid}} (if true, the value meets all criteria).</p>
<p>Dirty: {{myForm.myAddress1.$dirty}} (if true, the value has been changed).</p>
<p>Touched: {{myForm.myAddress1.$touched}} (if true, the field has been in focus).</p>
</form>-->
<div ng-app="myApp" ng-controller="myCtrl" ng-init="firstName='Ramesh'">

First Name: <input type="text" ng-model="firstName"><br>
Last Name: <input type="text" ng-model="lastName"><br>
<br>
First Name : <span ng-bind="firstName" ></span><br>
Last Name : <span ng-bind="lastName"></span><br>
Full Name: {{firstName + " " + lastName}}
<p ng-init="quantity=1;cost=5">Total in dollar: {{ quantity * cost }}</p>
<div ng-init="person={firstName:'John',lastName:'Doe'}">
<p>The last name is {{ person.lastName }}</p>
<h1 ng-click="changeName()">Test {{firstname}}</h1>
Full Name: {{fullName()}}
<!--E -element, A-attribute, C-class, M-comment-->
<div class="w3-test-directive"></div>
<w3-test-directive></w3-test-directive>
<div w3-test-directive></div>
<ul>
  <li ng-repeat="x in names">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>
</div>
<form ng-app="formApp" name="myForm" ng-controller="formCtrl">
    Email:
    <input type="email" name="myAddress" ng-model="text">
    <span ng-show="myForm.myAddress.$error.email">Not a valid e-mail address</span>
</form>
<script type="text/javascript">
//console.log({name});
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.firstName= "Suresh";
    $scope.lastName= "Doe";
	$scope.changeName = function() {
        $scope.firstname = "Dinesh";
    }
	$scope.fullName = function() {
        return $scope.firstName + " " + $scope.lastName;
    };
	$scope.names = [
        {name:'Jani',country:'Norway'},
        {name:'Hege',country:'Sweden'},
        {name:'Kai',country:'Denmark'}
    ];
});
app.directive("w3TestDirective", function() {
    return {
        restrict : "C",
        template : "<h1>Made by a directive using class</h1>"
    };
});
app.directive("w3TestDirective", function() {
    return {
        template : "<h1>Made by a directive using Tag</h1>"
    };
});
</script>
</body>
</html>