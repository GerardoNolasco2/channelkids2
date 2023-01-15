<?php
include_once "model.php";

$model_id = "text-davinci-003";
$api_key = "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";
$prompt = $_POST['prompt'];

if (isset($prompt) && !empty(trim($prompt))) {
    if(!isset($_SESSION)) session_start();

    if(isset($_SESSION['last_call']) && time() - $_SESSION['last_call'] < 1){
        echo "Hay demasiadas solicitudes de docentes. Por favor inténtelo más tarde.";
        die();
    }

    $_SESSION['last_call'] = time();
    $response_data = get_gpt3_response($prompt, $model_id, $api_key);
    $generated_text = $response_data['choices'][0]['text'];
    echo '<div class="alert alert-primary" role="alert">';
    echo "" . nl2br($generated_text);
    echo '</div>';
} else {
    echo "Por favor, introduce una pregunta válida.";
}
?>