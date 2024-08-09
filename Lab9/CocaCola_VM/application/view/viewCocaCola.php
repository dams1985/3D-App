<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../application/css/bootstrap.css" crossorigin="anonymous">

    <!-- X3DOM.css -->
    <link rel='stylesheet' type='text/css' href='../application/css/x3dom.css'>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../application/css/custom.css" crossorigin="anonymous">

      <!-- Lets have some fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <!-- fancyBox3 -->
    <link rel="stylesheet" type="text/css" href="../application/css/jquery.fancybox.min.css">
    
    <title>Lab 9 MVC Web 3D Applications</title>

<style >
  
  .gallery .img-thumbnail {
    background-color: rgba(255, 255, 255, 0.0);
    padding: 0.25rem;
    margin: 2px;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    max-width: 13%;

  }

      .navbar_coca_cola {
        background-color: #ea0a34 !important;

      }

          body {
        background-color: #f3f3e9 !important;
    }

      .navbar_coca_cola .navbar-nav .nav-item > .active, .navbar_coca_cola .navbar-nav > .active > a:focus {
    color: #760003;
    background-color: #ffe233;

  }

  .card{

    background-color: #e7a2af52 !important;
  }

     .video-banner {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #000;
        }
        .video-banner iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (min-width: 992px) {

    #main_text {
        float: right;
        margin-top: 10%;
    }
}

</style>


  </head>
  <body id="bodyColor">
      <!-- The 3D App header -->
      <nav id="headerColor" class="navbar sticky-top navbar-expand-sm navbar_coca_cola">
      
            <!-- Brand -->
               <div class="logo">
          <a class="navbar-brand" href="index.html">
          <h1>1</h1>
          <h1>oca</h1>
          <h2>Cola</h2>
          <h3>Journey</h3>
          <p>Refreshing the world, one story at a time</p>
          </a>
        </div>

            <!-- Navbar Menu Icon -->
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- link Menu Icon button to the links class navbar-collapse selector] -->
            <div class="collapse navbar-collapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a id="navHome" class="nav-link active" href="#">Home</a>
                  </li>

                    <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                  </li>

                  <li class="nav-item">
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                  </li>
              
                  <!-- Dropdown -->
                
                  <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                  </li>
                </ul>
            </div>
      </nav>

      <!-- This is the main contents of the page, it has a background image across 1 column, followed by three columns holding cards in a row for the 3 images and associated texts
      -->
      <div class="container-fluid">

          <!-- This is the home page contents -->
          <div id="home" class="main_contents">
            <!-- A row for the main 3D image theme — could make this a Jubotron with a carousel -->


        <div class="row">
              <div class="col-sm-12">
                  <div id="main_3d_image">
                      <div id="main_text" class="col-xs-12 col-sm-4">
                        <div id="title_home"></div>
                        <div id="subTitle_home"></div>
                        <div id="description_home"></div>
                      </div> 

                      <div id="main_text" class="col-xs-12 col-sm-4">

                        <div class="container-fluid p-0">
    <div class="video-banner">
        <iframe src="https://www.youtube.com/embed/AbILPD3ZsZY?autoplay=1&mute=1&loop=1&playlist=AbILPD3ZsZY&rel=0&showinfo=0"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
    </div>
</div>
                      </div> 

                    </div>
              </div>
            </div> 


  

            <!-- A row to hold three cards for the Coke, Sprite and Pepper contents -->
            <div class="row">
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/coke.png" data-fancybox data-caption="My 3D Coke Can Render">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/Coke.png" alt="Coca Cola">
                          </a>
                          <div class="card-body">
                                <div id="title_left" class="card-title drinksText"></div>
                                <div id="subTitle_left" class="card-subtitle drinksText"></div>
                                <div id="description_left" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-dark btn-responsive">Find out more ...</a>                 
                          </div>
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card">
                          <a href="../application/assets/images/renderImages/sprite.png" data-fancybox data-caption="My 3D Sprite Bottle Render" class="img-narrow">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/sprite.jpg" alt="Sprite">
                          </a>
                          <div class="card-body">
                            <div id="title_centre" class="card-title drinksText"></div>
                            <div id="subTitle_centre" class="card-subtitle drinksText"></div>
                            <div id="description_centre" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-success btn-responsive">Find out more ...</a>
                          </div>
                          
                      </div>
                  </div>
                  
                  <div class="col-sm-4">
                      <div class="card img-narrow">
                          <a href="../application/assets/images/renderImages/pepper.png" data-fancybox data-caption="My 3D Pepper Cup Render" class="thumbnail">
                            <img class="card-img-top img-fluid img-thumbnail" src="../application/assets/images/pepper.jpg" alt="Dr Pepper">
                          </a>
                          <div class="card-body">
                            <div id="title_right" class="card-title drinksText"></div>
                            <div id="subTitle_right" class="card-subtitle drinksText"></div>
                            <div id="description_right" class="card-text drinksText"></div>   
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-danger btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <div id="about" style="display:none;">

                <section class="about-me py-5 mx-4">

                   
                              <h3 class="text-center">About Me</h3>
                           
                            <div class="card p-3">

                              <h4>282546 Adegoke Adedamola</h4>
                              <p>Email: <a href="mailto:aa2998@sussex.ac.uk">aa2998@sussex.ac.uk</a></p>
                               <p>
               Welcome to my world of 3D creativity! I am passionate about bringing virtual experiences to life. My web app lets you interact with detailed 3D models of Coke, Pepper, and Sprite, all meticulously designed using Blender. Dive in and explore these vibrant models, each crafted to offer a unique and immersive experience. </p>

