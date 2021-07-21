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

    <form action="" method="post">
        @csrf
            <label for=""><h4>Select Your Currency</h4></label> <br>
            <select name="currency">
                <option data-toggle="dropdown" selected hidden >Select Your Currency</option>
                <option value="Dollar To Taka">Dollar To Taka</option>
                <option value="Taka To Dollar">Taka To Dollar</option>
                <option value="Euro To Taka">Euro To Taka</option>
                <option value="Taka To Euro">Taka To Euro</option>
                <option value="British Pound To Taka">British Pound To Taka</option>
                <option value="Taka To British Pound">Taka To British Pound</option>
                <option value="Rupee To Taka">Rupee To Taka</option>
                <option value="Taka To Rupee">Taka To Rupee</option>
                <option value="Saudi Riyal To Taka">Saudi Riyal To Taka</option>
                <option value="Taka To Saudi Riyal">Taka To Saudi Riyal</option>
            </select> <br><br>
            <label for=""><h4>Enter Amount</h4></label> <br>
            <input type="number" name="amount" placeholder="Enter Amount"  required><br><br>
            <input type="submit" class="btn btn-primary" name="submit" value="Convert">
            <h2>
                <?php
                    if(isset($_POST['submit'])){
                        $currency=$_POST['currency'];
                        $amount=$_POST['amount'];
                        
                        if($currency=='Dollar To Taka'){
                            //1 Dollar = 84.85 tk
                            echo $amount." Dollar "."= ";
                            echo $amount*84.85;
                            echo " Taka";
                        }
                        if($currency=='Taka To Dollar'){
                            // 1 taka = 1 / 84.85 Dollar

                            echo $amount." Taka "."= ";
                            echo $amount/ 84.85;
                            echo " Dollar";

                        }
                        if($currency=='Euro To Taka'){
                            // 1 Euro = 102.10 Taka

                            echo $amount." Euro "."= ";
                            echo $amount*102.10;
                            echo " Taka";
                        }
                        if($currency=='Taka To Euro'){
                            // 1 Taka = 1/102.10 Euro

                            echo $amount." Taka "."= ";
                            echo $amount/102.10;
                            echo " Euro";
                        }
                        if($currency=='British Pound To Taka'){
                            // 1 Pound = 115.70 Taka

                            echo $amount." Pound "."= ";
                            echo $amount*115.70;
                            echo " Taka";
                        }
                        if($currency=='Taka To British Pound'){
                            // 1 taka = 1/115.70 Pound

                            echo $amount." Taka "."= ";
                            echo $amount/115.70;
                            echo " Pound";
                        }
                        if($currency=='Rupee To Taka'){
                           

                            echo $amount." Rupee "."= ";
                            echo $amount*1.14;
                            echo " Taka";
                        }
                        if($currency=='Taka To Rupee'){
                          

                            echo $amount." Taka "."= ";
                            echo $amount/1.14;
                            echo " Rupee";
                        }
			//We can add more currencies like these
                        
                    }
               
                ?>
            </h2>
         
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



