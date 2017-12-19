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
                <h1 class="page-header">Hotels
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if (session('messagedelete'))
                <span class="help-block" >
                                {{session('messagedelete')}}
                            </span>
            @endif
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>address</th>
                    <th>content</th>
                    <th>Necessaryinformation</th>
                    <th>Gotogether</th>
                    <th>circulate</th>
                    <th>price form</th>
                    <th>location </th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Hotels as $hotel)
                <tr class="odd gradeX" align="center">
                    <td>{{$hotel->id}}</td>
                    <td>{{isset($hotel->name)?$hotel->name:''}}</td>
                    <td>{{isset($hotel->info['address'])?$hotel->info['address']:''}}</td>
                    <td>{!!isset($hotel->info['content'])?$hotel->info['content']:''!!}</td>
                    <td>{{isset($hotel->overview['Necessaryinformation'])?$hotel->overview['Necessaryinformation']:''}}</td>
                    <td>{{isset($hotel->overview['Gotogether'])?$hotel->overview['Gotogether']:''}}</td>
                    <td>{{isset($hotel->overview['circulate'])?$hotel->overview['circulate']:''}}</td>
                    <td>{{isset($hotel->price_from)?$hotel->price_from:''}}</td>
                    <td>{{isset($hotel->location->name)?$hotel->location->name:''}}</td>
                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/hotels/delete/{{$hotel->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/hotels/edit/{{$hotel->id}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6">

                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            {{ $Hotels->links() }}
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
