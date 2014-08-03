<?php

require 'common.php';

$apiClient = new MwApiClient($oauth);
$ct = new CropTool($apiClient);


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $input = json_decode(file_get_contents("php://input"));

    header('Content-type: application/json');

    if (isset($input->store)) {
        echo json_encode($ct->upload($input));

    } else if (isset($_POST['username']) && isset($_POST['password'])) {
        echo json_encode($ct->tuscLogin($_POST['username'], $_POST['password']));

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

} else if (isset($_GET['pageExists'])) {
    header('Content-type: application/json');
    echo json_encode(array(
        'exists' => $ct->pageExists($_GET['pageExists']),
        'filename' => $_GET['pageExists']
    ));
    exit;

} else if (isset($_GET['title'])) {
    $title = $_GET['title'];

    if (isset($_GET['lookup'])) {
        header('Content-type: application/json');
        echo json_encode($ct->fetchImage($title));
        exit;

    } else if (isset($_GET['locateBorder'])) {
        $info = $ct->fetchImage($title);
        $bl = new BorderLocator($info['original']['name']);
        $area = $bl->selection;

        header('Content-type: application/json');
        echo json_encode(array(
            'area' => $area
        ));
        exit;
    }
}
