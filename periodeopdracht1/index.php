<?php

	session_start();

	$inputError = false;
	$errorMsg = 'Ahh, damn. Lege todos zijn niet toegestaan...';

	$_SESSION['countToDo'] = 0;
	$_SESSION['countFinished'] = 0;

	$toDoIsEmpty = false;
	$toDoIsFinished = false;

	$arrKey;
	$arrValue;
	
	if(isset($_POST['addToDo']))//add ToDo
	{
		if(isset($_POST['description'])&&$_POST['description'] != "") 
		{
			$arrToggleStatus = array($_POST['description'] => 'toDo'); //give toDo description to the added ToDo
			$_SESSION['tasksToDo'][] = $arrToggleStatus;						
			$inputError = false;
		}
		else  									
		{
			$inputError = true;
		}
	}

	if(!isset($_SESSION['tasksToDo'])) //no ToDo's added
	{
		$toDoIsEmpty = true;
		$toDoIsFinished = true;	
	}

	if(isset($_POST['toggleToDo']))//switch ToDo from finished to unfinished and back 
	{
		foreach($_SESSION['tasksToDo'] as $key => $toggleArr) 
		{
			if($key == $_POST['toggleToDo']) 
			{
				$arrKey = key($toggleArr);
				$arrValue = $toggleArr[$arrKey];

				if($arrValue == 'toDo') 
				{
					$toggleArr[key($toggleArr)] = 'finished'; //change key value to finished when pressing on the green button
					$_SESSION['tasksToDo'][$key] = $toggleArr;
				}

				if($arrValue == 'finished') 
				{
					$toggleArr[key($toggleArr)] = 'toDo'; //change key value to toDo when pressing on the green button
					$_SESSION['tasksToDo'][$key] = $toggleArr;
				}
			}				
		}
	}
	
	if(isset($_POST['deleteToDo'])) 
	{
		unset($_SESSION['tasksToDo'][$_POST['deleteToDo']]); //delete ToDo
	}
	
	if(isset($_SESSION['tasksToDo'])) //count the ToDo and finished
	{
		foreach($_SESSION['tasksToDo'] as $key => $toggleArr) 
		{
			if(in_array('toDo', $toggleArr)) //is toDo in $toggleArr?
			{
				$_SESSION['countToDo']++;
			}

			if(in_array('finished', $toggleArr)) //is finished in $toggleArr?
			{
				$_SESSION['countFinished']++;
			}
		}
	}

	//statements ToDo count
	if($_SESSION['countToDo'] > 0) 
	{
		$toDoIsEmpty = false;
	}

	if($_SESSION['countToDo'] == 0) 
	{
		$toDoIsEmpty = true;
	}

	//statements finished count
	if($_SESSION['countFinished'] > 0) 
	{
		$toDoIsFinished = false;
	}

	if($_SESSION['countFinished'] == 0 ) 
	{
		$toDoIsFinished = true;
	}

?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<title>Opdracht ToDo 1 - Jonas Van Eeckhout</title>
	<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
	<div>
		<?php if($inputError): ?><!-- Error Message when no ToDo was added -->

			<p class="modal error"><?= $errorMsg ?></p>

		<?php endif ?>

		<h1>Todo App</h1>

		<?php if($toDoIsEmpty && $toDoIsFinished): ?><!-- no ToDo's added -->

			<p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>

		<?php else: ?>

			<h2>Nog te doen</h2>
					
			<?php if($toDoIsEmpty): ?><!-- ToDo's completed -->

				<p>Schouderklopje, alles is gedaan!</p>

			<?php else: ?>

				<ul>
					<?php foreach($_SESSION['tasksToDo'] as $key => $toggleArr): ?>
						<?php foreach($toggleArr as $arrToDo => $toggleStatus): ?>

							<li>
								<?php if($toggleStatus == 'toDo'): ?>
									<form action="index.php" method="post">
										<button name="toggleToDo" value="<?= $key ?>" class="toDo"><?= $arrToDo ?></button>
										<button name="deleteToDo" value="<?= $key ?>"></button>
									</form>
								<?php endif ?>
							</li>

						<?php endforeach ?>
					<?php endforeach; ?>
				</ul>

			<?php endif ?>

				<h2>Done and done!</h2>
		
			<?php if(!$toDoIsFinished): ?><!-- ToDo's unfinished -->

				<ul>
					<?php foreach($_SESSION['tasksToDo'] as $key => $toggleArr): ?>
						<?php foreach($toggleArr as $arrToDo => $toggleStatus): ?>

							<li>
								<?php if($toggleStatus == 'finished'): ?>
									<form action="index.php" method="post">
										<button name="toggleToDo" value="<?= $key ?>" class="finished"><?= $arrToDo ?></button>
										<button name="deleteToDo" value="<?= $key ?>"></button>
									</form>
								<?php endif ?>
							</li>

						<?php endforeach ?>
					<?php endforeach ?>
				</ul>

			<?php else: ?>

				<p>Werk aan de winkel...</p>

			<?php endif ?>
		<?php endif ?>		

		<h1>Todo toevoegen</h1>

		<form action="index.php" method="post">
			<ul>
				<li>
					<label for="description">Beschrijving:</label>
					<input type="text" id="description" name="description">
				</li>
			</ul>
			<input type="submit" name="addToDo" value="Toevoegen" >
		</form>
	</div>
</body>
</html>