<?php
        $Base = $_POST ['Base'];
        $OB = $_POST ['base'];
        $h = $_POST ['altura'];

        $a =  (($Base+$OB)*$h)/2;
        echo "A área do trapézio é: ".$a;
    ?>