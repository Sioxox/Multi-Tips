<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Éditeur Stream Tips</title>
	<link rel="stylesheet" href="./ressources/css/edit.css" type="text/css" media="all">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
		function sleep(milliseconds) {
			var start = new Date().getTime();
			for (var i = 0; i < 1e7; i++) {
				if ((new Date().getTime() - start) > milliseconds){
					break;
				}
			}
		}
		
		String.prototype.replaceAll = function(search, replacement) {
			var target = this;
			return target.replace(new RegExp(search, 'g'), replacement);
		};
		
		function copy() {
			var copyText = document.getElementById("link");
			copyText.select();
			document.execCommand("copy");
		}
		
		function user() {
			if($('#user').val() != "") {
				return "?user=" + $('#user').val();
			} else {
				return "";
			}
		}
		
		function title() {
			if($('#title').val() != "") {
				return "&title=" + $('#title').val().replaceAll(" ", "%20");
			} else {
				return "";
			}
		}
		
		function color() {
			if($('#color').val() != "") {
				return "&color=" + $('#color').val();
			} else {
				return "";
			}
		}
		
		function checkbox() {
			var checked = [];
			$(':checkbox:checked').each(function(i) {
				checked[i] = $(this).val();
			});
			
			return checked.join("");
		}
		
		function loop() {
			$('#link').val($('#link').prop("defaultValue") + user() + title() + color() + checkbox());
		}
		
		setInterval(loop, 100);
	</script>
</head>
	<body>
		<input id="link" type="text" size="160" value="https://sioxox.tv/stream/tips" readonly><input type="button" value="Copier" onClick="copy()"><br><br>
		<input id="user" type="text" placeholder="User" required><br><br>
		<input id="title" type="text" placeholder="Title" required><br><br>
		<input id="color" type="text" placeholder="HTML Color" maxlength="7"><br><br>
		
		<input type="checkbox" value="&streamlabs=1">Streamlabs<br>
		<input type="checkbox" value="&cryptodonate=1">CryptoDonate.io<br>
		<input type="checkbox" value="&streamquest=1">StreamQuest<br>
		<input type="checkbox" value="&streamtip=1">StreamTip<br>
		<input type="checkbox" value="&tipeee=1">Tipeee<br>
		<input type="checkbox" value="&tipeeestream=1">TipeeeStream<br>
		<input type="checkbox" value="&donationtracker=1">Donation-Tracker<br>
		<input type="checkbox" value="&patreon=1">Patreon<br>
		<input type="checkbox" value="&gamewisp=1">GameWisp<br>
	</body>
</html>