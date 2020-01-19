@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello</div>

                <div class="card-body">
                    @if (!Auth::check() && !Request::is('login'))
                        กรุณา login
                    @else
                    You are logged in!
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
