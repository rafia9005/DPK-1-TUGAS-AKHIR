@extends('layout.head')

@section('content')
    @if($user->role === 'admin')
        @include('layout.dash.admin')
    @else
        @include('layout.dash.users')
    @endif
@endsection
