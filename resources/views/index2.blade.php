@extends('layouts.header')
<div class="wrapper">
<div class="body-overlay"></div>
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
				</div>
            </ul>
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
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
			<div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Conference Days</strong></p>
                                    <h3 class="card-title">+2</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="#pablo">Add New Attendee</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">mic_none</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Registed</strong></p>
                                    <h3 class="card-title">102</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="#"><i class="material-icons">local_offer</i> Who Printed ID</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">mic_off</span>

                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Non-Registed</strong></p>
                                    <h3 class="card-title">+159</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="#"><i class="material-icons">local_offer</i> Who Didnt Print ID</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    
                                    <span class="material-icons">follow_the_signs</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Attendees</strong></p>
                                    <h3 class="card-title">+245</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <a href="#"><i class="material-icons">follow_the_signs</i> Who Attend This Conference</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- <div class="row">
                        <label for="site-search">Search For Attendee <i class="material-icons">search</i> </label>
                        <input type="search" id="site-search" name="q">
                        <div class="btn-group col-6" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary"><i class="material-icons">search</i>Delete All</button>
                            <button type="button" class="btn btn-secondary"><i class="material-icons">search</i>Bulk Insert</button>
                            <button type="button" class="btn btn-secondary"><i class="material-icons">search</i>Add New (One By One)</button>
                            <button type="button" class="btn btn-secondary"><i class="material-icons">search</i>Delete</button>
                        </div>

                    </div> -->
					<div class="row">
                            <div class="col-3"><button type="button" class="btn btn-secondary mr-2 col-12">Delete All<span class="material-icons">delete_sweep</span></button></div>
                            <div class="col-3"><button type="button" class="btn btn-secondary mr-2 col-12">Bulk Insert<span class="material-icons">insert_chart</span></button></div>
                            <div class="col-3"><button type="button" class="btn btn-secondary mr-2 col-12">Add New(One By One) <span class="material-icons">add_circle_outline</span></button></div>
                            <div class="col-3"><button type="button" class="btn btn-secondary mr-2 col-12">Delete<span class="material-icons">delete_forever</span></button></div>
                    </div>
					<div class="row ">
                        <div class="col-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">CONFERENCES Stats</h4>
                                    <p class="category">Latest Attendee updated on 15th December, 2016</p>
                                    <div class="text-center">
                                    <a href="#" class="btn btn-info">Print All ID</a></div>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>Name</th>
                                            <th>Description</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Date/time</th>
                                            <th>Barcode</th>
                                            <th>Action</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td>Muhammad Gamal</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="/edituser.html" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                            <tr>
                                                <td>Khaled Mahmoud</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="/edituser.html" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                            <tr>
                                                <td>Esmail Mostafa</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="#" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                            <tr>
                                                <td>Eslam Khalifa</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="#" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                            <tr>
                                                <td>Ahmed Hassan</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="#" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                            <tr>
                                                <td>Omnia Mansour</td>
                                                <td>Web Developer</td>
                                                <td>muhammadgamalzayan@gmail.com</td>
                                                <td>+01030303532</td>
                                                <td>06/Apr/2022</td>
                                                <td>Barcode Here</td>
                                                <td><a href="#" class="btn btn-warning mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mb-1 mr-2">Delete</a><a href="#" class="btn btn-info mb-1">Print ID</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                <!-- Start Bulk Insert -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section class="panel">
                                            <header class="panel-heading">
                                                Insert New (Bulk Insert)
                                            </header>
                                            <div class="panel-body" style="display: block;">
                                                <div class="form-group">
                                                    <label class="col-sm-2 col-sm-2 control-label">Select (<font color="red">Xls,Xlsx </font>) File</label>
                                                    <input type="file"><br/>
                                                    <input type="submit" value="Submit" id="ContentPlaceHolderContent_BtnSubmit" class="btn btn-secondary" style="width:80px;margin-left: 40px;">
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <!-- End Bulk Insert -->
                                