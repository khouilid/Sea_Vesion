<?php
include_once '../Model/Download_files.php';

Class display_files {
    public function __construct(){
        $id = $_SESSION['v_id'];

        $files = new Download_file  ;
        $files = $files->Download($id);

        foreach($files as $file){

            $file_name = explode('/', $file['Path']);
            echo ''. $id .' <form action="" method="POST">
                        <div class="d-flex bg-light rounded-md m-3 p-2 shadow-sm flex-wrap files align-items-center"> 
                                <h3><i class="fas fa-file-excel"></i></h3>
                                <p class="m-2">'. end($file_name) .'</p>
                                <input type="text" hidden value="'. $file['Path'].'">
                                <button type="submit" class="btn"><i class="fas fa-download"></i></button>
                        </div>
                    </form>';
        }
        unset($_SESSION["v_id"]);
    }
}

?>