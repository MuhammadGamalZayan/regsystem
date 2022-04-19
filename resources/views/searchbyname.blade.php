@extends('layouts.header')
<div class="wrapper" style="overflow: hidden;">
        <div class="body-overlay">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/chez logo.jpeg" class="img-fluid"/><span>Perfect Touch Events</span></h3>
            </div>
            <ul class="list-unstyled components">
			    <li  class="active">
                    <a href="/index" class="dashboard"><i class="material-icons">dashboard</i><span>(Conferences)</span></a>
                </li>
                <li>
                    <a href="/attendees" class="dashboard"><i class="material-icons">verified_user</i><span>Regist New Attendee</span></a>
                </li>
                <li>
                    <a href="/searchbyname" class="dashboard"><i class="material-icons">youtube_searched_for</i><span>Search By Name</span></a>
                </li>
                <li>
                    <a href="/searchbybarcode" class="dashboard"><i class="material-icons">fingerprint</i><span>Search By Barcode</span></a>
                </li>
                </ul>
		      <div class="small-screen navbar-display">
                <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">notifications</i><span> 4 notification</span></a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                                    <li>
                                    <a href="#">You have 5 new messages</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Mike</a>
                                    </li>
                                    <li>
                                        <a href="#">Wish Mary on her birthday!</a>
                                    </li>
                                    <li>
                                        <a href="#">5 warnings in Server Console</a>
                                    </li>
                    </ul>
                </li>
				
				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                </li>
				
				 <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">person</i><span>user</span></a>
                </li>
				
				<li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                </li>
                </ul>
            </div>
        </nav>
        <!-- Page Content  -->
        <div id="content">
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					<a class="navbar-brand" href="#"> Dashboard </a>
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>
                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                   <span class="material-icons">person</span>
								   <span class="notification">4</span>
                               </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="text-center">Account Setting</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-center">Add Sub Admin</a>
                                    </li>
                                    <li>
                                        <a href="#" class="btn btn-danger">Log Out</a>
                                    </li>
                                  
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
	    </div>
        <div class="main-content">
					<div class="row ">
                        <div class="col-12">
                            <div class="card" style="min-height: 485px">

                                <section class="vh-100 bg-image" style="height: 70vh;">
                                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                                      <div class="container h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                          <div class="col-10">
                                            <div class="card" style="border-radius: 15px;background: transparent;box-shadow: none;">
                                              <div class="card-body p-5">
                                                <!-- <h4 class="text-uppercase text-center" style="margin-bottom: 22px;">Search By Name</h4> -->
                                                <div class="form-outline mb-2" style="border-radius: 15px;">
                                                    <!-- <label class="form-label" for="name">Name</label> -->
                                                  <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Search By Name"/>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </div>