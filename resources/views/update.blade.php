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
    <title>Gestion de contact </title>
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

                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span>Datatable</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item active"><a href="{{ route('contact.create') }}">Retour</a></li>
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


                            <div class="container h-100">
                                <div class="row justify-content-center h-100 align-items-center">
                                    <div class="col-md-6">
                                        <div class="authincation-content">
                                            <div class="row no-gutters">
                                                <div class="col-xl-12">

                                                    <div class="auth-form">

                                                        <h4 class="text-center mb-4">Modifier un contact</h4>
                                                        <form class="comment-form" action="{{route('contact.update',$contacts->id)}}" method="post">
                                                            @csrf
                                                            @method('PATCH')

                                                               <div class="row">


                                                                   <div class="col-lg-6">
                                                                       <div class="form-group">
                                                                           <label class="text-black font-w600">Entrez votre Pseudo<span class="required">*</span></label>
                                                                           <input type="text" class="form-control" value="{{$contacts->Pseudo}}" name="pseudo" placeholder="yao roland">
                                                                       </div>
                                                                   </div>
                                                                   <div class="col-lg-6">
                                                                       <div class="form-group">
                                                                           <label class="text-black font-w600">Entrez votre Contact<span class="required">*</span></label>
                                                                           <input type="text" class="form-control" value="{{$contacts->Contact}}"  name="contact1">
                                                                       </div>
                                                                   </div>

                                                                   <div class="col-lg-6">
                                                                       <div class="form-group">
                                                                           <label class="text-black font-w600">Entrez votre deuxième contact si vous en avez<span class="required">*</span></label>
                                                                           <input type="text"  class="form-control" value="{{$contacts->Contact2 == "" ? "aucun" : $contacts->Contact2 }}" name="contact2">
                                                                       </div>
                                                                   </div>



                                                                   <div class="col-lg-12">
                                                                       <div class="form-group mb-0">
                                                                           <input type="submit" value="Modifier" class="submit btn btn-primary" name="submit">
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
