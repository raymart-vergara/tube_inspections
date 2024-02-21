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

if ($method == 'cot_start_point') {
   $cs_part_name = $_POST['cs_part_name'];
   $cs_quantity = $_POST['cs_quantity'];
   $cs_tstart_input = $_POST['cs_tstart_input'];
   $cs_tend_input = $_POST['cs_tend_input'];
   $cs_inspby = $_POST['cs_inspby'];
   $cs_shift = $_POST['cs_shift'];
   $cs_ins_date = $_POST['cs_ins_date'];
   $total_cs_mins = $_POST['total_cs_mins'];
   $cs_outside_app = $_POST['cs_outside_app'];
   $cs_inside_app = $_POST['cs_inside_app'];
   $cs_slit_con = $_POST['cs_slit_con'];
   $cs_color_app = $_POST['cs_color_app'];


   $query = "INSERT INTO sp_start_point (`sp_part_name`, `sp_quantity`, `sp_time_start`,  `sp_time_end`,  `sp_total_mins`,  `sp_shift`,  `sp_inspected_date`,`sp_inspected_by`,sp_outside_appearance,sp_inside_appearance, sp_slit_condition, sp_color )VALUES('$cs_part_name','$cs_quantity','$cs_tstart_input','$cs_tend_input','$total_cs_mins','$cs_shift','$cs_ins_date','$cs_inspby' ,'$cs_outside_app','$cs_inside_app','$cs_slit_con','$cs_color_app')";
   $stmt = $conn->prepare($query);
   if ($stmt->execute()) {
      echo 'success';
   } else {
      echo 'error';
   }

}

?>