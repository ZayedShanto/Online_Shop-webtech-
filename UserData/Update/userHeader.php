
<head>
<style>

#src{
  height:100px;
  width: 100%;
  margin: 0;
  background-color:slategrey;
}

input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 15%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}
#src {
  font-size: large;
  text-align: center;
  color: white;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: red;
}


#tab {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<ul>

  <li> <a href="http://localhost/projectFinal/UserData/userHome.php" class="active">Home</a></li>

  <li><a href="http://localhost/projectFinal/UserData/Update/update.html">Update Account Information</a></li>
  
  <li><a href="http://localhost/projectFinal/product/usr_ShowAll/showall.php">Show All Products</a></li>
  <li><a href="http://localhost/projectFinal/product/usr_Search/search.html">Search Product</a></li>
  <li><a href="http://localhost/ProjectFinal/order/cartPage.php">My Shopping Cart</a></li>

  <li><a href="http://localhost/projectFinal/UserData/xml/XMLu.html">About Us</a></li>
  <li><a href="http://localhost/projectFinal/signout.php">Sign Out</a></li>
</ul>

<div id="src">
  <br> 
  <form action="http://localhost/projectFinal/product/usr_Search/search.php" method="post">
     Search Products:
    <input type="text" name="productName" id="productName">
    <input type="submit" Value="Search" ></input>
</form>
</div>

