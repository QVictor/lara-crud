@extends('layout')

@section('title', 'User' . $user->name)

@section('content')
    <a type="button" class="btn btn-secondary" href="{{route('users.index')}}">Back to users</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">id: {{$user->id}}</li>
            <li class="list-group-item">name: {{$user->name}}</li>
            <li class="list-group-item">email: {{$user->email}}</li>
            <li class="list-group-item">created_at: {{$user->created_at->format('d/m/y H:i:s')}}</li>
            <li class="list-group-item">updated_at: {{$user->updated_at->format('d/m/y H:i:s')}}</li>
        </ul>
    </div>
    <form method="POST" class="mt-3" action="{{route('users.destroy', $user)}}">
        <a type="button" class="btn btn-warning" href="{{route('users.edit', $user)}}">Edit</a>
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
@endsection
