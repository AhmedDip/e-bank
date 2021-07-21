<!DOCTYPE html>
<html lang="en">
<style>
section{
    margin:50px;
}

h5{
    color:red;
}

h2{
    text-align:center;
    background-color:#5f63f0;
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

   <h2>Edit Problem</h2>

    <div class="content-body">

    <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form  method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="id">Problem Request Id <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text"  id="id" name="id" value="{{$review['id']}}">
                                            </div>
                                        </div>

                                        <div>

                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="request_type">Request Type<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <select class="form-control" id="request_type" name="request_type" value="{{$review['request_type']}}">
                                                    <option value="">Select Request Type</option>
                                                    <option value="Taka To Dollar">Taka To Dollar</option>
                                                    <option value="Dollar To Taka">Dollar To Taka</option>
                                                    <option value="Taka To Rupee">Taka To Rupee</option>
                                                    <option value="Rupee to Taka"> Rupee to Taka</option>
                                                    <option value="Taka To Pound">Taka To Pound </option>
                                                    <option value="Pound To Taka"> Pound To Taka</option>

                                                </select>
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="user_name">User Name<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="user_name" name="user_name" value="{{$review['user_name']}}">
                                            </div>
                                        </div>

                                        <div>

                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="description">Problem Description<span class="text-danger">*</span>
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="description" name="description" rows="2" value="{{$review['description']}}">{{$review['description']}}</textarea>
                                        </div>
                                    </div>
                                    </div>

                                    <div>

                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label" for="request_type">Status<span class="text-danger">*</span>
                            </label>
                            <div class="col-lg-6">
                                <select class="form-control" id="status" name="status" value="{{$review['status']}}">
                                    <option value="">Select Status</option>
                                    <option value="Accepted">Accepted</option>
                                    <option value="Pending">Pending</option>
                                    <option value="Cancelled">Cancelled</option>
                                    <option value="Rejected"> Rejected</option>
                                

                                </select>
                        </div>
                        </div>
                                        <br>  
                                        <div>
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" name="update" value="Update" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        </div>


                                        @foreach ($errors->all() as $err)
  
                                       <h5> {{$err}} </h5>  <br>

                                        @endforeach
                                        
                                    </form>
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