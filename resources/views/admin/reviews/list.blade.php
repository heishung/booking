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
                <h1 class="page-header">Category
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Hotels</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Rating</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reviews as $review)
                <tr class="odd gradeX" align="center">
                    <td>{{$review->id}}</td>
                    <td>{{$review->name}}</td>
                  {{--  <td>{{$reviews->hotel_id}}</td>
                    <td>{{$reviews->user_id}}</td>--}}
                         <td>{{$review->hotel->name}}</td>
                         <td>{{$review->user->name}}</td>
                    <td>{{$review->email}}</td>
                    <td>
                        <div class="star-rating">
                           {{$review->data['rating']}} Star
                        </div>

                    </td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="admin/reviews/delete/{{$review->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/reviews/edit/{{$review->id}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>

        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
