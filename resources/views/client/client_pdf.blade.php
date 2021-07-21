
<!DOCTYPE html>
<html lang="en">

<style type="text/css">
   /* .box{
    width:600px;
    margin:0 auto;
   } */
   </style>



@include('head.head' , ['title' => " Money Exchange Officer "] )

<body>


    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
            
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
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

        @include('head.nav_header')
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('head.header1')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('sideBar.sideBarMeo')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 


   
   <section>

    <div class="content-body">
    <h3 align="center">Client Data</h3><br />
 </head>
 <body>
  <br />
  <div class="container">
   
   <div class="row">
    <div class="col-md-7" align="right">

    </div>
    <div class="col-md-5" align="right">
     <a href="{{ url('client_pdf/pdf') }}" class="btn btn-warning">Download PDF</a>
     
    </div>
   </div>
   <br />
   <div class="table-responsive">
    <table class="table table-striped table-bordered" class="table header-border">
     <thead class="table header-border">
      <tr class="table-primary">
       <th >ID</th>
       <th>Account Balance</th>
       <th>Account Type</th>
       <th>Nid Verification</th>
       <th>Account_status</th>
      </tr>
     </thead>
     <tbody>
     @foreach($customer_data as $customer)
      <tr class="table-success" >
       <td>{{ $customer->id }}</td>
       <td>{{ $customer->account_balance }}</td>
       <td>{{ $customer->account_type }}</td>
       <td>{{ $customer->nid_verification }}</td>
       <td>{{ $customer->account_status }}</td>
      </tr>
     @endforeach
     </tbody>
    </table>
   </div>
  </div>
 </body>
        

            
      
      

         
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        @include('footer.footerMeo')
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('scripts.scripts')

</body>


</html>