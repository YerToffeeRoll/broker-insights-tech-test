@extends('layouts.app')

@section('content')
<div id="app" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <router-view name="PoliciesIndex"></router-view>
                <router-view></router-view>
        </div>
    </div>
    </div>
</div>
@endsection
