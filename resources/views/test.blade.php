@extends('master.layout')

@section('content')
    @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('alertclass') }}">
        {{ Session::get('message')}}
    </div>
    @endif
@endsection
