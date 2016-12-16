<!DOCTYPE html>
<html lang="en-US">
<script src="angular.js"></script>
<body>
<div ng-app="filterApp" ng-controller="filterCtrl" >
<h1>Filter upper and lower case:</h1>
<p>The name is {{ lastName | uppercase }}</p>
<p>The name is {{ lastName | lowercase }}</p>
<h1>Looping with objects order by field name:</h1>
<ul>
  <li ng-repeat="x in names | orderBy:'country'">
    {{ x.name + ', ' + x.country }}
  </li>
</ul>
  <h3>Price: {{ price | currency }}</h3>
  <h1>Filter list using letter or word</h1>
  <ul>
  <li ng-repeat="x in allName | filter : 'i'">
    {{ x }}
  </li>
  </ul>
<h1>Type a letter in the input field:</h1>
<p><input type="text" ng-model="test"></p>
<ul>
  <li ng-repeat="x in allName | filter:test">
    {{ x }}
  </li>
</ul>
<h1>Order by based on user input:</h1>
<table border="1" width="100%">
  <tr>
    <th ng-click="orderByMe('name')">Name</th>
    <th ng-click="orderByMe('country')">Country</th>
  </tr>
  <tr ng-repeat="x in names | orderBy:myOrderBy">
    <td>{{x.name}}</td>
    <td>{{x.country}}</td>
  </tr>
</table>
<h1>Custom filter by user: will uppercase every other character.</h1>
<ul>
<li ng-repeat="x in allName">
    {{x | myFormat}}
</li>
</ul>
</div>
<script type="text/javascript">
var app = angular.module('filterApp', []);
app.controller('filterCtrl', function($scope) {
  $scope.firstName = "John";
  $scope.lastName = "Doe";
  $scope.price = 1000;
   $scope.names = [
        {name:'Jani',country:'Norway'},
        {name:'Carl',country:'Sweden'},
        {name:'Margareth',country:'England'},
        {name:'Hege',country:'Norway'},
        {name:'Joe',country:'Denmark'},
        {name:'Gustav',country:'Sweden'},
        {name:'Birgit',country:'Denmark'},
        {name:'Mary',country:'England'},
        {name:'Kai',country:'Norway'}
        ];
	$scope.allName = [
        'Jani',
        'Carl',
        'Margareth',
        'Hege',
        'Joe',
        'Gustav',
        'Birgit',
        'Mary',
        'Kai'
    ];	
    $scope.orderByMe = function(x) {
       $scope.myOrderBy = x;
    }
});
app.filter('myFormat', function() {
    return function(x) {
        var i, c, txt = "";
        for (i = 0; i < x.length; i++) {
            c = x[i];
            if (i % 2 == 0) {
                c = c.toUpperCase();
            }
            txt += c;
        }
        return txt;
    };
});
</script>
</body>
</html>