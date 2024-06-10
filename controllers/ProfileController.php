<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (isset($_POST['user_id']) && isset($_POST['nome']) && isset($_POST['email'])) {
    $jsonFile = file_get_contents('./../assets/bd/users.json');
    $users = json_decode($jsonFile, true);
    
    $userId = $_POST['user_id']; 
    $userKey = array_search($userId, array_column($users['usuarios'], 'id_Usuario'));
    
    if ($userKey !== false) {
        $users['usuarios'][$userKey]['nome'] = $_POST['nome'];
        $users['usuarios'][$userKey]['data_de_nascimento'] = $_POST['data_de_nascimento'];
        $users['usuarios'][$userKey]['email'] = $_POST['email'];
        $users['usuarios'][$userKey]['endereco'] = $_POST['endereco'];

        if(isset($_FILES['profilePic'])) {
            if ($_FILES['profilePic']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = './../assets/img/profiles-pictures/';
                $uploadDirUsers = './../../assets/img/profiles-pictures/';
                $uploadFileName = time() . '.' . pathinfo($_FILES['profilePic']['name'], PATHINFO_EXTENSION);
                $uploadFile = $uploadDir . $uploadFileName;
                $uploadFileUsers = $uploadDirUsers . $uploadFileName;
            
                $profilePic =explode('/', $users['usuarios'][$userKey]['profilePic']);
                $aux =  $profilePic[count($profilePic) - 1];
                if (file_exists($uploadDir . $aux)) {
                    unlink($uploadDir . $aux);
                }
                
                if (move_uploaded_file($_FILES['profilePic']['tmp_name'], $uploadFile)) {
                    // Atualiza o caminho do perfil do usuário no JSON
                    $users['usuarios'][$userKey]['profilePic'] = $uploadFileUsers;
                    // echo "Arquivo movido com sucesso para: $uploadFileUsers"; // Depuração
                } else {
                    echo "Erro ao mover o arquivo para o diretório de upload.";
                }
            } else {
                echo "Erro no upload do arquivo.";
            }
            
        }
        
        
        
        
        file_put_contents('./../assets/bd/users.json', json_encode($users, JSON_PRETTY_PRINT));
        
        echo json_encode(array("error" => NULL));
    } else {
        echo json_encode(array("error" => "Usuário não encontrado."));
    }
   }
    
} else {
    echo json_encode(array("error" => "Método de solicitação inválido."));
}
?>
