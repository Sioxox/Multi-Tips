<?php
if(empty($_GET['title'])) {
	$title = $_GET['user'];
} else {
	$title = $_GET['title'];
}

if($_GET['streamlabs'] != "1") {
	echo "<style>#streamlabs { display: none; }</style>";
}
if($_GET['cryptodonate'] != "1") {
	echo "<style>#cryptodonate { display: none; }</style>";
}
if($_GET['streamquest'] != "1") {
	echo "<style>#streamquest { display: none; }</style>";
}
if($_GET['streamtip'] != "1") {
	echo "<style>#streamtip { display: none; }</style>";
}
if($_GET['tipeee'] != "1") {
	echo "<style>#tipeee { display: none; }</style>";
}
if($_GET['tipeeestream'] != "1") {
	echo "<style>#tipeeestream { display: none; }</style>";
}
if($_GET['donationtracker'] != "1") {
	echo "<style>#donationtracker { display: none; }</style>";
}
if($_GET['patreon'] != "1") {
	echo "<style>#patreon { display: none; }</style>";
}
if($_GET['gamewisp'] != "1") {
	echo "<style>#gamewisp { display: none; }</style>";
}
if($_GET['muxy'] != "1") {
	echo "<style>#muxy { display: none; }</style>";
}
if($_GET['streamelements'] != "1") {
	echo "<style>#streamelements { display: none; }</style>";
}
if($_GET['gamingforgood'] != "1") {
	echo "<style>#gamingforgood { display: none; }</style>";
}
if($_GET['gather'] != "1") {
	echo "<style>#gather { display: none; }</style>";
}


if(empty($_GET['streamlabsuser'])) {
	$streamlabsuser = strtolower($_GET['user']);
} else {
	$streamlabsuser = strtolower($_GET['streamlabsuser']);
}
if(empty($_GET['cryptodonateuser'])) {
	$cryptodonateuser = strtolower($_GET['user']);
} else {
	$cryptodonateuser = strtolower($_GET['cryptodonateuser']);
}
if(empty($_GET['streamquestuser'])) {
	$streamquestuser = strtolower($_GET['user']);
} else {
	$streamquestuser = strtolower($_GET['streamquestuser']);
}
if(empty($_GET['streamtipuser'])) {
	$streamtipuser = strtolower($_GET['user']);
} else {
	$streamtipuser = strtolower($_GET['streamtipuser']);
}
if(empty($_GET['tipeeeuser'])) {
	$tipeeeuser = strtolower($_GET['user']);
} else {
	$tipeeeuser = strtolower($_GET['tipeeeuser']);
}
if(empty($_GET['tipeeestreamuser'])) {
	$tipeeestreamuser = strtolower($_GET['user']);
} else {
	$tipeeestreamuser = strtolower($_GET['tipeeestreamuser']);
}
if(empty($_GET['donationtrackeruser'])) {
	$donationtrackeruser = strtolower($_GET['user']);
} else {
	$donationtrackeruser = strtolower($_GET['donationtrackeruser']);
}
if(empty($_GET['patreonuser'])) {
	$patreonuser = strtolower($_GET['user']);
} else {
	$patreonuser = strtolower($_GET['patreonuser']);
}
if(empty($_GET['gamewispuser'])) {
	$gamewispuser = strtolower($_GET['user']);
} else {
	$gamewispuser = strtolower($_GET['gamewispuser']);
}
if(empty($_GET['muxyuser'])) {
	$muxyuser = strtolower($_GET['user']);
} else {
	$muxyuser = strtolower($_GET['muxyuser']);
}
if(empty($_GET['streamelementsuser'])) {
	$streamelementsuser = strtolower($_GET['user']);
} else {
	$streamelementsuser = strtolower($_GET['streamelementsuser']);
}
if(empty($_GET['gamingforgooduser'])) {
	$gamingforgooduser = strtolower($_GET['user']);
} else {
	$gamingforgooduser = strtolower($_GET['gamingforgooduser']);
}
if(empty($_GET['gatheruser'])) {
	$gatheruser = strtolower($_GET['user']);
} else {
	$gatheruser = strtolower($_GET['gatheruser']);
}



if(!empty($_GET['color'])) {
	$color = $_GET['color'];
}

