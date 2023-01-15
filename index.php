<!DOCTYPE html>
<html>
<head>
    <meta name="X-RateLimit-Limit" content="10">
    <title>Interfaz de usuario para Channelkids</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
body {
    background-color: #f5f5f5;
}

#gpt3-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

#gpt3-response {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
}

.form-control {
    border-radius: 0;
    border: none;
    border-bottom: 2px solid #ddd;
    box-shadow: none;
}

.form-control:focus {
    border-bottom: 2px solid #28a745;
}

label {
    font-weight: bold;
}

button[type="submit"] {
    border-radius: 0;
    background-color: #28a745;
    color: #fff;
    border: none;
    width: 100%;
    padding: 10px 0;
    font-weight: bold;
    letter-spacing: 2px;
}

button[type="button"] {
    border-radius: 0;
    background-color: #blue;
    color: #fff;
    border: none;
    width: 100%;
    padding: 10px 0;
    font-weight: bold;
    letter-spacing: 2px;
}

    </style>
</head>
<body>
    <div class="container mt-5">
        <form id="gpt3-form">
            <div id="gpt3-response" class="mt-3" style="overflow-y: scroll; max-height:50vh;"></div>
            <div class="form-group"><br><br>
                <label for="prompt"><b>Hola, soy una Inteligencia Artificial. <br>Indicame en que te puedo ayudar...</b></label>
               <textarea placeholder="Escribe aqui tu texto" class="form-control" id="prompt" name="prompt" rows="3" style="resize:none; box-shadow: 2px 2px 5px #777;"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Obtener respuesta</button>
            <button type="button" class="btn btn-secondary" onclick="document.getElementById('prompt').value = ''">Limpiar</button>
        </form>
    </div>
    <!-- Incluye jQuery y el script que contiene el código de AJAX -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://www.channelkids.com/ai/js/script.js"></script>
</body>
</html>


<script>
    // disable right click
    document.addEventListener('contextmenu', event => event.preventDefault());
    document.onkeydown = function (e) {
        // disable F12 key
        if(e.keyCode == 123) {
            return false;
        }
        // disable I key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 73){
            return false;
        }
        // disable J key
        if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {
            return false;
        }
        // disable U key
        if(e.ctrlKey && e.keyCode == 85) {
            return false;
        }
    }
 document.addEventListener('contextmenu',(e)=>{
 e.preventDefault()
 })
 
</script>