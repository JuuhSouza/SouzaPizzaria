<!DOCTYPE html>
<html lang="pt-br">
<head>

<!-- DATA AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- ICONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>

    <!-- ICONE PAGE -->
    <link rel="shortcut icon" href="imgs/Souza_s-removebg-preview.png">

<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Souza's Pizzaria</title>
</head>

<!-- CSS--------------------------------------- -->


<style>

    /* DARKMODE --------------- */

    .darkmode{
        background: black;
    }

    /* NAVBAR --------------- */
.darkmode header{
    background-color: black;
}

.darkmode .logo-area .logo img{
    background-color: black;
}

.darkmode .navbar a{
    color: white;
    background-color: black;
}

.darkmode .navbar a:hover{
    color: orange;
}

.darkmode .navbar-2 a i{
  background-color: gray;
}

.darkmode .navbar a i:hover{
    background-color: white;
    color: orange;
}

/* CARDS------------- */

.darkmode .card{
    background-color: rgba(255, 0, 0, 0.418);
}

.darkmode .card h1{
    color: orange;
}

.darkmode .card h2{
    color: white;
}

.darkmode .card span{
    color: orange;
}


    /* FORMATAÇÃO BOTAO DARKMODE */

section{
    top: 0;
    left: 1;
}

.darkmode label{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    justify-content: center ;
    align-items: center;
}

.darkmode .input{
    position: absolute;
    opacity: 0;
}

.darkmode .sobrenos p{
    color: white;
    margin: 20px;
}

.darkmode footer{
    background-color: rgba(255, 174, 0, 0.829);
}



/* ------------icones---------- */
#sun {
    position: absolute;
    font-size: 2em;
    color: orange;
    filter: drop-shadow(0 0 2px rgba(0, 0, 0, 0.644));
    transform: scale(0);
    transition: 1s ease;
}

.darkmode .input:checked~#sun{
    transition-delay: .8s ;
    transform: scale(1) rotate(360deg);
}


#moon{
    font-size: 2em;
    color: #666;
    filter: drop-shadow(0 0 2px rgba(0, 0 ,0, .5));
    transition: 1s ease;

}

.darkmode input:checked~#moon{
    transition-delay: 0s ;
    transform: rotate(360deg) scale(0);
}

/*--------final icones------------- */

.toggle{
    position: absolute;
    display: block;
    width: 60px;
    height: 60px;
    /* background: #2b2b2b; */
    border-radius: 50%;
    /* box-shadow: 
    inset 0 8px 60px rgba(70, 70, 70, 0.1),
    inset 0 8px 8px rgba(80, 80, 80, 0.1),
    inset 0 -4px 4px rgba(99, 99, 99, 0.1); */
    z-index: -1;
    transition: 1s;
}

.darkmode input:checked~.toggle{
    /* background: #f8f8f8; */
}

/* SCROLLBAR */

::-webkit-scrollbar{
    width: 15px;
}

::-webkit-scrollbar-thumb{
    background: orange;
}


@font-face {
    font-family: fonte-t;
    src: url(fontes/PIZZARIA.ttf);
}

@font-face {
    font-family: fonte-n;
    src: url(fontes/panpizza.ttf);
}

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    transition: all 1s ease;
    text-align: center;
    background-color: white;
}

header{
    background-color: white;
    padding: 1.5em;
    position: relative;
    z-index: 1;
}


.logo img{
    width: 20%;
    position: absolute;
    left: 45%;
    z-index: 1;
    top: -2em;
}

.logo img:hover{
    filter: opacity(80%);
}

.logo-area .logo img{
    background-color: white;
    border-radius: 50%;
}


.navbar{
    text-align: center;
    display: flex;
    margin-right: 10%;
}

.navbar-2{
    display: flex;
    margin-left: 40%;
}

.navbar a{
    margin-left: 1em;
    font-size: 2em;
    font-family: fonte-n;
    text-decoration: none;
    color: black;
    background-color: white;
    transition: all .5s ease-in-out;
    z-index: 4;
}

.navbar a:hover{
    color: orange;
}

.navbar-2 a i{
    font-size: 1em;
    background-color: gray;
    padding: 60%;
    border-radius: 30%;
    z-index: 8;
    cursor: pointer;
    transition: all .3s ease-in-out;
}

.navbar a i:hover{
    background-color: white;
    color: orange;
}

    /* CARD SOBRE NOS */

    .inicio {
    flex-direction: column;
}

.sobrenos{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 20px;
    box-shadow: 0 0 20px gray;
}

