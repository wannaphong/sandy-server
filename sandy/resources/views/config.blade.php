@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">รายการอุปกรณ์ผู้ช่วยของคุณ</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateassistant') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$ls->id}}">
                        <div class="form-group row">
                            <label for="house_number" class="col-md-4 col-form-label text-md-right">บ้านเลขที่</label>

                            <div class="col-md-6">
                                <input id="house_number"
                                @if($ls->house_number!==null)
                                value="{{$ls->house_number}}"
                                @endif
                                type="text" class="form-control @error('house_number') is-invalid @enderror" name="house_number"  autocomplete="house_number" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alley" class="col-md-4 col-form-label text-md-right">ซอย</label>

                            <div class="col-md-6">
                                <input id="alley"
                                @if($ls->alley!==null)
                                value="{{$ls->alley}}"
                                @endif
                                type="text" class="form-control @error('alley') is-invalid @enderror" name="alley"  autocomplete="alley" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="village" class="col-md-4 col-form-label text-md-right">หมู่บ้าน</label>

                            <div class="col-md-6">
                                <input id="village"
                                @if($ls->village!==null)
                                value="{{$ls->village}}"
                                @endif
                                type="text" class="form-control @error('village') is-invalid @enderror" name="village"  autocomplete="village" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subdistrict" class="col-md-4 col-form-label text-md-right">ตำบล</label>

                            <div class="col-md-6">
                                <input id="subdistrict"
                                @if($ls->subdistrict!==null)
                                value="{{$ls->subdistrict}}"
                                @endif
                                type="text" class="form-control @error('subdistrict') is-invalid @enderror" name="subdistrict" autocomplete="subdistrict" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">อำเภอ</label>

                            <div class="col-md-6">
                                <input id="district"
                                @if($ls->district!==null)
                                value="{{$ls->district}}"
                                @endif
                                type="text" class="form-control @error('district') is-invalid @enderror" name="district"  autocomplete="district" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">จังหวัด</label>

                            <div class="col-md-6">
                                <input id="province"
                                @if($ls->province!==null)
                                value="{{$ls->province}}"
                                @endif
                                type="text" class="form-control @error('province') is-invalid @enderror" name="province"  autocomplete="province" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="linenotify" class="col-md-4 col-form-label text-md-right">Line Notify</label>

                            <div class="col-md-6">
                                <input id="linenotify"
                                @if($ls->linenotify!==null)
                                value="{{$ls->linenotify}}"
                                @endif
                                type="text" class="form-control @error('linenotify') is-invalid @enderror" name="linenotify" autocomplete="linenotify" autofocus>
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    ปรับปรุง
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
