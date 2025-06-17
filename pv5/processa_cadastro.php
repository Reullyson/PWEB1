<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["enviar"])) {
    die("Acesso inválido ao script.");
}

$camposObrigatorios = ["nome", "email", "senha", "foto_perfil"];
$dadosFaltantes = [];

foreach ($camposObrigatorios as $campo) {
    if (empty($_POST[$campo]) && (!isset($_FILES[$campo]) || $_FILES[$campo]["error"] === UPLOAD_ERR_NO_FILE)) {
        $dadosFaltantes[] = $campo;
    }
}

if (!empty($dadosFaltantes)) {
    die("Erro: Os seguintes campos são obrigatórios: " . implode(", ", $dadosFaltantes));
}

$nome = htmlspecialchars($_POST["nome"]);
$email = htmlspecialchars($_POST["email"]);
$senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

$diretorioDestino = "uploads/";
$arquivoDestino = $diretorioDestino . basename($_FILES["foto_perfil"]["name"]);
$uploadOk = 1;
$tipoArquivo = strtolower(pathinfo($arquivoDestino, PATHINFO_EXTENSION));

if (!file_exists($diretorioDestino)) {
    mkdir($diretorioDestino, 0755, true);
}

$check = getimagesize($_FILES["foto_perfil"]["tmp_name"]);
if ($check === false) {
    die("Erro: O arquivo enviado não é uma imagem válida.");
}

if (file_exists($arquivoDestino)) {
    die("Erro: Já existe um arquivo com este nome no servidor.");
}

if ($_FILES["foto_perfil"]["size"] > 500000) {
    die("Erro: O arquivo é muito grande. O tamanho máximo permitido é 500KB.");
}

$formatosPermitidos = ["jpg", "jpeg", "png", "tiff", "gif"];
if (!in_array($tipoArquivo, $formatosPermitidos)) {
    die("Erro: Apenas arquivos JPG, JPEG, PNG, TIFF e GIF são permitidos.");
}

if (!move_uploaded_file($_FILES["foto_perfil"]["tmp_name"], $arquivoDestino)) {
    die("Erro: Ocorreu um erro ao salvar a imagem no servidor.");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .user-data {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
        .profile-pic {
            max-width: 200px;
            max-height: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Cadastro Realizado com Sucesso!</h1>
    
    <div class="user-data">
        <h3>Dados do Usuário:</h3>
        <p><strong>Nome:</strong> <?php echo $nome; ?></p>
        <p><strong>E-mail:</strong> <?php echo $email; ?></p>
        
        <h3>Foto de Perfil:</h3>
        <img src="<?php echo $arquivoDestino; ?>" alt="Foto de perfil" class="profile-pic">
        <p><strong>Arquivo:</strong> <?php echo htmlspecialchars(basename($_FILES["foto_perfil"]["name"])); ?></p>
        <p><strong>Tipo:</strong> <?php echo $check["mime"]; ?></p>
        <p><strong>Tamanho:</strong> <?php echo round($_FILES["foto_perfil"]["size"] / 1024, 2); ?> KB</p>
    </div>
</body>
</html>