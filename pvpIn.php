<!DOCTYPE html>

<html>
	<head>
	<meta charset="UTF-8">
	<title>Tic Tac Toe</title>

	<link rel="stylesheet" href="pvp_design.css">

	</head>
	
	<body>
		<div class="settings-icon" onclick="toggleSettingsMenu()">
			<img src="images/settings-icon.png" alt="Settings">
		</div>

		<div class="settings-menu">
			<a class="type" href="indexIn.php">Home</a>
			<a class="type" href="pvpIn.php">Against Human</a>
			<a class="type" href="pvaiIn.php">Difficulty</a>
			<a class="close-btn" onclick="closeSettingsMenu()">Close Menu</a>
		</div>

		<canvas id="canvas"></canvas>

		<div class="score_board">
			<h2 class="gri" id="player_n">Player 1</h2>
			<h1 class="gri" id="vs">VS</h1>
			<h2 class="gri" id="ai_n">Player 2</h2>
			<h1 class="gri" id="player_score">0</h1>
			<h1 class="gri" id="vs2">|</h1>
			<h1 class="gri" id="ai_score">0</h1>
		</div>
		<div class="container">	
				<button class="cell" id="0"></button>
				<button class="cell" id="1"></button>
				<button class="cell" id="2"></button>
				<button class="cell" id="3"></button>
				<button class="cell" id="4"></button>
				<button class="cell" id="5"></button>
		
				<button  class="cell" id="6"></button>
				<button  class="cell" id="7"></button>
				<button  class="cell" id="8"></button>
				<button  class="cell" id="9"></button>
				<button  class="cell" id="10"></button>
				<button  class="cell" id="11"></button>
			
				<button  class="cell" id="12"></button>
				<button  class="cell" id="13"></button>
				<button  class="cell" id="14"></button>
				<button  class="cell" id="15"></button>
				<button  class="cell" id="16"></button>
				<button  class="cell" id="17"></button>
			
				<button  class="cell" id="18"></button>
				<button  class="cell" id="19"></button>
				<button  class="cell" id="20"></button>
				<button  class="cell" id="21"></button>
				<button  class="cell" id="22"></button>
				<button  class="cell" id="23"></button>
			
				<button  class="cell" id="24"></button>
				<button  class="cell" id="25"></button>
				<button  class="cell" id="26"></button>
				<button  class="cell" id="27"></button>
				<button  class="cell" id="28"></button>
				<button  class="cell" id="29"></button>
			
		
		</div>
		<div class="endgame">
			<div class="text"></div>
		</div>

		<script src="basePVP.js"></script>
		<script src="starbg.js" type="module"></script>
		<script src="audiobg.js" type="module"></script>
	</body>
</html>
