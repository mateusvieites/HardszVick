<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/functions.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>HardszVick</title>
    

    <style>
        /* @media (min-width: 1000px)
        (max-width: 1000px) */
        
        h1,h2{
            font-family: 'Pacifico', cursive;
            font-family: 'Permanent Marker', cursive;
            
        }
        #homeBox div h1,h2{
            color: aqua;
            text-shadow: 
               -1px -1px 0px black, 
               -1px 1px 0px black,                    
                1px -1px 0px black,                  
                1px 0px 0px black;
        }
        .row div img{
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        #boxImgs div p{
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
        .row h1{
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
        #homeBox{
            background-image: url("./images/backgrounds/home.jpg");
            background-color: #cccccc;
        }
        #homeBox img{
            border-radius: 50%;
            border-color: black;  
            border-style: solid;
            border-width: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        #boxImgs{
            border-radius: 2%;
            border-color: black;  
            border-style: solid;
            border-width: 10px;
            background-color: #FFFFFF;
        }
        body{
            /* background-color: rgb(51, 51, 51); */
            background-color: #ffffff;
        }
        #boxAboutMe{
            border-radius: 2%;
            border-color: black;  
            border-style: solid;
            border-width: 2px;
            background-color: #FFFFFF;
        }
        
    </style>
    
    <?php 
       function filesName($path)
       {
            $diretorio = dir($path);
            $files = array();
            while($arquivo = $diretorio -> read()){
                if (($arquivo != ".") and ($arquivo != "..")){
                    array_push($files,$arquivo);
                }
            }
            $diretorio -> close();
            return $files;
       }
    ?>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" id="btnSubmit" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    
<div class="container-fluid overflow-hidden">
    <div class="row vh-100 overflow-auto" >
        <div class="col-12 col-sm-2 col-xl-2 px-sm-2 px-0 bg-dark d-flex sticky-top" style='padding-left:0;padding-right:0;'>
            <div class="d-flex flex-sm-column flex-row flex-grow-1 align-items-center align-items-sm-start px-3 pt-2 text-white">
                
                <ul class="nav nav-pills flex-sm-column flex-row flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#boxImgs" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Images</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#footer" class="nav-link px-sm-0 px-2">
                            <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Contact</span>
                        </a>
                    </li>
                </ul>
                
                <!-- se precisar de uma lista bunitinha no canto  
                    <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="28" height="28" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">Joe</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="col d-flex flex-column h-sm-100" style='margin-left:0;margin-right:0;'>
        <section id="main-content">
        <section class="wrapper">
            <div id='homeBox' class="row">
                    <div class="col-lg-4" style="margin: 20px 0px;">
                        <a href="https://github.com/mateusvieites">
                            <img src="images/backgrounds/avatar.jpg" class="media-object  img-responsive" alt="Avatar" style="width:200px">
                        </a>
                    </div>
                    <div class="col-lg-8" style='margin-top:20px;'>
                        <h1 style="text-align:justify;" >HardszVick</h1>
                        <h2 style="text-align:justify;">Mateus Vieites de Jesus</h2>
                    </div>
                    
            </div>            
            <div  class="col-lg-12" style='padding-left: 10%;padding-top:20px; padding-right:10%;' >
                <div id='boxAboutMe' style='background-color:white;padding-left:50px;padding-right:50px;'>
                    <h1 style="text-align: justify;">About me:</h1>
                    <p style="text-align: justify;">
                        <?php
                            date_default_timezone_set('America/Sao_Paulo');
                            $myAge = date('Y')-1999;
                            echo "Hi guys, i'm Mateus(HardszVick) and i'm $myAge. I've been working with software development since 2021. 
                            In 2012 I started developing plugins and mods for Minecraft just for fun.. I consider myself a shy person and
                            it takes me a little longer to make friends."; 
                    
                        ?>
                    </p>
                </div>
            </div>
            
            <hr size="7">
            <div  class="col-lg-12" style='padding-left: 10%;padding-top:20px; padding-right:10%;'>   
                <div id='boxImgs' class="row "> 
                <h1>Images</h1>
                <?php 
                        $path   = "images/ProgramingLanguages/";
                        $files  = filesName($path);
                        $i = 0;
                        foreach ($files as $arquivo){
                            if (($arquivo != ".") and ($arquivo != "..")){
                                $nameAndType = explode('.',$arquivo);
                                $name = $nameAndType[0];
                                    // echo "<div class='border border-dark rounded col-lg-4' style='margin-top:2px; margin-right:2px'><img class='mw-100 mh-100 col-lg-12' style='padding-top:10px;'  src='$path$arquivo'  alt='$name' title='$name' ><p>$name</p></div>";
                                    echo "<div class='border border-dark rounded col-lg-4'><img class='mw-100 mh-100 col-lg-12' style='padding-top:10px;'  src='$path$arquivo'  alt='$name' title='$name' ><p>$name</p></div>";
                                }
                        }
                    ?>
                </div>
            </div>
             <footer id='footer' class='row' style='background-color:#111;padding-left:10px;padding-right:10px;color:white;margin-top:20px;'>
                <div class='col-lg-12' style='padding-left:20%;padding-right:20%;padding-top:20px;'>
                    <blockquote class="blockquote">
                        <p style='text-align: justify;'>
                            We can only see a short distance ahead, but we can see plenty there that needs to be done.
                        </p>
                        <footer class="blockquote-footer"><cite title="Alan Mathison Turing">Alan Mathison Turing</cite></footer>
                    </blockquote>
                </div>
                <hr/>
                <div class='col-lg-4'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <label for="email">Your beautiful email :)</label><br>
                            <input id="teste" required type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
                            <label id="errorMessageEmail" style="color:red;"></label><br>
                            <label for="Message">Your message:</label>
                            <textarea required class="form-control col-lg-12" id="exampleFormControlTextarea1" rows="5"></textarea>
                                <button class="btn btn-primary btn-block" style="margin-top:5px"  >Send</button>
                        </div>
                    </div>
                </div>

                <div class='col-lg-6 col offset-lg-2' style='padding-left:20%;' align="right">
                    <p style='text-align: justify;'>
                        Contact: <a href="mailto:hardszvick25@gmail.com">
                            hardszvick25@gmail.com</a>
                            <br>
                            Celular: (48) 99102-9824
					    </a>
                    </p>
                </div>
            </footer>
        </section>
    </section>
        </div>
    </div>
</div>

<!-- Functions here -->


<!-- Jquery Events here  -->
    <script>
         document.getElementById('btnSubmit').addEventListener("click", function () {
            $("#exampleModal").modal({
                show: true
            });
         });
        // document.getElementByID('teste').addEventListener("change",function(){
        //     $('input[name=myInput]').change(function() {
        // });
        
        function verifyEmail(){
            var text = $('#teste').val();
            if ((text != null) && (text !="")) {
                var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

                

                if (text.match(validRegex)) {
                    Function:changeTextColor($('#errorMessageEmail'),"#99cc33");
                    $('#errorMessageEmail').text("E-mail validado com sucesso");
                }else{
                    Function:changeTextColor($('#errorMessageEmail'),"#cc3300");
                    $('#errorMessageEmail').text("E-mail validado com sucesso");
                    
                }
            }
        } 

        $('#teste').focusout(verifyEmail);

        
        
        // addEventListener('change', (event) => {
        //     result.textContent = `You like ${event.target.value}`;
        // }   );
        // $('#email').change(function() {alert('teste') });
         
    </script>
</body>
</html>