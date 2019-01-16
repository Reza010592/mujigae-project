@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::user()->jabatan == 'user1')
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        <img src="{{ ('img/Mujigae1.png') }}">
                    @else
                        <img src="{{ ('img/Mujigae2.png') }}">
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
