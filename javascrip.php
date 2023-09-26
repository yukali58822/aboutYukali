<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pei-Chen的簡介</title>
    <style type="=text/css">
        *{font-family: "標楷體";margin-left: auto;margin-right: auto;}
        h1{color:blue;font-size: 55px;}
        h2{color:#33ff33; font-size:40px;}
    </style>

    <script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h2text").innerText = "Pei-Chen Xie";
		}
	</script>
</head>

<body>
    <table width="88%">
        <tr>
            <td >
                <img src="cliff.jpg" width="110%" id="pic" onmouseover="change1()" onmouseout="change2()"</img>
            </td>
            
			<td>
				<h1>謝佩宸</h1>
				<h2 style="color: #4906c6";>Pei-Chen Xie</h2>
			</td>

	    </table>

        <table border="3" >
            <tr>
                <td>
                    個人主頁: <a href="https://drive.google.com/drive/u/0/my-drive">https://drive.google.com/drive/u/0/my-drive</a><br>     
                    我的FB: <a href="https://www.facebook.com/profile.php?id=100044780500658">https://www.facebook.com/profile.php?id=100044780500658</a><br>
                    Tel: <a href="tel:08-000-000">08-000-000</a><br>
                    E-Mail: <a href="s1115048@pu.edu.tw">s1115048@pu.edu.tw</a><br>
                </td>
                        
                <td>
                大象席地而坐電影配樂<br>
                <audio controls>
                <source src="elephant.mp3" type="audio/mP3">
                </audio><br>
    
                </td>
                <td>
                不要去臺灣<br>
                <iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
                </td>
        
            </tr>

        

    </table>
    <br>

    <?php echo date("Y-m-d") ?>
</body>
</html>