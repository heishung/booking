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
                    <th class="text-center">ID</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">permission</th>
                    <th class="text-center">Delete</th>
                    <th class="text-center">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $u)
                <tr class="odd gradeX" align="center">
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->permission}}
                        @if ($u->permission==1)
                        {{"Admin"}}
                        @elseif($u->permission==2)
                        {{"Editor"}}
                        @elseif($u->permission==3)
                        {{"author"}}
                            @endif
                    </td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="/admin/user/delete/{{$u->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/user/edit/{{$u->id}}">Edit</a></td>
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