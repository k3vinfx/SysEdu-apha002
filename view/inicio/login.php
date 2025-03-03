<?php
$alert = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>INICIO Design</title>

  <!-- Custom fonts for this template-->
     <!--  <link href="sistema/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
  <!-- Custom styles for this template-->
  <!-- <link href="sistema/css/sb-admin-2.min.css" rel="stylesheet">-->
  
  
  <style media="screen">

/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting background: #ecf0f3;*/
* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins', sans-serif;
}

html, body{

margin:0px;
padding: 0px;
background: #ecf0f3;

background-image: url("sistema/img/bg.jpg");
width: 100%;
height:100%;


position: relative;

background-position: center center;

background-size:cover;
background-attachment: fixed;

background-repeat: no-repeat;
background-size: contain;
}

.wrapper {
  position: absolute;
  max-width: 350px;
  min-height: 500px;
  margin: auto; /* Centrado horizontal y verticalmente */
  top: 10%; /* Si quieres que esté pegado en la parte superior */
  bottom: 20%; /* Si quieres que esté pegado en la parte inferior */
  left: 0; /* Si quieres que esté pegado en la parte izquierda */
  right: 0; /* Si quieres que esté pegado en la parte derecha */
  padding: 40px 30px 30px 30px;
  background-color: #ecf0f3;
  border-radius: 15px;
  box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;

}

.logo {
width: 80px;
margin: auto;
}

.logo img {
width: 100%;
height: 80px;
object-fit: cover;
border-radius: 50%;
box-shadow: 0px 0px 3px #5f5f5f,
0px 0px 0px 5px #ecf0f3,
8px 8px 15px #a7aaa7,
-8px -8px 15px #fff;
}

.wrapper .name {
font-weight: 600;
font-size: 1.4rem;
letter-spacing: 1.3px;
padding-left: 10px;
color: #555;
}

.wrapper .form-field input {
width: 100%;
display: block;
border: none;
outline: none;
background: none;
font-size: 1.2rem;
color: #666;
padding: 10px 15px 10px 10px;
/* border: 1px solid red; */
}

.wrapper .form-field {
padding-left: 10px;
margin-bottom: 20px;
border-radius: 20px;
box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
color: #555;
}

.wrapper .btn {
box-shadow: none;
width: 100%;
height: 40px;
background-color: #03A9F4;
color: #fff;
border-radius: 25px;
box-shadow: 3px 3px 3px #b1b1b1,
-3px -3px 3px #fff;
letter-spacing: 1.3px;
}

.wrapper .btn:hover {
background-color: #039BE5;
}

.wrapper a {
text-decoration: none;
font-size: 0.8rem;
color: #03A9F4;
}

.wrapper a:hover {
color: #039BE5;
}

@media(max-width: 380px) {
.wrapper {
margin: 30px 20px;
padding: 40px 15px 15px 15px;
}
}



canvas{
  display:block;
  vertical-align:bottom;
}



#particles-js{
  width: 100%;
  height: 100%;
  background-color: #183e95;
  background-image: url('');
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
}


</style>
  
  
  

</head>

<!--    <canvas data-processing-sources="infinite-arboretum.js"></canvas> -->
<body>

      

 
      


        <div class="wrapper">
        <div class="logo">
        <img src="assets/img/etreva_travel.jpg"  >
          </div>
        <div class="text-center mt-4 name">
           SISTEMA RED NEURONA RECURENTE ...
        </div>
</BR>
        <form id="frm-login" action="?c=login&a=Login" method="post" enctype="multipart/form-data">
     <?php echo isset($alert) ? $alert : ""; ?>
    
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" class="form-control" placeholder="CorreoElectronico" name="CorreoElectronico" value="<?php echo $login->CorreoElectronico; ?>">
        </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" class="form-control" placeholder="clave" name="Contrasena" value="<?php echo $login->Contrasena; ?>">
               </div>
               <button type="submit" >Iniciar</button>
    
        <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a type="submit">Sign up</a>
        </div>
    </div>

    </form>
<div id="particles-js"></div>

</div>
<script src="particles.js"></script>
<script src="app.js"></script>


    <script>
    $(document).ready(function(){
        $("#frm-login").submit(function(){
            return $(this).validate();
        });

    })

    /* ---- particles.js config ---- */

    
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>



</body>
</html>