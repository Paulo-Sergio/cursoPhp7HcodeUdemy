<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileUpload">
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file = $_FILES["fileUpload"];

    //caso de erro
    if ($file["error"]) {
        throw new Exception("Error: " . $file["error"]);
    }

    // criar o diretorio
    $dirUploads = "uploads";
    if (!is_dir($dirUploads)) {
        mkdir($dirUploads);
    }

    //mover para o diretorio
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
        echo "Upload realizado com sucesso!";
    } else {
        throw new Exception("Não foi possivel fazer upload " . $file["error"]);
    }
}
?>