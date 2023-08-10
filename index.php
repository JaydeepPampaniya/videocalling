<!DOCTYPE html>
<html>

<head>
	<title>Video Calling Web App</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
	<script type="text/javascript" src="script.js"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Edu+SA+Beginner:wght@500&family=Roboto+Slab:wght@100;400&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Edu+SA+Beginner:wght@500&family=Roboto+Slab:wght@100;400&display=swap" rel="stylesheet">
</head>

<body>
	<div class="header">
		<img src="vp.png" alt="">
		<h1 id="h1">Video <span style="color: rgb(66, 168, 154)">Calling</span> Web App
			<p class="li"><a href="mailto:jaydeeppampaniya77@gmail.com">Contact us</a></p>
			<p class="li"><a id="datetime"></a><span> • </span><a id="timedate"></a></p>
		</h1>
	</div>
	<script src="time.js"></script>
	<div class="content">
		<p class="liti1"></p>
		<p class="liti2"></p>
		<p class="liti3"></p>
		<p class="google">Premium video meetings. <br>Now free for everyone.</p>
		<div class="box">
			<video class="from" id="localVideo" autoplay muted></video>
		</div>
		<div class="box">
			<video class="to" id="remoteVideo" autoplay controls></video>
		</div>
		<div class="box">
			<video class="to" id="remoteVideo" autoplay controls></video>
		</div>
		<div class="box">
			<video class="to" id="remoteVideo" autoplay controls></video>
		</div>
		<div class="box">
			<video class="to" id="remoteVideo" autoplay controls></video>
		</div>
		<div class="box">
			<video class="to" id="remoteVideo" autoplay controls></video>
		</div>
	</div>

	<div class="footer">
		<p class="foot"><span class="v">V</span><span class="c">C</span><span class="v">W</span><span class="v">A</span> all &copy;
			copyright reserved</p>
	</div>
</body>

</html>