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
      width: 25%;
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
        width: 2%;
        margin: auto;
        background: #eee;
        height: 7px;
        position: absolute;
        left: 11.5%;
        top: 52px;
        z-index: 1;
        border-radius: 50px;
    }
    .line span {
      content: '';
      width: 50%;
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
    .profile:checked ~ .head .nav li.st1::before,

    .settings:checked ~ .head .nav li.st1::before,
    .settings:checked ~ .head .nav li.st2::before,

    .post:checked ~ .head .nav li.st1::before,
    .post:checked ~ .head .nav li.st2::before,
    .post:checked ~ .head .nav li.st3::before,

    .books:checked ~ .head .nav li.st1::before,
    .books:checked ~ .head .nav li.st2::before,
    .books:checked ~ .head .nav li.st3::before,
    .books:checked ~ .head .nav li.st4::before{
      border: 2px solid #fff;
      background: #777;
      transition: all .3s ease;
    }

    .settings:checked ~ .head .line span{
      width: 190px;
    }
    .post:checked ~ .head .line span{
      width: 360px;
    }
    .books:checked ~ .head .line span{
      width: 550px;
    }

    .profile-section,
    .account-section,
    .post-section,
    .advanced-section{
      transform: scale(0);
      transform-origin: center bottom;
      transition: all .7s ease;
      position: absolute;
      top: 0;

    }
    .profile:checked ~ .content .profile-section,
    .settings:checked ~ .content .account-section,
    .post:checked ~ .content .post-section,
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
    <input type="radio" checked  id="" class="profile"  name="bright">
    <input type="radio"  id="" class="settings" name="bright">
    <input type="radio"   id="" class="post" name="bright">
    <input type="radio"   id="" class="books" name="bright">
    <div class="head">
      <ul class="nav">
        <li class="st st1 active">
          <h2 class="inner">Perfil</h2>
        </li>
        <li class="st st2">
          <h2 class="inner">Conta</h2>
        </li>
        <li class="st st3">
          <h2 class="inner">Publicação</h2>
        </li>
        <li class="st st4">
          <h2 class="inner">Avançado</h2>
        </li>
      </ul>
      <div class="line">
        <span></span>
      </div>
    </div>
    <div class="content">
      <section class="profile-section">
        <span><i class="fa fa-house"></i></span>
        <h1>perfil Section</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
      <section class="account-section">
        <span><i class="fa fa-user"></i></span>
        <h1>Conta Section</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
      <section class="post-section">
        <span><i class="fa fa-edit"></i></span>
        <h1>Publicação Section</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
      <section class="advanced-section">
        <span><i class="fa fa-cog"></i></span>
        <h1>Avançado Section</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt sequi dolore delectus nostrum eius, fugiat, provident numquam quia totam alias ab. Obcaecati saepe provident ratione aspernatur tempore ipsum impedit reiciendis!</p>
      </section>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>  <script>
    $(".st1").click(function() {
      $(".profile").prop("checked", true);
    });
    $(".st2").click(function() {
      $(".settings").prop("checked", true);
    });
    $(".st3").click(function() {
      $(".post").prop("checked", true);
    });
    $(".st4").click(function() {
      $(".books").prop("checked", true);
    });
  </script>
</body>
</html>