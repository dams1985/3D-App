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
                    <a id="navAbout" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="About Web 3D Applications" data-content="3D Apps is a final year and postgraduate module ...">About</a>
                  </li>
              
                  <!-- Dropdown -->
                  <li class="nav-item">
                      <a id="navModels" class="nav-link"  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" title="X3D Models" data-content="There are three X3D models: Coke, Sprite and Pepper">Models</a>
                  </li>
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
                            <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Find out more ...</a>                 
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
                            <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Find out more ...</a>
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
                            <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responsive">Find out more ...</a>
                          </div>
                      </div>
                  </div>
            </div>
          </div>  <!-- End home page contents-->

          <div id="about" style="display:none;">
            
                <section class="about-me py-5">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-md-8">
                          <div class="card">
                            <div class="card-header bg-success text-white">
                              <h3>About Me</h3>
                            </div>
                            <div class="card-body">
                              <h4>Ademola</h4>
                              <p>Email: <a href="mailto:aa2998@sussex.ac.uk">aa2998@sussex.ac.uk</a></p>
                               <p>
                Welcome to my world of 3D creativity! I am passionate about bringing virtual experiences to life. My web app lets you interact with detailed 3D models of Coke, Pepper, and Sprite, all meticulously designed using Blender. Dive in and explore these vibrant models, each crafted to offer a unique and immersive experience. 
              </p>
                            </div>
                          </div>
                        </div>
                      </div>
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
                  <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                      <li class="nav-item">
                        <a id="navCoke" class="nav-link active" href="#">X3D Models</a>
                      </li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <!-- X3D Models -->
                    <div>
                        <div id="x3dModelTitle_coke" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_sprite" class="card-title drinksText"></div>
                        <div id="x3dModelTitle_pepper" class="card-title drinksText"></div>

                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="cokeScene(); cokeDescription();">Coke</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUp="spriteScene(); spriteDescription();">Sprite</button>
                        <button type="button" class="btn btn-success btn-responsive" onMouseUP="pepperScene(); pepperDescription();">Pepper</button>
                        
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
                        <div id="x3dCreationMethod_coke" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_sprite" class="card-text drinksText"></div>
                        <div id="x3dCreationMethod_pepper" class="card-text drinksText"></div>
                    </div>


                  </div>
                </div>


                 <!-- Row to hold the interaction panels -->
          <div id="interaction" class="row" style="display:none;">
                <!-- Column for the camera view controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link active dropdown-toggle" href_="#" id="navbardrop" data-toggle="dropdown">Cameras</a>
                             <!--  <div class="dropdown-menu">
                                <button class="dropdown-item"  onclick="cameraFront();">Front</button>
                                <button class="dropdown-item" onclick="cameraBack();">Back</button>
                                <button class="dropdown-item" onclick="cameraLeft();">Left</button>
                                <button class="dropdown-item" onclick="cameraRight();">Right</button>
                                <button class="dropdown-item"  onclick="cameraTop();">Top</button>
                                <button class="dropdown-item"  onclick="cameraBottom();">Bottom</button>
                              </div> -->
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dCamera_Subtitle drinksText">
                            <h3>Camera Views</h3>
                          </div>                            
                          <button class="btn btn-success btn-responsive" onclick="cameraFront();">Default</button>
                          <button class="btn btn-primary btn-responsive" onclick="cameraBack();">Back</button>
                          <button class="btn btn-secondary btn-responsive" onclick="cameraLeft();">Left</button>
                          <button class="btn btn-secondary btn-responsive" onclick="cameraRight();">Right</button>
                          <button class="btn btn-outline-dark disabled btn-responsive">Off</button>

                          <div class="card-text x3dCameraDescription drinksText">
                            <p>These buttons select a limited range of X3D model viewpoints, use the dropdown menu for more camera views</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the animation controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Animation</a>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dAnimationSubtitle drinksText">
                            <h3>Animation Options</h3>
                          </div>
                          <button class="btn btn-outline-light btn-responsive" onclick="spin('x');">RotX</button>
                          <button class="btn btn-outline-light btn-responsive" onclick="spin('y');">RotY</button>
                          <button class="btn btn-outline-light btn-responsive" onclick="spin('z');">RotZ</button>
                          <button class="btn btn-outline-dark btn-responsive" onclick="stopRotation();">Stop</button>
                          <div class="card-text x3dAnimationDescription drinksText">
                              <p>These buttons select a range of X3D animation options</p>
                          </div>
                        </div>
                      </div>
                </div>
                <!-- Column for the render type and lighting controls -->
                <div class="col-sm-4">
                    <div class="card text-left">
                        <div class="card-header">
                          <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                              <a class="nav-link active dropdown-toggle" href_="#" id="navbardrop" data-toggle_="dropdown" >Render</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href_="#" onclick="wireFrame();">Polygon</a>
                                <a class="dropdown-item" href_="#" onclick="wireFrame();">Wireframe</a>
                                <a class="dropdown-item" href_="#" onclick="wireFrame();">Vertex</a>
                              </div>
                            </li>
                          <!-- Dropdown nav-tab -->
                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" href_="#" id="navbardrop" data-toggle="dropdown">Lights</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href_="#" onclick="headLight();">Default</a>
                                <a class="dropdown-item" href_="#" onclick="omniLight();">Onmi On/Off</a>
                                <a class="dropdown-item" href_="#" onclick="targetLight();">Target On/Off</a>
                                <a class="dropdown-item" href_="#" onclick="headLight();">Headlight On/Off</a>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card-body">
                          <div class="card-Title x3dRendersubtitle drinksText">
                            <h3>Render and Lighting Options</h3>
                          </div>
                          <button class="btn btn-success btn-responsive" onclick="wireFrame();">Poly</button>
                          <button class="btn btn-secondary btn-responsive" onclick="wireFrame();">Wire</button>
                          <button class="btn btn-success btn-responsive" onclick="headLight();">Headlight</button>
                          <button class="btn btn-outline-dark btn-responsive" onclick="wireFrame();">Default</button>
                          <div class="card-text x3dRenderDescription drinksText">
                              <p>These buttons select a limited number of render and lighting options; use the dropdown menus for more options</p>
                          </div>
                        </div>
                      </div>
                </div>


                  <!-- Row to hold one card to hold the coke descriptive text, etc.-->
          <div id="cokeDescription" class="row" style="display:none;">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-body">
                          <div id="title_coke" class="card-title drinksText"></div>
                          <div id="subTitle_coke" class="card-subtitle drinksText"></div>
                          <div id="description_coke" class="card-text drinksText"></div>   
                        <a href="http://www.coca-cola.co.uk/drinks/coca-cola/coca-cola" class="btn btn-primary btn-responsive">Visit Coke</a>                 
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
                        <a href="http://www.coca-cola.co.uk/drinks/sprite/sprite" class="btn btn-primary btn-responsive">Visit Sprite</a>                 
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
                        <a href="http://www.coca-cola.co.uk/drinks/dr-pepper/dr-pepper" class="btn btn-primary btn-responisve">Visit Pepper.</a>                 
                      </div>
                  </div>
              </div>
          </div> <!-- End pepper description contents -->

          </div> <!-- End row for the interaction panels -->


              </div>

              <!-- 3D image gallery -->
              <div class="col-sm-4">
                <div class="card text-left">
                    <div class="card-header gallery-header">
                      <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Gallery</a>
                        </li>
                    </div>
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
                  <p><span class="align-baseline">&copy 2024 3D Apps | <a href="javascript:changeLook()">Restyle</a> | <a href="javascript:changeBack()">Reset</a></span></p>
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
                  <p>Ademola,  Email: aa2998@sussex.ac.uk</p>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
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