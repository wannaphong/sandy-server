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
                            <td><a href="./configassistant/{{$ls->assistantid}}"><button type="button" class="btn btn-warning">ปรับแต่งการตั้งค่า</button></a></td>
                            <td><a href="./delassistant/{{$ls->id}}"><button type="button" class="btn btn-danger">ลบ</button></a></td>
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
