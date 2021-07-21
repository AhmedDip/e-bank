<!DOCTYPE html>
<html lang="en">
<style>
section{
    margin:50px;
}

h2{
    text-align:50px;
}

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
   <section>

    <div class="content-body">

    <h1>Contact With Manager</h1>

    <form id="product-form" action="{{url('/contact/store')}}" method="POST">
    
    @csrf

    <div class="form-group">
        <label for="product">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
    </div>

    <div class="form-group">
        <label for="product">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <label for="product">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
    </div>

    <div class="form-group">
        <label for="product">Message</label>
        <textarea class="form-control" rows="5" id="message" name="message" name="message"></textarea>
    </div>

    <div class="form-group">
        <input class="btn btn-lg btn-primary" id="submit" type="submit" value="Send" name="submit" />
    </div>

</form>
        

            
      
      

         
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
    
    
  