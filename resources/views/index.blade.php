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
                    <a href="/index" class="dashboard"><i class="material-icons">dashboard</i><span>CONFERENCES</span></a>
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
                                    <p class="category"><strong>CONFERENCES</strong></p>
                                    <h3 class="card-title">70,340</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="#add-conf">Add New Conference</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-rose">
                                       <span class="material-icons">notifications_active</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong> Active Conferences</strong></p>
                                    <h3 class="card-title">102</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">notifications_active</i> Active Conferences
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-success">
                                        <span class="material-icons">notifications_off</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Inactive Conferences</strong></p>
                                    <h3 class="card-title">25</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">notifications_off</i> Inactive Conferences
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
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="row ">
                        <div class="col-lg-12">
                            <div class="dataTables_filter float-right col-6" id="dynamic-table_filter"><label class="search"><span class="material-icons">search</span>Search: <input type="text" class="form-control" aria-controls="dynamic-table" style="margin-left: 5px;"></label></div>
                            <div class="btn-group col-6" role="group" aria-label="Basic example">
                                <a href="#add-conf"><button type="button" class="btn btn-secondary mr-2 btn-lg"></i>Add New <span class="material-icons">library_add</span></button></a>
                                <a href=""><button type="button" class="btn btn-secondary btn-lg">Delete <span class="material-icons">delete_forever</span></button></a>
                              </div>
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">CONFERENCES Stats</h4>
                                    <p class="category">Latest conference updated on 15th December, 2016</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr><th>Title</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Attendees</th>
                                            <th>Action</th>
                                        </tr></thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="/index2">ISCO</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES (83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2 mb-1">Edit</a><a href="#" class="btn btn-danger mr-2 mb-1">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">ASOGIC</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES (83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">FEMINA</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES (83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">ISCO TANY</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES(83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">ISCO TALT</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES(83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">AAA</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES(83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td><a href="/index2">III</a></td>
                                                <td>22 MAR 2022</td>
                                                <td>30 MAR 2023</td>
                                                <td>Not Active</td>
                                                <td><a href="#" class="btn btn-primary">ATTENDEES(83)</a></td>
                                                <td><a href="#" class="btn btn-info mr-2">Edit</a><a href="#" class="btn btn-danger">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- Start Button Add Conference -->
                        <!-- Button trigger modal -->
            <div class="btn-area text-center" id="add-conf"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Make New Conference</button></div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel">Add New Conference</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <!-- Start Form Add New Conf -->
                <form>
                    <div class="form-group">
                        <label for="inputAddress">Conference Title</label>
                        <input type="text" class="form-control" id="inputTitle">
                    </div>
                    <div class="form-group">
                        <label for="startDate">Start Date</label>
                        <input type="date" class="form-control" id="inputDate">
                    </div>
                    <div class="form-group">
                        <label for="endDate">End Date</label>
                        <input type="date" class="form-control" id="inputDate2">
                    </div>
                    <p>Choose Activiation Options ...</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">Active</label>
                      </div>
                    <div class="form-group float-right">
                        <button type="button" class="btn btn-danger">Reset</button>
                    </div>
                </form>
                <!-- End Form Add New Conf -->
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Sumbit</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                        <!-- End Button Add Conference -->
                        