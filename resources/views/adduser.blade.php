@extends('layouts/app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Add new user</h1>
                <form action="{{route('add.user')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" name="email" id="email" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="name">Age</label>
                        <input type="number" name="age" id="age" class="form-control" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="name">City</label>
                        <input type="text" name="city" id="city" class="form-control" autocomplete="off">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>

                </form>
                
            </div>
        </div>
    </div>
    
@endsection