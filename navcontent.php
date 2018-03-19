<style type="text/css">
	/* Add a black background color to the top navigation */
.topnav {
    background-color: white;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ccc;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #f3f3f3;
    color: black;
}


.disp {
  display:  inline-block;
  width: 200px;
}

</style>
<div class="topnav">
  <form method="POST" name="electromici">
    <input class="disp buttons" type="submit" name="electromici" value="Electrocasnice mici">
  </form>
  <form method="POST" name="electromari">
  <input class="disp buttons" type="submit" name="electromari" value="Electrocasnice mari">
</form>
  <form method="POST" name="telefoane" >
  <input class="disp buttons" type="submit" name="telefoane" value="Telefoane">
</form>
  <form method="POST" name="televizoare" >
  <input class="disp buttons" type="submit" name="televizoare" value=" Televizoare">
</form>
</div>