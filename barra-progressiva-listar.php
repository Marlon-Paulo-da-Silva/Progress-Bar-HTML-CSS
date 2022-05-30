<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barra Progressiva</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    body {
      font-family: tahoma;
      overflow: hidden;
    }
    .container {
      margin: 150px auto;
      width: 80vw;
    }
    input {
      display: none;
      position: absolute;
    }
    .head {
      position: relative;
      width: 90%;
      margin: auto;
      height: 100px;
      margin-top: 60px;
      animation: trans .7s linear forwards;
    }
    ul.nav {
      padding-top: 15px;
      z-index: 100;
      position: absolute;
      width: 100%;
      margin-top: -40px;
    }
    ul.nav li {
      list-style: none;
      float: left;
      width: 33%;
      text-align: center;
      color: #aaa;
      text-transform: uppercase;
      font-size: 11px;
      cursor: pointer;
      font-weight: 700;
      transition: all .3s ease;
      vertical-align: middle;
      height: 60px;
      position: relative;

    }

    ul.nav li::before {
      content: '';
      width: 25px;
      height: 25px;
      border: 2px solid #aaa;
      border-radius: 50%;
      margin: auto;
      display: block;
      transition: all .3s ease;
    }
    ul.nav li:hover::before{
      border: 2px solid #fff;
      background: #777;
    }
    ul.nav li .inner{
      position: absolute;
      width: 100%;
      bottom: 0;
      font-size: 14px;
      font-weight: bolder;
      
    }
    ul.nav li.active,
    ul.nav li:hover{
      color: #444;
      
    }
    ul.nav li::after {
      content: '';
      display: block;
      width: 7px;
      height: 7px;
      background: #777;
      border-radius: 50%;
      margin: auto;
      border: 7px solid #fff;
      margin-top: 40px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
    }
    ul.nav li:hover::after,
    ul.nav li.active::after{
      background: #2CA62F;
    }
    .line {
        width: 66%;
        margin: auto;
        background: #eee;
        height: 7px;
        position: absolute;
        left: 16.5%;
        top: 52px;
        z-index: 1;
        border-radius: 50px;
    }
    .line span {
      content: '';
      width: 0%;
      height: 100%;
      background-image: linear-gradient(to right, #2CA62F 0%, #F8C300 100%);
      position: absolute;
      z-index: 2;
      border-radius: 50px;
      transition: all .8s ease;
    }

    .content {
      position: relative;
      display: flex;
      justify-content: center;
      animation: anim .7s linear forwards;
      /* flex-direction: column; */
    }

    section {
      width: 70%;
      margin: auto;
      background-image: linear-gradient(to right, #2CA62F 0%, #F8C300 100%);
      border-radius: 4px;
      padding: 30px;
      color: #fff;
    }
    section span {
      font-size: 3rem;
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }
    h1 {
      font-weight: 900;
      margin-top: 10px;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 4px;

    }
    section p {
      padding: 30px 40px;
      text-align: center;
      font-weight: bolder;
      font-size: 13px;

    }

    /* Depois */
    .escolherimagem:checked ~ .head .nav li.st1::before,

    .comecarenvio:checked ~ .head .nav li.st1::before,
    .comecarenvio:checked ~ .head .nav li.st2::before,

    .finalizar:checked ~ .head .nav li.st1::before,
    .finalizar:checked ~ .head .nav li.st2::before,
    .finalizar:checked ~ .head .nav li.st3::before,

    .books:checked ~ .head .nav li.st1::before,
    .books:checked ~ .head .nav li.st2::before,
    .books:checked ~ .head .nav li.st3::before,
    .books:checked ~ .head .nav li.st4::before{
      border: 2px solid #fff;
      background: #2CA62F;
      transition: all .3s ease;
    }

    .comecarenvio:checked ~ .head .line span{
      width: 50%;
    }
    .finalizar:checked ~ .head .line span{
      width: 100%;
    }
    

    .escolherimagem-section,
    .account-section,
    .finalizar-section,
    .advanced-section{
      transform: scale(0);
      transform-origin: center bottom;
      transition: all .7s ease;
      position: absolute;
      top: 0;

    }
    .escolherimagem:checked ~ .content .escolherimagem-section,
    .comecarenvio:checked ~ .content .account-section,
    .finalizar:checked ~ .content .finalizar-section,
    .books:checked ~ .content .advanced-section{
      display: block;
      transform: scale(1);
      transform-origin: bottom;
    }

    @keyframes anim {
      0% {
        opacity: 0;
        transform: translateY(40px); 
      }
      50% {
        opacity: .5;
        transform: translateY(20px); 
      }
      100% {
        opacity: 1;
        transform: translateY(0px); 
      }
    }
    @keyframes trans {
      0% {
        opacity: 0;
        transform: translateY(-40px); 
      }
      50% {
        opacity: .5;
        transform: translateY(-20px); 
      }
      100% {
        opacity: 1;
        transform: translateY(0px); 
      }
    }


  </style>
</head>
<body>
  <div class="container">
    <input type="radio" checked  id="" class="escolherimagem"  name="bright">
    <input type="radio"  id="" class="comecarenvio" name="bright">
    <input type="radio"   id="" class="finalizar" name="bright">
    <div class="head">
      <ul class="nav">
        <li class="st st1 active">
          <h2 class="inner"><i class="fa fa-edit"></i>Escolher Imagem</h2>
        </li>
        <li class="st st2">
          <h2 class="inner"><i class="fa fa-edit"></i>Começar Envio</h2>
        </li>
        <li class="st st3">
          <h2 class="inner"><i class="fa fa-edit"></i>Finalizar</h2>
        </li>
      </ul>
      <div class="line">
        <span></span>
      </div>
    </div>
    <div class="content">
      <section class="escolherimagem-section">
        <span><i class="fa fa-edit"></i></span>
        <h1>Escolher Imagem</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
      <section class="comecarenvio-section">
        <span><i class="fa fa-edit"></i></span>
        <h1>Começar Envio</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
      <section class="finalizar-section">
        <span><i class="fa fa-edit"></i></span>
        <h1>Finalizar</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>  <script>
    $(".st1").click(function() {
      $(".escolherimagem").prop("checked", true);
    });
    $(".st2").click(function() {
      $(".comecarenvio").prop("checked", true);
    });
    $(".st3").click(function() {
      $(".finalizar").prop("checked", true);
    });
  </script>
</body>
</html>