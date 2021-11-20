<?php
    
        switch($_GET['page']) {
            
            case "departments":
                $CURRENT_PAGE = "Departments";
                $PAGE_TITLE = "Departments";
                break;
            
            default:
                $CURRENT_PAGE = "Index";
                $PAGE_TITLE = "Home";


        } 
?>
