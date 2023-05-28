@extends('layouts.app')

@section('title','Error')
    
@section('content')
<div class="container">
</div>
    <div class="text-center">
        {{$errorMessage}}
    </div>
@endsection