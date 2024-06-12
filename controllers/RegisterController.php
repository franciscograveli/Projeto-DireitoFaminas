<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Defina o caminho para o arquivo JSON
    $jsonFile = './../assets/bd/users.json';

    // Inicialize o array de usuários
    $usuarios = [];

    // Verifique se o arquivo existe e leia seu conteúdo
    if (file_exists($jsonFile)) {
        $data = file_get_contents($jsonFile);
        $decodedData = json_decode($data, true);

        // Verifique se o conteúdo tem a chave 'usuarios' e se é um array
        if (isset($decodedData['usuarios']) && is_array($decodedData['usuarios'])) {
            $usuarios = $decodedData['usuarios'];
        }
    }

    // Crie um novo usuário com os dados do formulário
    $newUser = [
        "id_Usuario" => count($usuarios) + 1,
        "nome" => $_POST['nome'],
        "data_de_nascimento" => $_POST['data'],
        "email" => $_POST['email'],
        "senha" => $_POST['register-password'],
        "username" => $_POST['username'],
        "endereco" => !empty($_POST['endereco']) ? $_POST['endereco'] : "", // Campo opcional
        "profilePic" => "" // Inicialmente em branco, atualizaremos depois se uma imagem for carregada
    ];


    // Adicione o novo usuário ao array de usuários
    $usuarios[] = $newUser;

    // Atualize o array principal com a chave 'usuarios'
    $updatedData = ['usuarios' => $usuarios];

    // Salve os dados atualizados de volta no arquivo JSON
    if (file_put_contents($jsonFile, json_encode($updatedData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        header('Location: /Projeto-DireitoFaminas/index.php?success=none');
        exit;
    } else {
        echo "Ocorreu um erro ao salvar os dados.";
        header('Location: /Projeto-DireitoFaminas/index.php?error=Erro-ao-salvar-dados');
        exit;
    }
}
?>