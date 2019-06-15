<?php
    include_once('Lannister.class.php');

    Class Tyrion extends Lannister {
        public function sleepWith($obj) {
            if (is_subclass_of($obj, 'Lannister'))
                echo "Not even if I'm drunk !\n";
            else
                echo "Let's do this.\n";
        }
    }
?>