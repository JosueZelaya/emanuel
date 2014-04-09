<?php

require_once '../reglas_negocio/ManejadorPersonal.php';

//$numeroResultados = 2;
include './paginacionConfig.php';

$cantidadPersonas = ManejadorPersonal::getCuantasPersonasExisten();
$paginasNecesarias = ceil($cantidadPersonas/$numeroResultados); //Redondea al número mayor con la función ceil()

if($_GET){
    if($_GET['pagina']){
        $pagina = $_GET['pagina'];
    }
}

if($paginasNecesarias>5){
        if($pagina>3 && $pagina<$paginasNecesarias-2){
        echo "<ul class='pagination'>"
        . "<li class='prev'><a href='#'> ← </a></li>";
        for ($index2 = $pagina-2; $index2 <= $pagina+2; $index2++) {
            if($pagina==$index2){
                echo "<li class='active'><a class='paginaPersonas' data='".$index2."' href='#'>".$index2."</a></li>";
            }else{
                echo "<li><a class='paginaPersonas' data='".$index2."' href='#'>".$index2."</a></li>";
            }        
        }
        echo "<li class='next'><a href='#'> → </a></li>"
        . "</ul>";    
    }else if($pagina>=$paginasNecesarias-2){    
        echo "<ul class='pagination'>"
        . "<li class='prev'><a href='#'> ← </a></li>";
        for ($index2 = $paginasNecesarias-4; $index2 <= $paginasNecesarias; $index2++) {
            if($pagina==$index2){
                echo "<li class='active'><a class='paginaPersonas' data='".$index2."' href='#'>".$index2."</a></li>";
            }else{
                echo "<li><a class='paginaPersonas' data='".$index2."' href='#'>".$index2."</a></li>";
            }        
        }
        echo "<li class='next'><a href='#'> → </a></li>"
        . "</ul>";
    }else{
        echo "<ul class='pagination'>"
        . "<li class='prev'><a href='#'> ← </a></li>";
        for ($index = 0; $index < 5; $index++) {                                        
            if($pagina==$index+1){
                $page=$index+1;
                echo "<li class='active'><a class='paginaPersonas' data='".$page."' href='#'>".$page."</a></li>";
            }else{
                $page=$index+1;
                echo "<li><a class='paginaPersonas' data='".$page."' href='#'>".$page."</a></li>";
            }                                        
        }
        echo "<li class='next'><a href='#'> → </a></li>"
        . "</ul>";
    }
}else{
    echo "<ul class='pagination'>"
    . "<li class='prev'><a href='#'> ← </a></li>";
    for ($index = 0; $index < $paginasNecesarias; $index++) {                                        
        if($pagina==$index+1){
            $page=$index+1;
            echo "<li class='active'><a class='paginaPersonas' data='".$page."' href='#'>".$page."</a></li>";
        }else{
            $page=$index+1;
            echo "<li><a class='paginaPersonas' data='".$page."' href='#'>".$page."</a></li>";
        }                                        
    }
    echo "<li class='next'><a href='#'> → </a></li>"
    . "</ul>";    
}




