<?php
/**
 * Created by PhpStorm.
 * User: thehung
 * Date: 28/08/2017
 * Time: 5:25 CH
 */?>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-globe"></i> Location<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/location/list">List Location</a>
                    </li>
                    <li>
                        <a href="/admin/location/create">Add Location</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-home"></i> Hotel<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/hotels/list">List Hotel</a>
                    </li>
                    <li>
                        <a href="/admin/hotels/create">Add Hotel</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-home"></i> Room<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/rooms/list">List Room</a>
                    </li>
                    <li>
                        <a href="/admin/rooms/creat">Add Room</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-ok-circle"></i> Review<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/reviews/list">List Review</a>
                    </li>
                    <li>
                        <a href="/admin/reviews/creat">Add Review</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-ok-circle"></i>Post<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/post/list">List Review</a>
                    </li>
                    <li>
                        <a href="/admin/post/create">Add Review</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-ok-circle"></i>Slide<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('slide.list')}}">List Slide</a>
                    </li>
                    <li>
                        <a href="{{route('slide.creat')}}">Add Slide</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="glyphicon glyphicon-ok-circle"></i>Custom theme<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                    <li>
                        <a href="{{route('geteditcustom')}}">Option</a>
                        <a href="{{route('creatfeild')}}">creat feild</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            @if(Auth::user()->isAdmin())
                {!! ' <li>
                <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="/admin/user/list">List User</a>
                    </li>
                </ul>

            </li>' !!}
                @endif
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
