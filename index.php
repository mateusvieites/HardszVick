<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <title>HardszVick</title>

    <style>
        /* @media (min-width: 1000px)
        (max-width: 1000px) */
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
            border-color: red;  
            border-style: solid;
            border-width: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
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
                
                <!-- <div class="dropdown py-sm-4 mt-sm-auto ms-auto ms-sm-0 flex-shrink-1">
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
            <div class="row">
                
                <div id='homeBox'>
                    <div class="col-lg-4" style="margin: 20px 0px;">
                        <a href="default.asp">
                            <img src="images/backgrounds/avatar.jpg" class="media-object  img-responsive" alt="Avatar" style="width:200px">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <p style="text-color:red">asss</p>
                        <p>text</p>
                    </div>
                    
                </div>
            </div>            
            <div  class="col-lg-12" style='padding-left: 10%;padding-top:20px; padding-right:10%;'>   
            
                <div id='boxImgs' class="row border border-dark rounded"> 
                <h1>Images</h1>
                <?php 
                        $path   = "images/ProgramingLanguages/";
                        $files  = filesName($path);
                        $i = 0;
                        foreach ($files as $arquivo){
                            if (($arquivo != ".") and ($arquivo != "..")){
                                $nameAndType = explode('.',$arquivo);
                                $name = $nameAndType[0];
                                    echo "<div class='border border-dark rounded col-lg-4' style='margin-top:2px; margin-right:2px'><img class='mw-100 mh-100 col-lg-12' style='padding-top:10px;'  src='$path$arquivo'  alt='$name' title='$name' ><p>$name</p></div>";
                            }
                        }
                    ?>
                </div>
            </div
            <br>
            <hr>
             <footer id='footer' class='row' style='padding-left:10px;padding-right:10px'>
                <div class='col-lg-12' style='padding-left:20%;padding-right:20%'>
                    <blockquote class="blockquote">
                        <p style='text-align: justify;'>
                            We can only see a short distance ahead, but we can see plenty there that needs to be done.
                        </p>
                        <footer class="blockquote-footer"><cite title="Alan Mathison Turing">Alan Mathison Turing</cite></footer>
                    </blockquote>
                </div>
                <div class='col-lg-6 col offset-lg-6' style='padding-left:20%;' align="right">
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
</body>
