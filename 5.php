<?php
    function ganti($kata,$asli,$ganti){
        $array=explode($asli,$kata);
        $pergantian=implode($ganti,$array);
        echo $kata." adalah kata asli<br /> diubah menjadi<br />";
        return $pergantian;
    }
    echo ganti("Kelompok","o","a");
    ?>