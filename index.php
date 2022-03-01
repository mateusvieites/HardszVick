<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/default.css">
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
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
        .row div p{
            text-align: center;
            font-family: 'Roboto', sans-serif;
        }
        .row h1{
            text-align: center;
            font-family: 'Roboto', sans-serif;
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
    <div id=menuFixo>
        <a href="https://github.com/mateusvieites" target=”_blank”><img src="./images/SideBarHeader.jfif"></a>
    </div>
    <section id="container">
        <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <div id="sidebar-header">
                        <a href="//www.google.com"><img src="./images/SideBarHeader.jfif" class="media-object  img-responsive img-thumbnail"></a>
                    </div>
                    <?php
                        $listaTags = array("Inicio","teste");
                        echo "<div id='options'>";
                        foreach($listaTags as &$tagsMenu) {
                            echo "<a href='#$tagsMenu'>$tagsMenu</a><br>";
                        }
                        echo "</div>"
                    ?>
                </ul>
                <!-- sidebar menu end-->
        </div>
    </section>
    <section id="main-content">
        <section class="wrapper">
            <div class="row border border-dark rounded" style='padding-left: 10%; padding-right:10%;'>   
             <h1>Imagens</h1>
             <?php 
                    $path   = "images/ProgramingLanguages/";
                    $files  = filesName($path);
                    $i = 0;
                    foreach ($files as $arquivo){
                        if (($arquivo != ".") and ($arquivo != "..")){
                            $nameAndType = explode('.',$arquivo);
                            $name = $nameAndType[0];
                            echo "<div class='border border-dark rounded col-lg-4' style='margin:2px 2px'><img class='mw-100 mh-100 col-lg-12' style='padding-top:10px;'  src='$path$arquivo'  alt='$name' title='$name' ><p>$name</p></div>";
                        }
                    }
                ?>
            </div>
        </section>
    </section>
</body>