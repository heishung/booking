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
                <h1 class="page-header">Rooms
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr align="center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Room amenities</th>
                    <th>Cancellation policy</th>
                    <th>Content</th>
                    <th>Convenient</th>
                    <th>Supplement</th>
                    <th>Information</th>
                    <th>Max adults</th>
                    <th>Max child</th>
                    <th>Is book</th>
                    <th>Hotels</th>
                    <th>Image</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rooms as $room )
                <tr class="odd gradeX" align="center">
                    <td>{{$room->id}}</td>
                    <td>{{$room->name}}</td>
                    <td>{{$room->price}}</td>
                    <td>{!! $room->info['amenities'] !!}</td>
                    <td>{!! $room->info['Cancellation'] !!}</td>
                    <td>{!! $room->info['content'] !!}</td>
                    <td>{!! $room->overview['convenient'] !!}</td>
                    <td>{!! $room->overview['supplement'] !!}</td>
                    <td>{!! $room->overview['information'] !!}</td>
                    <td>{{$room->max_adults}}</td>
                    <td>{{$room->max_child}}</td>
                    <td>{!! $room->is_book !!}</td>
                    <td>{{$room->hotels->name}}</td>
                    <td><img src="{{ url('')}}/{{$room->image}}" style="width: 100px" alt=""></td>

                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Do you want delete')" href="/admin/rooms/delete/{{$room->id}}"> Delete</a></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="/admin/rooms/edit/{{$room->id}}">Edit</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6">
                    <div class="dataTables_info" id="dataTables-example_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div></div><div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                            {{ $rooms->links() }}
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