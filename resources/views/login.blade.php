
@extends('layout')

@section('content')

    <body>
    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Welcome to Reminders</h2>
                    </div>
                    <div class="panel-body">


                        <form action="loginUser" method="post" >

                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control"  name="password" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>

                            <div class="form-group" >
                                <h4><a href="{{ url('register') }}">Sign Up</a></h4>

                            </div>






                        </form>

                        @include('errors')


                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection


    </body>
    </html>







