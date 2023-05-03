<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Jassa - Crypto Admin Dashboard">
	<meta property="og:title" content="Jassa - Crypto Admin Dashboard">
	<meta property="og:description" content="Jassa - Crypto Admin Dashboard">

	<meta name="format-detection" content="telephone=no">
    <title>Gestion de contact</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Datatable -->
    <link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('header-up')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				<!-- Add Project -->
				<div class="modal fade" id="addProjectSidebar">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Create Project</h5>
								<button type="button" class="close" data-dismiss="modal"><span>&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label class="text-black font-w500">Project Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Deadline</label>
										<input type="date" class="form-control">
									</div>
									<div class="form-group">
										<label class="text-black font-w500">Client Name</label>
										<input type="text" class="form-control">
									</div>
									<div class="form-group">
										<button type="button" class="btn btn-primary">CREATE</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact list</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            @if(session()->has("success"))
                            <div class="alert alert-success">
                            <h6>{{ session()->get("success") }}</h6>

                            </div>
                            @endif

                            @if ($errors->any())
                               <div class="alert alert-danger">
                                  <ul>
                                  @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                   @endforeach
                                   </ul>
                                </div>
                            @endif
                            <div class="card-header">
                                <button type="button" class="btn light btn-light"  data-toggle="modal" data-target="#createPublisherModal"><i class="fa fa-plus text-primary mr-2"></i><h5 class="modal-title">New contact</h5></button>
                            </div>


                    <!-- Modal create a contact -->

                            <div class="modal fade" id="createPublisherModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">New contact </h5>
                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="comment-form" action="{{route('contact.store')}}" method="post">
                                             @csrf

                                                <div class="row">


                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td>

                                                                    <div class="form-group">
                                                                        <label class="text-black font-w600">Veillez Entrez votre Pseudo<span class="required">*</span></label>
                                                                        <input type="text" class="form-control" value="" name="pseudo" placeholder="yao roland">
                                                                    </div>


                                                            </td>
                                                            <td style="padding: 10px;">

                                                                <div class="form-group">
                                                                    <label class="text-black font-w600">Entrez votre Contact<span class="required">*</span></label>
                                                                    <input type="text" class="form-control" value="" placeholder="01 41 77 24 60" name="contact1">
                                                                </div>

                                                        </td>
                                                        <td >

                                                                <div class="form-group">
                                                                    <label class="text-black font-w600">Entrez votre Deuxième contact<span class="required"></span></label>
                                                                    <input type="text" class="form-control" value="" placeholder="07 57 45 69 56" name="contact2">
                                                                </div>

                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>



                                                    <div class="col-lg-12">
                                                        <div class="form-group mb-0">
                                                            <input type="submit" value="Register" class="submit btn btn-primary" name="submit">
                                                        </div>
                                                       <div style="padding-top:10px;"> <p style="color: red;"><b style="color: black">N.B:</b><i> Laisser la case vide si vous n'avez pas un deuxième contact</i></p></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                      <!-- End modal creat a contact-->




                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th >Pseudo</th>
                                                  <th>Contact1</th>
                                                  <th>Contact2</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach ($getContacts as $getContact)


                                                <td>{{$getContact->id}}</td>
                                                <td>{{$getContact->Pseudo}}</td>
                                                <td>{{$getContact->Contact}}</td>
                                                <td>{{$getContact->Contact2 == "" ? $v : $getContact->Contact2}}</td>
                                                <td>
													<div class="d-flex">
														<a href="{{ route('contact.edit', $getContact->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>

                                                        <form action=" {{ route('contact.destroy', $getContact->id)}}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                        </form>
													</div>
												</td>
                                            </tr>

                                            @endforeach




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &copy; Developed by <a href="../index.html" target="_blank">Manfaily roland yao</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('vendor/global/global.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <!-- Datatable -->
    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
    <script src="{{asset('js/custom.min.js')}}"></script>
	<script src="{{asset('js/deznav-init.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    <script src="{{asset('js/styleSwitcher.js')}}"></script>
</body>
</html>
