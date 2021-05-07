@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        @can('create', Candidate::class)
        <a href="{{route('vote.register')}}" class="text-xl text-tale-800">register for vote</a>  
        @endcan
        <a href="{{route('candidates')}}" class="text-xl text-blue-900">vote</a>
    </div>
</div>
@endsection
