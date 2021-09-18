    @extends('layouts.app')

    @section('title', 'Create Data')
        
    @section('content')

    <div class="container">
      <div class="row">
            <div class="col mt-3">
                <h1>Create Data</h1>
            </div>
      </div>

      <div class="row">
            <div class="col">
                <a href="{{ route('home') }}" class="btn btn-secondary float-right">Back</a>
            </div>
      </div>

      <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="first_name" class="form-control" placeholder="Enter your first name">
        </div>
        <div class="form-group">
          <label for="last_name">Last Name</label>
          <input type="text" name="last_name" class="form-control" placeholder="Enter your last name">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" name="address" class="form-control" placeholder="Enter your address">
        </div>
        <div class="form-group">
          <label for="phone_number">Phone Number</label>
          <input type="text" name="phone_number" class="form-control" placeholder="Enter your phone number">
        </div>
        <button type="submit" class="btn btn-success mt-3 mb-3">Create Data</button>
      </form>
    </div>
        
    @endsection