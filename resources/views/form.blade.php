@extends('layout')

@section('title', isset($user) ? 'Update '. $user->name :'Create user')

@section('content')
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="row">
            <div class="col">
                <input name="name" type="text" class="form-control" placeholder="Name" aria-label="name">
            </div>
            <div class="row">
                <div class="col mt-3">
                    <input name="email" type="text" class="form-control" placeholder="Email" aria-label="email">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <button type="submit" class="btn btn-success">create</button>
                </div>
            </div>
        </div>
    </form>
@endsection
