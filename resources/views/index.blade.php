@extends('layouts.auth')

@section('content')
    @auth
        <form action="{{ route('loqOut') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Exit</button>
        </form>
    @endauth
@endsection
