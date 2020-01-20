@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการอุปกรณ์ผู้ช่วยของคุณ</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Del</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $ls)
                          <tr>
                            <th scope="row">{{$ls->name}}</th>
                            <td>{{$ls->id}}</td>
                            <td>{{$ls->id}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
