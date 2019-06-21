<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>AJAX</title>
	<script>
		function find(){
			name = document.getElementById("name").value;
			if(name.length != 0){
					var xmlhttp = new XMLHttpRequest();
        			xmlhttp.onreadystatechange = function() {
        			if (this.readyState === 4 && this.status == 200) {
							document.getElementById("out").innerHTML  =  this.responseText;
							emt("name");
           				}
        			};
        			xmlhttp.open("GET", "backend.php?id="+name, true);//generating  get method link
        			xmlhttp.send();
					////ajax part
			}else{
			document.getElementById("out").innerHTML = "Enter a name";
			}
	}
		
		
	function emt(id){
	document.getElementById(id).value = "";
	}
	</script>
</head>

<body>
	<input type="number" placeholder="Enter name to search...." id="name">
	<input type="button" value="Find"  onClick="find();">
	
	<div id="out"></div>

</body>
</html>