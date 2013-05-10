<?php

$questions = array(
	0 => array(
		'id' => 0,
		'text' => 'Who are you?',
		'type' => 'conditional',
		'options' => array(
			array('label' => 'Megan Fox', 'value'=>'1'),
			array('label' => 'Burning Fighting Fighter', 'value' => '2'),
		)
	),
	1 => array(
		'id' => 1,
		'text' => 'Where are you?',
		'type' => 'text',
		'options' => null,
		'next' => null
	),
	2 => array(
		'id' => 2,
		'text' => 'The fuck are you?',
		'type' => 'text',
		'options' => null,
		'next' => null
	)
);

if (isset($_GET['q']) && is_numeric($_GET['q'])) {
	$question = $questions[$_GET['q']];
	echo $question['text'];
	echo '<form method="GET" action="index.php">';
	switch ($question['type']) {
		case 'conditional':
			echo '<select name="q">';
			foreach ($question['options'] as $option) {
				echo '<option value="'.$option['value'].'">'.$option['label'].'</option>';
			}
			echo '</select>';
			break;
		case 'text':
			echo '<input type="text"/>';
	}

	echo '<input type="submit"/>';
	echo '</form>';
}