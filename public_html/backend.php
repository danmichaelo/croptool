<?php

require 'common.php';

$apiClient = new MwApiClient($site, $oauth, null, $log, $config);
$ct = new CropTool($apiClient, null, $log);


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$input = json_decode(file_get_contents("php://input"));

	header('Content-type: application/json');

	if (isset($input->store)) {
		echo json_encode($ct->upload($input));

	} else if (isset($_GET['action']) && ($_GET['action'] == 'logout')) {
		echo json_encode($ct->logout());

	} else {
		echo json_encode($ct->doCrop($input));

	}

	exit;
}

if (isset($_GET['checkLogin'])) {
	header('Content-type: application/json');
	echo json_encode($ct->checkLogin());
	exit;

}

if (!isset($_GET['action']) || !isset($_GET['title'])) {
	die('Invalid request');
}

$action = $_GET['action'];
$title = $_GET['title'];

header('Content-type: application/json');

switch ($action) {

	case 'exists':

		try {
			$exists = $ct->pageExists($title);
		} catch (Exception $e) {
			echo json_encode(array(
				'error' => $e->getMessage(),
				'title' => $title,
			));
			exit;
		}

		echo json_encode(array(
			'exists' => $exists,
			'title' => $title,
		));
		exit;

	case 'metadata':

		echo json_encode($ct->fetchImage($title));
		exit;

	case 'analyzepage':

		echo json_encode($ct->analyzePage($title));
		exit;

	case 'locateBorder':

		$info = $ct->fetchImage($title);
		$bl = new BorderLocator($info['original']['name']);
		$area = $bl->selection;

		echo json_encode(array(
			'area' => $area
		));
		exit;

}
