<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/styleCrud.css">
    <script src="https://kit.fontawesome.com/558e50de0e.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>panel de adminitracion</title>
    
    <style>
        body{
            position: relative;
        }
        .most{
            
            background-color: green;
            color: white;
            margin-top: 10px;
            border-radius: 8px;
        }
        a{
            text-decoration: none;
        }
        .btn1{
            color: orange;
            font-size: 40px;
            margin-right: 20px;
        }
        .btn2{
            color: red;
            font-size: 40px;
        }
        
        /*-------------- */

        #btns-action{
    width: 130px;
    height: 30px;
    display: flex;
    justify-content: space-between;
    position: absolute;
    display: scroll;
    right: 30px;
    top: 30px;
}
.btn{
    color: white;
    text-decoration: none;
}
#salir{
    color: rgba(179, 179, 179, 0.815);
}
.ico{
    font-size: 40px;
}
main{
    margin: auto;
    margin-top: 40px;
    border-radius: 10px;
}
.cont-busca{
    margin-bottom: 10px;
}
    </style>
</head>
<body>
    <header>
        <h1>PANEL DE ADMINISTRACION</h1>
    </header>
    <main>
        <div class="cont-busca">
            <form action="?buscar=true" method="POST">
                <input type="text" name="busqueda" class="buscar" placeholder="busca un nombre...">
                <input type="submit" name="buscar" value="buscar" id="btnBuscar">
            </form>
        </div>
        <a class="most" href="../controller/usersController.php"><?php echo $btnMostrar;?></a>
        <table>
            <thead>
                <th>NOMBRE DE USUARIO</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>ACCIONES</th>
            </thead>
            <?php
            
            foreach ($listaUsuarios as $registro){
                echo "<tbody>";
                    echo "<td>" . $registro["NAMEUS"] . "</td>";
                    echo "<td>" . $registro["NAME"] . "</td>";
                    echo "<td>" . $registro["LASTNAME"] . "</td>";
                    $id = $registro["ID"];
                    echo "<td>". "<a href='../controller/editController.php?id=$id'><i class='fas fa-pen-square btn1'></i></a>" . "<a href='../controller/usersController.php?eliminar=$id'> <i class='fas fa-minus-circle btn2'></i></a>" . "</td>";
                echo "</tbody>";
            }
            
            ?>
        </table>
           
        <div id="btns-action">
            <a href="#" class="btn" id="home"><i class="fas fa-home ico"></i></a>
            <a href="../controller/cerrarSesion.php" class="btn" id="salir"><i class="fas fa-sign-out-alt ico"></i></a>
        </div>

    </main>
</body>
</html>