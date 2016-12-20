<style>
#login{
   width: 200px;
   background: rgba(0,0,0,0.4);
   padding-top: 15px;
   padding-bottom: 10px;
   border-radius: 5px;
   float:right;
   margin-top: 70px;
}
@media screen and (max-width: 700px) {
   #login {
      width: 100%;
      margin-top: 100px;
   }
}
#login table, #login table tr, #login table td {
   width: 100%;
   text-align: center;
   margin: 0;
   padding: 0;
}
#login table input {
   width: 180px;
   margin: 0px;
   opacity: 0.6;
}
#login a {
   text-decoration: none;
   color: lightblue;
}
</style>
<div id="login">
 <form method="POST" action="/logme.php">
  <table>
   <tr>
    <td><input name="name" type="text" placeholder="email"></input><br></td>
   </tr><tr>
    <td><input name="pass" type="password" placeholder="****"></input><br></td>
   </tr><tr>
    <td><input type="submit" value="Přihlásit se"></input><br></td>
   </tr><tr>
    <td>Ještě nemáte účet? <a href="/register">registrace</a><br><a href="/password-reset">zapoměli jste heslo?</a></td>
   </tr>
  </table>
 </form>
</div>
