<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exemplo PHP</title>
</head>

<body>
    <?php
    ini_set("display_errors", 1);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Definição dos parâmetros de conexão
    $servername = "54.234.153.24";
    $username = "root";
    $password = "Senha123";
    $database = "meubanco";

    // Criar conexão usando MySQLi (Orientado a Objetos)
    $link = new mysqli($servername, $username, $password, $database);

    // Definir o charset como UTF-8 para evitar problemas de caracteres
    $link->set_charset("utf8");

    echo 'Versão Atual do PHP: ' . phpversion() . '<br>';

    // Gerar valores aleatórios para inserção no banco
    $valor_rand1 = rand(1, 999);
    $valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
    $host_name = gethostname();

    // Preparar e executar a consulta SQL com segurança
    $stmt = $link->prepare("INSERT INTO alunos (aluno_id, nome, sobrenome, endereco, cidade, host) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $valor_rand1, $valor_rand2, $valor_rand2, $valor_rand2, $valor_rand2, $host_name);

    if ($stmt->execute()) {
        echo "Novo registro criado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $link->close();
    ?>
</body>

</html>
