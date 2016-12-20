<!DOCTYPE html>
<html><head>
   <meta charset="UTF-8">
   <base href="/rp/wwww/">
   <title>Registrace | Mrtvý neroní slzy - fantasy RPG</title>
   <style>
     html, body {width: 100%; height: 100%; padding: 0; margin: 0;}
     body {
        background: black url("img/register_back.jpg") no-repeat;
        background-position: center center;
        background-size: cover;
     }
   #register_form {
   position: absolute;
   bottom: 10px;
   width: 100%;
   color: white;
}
#register_form form {
   width: 350px;
   margin: 0 auto 0 auto;
   padding: 6px;
   border-radius: 5px;
   background: rgba(0,0,0,0.5);
}
#register_form input {
   margin: 4px;
}

   </style>

</head><body>
  <?php require('../temps/top-menu.php'); ?>
<div id="register_form">
  <form method="POST">  
    <table>
      <tr>
        <th>NICK</th>
        <td><input type="text" name="nick"></input></td>
      </tr>
      <tr>
        <th>EMAIL</th>
        <td><input type="email" name="email"></input></td>
      </tr>
      <tr>
        <th>HESLO</th>
        <td><input type="password" name="pass"></input></td>
      </tr>
      <tr>
        <th>HESLO ZNOVU</th>
        <td><input type="password" name="pass2"></input></td>
      </tr>
      <tr>
        <th> Captcha :P</th>
        <td> cumming soon :D</td>
      </tr>
      <tr>
         <th>Odesláním formuláře souhlasíte s podmínkami použití</th>
         <td><input type="submit" value="Odeslat"></input></td>
      </tr>
    </table>
  </form> 
</div>
</body></html>