<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body ng-app="myApp" style="background-color: #3d6983">


<h1 ng-model="city"></h1>

<h2>Forcast for {{city}}</h2>


<table>
<tr>
    <th>Time</th>
    <th>Temp</th>
</tr>
    <tr ng-repeat="w in weatherResult.list">
        <td>{{converDate(w.dt ) | date : 'MMM d , y'}}</td>
        <td style="text-align: right">{{conver(w.main.temp)}}</td>
    </tr>

</table>







</body>
</html>





<!--API KEY-->
<!--40660b7e0c16582f7908f3dad629b17b-->