<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Candy - Chats are not dead yet</title>
	<link rel="stylesheet" type="text/css" href="res/default.css" />
	<style>
	ul#chat-tabs {
	   display:none !important;
	}
	div#candy {
		background:#D5DCE4;
	}
	div.roster-pane {
		background:#cccccc;
		border-top:0;
		box-shadow:none;
	}
	div.roster-pane .user {
		border-bottom:1px solid #D5DCE4;
		box-shadow:none;
	}
	div.roster-pane div.label {
		color:#333;
		text-shadow:none;
	}
	div.roster-pane div.role-moderator ul {
		display:none;
	}
	div#candy ul#chat-toolbar {
		background:#D5DCE4;
		box-shadow:none;
		border-top:1px solid #ccc;
	}
	</style>
	<?php
	$server = '@conference.autum.ceit.uq.edu.au';
	$username = 'anonymous';
	$room = 'test';
	if(isset($_GET['room'])) {
		$room = $_GET['room'];
	}
	if(isset($_GET['username'])) {
		$username = $_GET['username'];
	}
	?>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="libs/libs.min.js"></script>
	<script type="text/javascript" src="candy.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			Candy.init('http-bind/', {
				core: {
					// only set this to true if developing / debugging errors
					debug: false,
					// autojoin is a *required* parameter if you don't have a plugin (e.g. roomPanel) for it
					//   true
					//     -> fetch info from server (NOTE: does only work with openfire server)
					//   ['test@conference.example.com']
					//     -> array of rooms to join after connecting
					autojoin: ['<?php echo $room; ?><?php echo $server; ?>']
				},
				view: { assets: 'res/' }
			});

			Candy.Core.connect('autum.ceit.uq.edu.au',null,'<?php echo $username; ?>');

			/**
			 * Thanks for trying Candy!
			 *
			 * If you need more information, please see here:
			 *   - Setup instructions & config params: http://candy-chat.github.io/candy/#setup
			 *   - FAQ & more: https://github.com/candy-chat/candy/wiki
			 *
			 * Mailinglist for questions:
			 *   - http://groups.google.com/group/candy-chat
			 *
			 * Github issues for bugs:
			 *   - https://github.com/candy-chat/candy/issues
			 */
		});
	</script>
</head>
<body>
	<div id="candy"></div>
</body>
</html>
