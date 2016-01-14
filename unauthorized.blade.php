@extends('master')
@section('title', 'About')
@section('content')
<div class="container">
<div class="content">
<div class="title">Error Page</div>
<div class="quote">You are unauthorized to view this page!</div>
@if(session('status'))
<div class="alert alert-success">
    
<h3 class="header">{{ session('status') }}</h3>
</div>
@endif
</div>
</div>
@endsection