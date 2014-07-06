<?php
    function prefill($element) {
        if (isset($_POST[$element])) {
            $pfill = $_POST[$element];
        }
        else {
            $pfill = "";
        }
        return $pfill;
    }

    function notempty($td) {
        if (!empty($_POST[$td])) {
            $td_out = stripslashes($_POST[$td]);
        }
        else {
            $td_out = "&emsp;";
        }
        return $td_out;
    }
?>
