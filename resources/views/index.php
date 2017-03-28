<!DOCTYPE html>
<html lang="en-us" ng-app="myApp">
    <head>
        <title>AngularJS Weather Forecast SPA</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8">

        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <style>
            html, body, input, select, textarea
            {
                font-size: 1.05em !important;
            }
        </style>
        
        <!-- load angular via CDN -->
        <script src="//code.angularjs.org/1.3.0-rc.2/angular.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.2/angular-route.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.2/angular-resource.min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/weather.js"></script>
    </head>
    <body style="background-color: #737373">

        <header>
			<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">AngularJS Weather</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><i class="fa fa-home"></i>Main</a></li>
                    <li><a href="#/second"><i class="fa fa-home"></i> Second </a> </li>
				</ul>
			</div>
			</nav>
		</header>

        <div class="container">

            <div ng-view></div>


		</div>

    </body>
</html>