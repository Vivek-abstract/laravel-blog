@extends('layouts.withnav') 
@section('content')

<div class="padding"></div>
<div class="col-lg-6 col-md-5 mx-auto">
    <h1>Register</h1>

    <hr>

    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br>
    @include('layouts.errors')

    
</div>
@endsection