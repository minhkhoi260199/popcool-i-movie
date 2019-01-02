<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Popcool-Admin</title>
    <link href="<?php echo base_url()?>public/client/img/popcool-icon.png" rel="icon">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>public/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>public/admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>public/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .table>thead>tr>th{
        text-align: center !important;
    }
    </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>admin/index">PopCool!Movie Admin site</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Admin <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo base_url() ?>registration/logOut"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <!--
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </li>
                        <!-- /input-group -->
                        <li>
                            <a href=""><i class="fa fa-th-list fa-fw"></i> Danh mục Phim<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/indexPhim">Xem danh sách Phim <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>admin/addPhim">Thêm Phim <i class="fa fa-sign-in fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-calendar fa-fw"></i> Suất chiếu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/indexSC">Xem Ds suất chiếu <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>admin/addSC">Thêm suất chiếu <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-user fa-fw"></i> Thành viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/indexTV">Xem Ds thành viên <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>admin/addTV">Them thêm thành viên <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-building fa-fw"></i> Phòng chiếu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/indexPC">Xem Ds phòng chiếu <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url() ?>admin/addPC">Them phòng chiếu <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-building fa-fw"></i> Vé<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url() ?>admin/indexVe">Xem Ds Vé <i class="fa fa-th-list fa-fw"></i></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
