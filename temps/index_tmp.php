<!doctype html>
<html>
<head>

<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="images/icons.ico">
<style>
      
	ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  /*content: "\2B06";*/
  content: url("55.jpg");
  color: black;
  display: inline-block;
  margin-right: 2px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
	
    </style>
     <!-- <script src="tinymce/tinymce.min.js"></script>
 <script>tinymce.init({selector:'textarea',plugins: "media link image code preview"});</script> -->
 
	 <link href="css/floating-labels.css" rel="stylesheet">
<title>Test Online</title>
</head>

<body>

<div class="container-fluid">	
	<div class="row">
		<div class="col-2">
	<ul id="myUL">
  <li><span class="caret"> Beverages</span>
    <ul class="nested">
      <li> <a href="">Water</a> 
      <div class="progress">
  			<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"><b>50%</b></div>
</div></li>
      <li> <a href="">Coffee</a></li>
      <li><span class="caret">Tea</span>
        <ul class="nested">
          <li>Black Tea</li>
          <li>White Tea</li>
          <li><span class="caret">Green Tea</span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
            </ul>
          </li>
        </ul>
      </li>  
    </ul>
  </li>
		<li>asdasd ˚‚‡‚˚‡ ° ¢  &#1179;‚‡?‚</li>
</ul>	 
		</div>
	<div class="col-10">Many of our components require the use of JavaScript to function. Specifically, they require jQuery, Popper.js, and our own JavaScript plugins. Place the following  s near the end of your pages, right before the closing   tag, to enable them. jQuery must come first, then Popper.js, and then our JavaScript plugins.
We use jQueryís slim build, but the full version is also supported.</div>
		 
	</div>
	</div>
	<br>
	 
 
<div id="aa"></div>
<script>
for(let i = 1; i<=4; i++){
	f = document.getElementsByTagName("td")[i].innerHTML
	document.getElementById("aa").innerHTML = document.getElementById("aa").innerHTML + f
}



</script>

<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>

	
<script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>