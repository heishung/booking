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
                <h1 class="page-header">Post
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('messagedelete'))
                <span class="help-block" >
                                {{session('messagedelete')}}
                            </span>
            @endif
            @if (session('notification'))
                <span class="help-block" >
                                {{session('notification')}}
                            </span>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Titile</th>

                    <th>content</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $posts as $post)
                <tr class="odd gradeX" align="center">
                    <td>{{$post->id}}</td>
                    <td>{{isset($post->title)?$post->title:''}}</td>
                    <td>{{--{!!isset($post->content)?$post->content:''!!}--}}{!! str_limit($post->content, $limit = 200, $end = '...') !!}</td>
                    <td><img src="{{route('img.view',['p'=>$post->image,'w'=>100,'q'=>80])}}" alt=""></td>
                    <td>{!!isset($post->slug)?$post->slug:''!!}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/post/delete/{{$post->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/post/edit/{{$post->id}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6">

                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            {{ $posts->links() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection
