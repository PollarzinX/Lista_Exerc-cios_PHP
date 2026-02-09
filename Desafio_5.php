<?php
$alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];

// Correção: Iniciar a variável de soma
$somaNotas = 0; 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <style>
        .aprovado { color: green; background-color: #5d7e618e; padding: 2px 5px; }
        .reprovado { color: red; background-color: #9b6b6b9f; padding: 2px 5px; }
    </style>
</head>
<body>

    <table style="border: 1px solid black;">
        <thead>
            <tr>
                <th style="width: 200px;">Nome</th>
                <th style="width: 150px;">Idade</th>
                <th style="width: 150px;">Nota</th>
                <th style="width: 150px;">Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) : 
                // Correção: Somar as notas dentro do loop para a média funcionar
                $somaNotas += $aluno['nota']; 
            ?>
            <tr>
                <td style="border: 1px solid black;"><?= $aluno['nome'] ?></td>
                <td style="border: 1px solid black;"><?= $aluno['idade'] ?></td>
                <td style="border: 1px solid black;"><?= $aluno['nota'] ?></td>
                <td class="" style="border: 1px solid black;">
                    <?= $aluno['nota'] >= 7 ? '<span class="aprovado">Aprovado</span>' : '<span class="reprovado">Reprovado</span>' ?>
                </td>
            </tr>
            <?php endforeach; ?> </tbody>
    </table>

    <?php 
        $media = $somaNotas / count($alunos); 
    ?>
    <p><strong>Média Geral da Turma:</strong> <?php echo number_format($media, 2); ?></p>
</body>
</html>