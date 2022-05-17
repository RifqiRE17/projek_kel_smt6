@extends('layouts.frontend.back.inc.app')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <h1>Halaman Adminstrator</h1>
    <p>Ini adalah Halaman Adminstrator SDN Kotakulon 1 !</p>
@endsection