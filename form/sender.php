<?php
if(isset($_POST['name']) && isset($_POST['email'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  
  $data = array($name, $email);
  $file = fopen('data.csv', 'a'); // "a" означает, что файл будет открыт для записи в конец
  fputcsv($file, $data);
  fclose($file);
  
  echo "Данные успешно сохранены в файле data.csv";
}
?>
