<?php
    require_once("bd.php");

    $nome = $_POST ['nomeTurma'] ?? '';

    $stmt = $conn->prepare(""INSERT INTO turma (nome_turma, fk_professor) VALUES (?, ?)"");

    if ($stmt) {
        $stmt->bind_param("si", $nome, $_SESSION['professor_id']);

        if ($stmt->execute()) {

            header("Location: turma.php");
            exit;

        } else {

            echo "Erro ao inserir: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação do statment: " . $conn->error;
    }  
    
    $conn->close();
?>