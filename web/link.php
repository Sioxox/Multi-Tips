<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Éditeur Stream Tips</title>
	<link rel="stylesheet" href="./ressources/css/link.css" type="text/css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
		
		function favicon() {
			if($('#favicon').val() != "") {
				return "&favicon=" + $('#favicon').val().replaceAll(" ", "%20");
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
				return "&color=" + $('#color').val().replaceAll("#", "");
			} else {
				return "";
			}
		}
		
		function checkbox() {
			var checked = [];
			var text = [];
			
			$(':checkbox:checked').each(function(i) {
				checked[i] = $(this).val();
				if(document.querySelector("#" + $(this).attr('id') + "text").value != "") {
					text[i] = "&" + $(this).attr('id') + "user=" + document.querySelector("#" + $(this).attr('id') + "text").value;
				}
				
				document.querySelector("#" + $(this).attr('id') + "text").style.display = "initial";
				document.querySelector("#" + $(this).attr('id')).closest("li").style.height = "50px";
			});
			
			$(':checkbox:not(:checked)').each(function(i) {
				document.querySelector("#" + $(this).attr('id') + "text").style.display = "none";
				document.querySelector("#" + $(this).attr('id')).closest("li").style.height = "25px";
			});
			
			return checked.join("") + text.join("");
		}
		
		setInterval(function loop() {
			$('#link').val($('#link').prop("defaultValue") + user() + favicon() + title() + color() + checkbox());
		}, 100);
		
		$(function() {
			$("#sortable").sortable();
		});
	</script>
	<style>
		#streamlabs, #cryptodonate, #streamquest, #streamtip, #tipeee, #tipeeestream, #donationtracker, #patreon, #gamewisp {
			
			vertical-align: sub;
		}
		
		#streamlabstext, #cryptodonatetext, #streamquesttext, #streamtiptext, #tipeeetext, #tipeeestreamtext, #donationtrackertext, #patreontext, #gamewisptext {
			display: none;
		}
	</style>
</head>
	<body>
		<input id="link" type="text" size="160" value="https://sioxox.tv/stream/tips" readonly><input type="button" value="Copier" onClick="copy()"><br><br>
		<input id="user" type="text" placeholder="User" required><br><br>
		<input id="favicon" type="text" placeholder="Favicon link"><br><br>
		<input id="title" type="text" placeholder="Title" required><br><br>
		<input id="color" type="text" placeholder="HTML Color" maxlength="7"><br><br>
		
		<ul id="sortable">
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="streamlabs" type="checkbox" value="&streamlabs=1">Streamlabs<br>
				<input id="streamlabstext" type="text" placeholder="StreamLabs User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="cryptodonate" type="checkbox" value="&cryptodonate=1">CryptoDonate.io<br>
				<input id="cryptodonatetext" type="text" placeholder="CryptoDonate User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="streamquest" type="checkbox" value="&streamquest=1">StreamQuest<br>
				<input id="streamquesttext" type="text" placeholder="StreamQuest User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="streamtip" type="checkbox" value="&streamtip=1">StreamTip<br>
				<input id="streamtiptext" type="text" placeholder="StreamTip User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="tipeee" type="checkbox" value="&tipeee=1">Tipeee<br>
				<input id="tipeeetext" type="text" placeholder="Tipeee User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="tipeeestream" type="checkbox" value="&tipeeestream=1">TipeeeStream<br>
				<input id="tipeeestreamtext" type="text" placeholder="TipeeeStream User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="donationtracker" type="checkbox" value="&donationtracker=1">Donation-Tracker<br>
				<input id="donationtrackertext" type="text" placeholder="Donation-Tracker User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="patreon" type="checkbox" value="&patreon=1">Patreon<br>
				<input id="patreontext" type="text" placeholder="Patreon User">
			</li>
			<li class="ui-state-default">
				<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input id="gamewisp" type="checkbox" value="&gamewisp=1">GameWisp<br>
				<input id="gamewisptext" type="text" placeholder="GameWisp User">
			</li>
		</ul>
		
		<a href="https://github.com/Sioxox/Multi-Stream-Tips"><span id="github" style="position: absolute; bottom: 10px; left: 10px;">GitHub</span></a>
		<a href="https://sioxox.tv/stream/tips/?user=Sioxox&title=Sioxox%20Tips&streamlabs=1&cryptodonate=1&tipeee=1"><span id="sioxox-tips" style="position: absolute; bottom: 10px; margin: auto; width: 100%; text-align: center;">Faire un don</span></a>
		<span id="copyright" style="position: absolute; bottom: 10px; right: 10px;">Sioxox © 2018</span>
	</body>
</html>