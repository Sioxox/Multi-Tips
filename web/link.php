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
		
		var prevSrc = $('#link').prop("defaultValue");
		setInterval(function loop() {
			$('#link').val($('#link').prop("defaultValue") + user() + favicon() + title() + color() + checkbox());
			if(prevSrc != ($('#link').prop("defaultValue") + user() + favicon() + title() + color() + checkbox())) {
				$("#prev").attr("src", $('#link').prop("defaultValue") + user() + favicon() + title() + color() + checkbox());
				prevSrc = $('#link').prop("defaultValue") + user() + favicon() + title() + color() + checkbox();
			}
			
			var liSize = parseInt($(".ui-state-default").width());
			if(liSize/15 > 10 && liSize/15 < 22.4) {
				$(".ui-state-default").css("font-size", liSize/15 + "px");
			} else if(liSize/15 < 10) {
				$(".ui-state-default").css("font-size", "10px");
			} else {
				$(".ui-state-default").css("font-size", "22.4px");
			}
			
			$('td').attr("max-height", $("#sortable").height() + "px");
			console.log($("#sortable").height() + "px");
			
			$('input[type=text]').attr('size', function() {
				return this.value.length;
			});
		}, 100);
		
		$(function() {
			$("#sortable").sortable();
		});
		
		function iframeLoaded() {
			var prevFrame = document.getElementById("prev");
			prevFrame.width = $("table").width()/2 + "px";
			prevFrame.height = $("table").width()*0.5625 + "px";
			
			$('table').css({marginTop: '0'});
			$('table').css({marginTop: '-=200px'});
		}
	</script>
	<style>
		body {
			overflow: hidden;
		}
		
		input[type=text] {
			margin-bottom: 20px;
		}
		
		#streamlabstext, #cryptodonatetext, #streamquesttext, #streamtiptext, #tipeeetext, #tipeeestreamtext, #donationtrackertext, #patreontext, #gamewisptext, #muxytext, #streamelementstext, #gamingforgoodtext, #gathertext, #utiptext, #oneupcointext, #steamtradetext {
			display: none;
		}
		
		.ui-state-default {
			width: 100%;
		}
		
		#sortable {
			width: 100%;
		}
		
		td {
			padding: 0;
		}
		
		.ui-state-default input[type=text] {
			width: 80%;
			margin-bottom: auto;
		}
		
		#prev {
			border: 0;
			-webkit-transform:scale(0.5);
			-moz-transform:scale(0.5);
			-o-transform:scale(0.5);
			-ms-transform:scale(0.5);
		}
	</style>
</head>
	<body>
		<input id="link" type="text" size="160" value="https://sioxox.tv/stream/tips" readonly><input type="button" value="Copier" onClick="copy()"><br>
		<input id="user" type="text" placeholder="User" required><br>
		<input id="favicon" type="text" placeholder="Favicon link"><br>
		<input id="title" type="text" placeholder="Title" required><br>
		<input id="color" type="text" placeholder="HTML Color" maxlength="7"><br>
		
		<table id="table" width="100%">
			<tr>
				<td width="100%">
					<ul id="sortable">
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="streamlabs" type="checkbox" value="&streamlabs=1">Streamlabs</label><br>
							<input id="streamlabstext" type="text" placeholder="StreamLabs User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="cryptodonate" type="checkbox" value="&cryptodonate=1">CryptoDonate.io</label><br>
							<input id="cryptodonatetext" type="text" placeholder="CryptoDonate User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="streamquest" type="checkbox" value="&streamquest=1">StreamQuest</label><br>
							<input id="streamquesttext" type="text" placeholder="StreamQuest User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="streamtip" type="checkbox" value="&streamtip=1">StreamTip</label><br>
							<input id="streamtiptext" type="text" placeholder="StreamTip User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="tipeee" type="checkbox" value="&tipeee=1">Tipeee</label><br>
							<input id="tipeeetext" type="text" placeholder="Tipeee User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="tipeeestream" type="checkbox" value="&tipeeestream=1">TipeeeStream</label><br>
							<input id="tipeeestreamtext" type="text" placeholder="TipeeeStream User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="donationtracker" type="checkbox" value="&donationtracker=1">Donation-Tracker</label><br>
							<input id="donationtrackertext" type="text" placeholder="Donation-Tracker User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="patreon" type="checkbox" value="&patreon=1">Patreon</label><br>
							<input id="patreontext" type="text" p<laceholder="Patreon User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="gamewisp" type="checkbox" value="&gamewisp=1">GameWisp</label><br>
							<input id="gamewisptext" type="text" placeholder="GameWisp User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="muxy" type="checkbox" value="&muxy=1">Muxy</label><br>
							<input id="muxytext" type="text" placeholder="Muxy User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="streamelements" type="checkbox" value="&streamelements=1">StreamElements</label><br>
							<input id="streamelementstext" type="text" placeholder="StreamElements User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="gamingforgood" type="checkbox" value="&gamingforgood=1">GamingForGood</label><br>
							<input id="gamingforgoodtext" type="text" placeholder="GamingForGood User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="gather" type="checkbox" value="&gather=1">Gather</label><br>
							<input id="gathertext" type="text" placeholder="Gather User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="utip" type="checkbox" value="&utip=1">uTip</label><br>
							<input id="utiptext" type="text" placeholder="uTip User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="oneupcoin" type="checkbox" value="&oneupcoin=1">1UpCoin</label><br>
							<input id="oneupcointext" type="text" placeholder="1UpCoin User">
						</li>
						<li class="ui-state-default">
							<span class="ui-icon ui-icon-arrowthick-2-n-s"></span><label id="tips-title"><input id="steamtrade" type="checkbox" value="&steamtrade=1">Steam Trade (En dev)</label><br>
							<input id="steamtradetext" type="text" placeholder="SteamTrade Link">
						</li>
					</ul>
				</td>
				<td width="100%">
					<iframe id="prev" onload="iframeLoaded()"></iframe>
				</td>
			</tr>
		</table>
		
		<a href="https://github.com/Sioxox/Multi-Stream-Tips"><span id="github" style="position: absolute; bottom: 10px; left: 10px;">GitHub</span></a>
		<a href="https://sioxox.tv/stream/tips/?user=Sioxox&favicon=https://www.favicon-generator.org/download/2018-03-16/f59c8232f57809a14f742571307f1c43.ico&title=Sioxox%20Tips&streamlabs=1&cryptodonate=1&tipeee=1"><span id="sioxox-tips" style="position: absolute; bottom: 10px; left: 50%;">Faire un don</span></a>
		<span id="copyright" style="position: absolute; bottom: 10px; right: 10px;">Sioxox © 2018</span>
	</body>
</html>