.img-origem{
    width: 50%;
}

.sobrenos p{
    color: black;
    margin: 20px;
    font-size: 2.4em;
    font-family: fonte-n;
}

/* CARD PRODUTOS----------- */

.container-card{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    gap: 12px;
}

.tx-cardapio h1{
    margin-top: 2em;
    font-family: fonte-n;
    font-size: 5em;
    color: orange;
    text-shadow: 0 0 20px orange,
     2px 2px 5px black;
}


.card{
    background-color: rgba(194, 2, 2, 0.849);
    width: 30%;
    height: 50%;
    border-radius: 12px;
    box-shadow: 4px 4px 12px black;
    margin-top: 5em;
    transition: all .3s ease-in-out;
}

.card:hover{
    box-shadow: 0 4px 12px orange;
}

.card:hover{
    width: 32%;
}

.card-img img{
    width: 100%;
    height: 100%;
}

.card h1{
    font-size: 2em;
    font-family: fonte-t;
    color: white;
}

.card h2{
    margin: 1em;
    font-size: 1em;
    color: orange;
    font-family: sans-serif;
}

.card span{
    color: orange;
    font-size: 2em;
    text-transform: uppercase;
}

.card button{
    font-size: 1.2em;
    padding: 1em;
    background-color: orange;
    border: none;
    color: white;
    box-shadow: 0 0 20px black;
    border-radius: 10px;
    cursor: pointer;
    transition: all .5s ease-in-out;
}

.card button:hover{
    background-color: red;
    color: black;
}

/* FINAL CARDS PRODUTOS------------------- */

/* PARALLAX */


        /* PARALLAX */

        .wrapper h1,
        .wrapper h2{
            color: white;
            text-shadow: 2px 1px 2px black;
        }

.wrapper{
    width: 100%;
    margin: 0;
    margin: auto;
}

.container{
    width: 100%;
    max-width: 100%;
    margin: 0 auto;
    padding: 0;
}

section.modulo.content{
    padding: 40px 0;
    background: rgb(255, 173, 20);
    background-image: url(imgs/wallpaperform.png);
    background-size: 100%;
    background-position: 80%;
    background-repeat: no-repeat;
}

section.modulo.parallax{
    margin-top: 15em;
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 100vh;
    width: 100%;
    position: relative;
    overflow: hidden;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}

section.modulo.parallax h1{
    color: black;
    text-shadow: 2px 2px 5px orange;
    text-transform: uppercase;
    text-align: center;
    font-size: 3em;
    font-family: fonte-t;
    z-index: 50;

}

