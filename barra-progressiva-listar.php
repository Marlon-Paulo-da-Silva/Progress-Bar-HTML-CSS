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
        width: 76%;
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


  </style>
</head>
<body>
  <div class="container">
    <input type="radio" name="profile" id="profile" class="profile" checked >
    <input type="radio" name="settings" id="settings" class="settings" >
    <input type="radio" name="post" id="post"  >
    <input type="radio" name="books" id="books"  >
    <div class="head">
      <ul class="nav">
        <li class="st stl active">
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
</body>
</html>