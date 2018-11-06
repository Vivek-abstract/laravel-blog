@extends('layouts.withnav') 
@section('content')

<div class="padding"></div>

<div class="col-lg-4 col-md-4 mx-auto">
    <h1>Login</h1>

    <hr>

    <form action="/login" method="POST">

        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

    <br>

    @include('layouts.errors')
</div>
@endsection