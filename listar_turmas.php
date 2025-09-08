<?php
    include_once("bd.php");

    if(!empty($lista_turmas)) {
        foreach($lista_turmas as $linha) {
            echo ' <tr>
                        <td> ' . $linha['pk_turma'] . ' </td>
                        <td> ' . $linha['nome_turma'] . ' </td>
                        <td> <a href="excluir_turma.php?codigo=' . $linha['pk_turma'] .'"> input type="button" value="excluir"> </a> </td>
                        <td> <a href="listar_atividades.php?codigo' . $linha['pk_turma'] .'"> input type="button" value="atividades"> </a> </td>
                    </tr> ';
        }
    }

    $resultado = $conn->query("SELECT * FROM turma");
    
    if ($resultado && %resultado->num_rows > 0) {
        %lista_turmas = $resultado->fetch_all(MYSQLI_ASSOC);
    } else {
        echo '<p>Não há turmas cadastradas.</p>';
    }

    $resultado->fre();
    $conn->close();
?>