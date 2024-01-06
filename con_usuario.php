<?php

require 'conexion.php';

session_start();

function usuario($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->nombre." ";
                echo $obj->apellidop." ";
                echo $obj->apellidom." ";

            }
        }
    }
}

function codigo($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->codigo."";

            }
        }
    }
}

function edad($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->edad."";

            }
        }
    }
}

function sexo($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->sexo."";

            }
        }
    }
}

function telefono($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->telefono."";

            }
        }
    }
}

function residencia($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->residencia."";

            }
        }
    }
}

function carrera($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->carrera."";

            }
        }
    }
}

function cu($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->cu."";

            }
        }
    }
}

function entrenador($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->entrenador."";

            }
        }
    }
}

function estatura($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->altura."";

            }
        }
    }
}

function peso($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->peso."";

            }
        }
    }
}

function rutina($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->rutina."";

            }
        }
    }
}

function horario($conexion){
    $usuario = $_SESSION["codigo"];
    $query="SELECT * FROM usuario WHERE codigo='$usuario'";
    $consulta=pg_query($conexion,$query);
    if($consulta){
        if(pg_num_rows($consulta)>0){
            while($obj=pg_fetch_object($consulta)){

                echo $obj->horario."";

            }
        }
    }
}

/*$nombre = "SELECT nombre FROM usuario WHERE codigo='$usuario'";
$apellidop = "SELECT apellidop FROM usuario WHERE codigo='$usuario'";
$apellidom = "SELECT apellidom FROM usuario WHERE codigo='$usuario'";
$codigo = "SELECT codigo FROM usuario WHERE codigo='$usuario'";
$edad = "SELECT edad FROM usuario WHERE codigo='$usuario'";
$sexo = "SELECT sexo FROM usuario WHERE codigo='$usuario'";
$telefono = "SELECT telefono FROM usuario WHERE codigo='$usuario'";
$residencia = "SELECT residencia FROM usuario WHERE codigo='$usuario'";
$carrera = "SELECT carrera FROM usuario WHERE codigo='$usuario'";
$cu = "SELECT cu FROM usuario WHERE codigo='$usuario'";*/

/*$consulta=pg_query($conexion,$nombre);
$consulta2=pg_query($conexion,$apellidop);
$consulta3=pg_query($conexion,$apellidom);
$consulta4=pg_query($conexion,$codigo);
$consulta5=pg_query($conexion,$edad);
$consulta6=pg_query($conexion,$sexo);
$consulta7=pg_query($conexion,$telefono);
$consulta8=pg_query($conexion,$residencia);
$consulta9=pg_query($conexion,$carrera);
$consulta10=pg_query($conexion,$cu);*/


?>

<!DOCTYPE html>

<html lang="en">

    <body>
        <a href="loggin.html" class="btn-neon">
            <span id="span1"></span>
            <span id="span2"></span>
            <span id="span3"></span>
            <span id="span4"></span>
            Salir
        </a>
    </body>
</html>