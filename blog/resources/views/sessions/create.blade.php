@extends('blog_layouts.master_blogy')

@section('content')

    <div class="col-md-8">

        <h1>Sign in</h1>

        <form method="post" action="/login">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>

            @include('blog_layouts.errors')

        </form>


    </div>

@endsection