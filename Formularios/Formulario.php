<!doctype html>
<html lang="en">
  <head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
          <h1>GET</h1>
          <hr class="border border-dark">
            <form action="Procesar.php" method="GET">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="name" class="form-control col-5">

                <br>

                <label for="edad">Edad: </label>
                <input type="number" id="edad" name="edad" class="form-control col-5">

                <br>

                <label>Sexo:</label>
                <br>
                <label for="sexo">
                    Hombre:
                    <input type="radio" name="sexo" value="Hombre">
                </label>
                <label for="sexo">
                    Mujer:
                    <input type="radio" name="sexo" value="Mujer">
                </label>

                <br>

                <label>Roles:</label>
                <br>
                <label>
                    Administrador:
                    <input type="checkbox" name="roles[]" value="Administrador">
                    <!-- El [] es necesario ya que se debe indicar que se van a enviar varios valores (ya que es un checkbox) -->
                </label>    
                <label>
                    Editor:
                    <input type="checkbox" name="roles[]" value="Editor">
                </label>
                <label>
                    Moderador:
                    <input type="checkbox" name="roles[]" value="Moderador">
                </label>

                <br>

                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </form>
          <h1 class="mt-3">POST</h1>
          <hr class="border border-dark">
            <form action="Procesar.php" method="POST" enctype="multipart/form-data">
                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="name" class="form-control col-5">

                <label>
                    Imagen
                    <br>
                    <input type="file" name="image">
                    <!-- Si se van a enviar archivos siempre se debe hacer por POST y a su vez habilitar el envio de archivos en el formulario agregando el atributo enctype="multipart/form-data" -->
                </label>
                <br>

                <button type="submit" class="btn btn-primary mt-2">Enviar</button>
            </form>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>