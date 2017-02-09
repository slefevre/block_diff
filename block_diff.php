<?php

class block_diff {

    private $img1;

    private $img2;

    public function __construct($old) {
    }

    private function diff() {
        // descend diagonally through the images,
        // comparing the pixels.

        for ( $i = 0; $i =< $smallest_diagonal; $i++ ) {
            $pixel1 = $this->$img1->getImagePixelColor($x, $y);
            $pixel2 = $this->$img2->getImagePixelColor($x, $y);

            if ( $pixel1 != $pixel2 ) {
                // return the offset
                return $i;
            }
        }
        return FALSE;
    }
}
