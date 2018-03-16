<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Éditeur Stream Tips</title>
	<link rel="stylesheet" href="./ressources/css/edit.css" type="text/css" media="all">
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
		
		$(function() {
			$("#sortable").sortable();
			$("#sortable").disableSelection();
		});
	</script>
	<style>
		#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
		#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
		#sortable li span { position: absolute; margin-left: -1.3em; }
	</style>
</head>
	<body>
		<input id="link" type="text" size="160" value="https://sioxox.tv/stream/tips" readonly><input type="button" value="Copier" onClick="copy()"><br><br>
		<input id="user" type="text" placeholder="User" required><br><br>
		<input id="title" type="text" placeholder="Title" required><br><br>
		<input id="color" type="text" placeholder="HTML Color" maxlength="7"><br><br>
		
		<ul id="sortable">
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&streamlabs=1">Streamlabs<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&cryptodonate=1">CryptoDonate.io<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&streamquest=1">StreamQuest<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&streamtip=1">StreamTip<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&tipeee=1">Tipeee<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&tipeeestream=1">TipeeeStream<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&donationtracker=1">Donation-Tracker<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&patreon=1">Patreon<br></li>
			<li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span><input type="checkbox" value="&gamewisp=1">GameWisp<br></li>
		</ul>
		
		<a href="https://github.com/Sioxox/Multi-Stream-Tips"><span id="github" style="position: absolute; bottom: 10px; left: 10px;">GitHub</span></a>
		<span id="copyright" style="position: absolute; bottom: 10px; right: 10px;">Sioxox © 2018</span>
	</body>
</html>