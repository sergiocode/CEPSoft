<?php
    // Cerrar la base de datos
    function closeBD($conn) {
        if (!is_null($conn)) {
            $conn = null;
        }
    }
?>