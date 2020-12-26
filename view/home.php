<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../public/css/styleHome.css">
    <link rel="stylesheet" href="../public/css/default.css">
    <script src="https://kit.fontawesome.com/558e50de0e.js" crossorigin="anonymous"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
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
.ico{
    font-size: 40px;
}
  </style>
</head>
<body>
    <?php
    require_once "../view/header.php";
    ?>

<div id="btns-action">
            <a href="#" class="btn" id="home"><i class="fas fa-home ico"></i></a>
            <a href="../controller/cerrarSesion.php" class="btn" id="salir"><i class="fas fa-sign-out-alt ico"></i></a>
    </div>
    
    <main>
    
    <div id="left-cont">
        <div id="data-user" class="animate__animated animate__zoomInUp animate__delay-1s">
        <div class="cont-foto animate__animated animate__zoomInDown animate__delay-2s"></div>
        <div class="cont-info">
            <?php
            foreach ($dataUser as $data){
                $nameus = $data["NAMEUS"];
                $name = $data["NAME"];
                $lastname = $data["LASTNAME"];
                echo " <h1 class='dat-nameus '>NOMBRE DE USUARIO: $nameus </h1>";
                echo " <h1 class='dat-name'>NOMBRE: $name </h1>";
                echo " <h1 class='dat-last'>APELLIDO: $lastname </h1>";
            }
            ?>
            </div>
        </div>
        
        <div id="lista-cursos">
            <div class="curso" id="curso1">
                <div class="cont-desc-curso">
                <h1>Base De Datos</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam placeat vitae quod sunt doloremque mollitia quo totam, cumque a, nemo explicabo ad? Et exercitationem eligendi sapiente tenetur optio quae ut voluptate unde, totam eveniet suscipit nesciunt aperiam atque rem, tempore ipsum? Eum ad recusandae sapiente praesentium ut nam possimus ipsa!</p>
                </div>
                <div class="fotocurso">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_iLoSKV.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                </div>
            </div>
            <div class="curso" id="curso2">
            <div class="cont-desc-curso">
                <h1>Robotica</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam placeat vitae quod sunt doloremque mollitia quo totam, cumque a, nemo explicabo ad? Et exercitationem eligendi sapiente tenetur optio quae ut voluptate unde, totam eveniet suscipit nesciunt aperiam atque rem, tempore ipsum? Eum ad recusandae sapiente praesentium ut nam possimus ipsa!</p>
                </div>
                <div class="fotocurso">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_SI8fvW.json"  background="transparent"  speed="1"  style="width: 300px; height: 200px;"  loop  autoplay></lottie-player>
                </div>
            </div>
            <div class="curso" id="curso3">
            <div class="cont-desc-curso">
                <h1>Historia</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam placeat vitae quod sunt doloremque mollitia quo totam, cumque a, nemo explicabo ad? Et exercitationem eligendi sapiente tenetur optio quae ut voluptate unde, totam eveniet suscipit nesciunt aperiam atque rem, tempore ipsum? Eum ad recusandae sapiente praesentium ut nam possimus ipsa!</p>
                </div>
                <div class="fotocurso">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets8.lottiefiles.com/packages/lf20_n2yhd0lo.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                </div>
            </div>
            <div class="curso" id="curso4">
            <div class="cont-desc-curso">
                <h1>Java</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam placeat vitae quod sunt doloremque mollitia quo totam, cumque a, nemo explicabo ad? Et exercitationem eligendi sapiente tenetur optio quae ut voluptate unde, totam eveniet suscipit nesciunt aperiam atque rem, tempore ipsum? Eum ad recusandae sapiente praesentium ut nam possimus ipsa!</p>
                </div>
                <div class="fotocurso">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets1.lottiefiles.com/packages/lf20_EGoTo9.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
                </div>
            </div>
        </div>
    </div>
    <div id="right-cont">
        <h1 class="title">COMPAÑEROS DE CLASE</h1>
        <?php
            foreach($listaUsers as $lista){
                $nameuser = $lista["NAMEUS"];
                $name = $lista["NAME"];
                $last = $lista["LASTNAME"];
                echo "<div class='cont-comp animate__animated animate__zoomInUp animate__delay-3s'> <h1>$name, $last</h1> <h2>$nameuser</h2></div>";
            }
        ?>
    </div>
    </main>
    <?php
    require_once "../view/footer.php";
    ?>

    

</body>
</html>