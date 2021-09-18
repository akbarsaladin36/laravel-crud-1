    @extends('layouts.app')

    @section('title', 'Detail Data')
        
    @section('content')

    <div class="container">
      <div class="row">
            <div class="col mt-3">
                <h1>Detail Data</h1>
            </div>
      </div>

      <div class="row">
            <div class="col">
                <a href="{{ route('home') }}" class="btn btn-secondary float-right">Back</a>
            </div>
      </div>

      <div class="row">
        <div class="col">
          <p>Username : </p>
          <p>First Name : </p>
          <p>Last Name : </p>
          <p>Email : </p>
          <p>Address : </p>
          <p>Phone Number : </p>
        </div>
        <div class="col">
          <p>{{ $user->username }} </p>
          <p>{{ $user->first_name }}</p>
          <p>{{ $user->last_name }}</p>
          <p>{{ $user->email }}</p>
          <p>{{ $user->address }}</p>
          <p>{{ $user->phone_number }}</p>
        </div>
      </div>

      <a href="{{ route('edit', ['id' => $user->id ])}}" class="btn btn-success">Update Data</a>
      
    </div>
        
    @endsection