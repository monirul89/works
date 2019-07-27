
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Refresh Using PHP & AJAX</title>
  <link href="css/style.css" type="text/css" rel="stylesheet"/>
</head>

<body>
  <div class="main">
    <div class="header">Insert Form Data In Database Without Page Refresh Using PHP & AJAX</div>
    <form action="insert.php" id="frmBox" method="post" onsubmit="return formSubmit();">
      <input type="text" name="name" class="inp" placeholder="Enter Name...">
      <input type="email" name="email" class="inp" placeholder="Enter Email...">
      <input type="text" name="phone" class="inp" placeholder="Enter Phone...">
      <input type="submit" name="submit" class="sub-btn" value="Submit">
      <h3 id="success"></h3>
    </form>
  </div>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  
  <script type="text/javascript">
	function formSubmit(){
		alert('in onsubmit');
		$.ajax({
			type:'POST',
			url:'insert.php',
			data:$('#frmBox').serialize(),
			success:function(response){
				$('#success').html(response);
			}
		});
		var form=document.getElementById('frmBox').reset();
		return  false;
	}
  </script>
</body>
</html>
