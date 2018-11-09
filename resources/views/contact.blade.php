@extends('layouts.withnav') 
@section('content')

<div class="padding"></div>
<div class="container" id="content">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <h1>Contact Me</h1>

            <hr>

            <form action="/contact" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"required>
                </div>

                <div class="form-group">
                    <label for="body">Message</label>
                    <textarea class="form-control" name="body" rows="5" required>{{ old('body') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            @include('layouts.errors')
        </div>
    </div>
</div>
@endsection