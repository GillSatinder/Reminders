@extends('layout')
@section('content')


        <body class="container" style="background-color: lightblue" ng-app="myApp" ng-controller="myCtrl">


        <!--ENTER NEW COMMENT-->

        <div class="row">


            <h1 style="text-align: center">Reminders </h1>


            @if(Auth::check())
                <div class="row">
                    <div class="col-sm-8"><h2>Welcome {{Auth::user()->name}}</h2></div>
                    <div class="col-sm-4" style="text-align: right"> <h2><a href="{{ url('logout') }}">Logout</a></h2></div>
                </div>
            @endif



            <h3 style="text-align: center">[[today]]</h3>




            {{--POST NEW REMINDER--}}


            <form class="form" ng-submit="postComment()">

                <div class="form-group col-sm-12">
                    <label>Reminder:</label>
                    <input type="text" class="form-control" placeholder="Enter Reminder" ng-model="body">
                </div>
                <div class="col-sm-offset-6">

                    <input type="submit" class="btn btn-primary"> </div>
            </form>





            <!--DISPLAY ALL REMINDERS -->

            <div style="text-align: center">
                <h2>All Reminders</h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Reminder</th>
                        <th style="text-align: center">Time</th>
                    </tr>
                    <tr ng-repeat="x in comments" ng-click="setSelected()">
                        <td>[[$index + 1]]</td>
                        <td>[[x.body]]</td>
                        <td>[[x.created_at]]</td>
                        <td><button class="btn btn-default" ng-click="deleteComment(x.id)" title="Click if task is completed">Delete</button>
                            <button class="btn btn-default" ng-click="doLater($index)" title="will shown at last">Do Later</button> </td>
                    </tr>

                    </thead>
                </table>
            </div>
        </div>



        </body>
        </html>



    @endsection