$i=0;

foreach($_GET as $key => $value) {
	if($value == 1) {
		echo "<style>ul li#".$key." { order: ".$i++."; }</style>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="<?php echo $_GET['favicon']; ?>">
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="./ressources/css/index.css" type="text/css">
	<style>
		.category .category_frame-left-bottom, .category .category_frame-left-top, .category .category_frame-right-bottom, .category .category_frame-right-top {
			border-color: <?php echo "#".$color.";" ?>
		}
		
		.category a:hover .category_title {
			color: <?php echo "#".$color.";" ?>
		}
	</style>
</head>
	<body>
		<div class="shell" style="position: relative; top: 200px;">
			<ul class="list-categories">
				<li id="streamlabs">
					<div class="category">
						<a href="https://streamlabs.com/<?php echo $streamlabsuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/streamlabs.gif" alt="StreamLabs">
							</div>
							<div class="category_title">
								<h4>StreamLabs</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="cryptodonate">
					<div class="category">
						<a href="https://cryptodonate.io/<?php echo $cryptodonateuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/cryptodonate.png" alt="CryptoDonate.io">
							</div>

							<div class="category_title">
								<h4>CryptoDonate.io</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="streamquest">
					<div class="category">
						<a href="https://streamquest.com/channels/<?php echo $streamquestuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/streamquest.gif" alt="StreamQuest">
							</div>

							<div class="category_title">
								<h4>StreamQuest</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="streamtip">
					<div class="category">
						<a href="https://streamtip.com/t/<?php echo $streamtipuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/streamtip.png" alt="StreamTip">
							</div>
							<div class="category_title">
								<h4>StreamTip</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="tipeee">
					<div class="category">
						<a href="https://tipeee.com/<?php echo $tipeeeuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/tipeee.png" alt="Tipeee">
							</div>
							<div class="category_title">
								<h4>Tipeee</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="tipeeestream">
					<div class="category">
						<a href="https://tipeeestream.com/<?php echo $tipeeestreamuser?>/tip">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/tipeeestream.png" alt="TipeeeStream">
							</div>
							<div class="category_title">
								<h4>TipeeeStream</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="donationtracker">
					<div class="category">
						<a href="https://donation-tracker.de/donate/<?php echo $donationtrackeruser?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/donationtracker.png" alt="Donation-Tracker">
							</div>
							<div class="category_title">
								<h4>Donation-Tracker</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="patreon">
					<div class="category">
						<a href="https://patreon.com/<?php echo $patreonuser?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/patreon.png" alt="Patreon">
							</div>
							<div class="category_title">
								<h4>Patreon</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="gamewisp">
					<div class="category">
						<a href="https://gamewisp.com/<?php echo $gamewispuser?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/gamewisp.png" alt="GameWisp">
							</div>
							<div class="category_title">
								<h4>GameWisp</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="muxy">
					<div class="category">
						<a href="https://u.muxy.io/tip/<?php echo $muxyuser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/muxy.png" alt="Muxy">
							</div>
							<div class="category_title">
								<h4>Muxy</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="StreamElements">
					<div class="category">
						<a href="https://streamelements.com/<?php echo $streamelementsuser ?>/tip">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/streamelements.png" alt="StreamElements">
							</div>
							<div class="category_title">
								<h4>StreamElements</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="GamingForGood">
					<div class="category">
						<a href="https://www.gamingforgood.net/s/<?php echo $gamingforgooduser ?>/widget">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/gamingforgood.png" alt="GamingForGood">
							</div>
							<div class="category_title">
								<h4>GamingForGood</h4>
							</div>
						</a>
					</div>
				</li>
				<li id="Gather">
					<div class="category">
						<a href="https://gather.operaevent.co/tips/<?php echo $gatheruser ?>">
							<div class="category_frame">
								<div class="category_frame-left-top"></div>
								<div class="category_frame-right-top"></div>
								<div class="category_frame-right-bottom"></div>
								<div class="category_frame-left-bottom"></div>
							</div>
							<div class="category_image">
								<img width="216" height="241" src="./ressources/images/gather.png" alt="Gather">
							</div>
							<div class="category_title">
								<h4>Gather</h4>
							</div>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</body>
</html>