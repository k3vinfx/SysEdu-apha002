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
  
  
  <style>
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #080710;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .background {
        width: 100%;
        height: 100%;
        position: absolute;
        overflow: hidden;
        z-index: -1;
    }

    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }

    .shape:first-child {
        background: linear-gradient(#1845ad, #23a2f6);
        left: -80px;
        top: -80px;
    }

    .shape:last-child {
        background: linear-gradient(to right, #ff512f, #f09819);
        right: -30px;
        bottom: -80px;
    }

    form {
        width: 90%;
        max-width: 400px;
        background-color: rgba(255, 255, 255, 0.13);
        border-radius: 10px;
        padding: 50px 35px;
        text-align: center;
        backdrop-filter: blur(10px);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        margin-bottom: 30px;
        color: #ffffff;
    }

    input {
        width: 100%;
        height: 50px;
        margin-bottom: 20px;
        padding: 0 10px;
        background-color: rgba(255, 255, 255, 0.07);
        border-radius: 3px;
        color: #ffffff;
    }

    button {
        width: 100%;
        padding: 15px;
        background-color: #ffffff;
        color: #080710;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .background .shape {
            height: 150px;
            width: 150px;
        }

        form {
            padding: 30px 20px;
        }

        form h3 {
            font-size: 24px;
        }

        button {
            padding: 10px;
        }
    }
</style>
</head>

<!--    <canvas data-processing-sources="infinite-arboretum.js"></canvas> -->
<body>

      
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
 
     

        <form id="frm-login" action="?c=login&a=Login" method="post" enctype="multipart/form-data">
        <h3>Bienvenido</h3>
     <?php echo isset($alert) ? $alert : ""; ?>
    
         
               
                <input type="text" class="form-control" placeholder="CorreoElectronico" name="CorreoElectronico" value="<?php echo $login->CorreoElectronico; ?>">


                <input type="password" class="form-control" placeholder="clave" name="Contrasena" value="<?php echo $login->Contrasena; ?>">
       
               <button type="submit" >Iniciar</button>

     
    </div>

    </form>

    </body>
</html>



    <script>
    $(document).ready(function(){
        $("#frm-login").submit(function(){
            return $(this).validate();
        });

    })

    /* ---- particles.js config ---- */
   
</script>



</body>
</html>