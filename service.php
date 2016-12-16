<!DOCTYPE html>
<html lang="en-US">
<head>Angular Js Services</head>
<script src="angular.js"></script>
<body>
<div ng-app="serviceApp" ng-controller="serviceCtrl" >
<h1>The url of this page is:</h1>
<p>{{myUrl}}</p>
<p>{{myHeader}}</p>
<h1>http request get method with php data</h1>
<ul>
  <li ng-repeat="x in myData" >
  <span  ng-if="$odd" style="background-color:red">{{$index + 1}}{{ x.name + ', ' + x.game }}</span>
  <span ng-if="$even" style="background-color:green">{{$index + 1}}{{ x.name + ', ' + x.game }}</span>
  </li>
</ul>
<p>Error in request : {{errResponse}}</p>
<h1>http request with all status</h1>
<p>Data : {{content}}</p>
<p>Status : {{statuscode}}</p>
<p>StatusText : {{statustext}}</p>

</div>
<script type="text/javascript">
var app = angular.module('serviceApp', []);
app.controller('serviceCtrl', function($scope, $location, $timeout, $http) {
  $scope.myHeader = "Hello World!";
  $scope.myUrl = $location.absUrl();
  $timeout(function () {
      $scope.myHeader = "How are you today?";
  }, 2000);
   $http({
        method : "GET",
        url : "list.php"
    }).then(function mySucces(response) {
        $scope.myData = response.data;
    }, function myError(response) {
        $scope.errResponse = response.statusText;
    });
	$http.get("content.php")
    .then(function(response) {
        $scope.content = response.data;
        $scope.statuscode = response.status;
        $scope.statustext = response.statustext; 
    });
});
</script>
</body>
</html>