section.modulo.parallax:after{

    content: "";
    height: 100%;
    width: 100%;
    z-index: 8; 
    position: absolute;
    background: linear-gradient(to bottom, white 0, rgba(0, 0,0,0) 60%) ;
    
    }

    section.modulo.parallax-1{
        background-image: url(https://www.lacentral.com.br/wp-content/uploads/2023/07/feche-a-pizza-italiana-sobre-o-queijo-cole-o-foco-seletivo-generativo-ai-scaled.jpg)
    }


    /* FORMULARIO DE CLIENTES */

.home{
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
}


.home .content-form{
    max-width: 600px;
    color: white;
    text-shadow: 0 0 5px black;
    display: flex;
    flex-direction: column;
}


.content-form h2{
    margin-top: 1em;
    font-size: 3em;
    font-family: fonte-n;
    letter-spacing: .03em;
}


.content-form a{
    color: white;
    text-decoration: none;
   background-color: black;
    font-weight: 500;
    padding: 10px 40px;
    border-radius: 1em;
    transition: all .5s ease-in-out;
}

.content-form a:hover{
    background-color: red;
    box-shadow: 0 0 10px black;
    
}

.content-form p{
    margin: 1em 0 2em;
    font-family: fonte-n;
}

.wrapper-login{
     position: relative;
    width: 100%;
    /* margin-top: 25em; */
}

.wrapper-login h2{
    font-size: 4em;
    color: white;
    font-family: fonte-n;
    text-align: center;
} 

 
.wrapper-login .input-box{
    position: relative;
    display: flex;
    flex-direction: column;
    float: left;
    margin: 40px 0;
} 

.input-group{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    justify-content: center;
    align-items: center;
    
}

.input-box input{
    background: rgba(255, 0, 0, 0.788);
    border: none;
    border: 1px solid red;
    padding: .5em;
    border-radius: 40px;
    color: white;
    margin: .5em;
    text-align: center;
    transition: all .5s ease-in-out;
}

.input-box input:hover{
    color: black;
    background-color: rgba(255, 255, 255, 0.836);
    box-shadow: 0 0 10px white;
}


.input-box label{
    position: absolute;
    top: 50%;
    left: 45px;
    /* transform: translateY(-50%); */
    font-size: 1em;
    pointer-events: none;
}

.input-box .icon{
    position: absolute;
    top: 4.4em;
    left: 1em;
    font-size: 1.2em;
    color: black;
}


.input-box p{
    font-family: fonte-n;
    font-size: 2.3em;
    color: white;
    text-shadow: 0 0 10px black,
    0 0 10px black;
}

/* BOTAO FORMULARIO */
.btn-form{
font-size: .9em;
color: white;
padding: 1em;
border: none;
background-color: rgb(0, 0, 0);
box-shadow: 0 0 10px black;
transition: all .5s ease-in-out;
border-radius: 1em;
}

.btn-form:hover{
    background-color: red;
    color: white;
    box-shadow: 0 0 20px red;
}


/* ----FOOOTEEEEEERRRR-------- */

footer{
    background-color: white;
    margin-top: 5em;
    text-align: center;
    padding: 2em;
    box-shadow: 0 0 20px red,
    2px 2px 30px black;
    
}


.icon-social{
    display: flex;
    /* justify-content: space-between; */
    align-items: center;
    
}

.icon-social a,
.icon-social i{
    display: flex;
    text-indent: 15px;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    font-size: 1.7em;
    color: red;
    transition: all .5s ease-in-out;
}

.edu p{
    font-size: 1.5em;
    color: black;
    
}

.ju p{
    font-size: 1.5em;
    color: black;
}

.icones {
    display: flex;
    margin: 10px;
    flex-direction: row;
}

.icon-social i:hover{
color: orange;
}

footer p{
    color: white;
    font-size: 2em;
    font-family: fonte-t;

}

.footer-bottom{
    margin-top: 1em;
    font-size: 2em;
    font-family: fonte-n;
    color: black;

}



/* CELUALR -------- */
@media (max-width: 820px ){

.container-card{
 /* display: flex; */
 /* flex-direction: column; */
}

.logo img{
    width: 50%;
    position: absolute;
    left: 28%;
    z-index: -1;
    top: 1em;
}

.navbar{
    text-align: center;
    display: flex;
    flex-direction: column;
}

.navbar-2{
    display: flex;
    flex-direction: column;
    margin-left: 90%;
}

.navbar a{
    /* margin-left: 1em; */
    margin-left: -80%;
    font-size: 2em;
    font-family: fonte-n;
    text-decoration: none;
    color: black;
    transition: all .5s ease-in-out;
    z-index: 4;
}

.navbar-2 a{
    /* margin-right: -5%; */
    margin-top: -40%;
    margin-bottom: -150%;
}

.navbar a:hover{
    color: orange;
}


    /* SOBRE NOS */

    .sobrenos{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 20px;
    box-shadow: 0 0 20px gray;
}

.img-origem{
    width: 50%;
}

/*   CARDAPIO */
.container-card{
    flex-direction: column;
}

.card{
    width: 80%;
    height: 50%;
}
.card:hover{
    width: 90%;
}

/* formulario */
section.modulo.content{
    padding: 40px 0;
    background: rgb(255, 173, 20);
    background-image: url(imgs/wallpaperform.celular.png);
    background-size: 100%;
    background-position: 80%;
    background-repeat: no-repeat;
}

.home{
    height: 170vh;
    gap: 12px;
}

.btn-form{
font-size: 1.2em;
color: white;
/* padding: 2em; */

}

    }


</style>
<body>

    
<header class="header">
    <nav class="navbar">

 <!-- DARKMODE -->
 <section class="darkmode">

    <label>
        
        <input id="check" type="checkbox" class="input">
        
        <i class="fa-solid fa-sun" id="sun"></i>
        <i class="fa-solid fa-moon" id="moon"></i>
    
        <span class="toggle"></span>
    </label>

    </section>
    
    
    
    <script>
    const check = document.getElementById('check');
    
    check.addEventListener('click', () => {
        document.body.classList.toggle('darkmode');
    })
    
    
    </script>

        <a href=""> Home</a>
        <a href="#sobre"> Sobre nós</a>
        <div class="logo-area">
        <div class="logo">
            <img src="imgs/Souza_s-removebg-preview.png" alt="">
            </div>
        </div>
            <div class="navbar-2">
            <a href="#cardapio"> Cardápio </a>
            <a href="#user"> Pedir </a>
        </div>
        
     
        
    </nav>

</header>
    
                    <!-- BOOSTSTRAP ---------------------------------- -->
                    
                
                    
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active" data-bs-interval="10000">
                            <img src="imgs/precopizza.png" class="d-block w-100" alt="...">
                          </div>

                          <div class="carousel-item" data-bs-interval="2000">
                            <img src="https://s1.1zoom.me/b4763/272/Fast_food_Pizza_Tomatoes_Wood_planks_Foliage_513340_1920x1080.jpg" class="d-block w-100" alt="...">
                          </div>

                          <div class="carousel-item">
                            <img src="https://s1.1zoom.me/b6152/819/Pizza_Tomatoes_547600_1920x1080.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>


        <!-- CARDS PRODUTOS -->

         <!-- SOBRE NOS ---------------- -->


         <div class="section inicio">
            </div>
            <div class="sobrenos" id="sobre" >
        <img src="imgs/Souza_s-removebg-preview.png" alt="" class="img-origem" >
        
        <p>Bem-vindo à Souza's Pizzaria, onde cada fatia conta uma história de tradição familiar e paixão pela pizza! Desde 2024, a Souza's tem sido o lar das mais deliciosas e autênticas pizzas, criadas com amor e cuidado pela família Souza.</p>
                </div>
        </div>
        <!-- CARDS PRODUTOS -->

        <div class="tx-cardapio">
        <h1> Confira nosso Cardápio</h1>
    </div>

        <div class="container-card" id="cardapio" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">

        <div class="card">
           <div class="card-img">
                <img src="https://www.padariarenata.com.br/assets/images/01-02-pizzas-620x400-620x400.jpg" alt="">
            </div>
            <h1> Pizza de Calabresa</h1>
            <h2> Linguiça calabresa, queijo muçarela, molho de tomate, cebola, azeitona e orégano.</h2>
            <span> R$ 24,00 </span>
            
        </div>
 

        <div class="card">
           <div class="card-img">
                <img src="https://i.pinimg.com/736x/d0/18/18/d01818dec8c7624ff4b184b79d3f815a.jpg" alt="">
            </div>
            <h1> Pizza Pepperoni</h1>
            <h2> Carne bovina, de porco, gordura e temperado com pepperoncino, que é semelhante a pimenta malagueta </h2>
            <span> R$ 30,90 </span>
            
        </div>

        <div class="card">
           <div class="card-img">
                <img src="https://i0.wp.com/acheisuareceita.com.br/wp-content/uploads/2023/12/imagem_2023-12-20_154324814.png?fit=1024%2C683&ssl=1" alt="">
            </div>
            <h1> Pizza de Sorvete</h1>
            <h2> Massa de biscoito, creme de morango, crispy de cacau, balas e raspas de chocolate branco, sorvete de baunilha. </h2>
            <span> R$ 34,99 </span>
           
        </div>
    </div>
    
        <div class="container-card" data-aos="fade-right"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine">

        <div class="card">
           <div class="card-img">
                <img src="https://static.itdg.com.br/images/1200-675/ab93c09d82d7004b7c440fe5d3d734ad/131483-original.jpg" alt="">
            </div>
            <h1> Pizza de M&M</h1>
            <h2> Ganache de chocolate, raspas de chocolate e cobertura de M&M's®.</h2>
            <span> R$ 38,50 </span>
            
        </div>


        <div class="card">
           <div class="card-img">
                <img src="https://uploads.metropoles.com/wp-content/uploads/2021/12/06093057/refrigerante-1.jpg" alt="">
            </div>
            <h1> Coca-cola</h1>
            <h2> É feito a partir de água gaseificada, açúcar, extrato de noz de cola e cafeína.  </h2>
            <span> R$ 6,99 </span>
            
        </div>

        <div class="card">
           <div class="card-img">
                <img src="https://s2-oglobo.glbimg.com/D1mhYfFyuNhCJ-YXkcUucDWsgbc=/0x0:5760x3840/888x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_da025474c0c44edd99332dddb09cabe8/internal_photos/bs/2023/W/c/MTI3DXTZyxtIB0wv4mCA/fresh-orange-juice-glass-dark-background.jpg" alt="">
            </div>
            <h1> Suco de Laranja </h1>
            <h2> Sem adição de água, açúcares ou conservantes. Produto produzido a partir da extração das partes comestíveis de frutas sadias e maduras. </h2>
            <span> R$ 5,90 </span>
           
        </div>
    </div>
       
    <!-- PARALLAX -->

    <div class="wrapper">
                <main>
                    <section class="modulo parallax parallax-1">
                        <h1> Pizza com sabor de lar! </h1>
                    </section>
        


              <!-- FORMULARIO CLIENTES -->
<section class="modulo content">

    <section class="home" id="user">
    <div class="wrapper-login">
        <h2> Cadastrar </h2>
       <form action="" method="post">

        <div class="input-group">
        <div class="input-box">
                <span class="icon"> <i class="fa-regular fa-user"></i></span>
                <p> Nome:</p> <input type="text" name="nome" id="" required autocomplete="off" placeholder="insira seu Nome">
            
            </div>

            <div class="input-box">
                <span class="icon"> <i class="fa-solid fa-envelope"></i></span>
                <p>E-mail:</p> <input type="email" name="email" id="" placeholder="Insira seu E-mail">
            </div>

            <div class="input-box">
                <span class="icon"> <i class="fa-solid fa-lock"></i></span>
                <p>Senha:</p> <input type="password" name="senha" id="" placeholder="Insira sua senha"> 
            </div>

            <!-- PEDIDOS -->

            <div class="wrapper-longin">
            <h2> Pedido </h2>
       <form action="" method="post">
        <div class="input-group"></div>
            <div class="input-box">
                <span class="icon"></span>
                <p>Endereço:</p> <input type="text" name="endereco" id="" placeholder="Insira seu endereço">
            </div>

            <div class="input-box">
                <span class="icon"></i></span>
                <p>Descrição:</p> <input type="text" name="descricao" id="" placeholder="Escolha o sabor da pizza"> 
            </div>

            <div class="input-box">
                <span class="icon"></span>
                <p>Tamanho:</p> <input type="text" name="tamanho" id="" placeholder="Tamanho da Pizza"> 
            </div>
                                 
            <div class="input-box">
                <span class="icon"></span>
                <p>Telefone:</p> <input type="number" name="telefone" id="" placeholder="Insira seu telefone"> 
            </div>
            <button type="submit" class="btn-form">
    Cadastrar
</button>
        </form>
    </div>
</div>
</div>
</section>
<!-- <button type="submit" class="btn-form">
    Cadastrar
</button> -->
</section>

                
               <!-- FOOTER----------------- -->
<footer>
    
    <div class="icon-social" id="contato">
        <div class="edu">
            <p> Eduarda </p>
            <div class="icones">
                <a href="https://www.linkedin.com/in/eduarda-souza-3157942b0/"> <i class="fa-brands fa-linkedin-in"> </i> </a>
        
                <a href="https://github.com/EduuhSouza"> <i class="fa-brands fa-github"></i> </a>
            </div>
       
    </div>
    
    <div class="footer-bottom">
        Desenvolvido por Eduarda Souza e Júlia Souza | Desenvolvimento Web Instituto da Oportunidade Social | 2024
    </div>

    <div class="ju">
        <p> Julia </p>
        <div class="icones">
            <a href="https://github.com/JuuhSouza"> <i class="fa-brands fa-github"></i></a>
        
            <a href="https://www.linkedin.com/in/j%C3%BAlia-souza-0577572b2/"> <i class="fa-brands fa-linkedin-in"></i></a>
        </div>
  
    </div>
</div>

</footer>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dname = "souzapizzaria";

//criar conexão 

$conn = new mysqli($servername, $username, $password, $dname);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST ["email"];
    $senha = password_hash($_POST ["senha"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO clientes (nome, email, senha) VALUES ('$nome',
    '$email', '$senha')";

//sucesso ou erro
    if($conn->query($sql) === true){
        echo "<p>Novo registro criado com sucesso <p>" ;
    } else{
        echo "<p>Erro<p>" . $sql . "<br>" . $conn->error;
    }
}

/* pedidos */

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $endereco = $_POST ["endereco"];
    $descricao = $_POST ["descricao"];
    $tamanho = $_POST ["tamanho"];
    $telefone = password_hash($_POST ["telefone"], PASSWORD_DEFAULT);

    $sql2 = "INSERT INTO pedidos (endereco,descricao,tamanho,telefone) VALUES ('$endereco','$descricao', '$tamanho','$telefone')";

//sucesso ou erro
    if($conn->query($sql2) === true){
        echo "Novo registro criado com sucesso";
    } else{
        echo "Erro" . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

?>

<script>
    AOS.init();
  </script>
</body>
</html>