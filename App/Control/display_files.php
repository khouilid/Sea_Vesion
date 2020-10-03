<?php
include_once '../Model/Download_files.php';

$id = $_GET['v_id'];
$file = new Download_file;
$files = $file->Download($id);

foreach($files as $file){

    $file_name = explode('/', $file['Path']);
    echo '<form action="../Control/Download_file.php" method="POST">
                <div class="d-flex bg-light rounded-md m-3 p-2 shadow-sm flex-wrap files align-items-center"> 
                        <h3><i class="fas fa-file-excel"></i></h3>
                        <p class="m-2">'. end($file_name) .'</p>
                        <input type="text" name="Path" hidden value="'. $file['Path'].'">
                        <button type="submit" class="btn"><i class="fas fa-download"></i></button>
                </div>
            </form>';
}


?>