<p>My journey into 3D modeling began as a fascination with the digital landscapes and characters in video games. Over the years, this interest evolved into a full-fledged passion for creating my own virtual worlds. Blender, with its powerful suite of tools, became my go-to platform for bringing my imagination to life. Each model you see on my web app is the result of countless hours of meticulous work, from initial concept sketches to the final rendered piece. </p>

<p>Creating 3D models is not just about technical skills; it’s about storytelling. Each model of Coke, Pepper, and Sprite tells a story of creativity and precision. The detailed textures, lifelike lighting, and intricate designs aim to draw you into a new reality. I strive to make every interaction with these models a captivating experience, where you can appreciate the nuances of design and the effort that goes into making each element stand out.</p>

<p>Beyond the technical aspects, what drives me is the opportunity to share these virtual creations with others. My web app is designed to be more than just a showcase; it’s an interactive platform where you can engage with the models, explore their features, and perhaps find inspiration for your own creative endeavors. Whether you're a fellow 3D artist, a digital art enthusiast, or simply someone who appreciates the beauty of virtual design, I invite you to explore my work and join me in this exciting journey of 3D creativity.
              </p>

            </div>
                          
                     
                  </section>

          </div>  

          <!-- This is the content for X3D models and 3D Image Gallery -->
          <div id="models" class="main_contents" style="display:none;">
            <!-- Row to hold two cards to hold 1) the X3D model, and 2) the gallery-->
            <div class="row">
              <!-- X3D Model -->
              <div class="col-sm-8">
                <div class="card text-left">
                  
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-danger btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-warning btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
                        <!-- Place the X3D code here -->
                        <div class="model3D">

                           <x3d id="wire" style="width: 100%; height: 100%;">
                            <scene>
                                <Switch whichChoice="0" id='SceneSwitch'>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/coke_can.x3d" > </inline>
                                    </transform>

                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/sprite.x3d"> </inline>
                                    </transform>
                                    <transform>
                                        <inline nameSpaceName="model" mapDEFToID="true" onclick="animateModel();" url="../application/assets/x3d/pepper.x3d"> </inline>
                                    </transform>
                                </Switch>
                            </scene>
                          </x3d>
                        </div> 
                      <!--   <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div> -->
                    </div>


                  </div>
                </div>


                 <!-- Row to hold the interaction panels -->
         

              </div>



               <div id="interaction" class="col-sm-4 row" style="display:none;">

                   <!-- Column for the animation controls -->
                <div class="col-sm-12">
                    <div class="card text-left">
                        
                        <div class="card-body">

                          <div class="">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <button class="btn btn-success btn-responsive" onclick="spin('x');">RotX</button>
                          <button class="btn btn-primary btn-responsive" onclick="spin('y');">RotY</button>
                          <button class="btn btn-info btn-responsive" onclick="spin('z');">RotZ</button>
                          <button class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</button>
                         <!--  <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div> -->
                        </div>

                         <div class="card-body_ mt-3">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                         
                        <!--   <button class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</button> -->
                          <button class="btn btn-primary btn-responsive" onclick="cameraLeft();">Left</button>
                          <button class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</button>

                           <button class="btn btn-info btn-responsive" onclick="cameraTop();">Top</button>
                          <button class="btn btn-success btn-responsive" onclick="cameraBottom();">Bottom</button>

                          <button class="btn btn-outline-dark disabled btn-responsive" onclick="cameraFront();">Default</button>
                          <!--  <button class="btn btn-success btn-responsive" onclick="cameraFront();">Default</button> -->

                         <!--  <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div> -->

                        </div>




                      
                        <div class="card-body_ mt-3">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render Options</h3>
                          </div>
                          <button class="btn btn-success btn-responsive" onclick="wireFrame();">Poly</button>
                          <button class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</button>
                          <button class="btn btn-outline-dark btn-responsive" onclick="wireFrame();">Default</button>
                        </div>


                         <div class="card-body_ mt-3">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Lighting Options</h3>
                          </div>
                         
                           <button class="btn btn-secondary btn-responsive" onclick="omniLight();">Onmi On/Off</button>
                           <button class="btn btn-success btn-responsive" onclick="omniLight();">Target On/Off</button>
                           <button class="btn btn-outline-dark btn-responsive" onclick="omniLight();">Headlight On/Off</button>
                        
                        </div>
                     
                     


                        </div>
                      </div>
                </div>



                       <div class="col-sm-12">
                  <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-danger btn-responsive">Visit Coke</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End coke description contents -->

          <!-- Row to hold one card to hold the sprite descriptive text, etc.-->
          <div id="spriteDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_sprite" class="card-title drinksText"></div>
                          <div id="subTitle_sprite" class="card-subtitle drinksText"></div>
                          <div id="description_sprite" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-success btn-responsive">Visit Sprite</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End sprite description contents -->

          <!-- Row to hold one card to hold the pepper descriptive text, etc.-->
          <div id="pepperDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                        <div id="title_pepper" class="card-title drinksText"></div>
                        <div id="subTitle_pepper" class="card-subtitle drinksText"></div>
                        <div id="description_pepper" class="card-text drinksText"></div>  
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-warning btn-responisve">Visit Pepper</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->

        </div>

                
             
             
             

          </div> <!-- End row for the interaction panels -->


       



          <!-- 3D image gallery -->
              <div class="col">
                <div class="card text-left">
                    
                    <div class="card-body">
                        <div class="card-title title_gallery drinksText"></div>
                        <div class="gallery" id="gallery"></div>
                        <div class="card-text description_gallery drinksText"></div>
                    </div>
                </div> <!-- End gallery card -->
              </div> <!-- End gallery column -->



             




            </div> <!-- End row for X3D Model and Gallery -->
          </div> 

         
        

      </div> <!-- End 3D App SPA Contents -->
      
      <nav id="footerColor" class="navbar navbar-expand-sm footer">
          <div class="container-fluid">   
              <div class="navbar-text float-left copyright">
                  <p><span class="align-baseline">&copy 2024 3D Apps  | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a> </span></p>
              </div>
              <div class="navbar-text float-right social">
                  <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                  <a href="#"><i class="fab fa-google-plus fa-2x"></i></a>
                  <a href="#"><i class="fab fa-github-square fa-2x"></i></a>
              </div>
          </div>
      </nav> 

      <!-- My 3D App modals -->
      <!-- Contact modal -->
      <!-- The Modal -->
      <div class="modal fade" id="contactModal">
          <div class="modal-dialog">
            <div class="modal-content">
            
                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title">3D App Contact Details</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">
                  <p>282546 Adegoke Adedamola,  Email: aa2998@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
          </div>
      </div>

      <!-- JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../application/js/jquery-3.2.1.js" crossorigin="anonymous"></script>
      <script src="../application/js/popper.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/bootstrap.min.js" crossorigin="anonymous"></script>
      <script src="../application/js/fontawesome-all.min.js"></script>
      <!-- Custom JavaScript code for your 3d App -->
      <script src="../application/js/custom.js" crossorigin="anonymous"></script>
      <!-- JavaScript to swap for SPA and restyle -->
      <script src="../application/js/swap_restyle.js"></script>
      <!-- Include the x3dom JavaScript -->
      <script type='text/javascript' src='../application/js/x3dom-1.7.2/x3dom.js'></script>
      <!-- JavaScript and PHP based Gallery generator  -->
      <script type="text/javascript" src="../application/js/gallery_generator.js"></script>
      <!-- JQuery code to get content data from a backend JSON file -->
      <script src="../application/js/getJsonData.js"></script>
      <!-- JavaScript model interactions -->
      <script src="../application/js/modelInteractions.js?<?php echo date('YmdHis'); ?>"></script>
      <!--fancyBox3 => http://fancyapps.com/fancybox/3/ -->
      <script src="../application/js/jquery.fancybox.min.js"></script>
  </body>
</html>