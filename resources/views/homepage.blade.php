@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron" id="jumbotron_index">

        <div class="text-center">
            <h1 id="x">LaravueCrud</h1>
            <h6 id="x">App CRUD Laravel + VueJs</h6>
        </div>

        <router-view></router-view>
    </div>
</div>
@endsection
