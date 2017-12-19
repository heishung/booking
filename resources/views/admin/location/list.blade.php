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
                    <h1 class="page-header">Location
                        <small>List</small>
                    </h1>
                </div>

                <!-- /.col-lg-12 -->
                @if (session('messagedelete'))
                    <span class="help-block">
                                {{session('messagedelete')}}
                            </span>
                @endif

                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Content</th>
                        <th>Slug</th>
                        <th>Image</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Locations as $locations)
                        <tr class="odd gradeX" align="center">
                            <td>{{$locations->id}}</td>
                            <td>{{$locations->name}}</td>
                            <td>{!! $locations->content !!}</td>
                            <td>{!! $locations->slug !!}</td>

                            <td><img src="{{route('img.view',['p'=>$locations->image,'w'=>100,'q'=>80])}}" alt=""></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        onclick="return confirm('Do you want delete')"
                                        href="/admin/location/delete/{{$locations->id}}">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="/admin/location/edit/{{$locations->id}}">Edit</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                            <ul class="pagination">
                                {{ $Locations->links() }}
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