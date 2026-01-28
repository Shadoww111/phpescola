<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include "db.php";

$sql = "SELECT id, nome FROM aluno";
$result = $conn->query($sql);

$alunos = [];

while ($row = $result->fetch_assoc()) {
    $alunos[] = $row;
}

echo json_encode($alunos);
