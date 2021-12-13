@extends('layouts.master')

@section('title','about')

@section('css')
{{-- you can link by asset or url --}}
<link rel="stylesheet" href="{{url('css/about.css')}}">
@endsection


@section('content')

    <h2>This is about</h2>
    <img src="{{url('image/images.jpg')}}" alt="image">

@endsection

@section('js')
{{-- you can link by asset or url --}}
<script src="{{asset('js/about.js')}}"></script>
@endsection

