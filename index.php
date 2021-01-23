<?php
	include_once('main.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" >
    <link rel="stylesheet" type="text/css" href="./main.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lorem, ipsum dolor.</title>
</head>
<body>
    <div class="row">
    <nav class="navbar navbar-expand-lg fixed-top ">  
        <a class="navbar-brand" data-value="home"  href="#home">Home</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
            <span class="navbar-toggler-icon"><font color="f4f4f4" ><i class="fas fa-bars"></i></font></span>
        </button>
       
        <div class="collapse navbar-collapse " id="navbarSupportedContent">     
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="#about">About</a>        
                </li> 
                <li class="nav-item">
                    <a class="nav-link" id="secondlink" data-value="portfolio" href="#portfolio">Portfolio</a>        
                </li> 
                <li class="nav-item"> 
                    <a class="nav-link " id="threelink" data-value="contact" href="#contact">Contact</a>       
                </li> 
            </ul> 
        </div>

    </nav> 
    </div>

    <header class="header" id="home">
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="description ">
                    <h1>Lorem ipsum dolor sit, amet consectetur.</h1>  
                    <p>    
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque consequuntur ipsam provident voluptatum expedita itaque vitae sunt delectus repellendus sed?
                    </p>   
                </div>
                </div>
            </div>
    </header>

	<div class="container-fluid about" id="about">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 desc">
                <p>    
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit numquam odio atque? Voluptates porro ut unde dolorum mollitia earum dolore, tenetur doloremque alias voluptas deleniti commodi sapiente dolores fuga voluptate!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio nesciunt illum, similique nobis, ipsa consequatur quae expedita debitis, accusamus molestiae delectus! Qui, commodi. Blanditiis quisquam eos dicta iste necessitatibus exercitationem.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos tempora cumque temporibus quam esse quisquam quis. Dignissimos quia vero eum omnis eaque quod a ad odit voluptatem nulla, velit sed?
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid portfolio" id="portfolio">
        <div class="row  ">
            <div class="col-lg-4 col-md-12 col-sm-12 scrin">
            <a class="project" href="https://sanechkae.github.io/fruits/" target="_blank"><img src="./img/150540-elektronnoe_ustrojstvo-kod-tehnologii-tekst-ishodnyj_kod-1920x1080.jpg"></a>'
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 scrin">
            <a class="project" href="https://sanechkae.github.io/fruits/" target="_blank"><img src="./img/150540-elektronnoe_ustrojstvo-kod-tehnologii-tekst-ishodnyj_kod-1920x1080.jpg"></a>'
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12 scrin">
            <a class="project" href="https://sanechkae.github.io/fruits/" target="_blank"><img src="./img/150540-elektronnoe_ustrojstvo-kod-tehnologii-tekst-ishodnyj_kod-1920x1080.jpg"></a>'
            </div>


            </div>
        </div>
    </div>
    

    <div class="container-fluid contact " id="contact">
        <div class="row">
            <form action="#contact" method="POST" class="col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-12 col-md-12 col-sm-12 text">
                <p>Lorem ipsum dolor sit amet<br>
                    consectetur adipisicing elit. Enim omnis eaque soluta at. Soluta, rerum.</p>
                <p class="contact-form__message"><?=$sendResult?></p>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 input_name">
                    <input id="name" type="text" name="name" placeholder="Ваше имя" value="<?=$name?>"> 
                    <input id="mail" type="text" name="mail" placeholder="Ваш e-mail" value="<?=$mail?>">
                </div>  
                
                <div class="col-lg-12 col-md-12 col-sm-12 textarea">
                    <textarea id="messange" name="messange" placeholder="Сообщение"><?=$messange?></textarea>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12 btn_sub">
                    <button class=" btn_submit" id="btn_submit" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container-fluid col-lg-12 col-md-12 col-sm-12 smth " >
        <p>© Aliaksandra Babok</p>
    </div>
	   

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src='./main.js'></script>
</body>
</html>