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
                <h1 class="page-header">Location
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                {!! Form::open(['method'=>'post','route'=>'admin.location.store','role'=>'form','enctype'=>"multipart/form-data"]) !!}
                    <div class="form-group @if($errors->has('name')) has-warning @endif "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Location Name" />
                        @if(count($errors)>0)
                            <div class=" alert alert-danger">
                                    @foreach($errors->all() as $err)
                                            {{$err}}<br>
                                     @endforeach
                            </div>
                        @endif
                       {{-- @if ($errors->any())
                            <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                        @endif--}}
                        @if (session('notification'))
                            <span class="help-block" >
                                {{session('notification')}}
                            </span>
                        @endif
                    </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="upload_img" >
                </div>
                <div class="form-group">
                    <label>Location content</label>
                    <textarea name="content" id="demo" class="ckeditor"></textarea>

                </div>

                    {{--<div class="form-group">
                        <label>Location Status</label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="1" checked="" type="radio">Visible
                        </label>
                        <label class="radio-inline">
                            <input name="rdoStatus" value="2" type="radio">Invisible
                        </label>
                    </div>--}}
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
@endsection