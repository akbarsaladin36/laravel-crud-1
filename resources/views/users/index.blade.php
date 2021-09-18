    @extends('layouts.app')

    @section('title', 'Home')
        
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-3 mb-3">Laravel 7 CRUD Tutorial</h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <a href="{{ route('create') }}" class="btn btn-primary float-right mt-1 mb-5">Create Data</a>
            </div>
        </div>

        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->username}}</td>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>
                        <a href="{{ route('show', ['id' => $user->id ])}}" class="btn btn-success">Edit</a>
                        <form action="{{ route('delete', ['id' => $user->id ])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
        
    @endsection