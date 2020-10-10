<!DOCTYPE html>
<html lang="en">
<head>
<title>Calebs phone services</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background-color: #f1f1f1;
}

.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.column {
  float: left;
  padding: 10px;
}

.column.side {
  width: 30%;
}

.column.center {
  width: 40%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.footer {
  background-color: #F1F1F1;
  text-align: center;
  padding: 10px;
}
img {
    height: 30%;
    width: 30%;
    display: block;
    margin-left: auto;
    margin-right: auto;    
}
form {
    margin-left: 90%;
}
hr {
  border-top: 1px #333;
}
</style>
</head>
<body>

<div class="header">
  <h1>Welcome!</h1>
  <p>Buy, sell, and repair phones here</p>
</div>

<div class="topnav">
  <a href="">Store</a>
  <a href="">Repair</a>
  <a href="">Sell</a>
  <a href="">About us</a>
  <a href="">Contact us</a>
</div>
    <img src="images/phone.jpg">
    <br>
    <hr>
    <br>
    <div class="mid">
        <h2>More store information coming in the future!</h2>
        <p>Feel free to subscribe for more updates on the right hand side!</p>
        <aside>
            <form>
                Get site updates
            <br>
            <br>
            First name:<br>
            <input type="text" name="firstname"><br>
            Last name:<br>
            <input type="text" name="lastname"><br>
            Email:<br>
            <input type="text" name="email">
            </form>
            <form>
            <input type="radio" name="gender" value="Android" checked> Android<br>
            <input type="radio" name="gender" value="Iphone"> Iphone<br>
            <input type="radio" name="gender" value="Other"> Other<br>
              <input type="submit" value="Submit">
            </form>

        </aside>
    </div>
    <br>
    <hr>
    <br>
<div class="row">
  <div class="column side">
    <h2>Repair a phone</h2>
    <p>Send in your phone and we'll repair it for you!</p>
    <p>Just click <a href="url"><bold>here</bold></a> for more information</p>
    <img src="images/repair.jpg">
  </div>
  
  <div class="column center">
    <h2>Buy a phone</h2>
    <p>We provide reliable, seller refurbished phones working as if they were brand new. <br>
    You can even buy brand new phones here!</p>
    <p>Click <a href="url"><bold>here</bold></a> to browse our assortment</p>
    <img src="images/buy.png">
  </div>
  
  <div class="column side">
    <h2>Sell your own</h2>
    <p>Just want to get a broken phone off your hands while receiving compensation to buy a new one?  Well sell us yours! Just give us a brief description of your phone and we'll send you an estimated return price.</p>
    <p>Click <a href="url"><bold>here</bold></a> to for more informationt</p>
        <img src="images/moolah.png">
  </div>
</div>

<div class="footer">
  <p>© 2020 Caleb Johnson. Hosted through Hostinger</p>
</div>
  
</body>
</html>
