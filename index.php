<!DOCTYPE html>
<html lang="en">
   <head>
      <title>GFG- Store Data</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <style>
      .bt {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100px;
  border: 0px solid green; 
}
body {
  background-image: url('https://img.freepik.com/premium-photo/blurred-birthday-cake-with-candles-light-background_392895-300148.jpg?w=2000');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}



      </style>
   </head>
   <body>
   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
      <center>
         <br><br>
      <h1 style="color:darkgoldenrod"><b>CAKES N CREAMS</b></h1><br>
      <h3 style="color:brown"><b> CAKES TO SATISFIES YOUR SWEETTOOTH</b></h3>
      <br>
      <marquee behavior="scroll" direction="left">
    <img src="https://www.littlesweetbaker.com/wp-content/uploads/2019/07/chiffon-cake-3.jpg" width="120" height="80" alt="Natural" />   <img src="https://yourguardianchef.com/wp-content/uploads/2021/01/apple-cake.jpg" width="120" height="80" alt="Natural" />  <img src="https://livforcake.com/wp-content/uploads/2017/07/black-forest-cake-thumb.jpg" width="120" height="80" alt="Natural" />  <img src="https://www.cookingclassy.com/wp-content/uploads/2022/04/easy-chocolate-cake-2.jpg" width="120" height="80" alt="Natural" />  <img src="https://img.cakeway.in/products/a3229617_heart-shaped-white-forest-cake_1.webp" width="120" height="80" alt="Natural" />  <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Red_Velvet_Cake_Waldorf_Astoria.jpg" width="120" height="80" alt="Natural" />
      <img src="https://www.piesandtacos.com/wp-content/uploads/2023/02/pastries-lemon-curd-mascarpone-5-scaled.jpg" width="120" height="80" alt="Natural" /><img src="https://static.onecms.io/wp-content/uploads/sites/19/2018/02/13/pastries-hero-2000.jpg" width="120" height="80" alt="Natural" /><img src="https://www.imperialsugar.com/sites/default/files/recipe/Puff-Pastry-Cream-Horns-Imperial.jpg" width="120" height="80" alt="Natural" /><br>
  </marquee>
  <marquee behavior="scroll" direction="left">
  </marquee>
        
         <form  name="myform" action="insert.php" method="post">
            <table>
             
<p>
               <tr><td><label for="READY-TO-EAT SLICE OF HEAVEN:"><b>READY-TO-EAT SLICE OF HEAVEN:</b></label></td>
               <td><input type="text" name="c_type" id="ctype" placeholder="LOVE AT FIRST BITE" required></td></tr>
            </p>
 
             
<p>
               <tr><td><label for="QUANTITY:"><b>QUANTITY:</b></label></td>
               <td><input type="text" name="c_qty" id="cqty" placeholder="QUANTITY OF CAKE" required></td></tr>
            </p>
 
             
<p>
               <tr><td><label for="NAME:"><b>NAME:</b></label></td>
               <td><input type="text" name="c_name" id="cname"  placeholder="CUSTOMER NAME" required></td></tr>
            </p>
 
             
<p>
               <tr><td><label for="MOBILE NUM:"><b>MOBILE NUM:</b></label></td>
               <td><input type="text" name="c_no" id="cno" placeholder="MOBILE NUMBER" required></td></tr>
            </p>
 
             
<p>
               <tr><td><label for="E-MAIL ID:"><b>E-MAIL ID:</b></label></td>
               <td><input type="text" name="c_mail" id="cmail" placeholder="CUSTOMER MAIL-ID" required></td></tr>
            </p>
<p>
               <tr><td><label for="YOUR THOUGHT ON OUR CAKE MAKES IT UNIQUE:"><b>YOUR THOUGHT ON OUR CAKE MAKES IT UNIQUE:</b></label></td>
               <td><input type="text" name="c_thought" id="cthought" placeholder="SHARE YOUR THOUGHTS" ></td></tr>
            </p> 
<p>
               <tr><td><label for="cakes"><b>WISHES FOR PERSONAL NEWYEAR:</b></label></td>
                  <td><select name="c_cakes" id="ccakes">
                     <option value="None-of-these" name="cakes">None-of-these</option>  
                     <option value="Happy Birthday, Super Woman" name="c_cakes">Happy Birthday, Super Woman</option>
                     <option value="Happy Birthday, I love you" name="c_cakes">Happy Birthday, I love you</option>
                     <option value="Happy Birthday to the best of friends" name="c_cakes">Happy Birthday to the best of friends</option>
                     <option value="Happy 1st birthday, Don't grow up too fast" name="c_cakes">Happy 1st birthday, Don't grow up too fast</option>
                     <option value="XOXO, Happy Birthday" name="c_cakes">XOXO, Happy Birthday</option>
                     <option value="Congrats on making it another year" name="c_cakes">Congrats on making it another year</option>
                  </select></td></tr>
</p>           
 
            <tr><td><div class="bt"><input type="submit" value="CONFIRM ORDER"></div></td></tr>
            <tr><td><a href="main.php"><b style="color:chartreuse">Home page</b></a></td></tr>
         </form>
         
      </center>
   
   </body>
</html>