<?php
    $user = new User(); //init a new User class
    if($user->verify_connection(false) == false){
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once('website/includes/head-content.include.php'); ?>
		<?php include_once('website/includes/icons.include.php'); ?>
		<?php include_once('website/includes/css.include.php'); ?>
		<script src="website/js/jquery-1.11.3.min.js"></script>
		<script src="website/js/stay_standalone.js"></script>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>
	</head>
	<body>
		<?php include_once('website/includes/header.include.php'); ?>
		<div class='page' id='home_page'>
			<div id='password_page'>
				<div id='password_state'></div>
				<div id='password_part'>
					<div>
						<button>1</button>							<button>2</button>
						<button>3</button>
					</div>
					<div>
						<button>4</button>							<button>5</button>
						<button>6</button>
					</div>
					<div>
						<button>7</button>							<button>8</button>
						<button>9</button>
					</div>
					<div id='zero_button_password'>
						<button>0</button>
					</div>
					<div id='delete_n'>Effacer</div>
					<form action="website/exec/user_connect.php" id='validate' method="post">
						<input type="hidden" id='password' name="password"/>
					</form>
				</div>
			</div>
			<div id='right_block'>
				<div id="current_time"><?php echo date("G : i"); ?></div>
				<?php         

				?>
				<div id="current_date"><?php show_date(); ?></div>
			</div>
		</div>
	</body>
	<script src="website/js/passcode_page.js"></script>
</html>
<?php
}
else{
	header('location: /website');
}
function show_date(){
	$mois = array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre'); 
	$moisN = date("n") - 1;
	$jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
	$jourN = date("N") - 1;
	echo $jours[$jourN] . ' ' . date('j') . ' ' . $mois[$moisN];
}
function __autoload($class_name) {
    //auto include all the classes
    include_once($_SERVER['DOCUMENT_ROOT'] . '/website/exec/class/'. strtolower($class_name) . '.class.php');
}
