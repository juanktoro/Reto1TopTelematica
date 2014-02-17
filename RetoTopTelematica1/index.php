<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xh<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Contenedor de Imagenes</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <style type="text/css">

body{
    background:#DEE2E3; /*  ponemos un color de fondo */
    font-size:14px; /* establezco un tamaño de fuente por defecto */
    font-family:arial, verdana, "nimbus sans l", "sans serif"; /*  tipos de fuentes y sus alternativas */
    margin:0;padding:0;
 line-height:normal;

    }
/*  determinamos las caracteristicas de la caja principal que envolverá al contenido de la pagina */

.contenedor{
width:980px; /* un ancho de 980px esta bien con las resoluciones actuales de 1024x768 */
margin:0 auto;    /* 0 sin espacios externos arriba y abajo y auto centrado horizontalmente */
padding:0; /* 0 sin espacios internos */
    }
.header{
height:40px; /* para el ejemplo básico he colocado altura neta 60px */
background:#386587; /* un color de fondo para el encabezado */
color:#CFFFD2;
padding:20px 0;margin:0; /* si se coloca width 100% margin y padding horizontal deben ser cero para que la caja no se salga de los límites altura total ahora es 60+20+20=100px */
    }
.header h1{
padding:0 20px;margin:0;
color:#FFE619;
font-size:1.8em;
font-family:verdana;
    }
.cuerpo{
margin:10px 0; /* para que el cuerpo central diste 10px externamente arriba y abajo */
padding:10px 0;
background:#873765; /* un fondo medio violeta */
color:#FFFFFF;
    }
.lado1{
width:260px;
padding-right:40px;
/* un ancho de 260px y un padding a la izquierda de 40px ancho total 300px como hereda de la caja CUERPO los demas padding son cero  */
margin:0;
float:left; /* le indico que debe flotar hacia la izquierda  */
display:inline;
    }
.lado1 ul{font-size:0.9em;list-style:none;margin:0;padding:0 0 0 10px;}
.lado1 ul li{
    margin:3px 0;padding:0;
    list-style:none;
    }
.lado1 ul li a{
color:#FFFFFF;
display:block; /* los enlaces de referencia actuaran como bloque */
text-decoration:none;
background:#668737;
padding:10px;margin:0;
}
.lado1 ul li a:hover{
color:#CEF938;
background:#3E4D28;
}
.lado2{
width:660px;
margin:0;
padding-right:20px; /* ancho de 660px mas 20px de padding son 680px de ancho total y con los 300px del lado 1 son 980px de ancho total justo concuerda con el ancho asignado a la caja cuerpo*/
float:left; /* float por la izquierda*/
display:inline;

    }
.clean{clear:both;} /* elimina los margenes flotantes tanto a la derecha como a la izquierda*/
.footer{
width:96%
margin:0;padding:2%;
background:#658737;
color:#EAEFC7;
    }
.footer p{
color:#EAEFC7;
font-size:0.9em;
margin:5px 0;padding:0;
    }
  </style>

</head>

<body>
<div class="contenedor">
<div class="header">
<h1>Contenedor de Imagenes</h1>
</div>
<div class="cuerpo">
<div class="lado1">
<ul>
<li><a href="ver.php" title="Mostar Imagen">Ver Imagenes</a></li>
<li><a href="loguearse.html">Cargar Imagenes</a></li>
<li><a href="registro.html">Registrarse</a></li>
</ul>
</div>
<div class="lado2">
<br>
Esta pagina te permite cargar todo tipo de imagenes, y asi poder compartir con los demas tu multimedia favorita, esto lo conseguiras muy facil y en muy poco tiempo animate,
los demas esperan ver hermosas imagenes y tenerlas en la multimdia de ellos. <br><br><br>
Para poder subir y compartir imagenes necesitas REGISTRARTE. <br><br><br>
<a href="#"><img src="images.jpg" alt="Insertar logotipo aquí"id="Insert_logo" style="background-color: #FF3366; display: block;"/></a> <br><br><br>
</div>
<div class="clean"></div>
</div>
<div class="footer">
<br/>
Hecho por Juan Carlos Nore&ntildea 2014 &reg
</div>
</div>
</body>	