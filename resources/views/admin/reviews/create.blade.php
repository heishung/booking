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
                    <h1 class="page-header">Reviews
                        <small></small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    {!! Form::open(['method'=>'post','route'=>'admin.reviews.store','role'=>'form']) !!}
                    <div class="form-group @if($errors->has('name')) has-warning @endif "  >
                        <label for="name" >Name</label>
                        <input class="form-control" name="name"  placeholder="Please Enter Location Name" />
                    {{--    @if(count($errors)>0)
                            <div class=" alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif--}}
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
                    <div class="=form-group">
                        <label for="">Hotels</label>
                  {{--      <select name="hotel" value="0" id="">
                            @foreach($hotel as $hotel)
                            <option value="{{$hotel->id}}">{{$hotel->name}}</option>
                                @endforeach
                        </select>--}}
                        {!! Form::select('hotel_id',$hotels) !!}
                    </div>

                    <div class="=form-group">
                        <label for="">User</label>
                        {!! Form::select('user_id',$user) !!}
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email">
                        @if ($errors->any())
                            <span class="help-block" >
                                 {{$errors->first('email')}}
                             </span>
                        @endif
                    </div>
                    <div class="form_group">
                        <label for="" class="control-label">Rate This</label>
                        <div class="star-rating">
                            <span class="fa fa-star" data-rating="1"></span>
                            <span class="fa fa-star" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="data[rating]" class="rating-value" value="2.56">
                        </div>
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
@endsection
@section('script')
    <script>
        var $star_rating = $('.star-rating .fa');

        var SetRatingStar = function() {
            return $star_rating.each(function() {
                if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
                    return $(this).removeClass('fa-star-o').addClass('fa-star');
                } else {
                    return $(this).removeClass('fa-star').addClass('fa-star-o');
                }
            });
        };

        $star_rating.on('click', function() {
            $star_rating.siblings('input.rating-value').val($(this).data('rating'));
            return SetRatingStar();
        });

        SetRatingStar();
        $(document).ready(function() {

        });
    </script>
    @endsection