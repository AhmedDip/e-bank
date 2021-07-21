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
        

            
        <div class="col-lg-10">
            <div class="card">
            <div class="card-body">
                <h4 class="card-title">Latest Market Rate</h4>
                <div class="table-responsive">
                <table class="table header-border">

        <table class="table header-border">
                <tr class="table-success">
                    <th> ID </th>
                    <th>Foreign Currency</th>
                    <th>Bangladeshi Currency </th> 
                    <th>Convert Currency</th>              
                 
                </tr>

            @foreach ($rate as $a) 
            <tr class="table-primary">
                <td >{{$a['id']}}</td>
                <td>{{$a['fc']}}</td>
                <td>{{$a['bc']}}</td>
    <td><button type="submit" class="btn btn-primary">Convert</button></td>    
                                            
                
         
            </tr>
            @endforeach

            </table>
                    
   </section>     
      

         
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