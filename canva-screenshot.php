<!DOCTYPE html>
<html>
<head>
        <style>div#photo {
    width: 400px;
    background: #8f2323;
    color: white;
    padding: 20px;
    border-radius: 20px;
}
                </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 
</head>
<body>
<div id="photo">
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
</div>
<button id="download">Click</button>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
	 
	 



<script type="text/javascript">
   
   jQuery(document).ready(function(){
       jQuery("#download").click(function(){
		   screenshot();
	   });
   });

   function screenshot(){
	   html2canvas(document.getElementById("photo")).then(function(canvas){
          downloadImage(canvas.toDataURL(),"UsersInformation.png");
	   });
   }

   function downloadImage(uri, filename){
	 console.log(uri);
   }

   


</script>
</body>
</html>
