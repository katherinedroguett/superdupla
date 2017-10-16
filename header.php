
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="…">
    <meta name="author" content="…">
    <title>Bootstrap + PHP + JSON</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fix.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Repaso</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>active<?php };?>"><a class="nav-link" href="index.php">Portada</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='nombres.php'){?>active<?php };?>"><a class="nav-link" href="nombres.php">Nombres</a></li>
          <li class="nav-item <?php if((basename($_SERVER['PHP_SELF']))=='ejercicio.php'){?>active<?php };?>"><a class="nav-link" href="ejercicio.php">Ejercicio</a></li>
        </ul>
      </div>
    </nav>
    <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?>
    <div class="container">
      <div class="jumbotron">
        <h1>Bootstrap + PHP + JSON</h1>
        <p class="lead"><a href="http://getbootstrap.com">Bootstrap</a> es un <a href="https://es.wikipedia.org/wiki/Framework">Framework</a> de <a href="https://developer.mozilla.org/es/docs/Glossary/HTML">HTML</a>, <a href="https://developer.mozilla.org/es/docs/Glossary/CSS">CSS</a> y <a href="https://developer.mozilla.org/es/docs/Glossary/JavaScript">JS</a> para implementar <a href="https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable">diseño web adaptable</a>. Optar por Bootstrap es optar por una de las opciones más populares, por asegurarse la disponibilidad de mucha ayuda en línea.</p>
        <p><a href="http://www.php.net/manual/es/">PHP</a> es un lenguaje de código abierto que es ejecutado en el servidor, generando HTML y enviándolo al cliente. El gran parecido que posee PHP con los lenguajes más comunes de programación estructurada, como C y Perl, permiten a la mayoría de los programadores crear aplicaciones complejas con una curva de aprendizaje muy corta.</p>
        <p><a href="http://www.json.org/json-es.html">JSON</a> es un formato de texto ligero para el intercambio de datos. Distintos lenguajes, tales como <a href="http://php.net/manual/es/book.json.php">PHP</a>, Python y Ruby, ya pueden analizar, generar, transformar y procesar <a href="https://www.w3schools.com/js/js_json.asp">este formato</a>.</p>
      </div>
    </div>
    <?php };?>    