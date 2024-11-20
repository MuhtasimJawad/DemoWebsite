
<html>

 <head>
	<title>Keyboards</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/keyboardpage.css">
 </head>

<body>

<div class="wrap">


<div id="homelogo">
<img alt="GAMERS ORB" src="img/gorb.png">
</div>

<form>
  <input type="text" name="search" placeholder="Search..">
</form>

<div id="menubar">

<ul>
   <li><a href="HomePage.html"><img border="0" alt="HOME" src="img/home2.png"></a></li>
   <li class="dropdown">
    <a href="#" class="dropbtn">Categories</a>
    <div class="dropdown-content">
      <a href="ActionGamePage.html">Action</a>
      <a href="#">RPG</a>
      <a href="#">Sports</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Gaming Accessories</a>
    <div class="dropdown-content">
      <a href="keyboardpage.html">Keyboard</a>
      <a href="#">Mouse</a>
      <a href="#">HeadSet</a>
    </div>
  </li>

   <li><a href="#">News</a></li>
</ul>

</div>


<div class="keyboardthumb">
<a href="#"><img src="img/keyboard1.png">
<h4>Logitech G213 Prodigy Gaming Keyboard</h4></a>
</div>


<div class="keyboardthumb">
  <a href="keyboardinfo.php?id=1"><img src="img/keyboard2.png">
<h4>Razer BlackWidow Chroma V2 Mechanical Gaming Keyboard</h4></a>
</div>



</div>

<footer>
<button class="BtoT" onclick="topFunction()">Back To Top</button>  
</footer>


<script type="text/javascript">
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>


</body>

</html>
