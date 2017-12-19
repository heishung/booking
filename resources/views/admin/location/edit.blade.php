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
                <h1 class="page-header">Locations Edit
                    <small>{{$locations->name}}</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">

                <form action="admin/location/edit/{{$locations->id}}" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group @if($errors->has('name')) has-warning @endif">
                        <label>Locations Name</label>
                        <input class="form-control" name="name" value="{{$locations->name}}" placeholder="Please Enter Locations Name" />
                        @if ($errors->any())
                            <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                        @endif
                        @if (session('notification'))
                            <span class="help-block" >
                                {{session('notification')}}
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input value="{{$locations->image}}" type="file" name="img_upload" >
                    </div>
                    <div class="form-group">
                        <label>Location content</label>
                        <textarea name="content"  id="demo" class="ckeditor">{{$locations->content}}</textarea>

                    </div>

                    <button type="submit" class="btn btn-default">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection