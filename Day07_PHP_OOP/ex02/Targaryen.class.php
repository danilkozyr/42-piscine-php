<?php
    Class Targaryen {

        public function getBurned() {
            if ($this->resistsFire()) {
                return ("emrges naked but unharmed");
            } else {
                return ("burns alive");
            }
        }

        public function resistsFire() {
            return False;
        }
    }
?>
