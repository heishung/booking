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
    <div id="page-wrapper" xmlns="http://www.w3.org/1999/html">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rooms
                        <small>Add</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open(['method'=>'post','route'=>'admin.rooms.store','role'=>'form','enctype'=>"multipart/form-data"]) !!}
                    <div class="form-group @if($errors->has('name')) has-warning @endif "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name" placeholder="Please Enter Location Name" />
                        @if ($errors->any())
                            <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                        @endif
                        {{--@if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input name="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                            @if ($errors->any())
                                <span class="help-block" >
                                {{$errors->first('name')}}
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Describe</label>
                        <textarea name="info[content]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Room amenities</label>
                        <textarea name="info[amenities]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Cancellation policy</label>
                        <textarea name="info[Cancellation]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Max adults</label>
                        <input class="form-control" name="max_adults" type="number" value="1" id="example-number-input">

                    </div>
                    <div class="form-group">
                        <label>Max child</label>
                        <input class="form-control" name="max_child" type="number" value="0" id="example-number-input">
                    </div>
                    <div class="form-group">
                        <label>convenient</label>
                        <textarea name="overview[convenient]" id="demo" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Necessary information</label>
                        <textarea name="overview[information]" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Single supplement</label>
                        <textarea name="overview[supplement]" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>
                            Is book</label>
                        <input type="number" name="is_book" id="" value="0" ></input>
                    </div>
                    <div class="form-group">
                        <label>
                            Necessary information</label>
                        <textarea name="single_sup" id="" class="ckeditor"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Location</label>
                        <select id="location" class="form-control" name="location" id="">
                            @foreach($locations as $lc)
                                <option value="{{$lc->id}}"> {{$lc->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="img_upload" >
                    </div>

                    <div class="form-group">
                        <label>Hotels</label>
                        <select id="hotels" class="form-control" name="hotels_id" >
                            @foreach($hotels as $ht)
                                <option value={!! $ht->id !!}> {{$ht->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-default">Room Add</button>
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

@section("script")
    <script>
        $(document).ready(function () {
            $("#location").change(function () {
                var location_id=$(this).val();
                $.get("admin/ajax/rooms/"+location_id,function (data) {
                    $("#hotels").html(data);
                });
            });
        });
    </script>
@endsection