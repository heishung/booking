<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */ ?>
@extends('admin.layuot.index')
@section('head')
    <link rel="stylesheet" href="admin_asset/upload/css/fileinput.min.css">
@endsection
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">hotels
                        <small>{{$hotels->name}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open([ 'route' => [ 'dropzone.store' ],'name'=>'addimg', 'files' => true, 'enctype' => 'multipart/form-data', 'class' => 'dropzone', 'id' => 'my-dropzone' ]) !!}
                    <div>
                        <h3>Upload Multiple Image By Click On Box</h3>
                    </div>
                    {!! Form::close() !!}
                    <form action="admin/hotels/edit/{{$hotels->id}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group @if($errors->has('name')) has-warning @endif "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" value="{{$hotels->name}}" placeholder="Please Enter Locations Name" />
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
                        <label>Address</label>
                        <input type="text" value="{{$hotels->info['address']}}" name="info[address]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>image</label>

                    </div>
                    <div class="form-group">
                        <label>hotels content</label>
                        <textarea name="info[content]" id="demo" class="ckeditor">{{isset($hotels->info['content'])?$hotels->info['content']:''}}</textarea>
                    </div>
                        <div class="form-group" id="img-upload">

                        </div>
                    <div class="form-group">
                        <label>Location</label>
                        <select class="form-control"  name="location_id" id="">
                            @foreach($location as $lc)
                                <option
                                        @if($hotels->location_id == $lc->id)
                                            {{'selected'}}
                                        @endif
                                        value="{{$lc->id}}"> {{$lc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Overview</label>
                            <input id="input-upload" value="{{$hotels->overview['Necessaryinformation']}}" class="form-control" name="overview[Necessaryinformation]" placeholder="Necessaryinformation" type="text" multiple/><br>
                            <input id="input-upload" value="{{$hotels->overview['Gotogether']}}" class="form-control" name="overview[Gotogether]" type="text" placeholder="Gotogether" multiple/><br>
                            <input id="input-upload" value="{{$hotels->overview['circulate']}}" class="form-control" name="overview[circulate]" placeholder="circulate" type="text" multiple/><br>
                        </div>
                        <div class="form-group">
                            <label for="">Price from</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input name="price_from" value="{{$hotels->price_from}}" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">hotels Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
@section('script')
    <link rel="stylesheet" href="admin_asset/dist/css/dropzone.css">
    <script src="admin_asset/dist/js/dropzone.js"></script>
    <script type="text/javascript">
        Dropzone.options.myDropzone = {
            uploadMultiple: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            createImageThumbnails: true,
            init: function () {
                this.on("addedfile", function (file) {

                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='dz-remove'>Remove file</button>");


                    // Capture the Dropzone instance as closure.
                    var _this = this;

                    // Listen to the click event
                    removeButton.addEventListener("click", function (e) {
                        // Make sure the button click doesn't submit the form:
                        e.preventDefault();
                        e.stopPropagation();

                        // Remove the file preview.
                        _this.removeFile(file);
                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });
                this.on("successmultiple", function (file, res) {
                    $.each(res,function (index,value) {
                        $('#img-upload').append('<input type="hidden" name="image[]" value="'+value+'">');
                    });

                });
            }
        };
    </script>
    <script src="admin_asset/upload/fileinput.min.js"></script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>

@endsection