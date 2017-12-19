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
                    <h1 class="page-header">Post
                        <small>{{$post->name}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">

                    <form action="admin/post/edit/{{$post->id}}"  method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group @if($errors->has('name')) has-warning @endif "  >
                        <label for="name" >Title</label>
                        <input class="form-control" name="title" value="{{$post->title}}" placeholder="Please Enter Locations Name" />
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
                            <label for="description">Description</label>
                            <input class="form-control" value="{{$post->description}}" type="text" name="description">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input value="{{$post->image}}" type="file" name="upload_img" >
                            <td><img src="{{route('img.view',['p'=>$post->image,'w'=>100,'q'=>80])}}" alt=""></td>
                        </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="content" id="demo" class="ckeditor">{{isset($post->content)?$post->content:''}}</textarea>
                    </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" value="{{$post->slug}}" name="slug" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-default">Post Add</button>
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