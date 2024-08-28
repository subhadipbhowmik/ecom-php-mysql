<?php
function showAlert($message, $type = 'success') {
    echo "<script>
        swal({
            title: 'Notification',
            text: '" . addslashes($message) . "',
            icon: '" . addslashes($type) . "',
            button: 'OK',
        });
    </script>";
}
?>
