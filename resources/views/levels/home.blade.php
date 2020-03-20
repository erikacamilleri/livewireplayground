@extends('layouts.student.master')
@section('title', 'Page Title')
@section('sidebar_header')
    @parent
    <p>Filter for challenges</p>
@endsection
@section('sidebar')
    @parent
    Here I can see the challenges this week
@endsection
@section('content')
    <p>This is my body content here I will display the levels.</p>
@endsection