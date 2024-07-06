<!doctype html>
<html>
<head>

<meta charset="utf-8">

    
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Teko&display=swap" rel="stylesheet">
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
 
<main class="container-lg">
    <div class="text-center textoform" style="padding-top: 5vh;">
        <h3 style="font-family: 'Teko', sans serif;">Thanks for the visit!</h3>
        <h3 style="font-family: 'Teko', sans serif;">Your message has been sent sucessfuly</h3>
    </div>
    
    
    
    <div class="row justify-content-center">
        <div class="col-lg-4">
        
            
            <?php 
        if (isset($_POST['enviar']) && !empty($_POST['enviar'])){
            
                $nome=$_POST['name'];
                $email=$_POST['email'];
                $mensagem=$_POST['message'];
                
            require_once('kryptoligacao.php');
            
            $sql="INSERT INTO tbcontactos(nome , email, mensagem) VALUES ('$nome','$email','$mensagem');";
            mysqli_query($ligacao, $sql);
            
            echo "<a href='index.html'>Back to Main Page</a>";
            
        }else{
            
            echo "<p>Please complete the form!</p>";
        }            
    
    
    
    ?>
            
                
            
            
        </div>
    
    </div>
    
    
    
    
    </main>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    
</body>
</html>