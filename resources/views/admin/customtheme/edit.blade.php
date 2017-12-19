<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */?>
@extends('admin.layuot.index')

@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Creat custom theme
                        {{--<small>Add</small>--}}
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open(['method'=>'post','route'=>'posteditcustom','role'=>'form','enctype'=>"multipart/form-data"]) !!}

                    <h3>header</h3>
                    <div class="form-group">
                        <label>logo</label>
                        {{--<input type="hidden" name="name[logo]">--}}
                        <input type="file"  name="value[logo]" >
                        <div class="box-img"><img src="{{route('img.view',['p'=>\App\helpers\Lap::getArrayVal($options,'logo'),'w'=>100,'q'=>80])}}" alt=""></div>
                    </div>
                    <div class="form-group">
                        <label>Hotline header</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[hotline-header]" type="text" value="{{\App\helpers\Lap::getArrayVal($options,'hotline-header ')}}"  id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>name-hotline-head</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[name-hotline-head]" value="{{\App\helpers\Lap::getArrayVal($options,'name-hotline-head')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>emailus-head</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[emailus-head]" value="{{\App\helpers\Lap::getArrayVal($options,'emailus-head')}}" type="email" id="demo" class="form-control" >
                    </div>
                    <h2>footer</h2><br>

                        <h4>box 1</h4>
                    <div class="form-group">
                        <label>name-office-1</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[name-office-1]" value="{{\App\helpers\Lap::getArrayVal($options,'name-office-1')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="name" >address-off-1</label>
                        <input name="value[address-off-1]" value="{{\App\helpers\Lap::getArrayVal($options,'address-off-1')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>tel-off-1</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[tel-off-1]" value="{{\App\helpers\Lap::getArrayVal($options,'tel-off-1')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>fax-off-1</label>
                        
                        <input name="value[fax-off-1]" value="{{\App\helpers\Lap::getArrayVal($options,'fax-off-1')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>web-off-1</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[web-off-1]" value="{{\App\helpers\Lap::getArrayVal($options,'web-off-1')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>email-off-1</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[email-off-1]" value="{{\App\helpers\Lap::getArrayVal($options,'email-off-1')}}" type="email" id="demo" class="form-control" >
                    </div>
                    <h4>box 2</h4>
                    <div class="form-group">
                        <label>name-office-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[name-office-2]" value="{{\App\helpers\Lap::getArrayVal($options,'name-office-2')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>address-off-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[address-off-2]" value="{{\App\helpers\Lap::getArrayVal($options,'address-off-2')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>tel-off-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[tel-off-2]" value="{{\App\helpers\Lap::getArrayVal($options,'tel-off-2')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>fax-off-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[fax-off-2]" value="{{\App\helpers\Lap::getArrayVal($options,'fax-off-2')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>hottline-off-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[hottline-off-2]" value="{{\App\helpers\Lap::getArrayVal($options,'hottline-off-2')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>email-off-2</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[email-off-2]" value="{{\App\helpers\Lap::getArrayVal($options,'email-off-2')}}" type="email" id="demo" class="form-control" >
                    </div>

                    <h4>box 3</h4>
                    <div class="form-group">
                        <label>name-box-3</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[name-box-3]" value="{{\App\helpers\Lap::getArrayVal($options,'name-box-3')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>content-box-3</label>
                        {{--<input type="hidden" name="name[hotline-header]">--}}
                        <input name="value[content-box-3]" value="{{\App\helpers\Lap::getArrayVal($options,'content-box-3')}}" type="text" id="demo" class="form-control" >
                    </div>
                    <button type="submit" class="btn btn-default">Location Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    <style>
        .form-group{clear: both;}
        .box-img{padding: 5px;float: left;background-color: rgba(84, 70, 70, 0.21)}
    </style>
@endsection


