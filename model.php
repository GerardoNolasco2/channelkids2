<?php

function get_gpt3_response($prompt, $model_id, $api_key)
{
    $request_data = array(
        "model" => $model_id,
        "prompt" => $prompt,
        "max_tokens" => 4000
    );
    $request_data_json = json_encode($request_data);
    $ch = curl_init("https://api.openai.com/v1/completions");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request_data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Content-Length: " . strlen($request_data_json),
        "Authorization: Bearer " . $api_key
    ));
    $response = curl_exec($ch);
    curl_close($ch);
    $response_data = json_decode($response, true);
    if (!isset($response_data['choices'][0]['text'])) {
        echo "Error al conectarse con la API";
        exit;
    }
    return $response_data;
}
?>