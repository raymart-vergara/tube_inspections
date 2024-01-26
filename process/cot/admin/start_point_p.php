<?php
include '../../../process/conn.php';

$method = $_POST['method'];

if ($method == 'fetch_cot_data') {
   $query = "SELECT `part_name`, `id` FROM `m_cot` ORDER BY id ASC";
   $stmt = $conn->prepare($query);
   $stmt->execute();
   if ($stmt->rowCount() > 0) {
      echo '<option value="">Select Part Name</option>';
      foreach ($stmt->fetchALL() as $row) {
         echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['part_name']) . '</option>';
      }
   } else {
      echo '<option value="">Select Machine</option>';
   }
}

// fetch_data.php

if ($method == 'fetch_cot_data2') {
    $optionId = $_POST['optionId'];

    $query = "SELECT field1, field2 FROM your_table WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':id', $optionId, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    echo json_encode($result);
}
?>