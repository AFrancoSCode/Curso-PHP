<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
<?php 

    // La diferencia entre el metodo GET y el metodo POST es que el metodo GET envia la información por medio del encabezado de la solicitud http, mientras que POST envia la información por medio del body de la solicitud http (escondido).

    if(empty($_GET) == false){
        $nombre = $_GET['name']; // Al hacer una solicitud get y enviarlo a una pagina (en este caso Procesar.php) la información enviada se guarda en la variable global $_GET.
        $edad = $_GET['edad'];
        $sexo = $_GET['sexo'];
        $roles = $_GET['roles'];
        echo "<p>El nombre del usuario es: $nombre (Recuperado por el metodo GET)</p>";
        echo "<p>La edad del usuario es: $edad (Recuperado por el metodo GET)</p>";
        echo "<p>El sexo del usuario es: $sexo (Recuperado por el metodo GET)</p>";
        echo "<p>Los roles del usuario son:</p>";

        echo "<ul>";
            foreach($roles as $rol){
                echo "<li>$rol</li>";
            }
        echo "</ul>";
    }
    elseif(empty($_POST['name']) == false){
        $nombre = $_POST['name'];
        $image = $_FILES['image'];
        $patch = $_SERVER['DOCUMENT_ROOT'].'/CursoPHP/Formularios/Img/'.$image['name'];
        echo "<p>El nombre del usuario es: $nombre (Recuperado por el metodo POST)</p>";
        move_uploaded_file($image['tmp_name'], $patch);
    }

    // $nombre = $_REQUEST['name'];

    // echo "<p>El nombre del usuario es: $nombre (Recuperado por ningun metodo en especifico, se utilizo \$_REQUEST como medio para obtener la información)</p>";
?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>