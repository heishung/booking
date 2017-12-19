<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 29/08/2017
 * Time: 4:17 CH
 */ ?>
@extends('admin.layuot.index')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Rooms
                        <small>{{$room->name}}</small>
                    </h1>

                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="admin/rooms/edit/{{$room->id}}" enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group @if($errors->has('name')) has-warning @endif ">
                            <label for="name">Name</label>
                            <input class="form-control" value="{{$room->name}}" name="name"
                                   placeholder="Please Enter Location Name"/>
                            @if ($errors->any())
                                <span class="help-block">
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
                                <input name="price" value="{{$room->price}}" type="text" class="form-control"
                                       aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-addon">.00</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Describe</label>
                            <textarea name="info[content]" id="demo"
                                      class="ckeditor">{!! $room->info['content'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Room amenities</label>
                            <textarea name="info[amenities]" id="demo"
                                      class="ckeditor">{!! $room->info['amenities'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Cancellation policy</label>
                            <textarea name="info[Cancellation]" id="demo"
                                      class="ckeditor">{!! $room->info['Cancellation'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Max adults</label>
                            <input class="form-control" value="{{$room->max_adults}}" name="max_adults" type="number"
                                   id="example-number-input">

                        </div>
                        <div class="form-group">
                            <label>Max child</label>
                            <input class="form-control" value="{{$room->max_child}}" name="max_child" type="number"
                                   id="example-number-input">
                        </div>
                        <div class="form-group">
                            <label>convenient</label>
                            <textarea name="overview[convenient]" id="demo"
                                      class="ckeditor">{!! $room->overview['convenient'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Necessary information</label>
                            <textarea name="overview[information]" id="demo"
                                      class="ckeditor">{!! $room->overview['information'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Single supplement</label>
                            <textarea name="overview[supplement]" id=""
                                      class="ckeditor">{!! $room->overview['supplement'] !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Is book</label>
                            <textarea name="is_book" id="" class="ckeditor">{!! $room->is_book !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Necessary information</label>
                            <textarea name="single_sup" id="" class="ckeditor">{!! $room->single_sup !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="img_upload">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <select id="location" class="form-control" name="location" id="">
                                @foreach($location as $lc)

                                    <option value="{{$lc->id}}"> {{$lc->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Hotels</label>
                            <select id="hotels" class="form-control" name="hotels_id" id="">
                                @foreach($hotel as $ht)
                                    <option
                                            @if($room->hotels_id == $ht->id)
                                            {{'selected'}}
                                            @endif
                                            value="{{$ht->id}}"> {{$ht->name}}</option>
                                @endforeach
                            </select>
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
                        <button type="submit" class="btn btn-default">Room edit</button>
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

@section("script")
    <script>
        $(document).ready(function () {
            $("#location").change(function () {
                var location_id = $(this).val();
                $.get("admin/ajax/rooms/" + location_id, function (data) {
                    /*alert(data);*/
                    $("#hotels").html(data);
                });
            });
        });
    </script>
@endsection