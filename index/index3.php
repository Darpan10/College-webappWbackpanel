<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
 <link href="index3.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    

   
  </head>
   <body>
    

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

         <!-- Optional theme -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

             <!-- Latest compiled and minified JavaScript -->
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  

             <div class="container" style="margin-top:3%;margin-left:3%">
               <div class="row">
              <div class="col-md-3">
              <img class="img-responsive" src="p4" alt="Chania">
              </div>

      <div class="col-md-3">
      <div id="text1">    
      <h3>Message from dean</h3>
      <p><?php echo $home['message']?></p>
       </div>
      </div>

  
         <div class="col-md-6">
       <img class="img-responsive" src="p5" alt="Chania">

          </div>

        </div>
         </div>




             <div class="container" style="margin-top:3%;margin-left:6%">
          <div class="row">
          <div class="col-md-4"style="overflow: hidden;">
          <img src="<?php echo $home['gpic1'];?>">
          </div>
          <div class="col-md-4"style="overflow: hidden;">
       <img src="<?php echo $home['gpic2'];?>">
          </div>
          <div class="col-md-4"style="overflow: hidden;">
       <img src="<?php echo $home['gpic3'];?>">
          </div>
           </div>
           </div>


                <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;">
          <div class="row">
          <div class="col-md-3">
          <h1></h1>
           </div>

     
       <div class="col-md-9">
          <h1>Mission, Vision, Objective and Goals of IOE</h1>
       </div>


            </div>
               </div>

 

                <div class="abcd" style="background-color:#f1f1f1;padding-top:3% ;padding-bottom:3%;margin-left: 3%;margin-right: 3%"id="card-three"> 
                
                <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;">
                 <div class="row">
                 <div class="col-md-4">
        
              <h4>1. Mission</h4>
                  <p><?php echo $home['text2']?></p>

               </div>

                  <div class="col-md-3">
          
 
                <p></p>

          
           </div>


          
           

          <div class="col-md-4">
          
 
           <h4>02. Vision</h4>
            <p><?php echo $home['text3']?></p>

          
           </div>

         






         </div>
        </div>

           <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;">
          <div class="row">
          <div class="col-md-4">
        
            <h4>03. Mission</h4>
           <p><?php echo $home['text4']?></p>

 

          
           </div>

           <div class="col-md-3">
          
 
         <p></p>

          
           </div>



          <div class="col-md-4">
          
        <h4>04. Mission</h4>
         <p><?php echo $home['text5']?></p>

          
             </div>

             </div>
             </div>

             </div>


              
             <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;">
          <div class="row">
          <div class="col-md-4">
          <h1></h1>
           </div>
            
     
       <div class="col-md-6">
          <h1>IOE focus area</h1>
       </div>
          <hr></hr>
          <hr></hr>

         </div>
         </div>
         <div class="abcd" style="background-color:#f1f1f1 ;padding-top:3% ;padding-bottom:3%;margin-left: 3%;margin-right: 3%">
              <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;"id="card-one">
          <div class="row">
          <div class="col-md-6">
          <h5> In each academic year Institute of Engineering (IOE) conducts entrance examination only those candidate who pass the entrance examination are deemed eligible for the admission. These eligible candidates can get admitted to any of the constituent and affiliated colleges according to the admission process followed by corresponding college. </h5>
           <button type="button" class="btn btn-primary">read more</button>
           </div>

     
       <div class="col-md-6">
          <h5>In each academic year Institute of Engineering (IOE) conducts entrance examination; only those candidate who pass the entrance examination are deemed eligible for the admission. These eligible candidates can get admitted to any of the constituent and affiliated colleges according to the admission process followed by corresponding college.</h5>
          <button type="button" class="btn btn-primary">read more</button>
       </div>


            </div>
       </div>
          <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;"id="card-two">
          <div class="row">
          <div class="col-md-6">
          <h5> In each academic year Institute of Engineering (IOE) conducts entrance examination only those candidate who pass the entrance examination are deemed eligible for the admission. These eligible candidates can get admitted to any of the constituent and affiliated colleges according to the admission process followed by corresponding college. </h5>
           <button type="button" class="btn btn-primary">read more</button>
           </div>

     
       <div class="col-md-6">
          <h5>In each academic year Institute of Engineering (IOE) conducts entrance examination; only those candidate who pass the entrance examination are deemed eligible for the admission. These eligible candidates can get admitted to any of the constituent and affiliated colleges according to the admission process followed by corresponding college.</h5>
          <button type="button" class="btn btn-primary">read more</button>
       </div>

              
           </div>
         </div>
       </div>
         <br>
          <br>
          <br>
         <br>
       <hr>
    
        <div class="container" style="font-family:sans-serif;;
                   text-align: justify; ">
          <div class="row">
          <div class="col-lg-8" >
          <h2> News  </h2>
          </div>
        
           <div class="col-lg-4" >
          <h2> events </h2>
          </div>
              


        </div>
           </div>



   
         <div class="container" style="margin-top:3%;font-family:proxima_nova_rgregular,Arial,sans-serif;;
                   text-align: justify;">
          <div class="row">
          <div class="col-md-2">
          
          <img class="img-responsive" src="p5" alt="Chania">


 

            16-09-2018
             <a href="#">
           <p>PhD-Entrance-Result-2075</p>

           <br></a>
           <button type="button" class="btn btn-primary">read more</button>
           </div>

 
             <div class="col-md-2">
          
          <img class="img-responsive" src="p2" alt="Chania">


 
             16-09-2018
         <a href="#">
           <p>Undergraduate - Entrance Result 2075 Published
          </p>

          <br></a>

           <button type="button" class="btn btn-primary">read more</button>
           </div>




           <div class="col-md-2">
          
          <img class="img-responsive" src="p9" alt="Chania">


 

           16-09-2018
         <a href="#">
        <p>PhD-Entrance-exam-2075</p>

             <br></a>

           <button type="button" class="btn btn-primary">read more</button>
           </div>




            <div class="col-md-6">
          
          <img class="img-responsive" src="tu" alt="Chania">


 

         16-09-2018
         <a href="#">
         <h3>1st TU-NUAA Academic Workshop</h3>
         </a>

         <p>The 1st TU-NUAA Joint Academic Workshop is a first step of academic and research cooperation between Nanjing University of Aeronautics & Astronaut…</p>




           <button type="button" class="btn btn-primary">read more</button>
           </div>
            </div>
            </div>
            <br>
            <br>
          <!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row" style="color:black;
      background-color:#cacdd0;">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">home</a>
              </li>
              <li>
                <a href="#!">events</a>
              </li>
              <li>
                <a href="#!">contact us</a>
              </li>
             
            </ul>

          </div>
          <!-- Grid column -->

          

          </div>
          <!-- Grid column -->

           </div>
           <!-- Grid row -->

          </div>
             <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
          <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
         </div>
           <!-- Copyright -->

             </footer>
              <!-- Footer -->
   
         <script src="../../js/jquery.js"></script>
          <script>
          $(document).ready (function(){
          $(window).scroll (function(){
            var positiontop=$(document).scrollTop();
                console.log(positiontop);
                if((positiontop>800) && (positiontop<1000)){
                  $('#card-one').addClass('animated bounceInLeft')
                }
                 if((positiontop>800) && (positiontop<1000)){
                  $('#card-two').addClass('animated bounceInRight')
                   }
                  if((positiontop>300) && (positiontop<1000)){
                  $('#card-three').addClass('animated bounceInRight')
                  }
                  if((positiontop>300) && (positiontop<1000)){
                  $('#card-four').addClass('animated bounceInRight')

                }
              
            
              

           });
        });
           </script>







   </body>
</html>
   





































































</body>



</body>
</html>
