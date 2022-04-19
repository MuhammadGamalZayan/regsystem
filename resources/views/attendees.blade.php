@extends('layouts.header')
<div class="wrapper" style="overflow: hidden;">


<div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="img/chez logo.jpeg" class="img-fluid"/><span>Perfect Touch Events</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li  class="active">
                    <a href="index" class="dashboard"><i class="material-icons">dashboard</i><span>(Conferences)</span></a>
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
					<div class="row ">
                        <div class="col-12">
                            <div class="card" style="min-height: 485px">
                                <section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
                                    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                                      <div class="container h-100">
                                        <div class="row d-flex justify-content-center align-items-center h-100">
                                          <div class="col-10">
                                            <div class="card" style="border-radius: 15px;">
                                              <div class="card-body p-5">
                                                <h2 class="text-uppercase text-center" style="margin-bottom: 22px;">Add New Attendee</h2>
                                                <form>
                                                  <div class="form-outline mb-2" style="border-radius: 15px;">
                                                      <!-- <label class="form-label" for="name">Name</label> -->
                                                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Name"/>
                                                  </div>
                                                  <div class="form-outline mb-2" style="border-radius: 15px;">
                                                      <!-- <label class="form-label" for="description">Description</label> -->
                                                    <input type="text" id="description" name="description" class="form-control form-control-lg" placeholder="Description" />
                                                  </div>
                                                  <div class="form-outline mb-2">
                                                    <!-- <label class="form-label" for="attendee">Attendee Type (S,F,...)</label> -->
                                                  <input type="text" id="attendee" name="attendee" class="form-control form-control-lg" placeholder="Attendee Type (S,F,...)"/>
                                                </div>
                                                  <div class="form-outline mb-2">
                                                      <!-- <label class="form-label" for="email">Email Address</label> -->
                                                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email Address"/>
                                                  </div>
                                                  <div class="form-outline mb-2">
                                                      <!-- <label class="form-label" for="form3Example1cg">Phone</label> -->
                                                    <input type="phone" id="phone" name="phone" class="form-control form-control-lg" placeholder="Phone"/>
                                                  </div>
                                  
                                                  <div class="form-outline mb-2">
                                                      <!-- <label class="form-label" for="affliation">Affliation</label> -->
                                                    <input type="text" id="affliation" name="affliation" class="form-control form-control-lg" placeholder="Affliation" />
                                                  </div>
                                                  <!-- <div class="form-check d-flex justify-content-center mb-5">
                                                    <input
                                                      class="form-check-input me-2"
                                                      type="checkbox"
                                                      value=""
                                                      id="form2Example3cg"
                                                    />
                                                    <label class="form-check-label" for="form2Example3g">
                                                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                                    </label>
                                                  </div> -->
                                                  <div class="d-flex justify-content-center">
                                                    <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body col-5 mt-5">Register</button>
                                                  </div>
                                                  <!-- <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p> -->
                                                </form>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </section>
                                </div>