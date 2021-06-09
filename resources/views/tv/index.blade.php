@extends('layouts.app')
@section('content')
<div class="container mx-auto px-5 pt-16">
    <div class="tvs">
        <x-tv :tvs="$tvs" :genres="$genres" :title="$title"/>
    </div>
</div>
@endsection