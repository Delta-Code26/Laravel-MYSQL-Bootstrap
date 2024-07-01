@extends('layouts.app')

@section('content')
    <h1>Pekerja Dashboard</h1>
    <p>Welcome, {{ Auth::user()->nama_lengkap }}</p>
@endsection
