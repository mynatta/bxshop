@extends('layouts.master')
@section('title')
    BikeShop | เพิ่มสินค้า
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>เพิ่มประเภทสินค้า</h1>
                <ul class="breadcrumb">
                    <li><a href="{{URL::to('product')}}">หน้าแรก</a></li>
                    <li class="active">เพิ่มประเภทสืนค้า</li>
                </ul>

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                    </div>
                @endif

                {!! Form::open(array( 'action'=>'App\Http\Controllers\CategoryController@insert','method'=>'post' , 'enctype'=>'multipart/form-data')) !!}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <strong>เพิ่มประเภทสินค้า</strong>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table>
                            <tr>
                                <td>{{Form::label('name' , 'ชื่อประเภทสินค้า')}}</td>
                                <td>{{Form::text('name',Request::old('name'),['class'=>'form-control'])}}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <button type="reset" class="btn btn-danger">ยกเลิก</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> บันทึก</button>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection