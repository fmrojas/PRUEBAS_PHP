<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css">
    <title>Hola PHP Laravel </title>
   <!--<style type="text/css">
   .nav-bar{
      background-color: #D24836;
      height: 40px;
      
      text-align: right;
    }
    .nav-bar ul{
      display: inline-block;
      
    }
    .nav-bar ul li{
      float: left;
      list-style: none;
      margin: 5px;
    
    }
    .nav-bar ul li a{
      text-decoration: none;
      line-height: 5px;
      color:#fff;
    }
   .vinculo-nav-bar:hover{
      color: #0077CC !important;
    }
    .center{
      text-align: center;
    }
    .right{
      text-align: right;
    }
    .left{
      text-align: left;
    }
    .rojo{
      color:red;
    }
    .verde{
      color:green;
    }
    .amarillo{
      color:yellow;
    }
    .background_red{
      background-color: red;
    }
    .background_green{
      background-color: green;
    }
    .background_yellow{
      background-color: yellow;
    }
    .section{
      display: inline-block;
      padding: 20px;
    }
    .section div{
      float: left;
      /*border: solid 1px #000; */
    }
    .column-6{
      width: 600px;
    }
    .column-4{
      width: 400px;
    }
    .nav-aside ul li{
      list-style: none;
      margin: 5px;
      border:solid 1px #0077CC;
    }
    .nav-aside a{
      text-decoration: none;
      margin: 6px;
    }
   </style>-->
  </head>
  <body>
    <header>
      <h1 class="<?= $align ?> <?= $color ?> <?= $background_color ?>"><?= $titulo ?></h1>
    </header>
  <nav class="nav-bar">
    <ul>
      
    <?php 

      foreach ($vinculos as $key => $value) {
        echo "<li><a class='vinculo-nav-bar' href='$key' >".$value ."</a></li>";
      }
     ?>
    </ul>
  </nav>

  <section class="section">
    <div class="column-6">
    
        <p><?= $message ?></p>
        <!-- <p>Hola Davinchi</p> -->
        <p><?= $nombre ?></p>
        <p><?= $sueldo ?></p>
    </div>
    <div class="column-6">
       <nav class="nav-aside">
        <ul>
          <?php for($i=1;$i<=$num_options;$i++) { ?>
          <li><a href="#">Options <?php echo $i ?></a></li>
          <?php  }?>
        </ul>
       </nav>
        
    </div>
  </section>
   
  </body>
</html>

<!-- crear clase que se llame Empleado, definir atrubutos: nombre y sueldo.
Definir metodo inicializar() que lleguen como datos el nombre y el sueldo. Plantear un segundo metodo 
que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
 -->

 <!-- Implementar una clase que muestre una lista de ipervinculos en forma horizontal (menu de opciones) 

 -->

 <!-- Confeccionar una clase cabecera pagina que permina mostrar un titulo, e indicar si queremos 
 que aparezca centrado, a la derecha o a la izquierda. ademas definir el color
 de fondo y de la fuente. -->

 <!-- Confeccionar una clase menu. que permita añadir la cantidad de opciones que
 necesitemos. Mostrar el menu en forma vertical u horizontal el metodo
 que llamemos -->
