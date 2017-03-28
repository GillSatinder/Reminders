
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


                    <form action="register" method="post" >

                        {{csrf_field()}}


                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>


                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>


                        <div class="form-group">
                            <label for="password_conformation">Confirm Password:</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <p>already have an account ? Log in here ..</p>

                        <h4><a href="{{ url('login') }}">Login</a></h4>


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







