<?php

class Color{

    public $red;
    public $green;
    public $blue;
    static $verbose = false;

    public function __construct($color)
    {
        if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
        {
            $this->red = intval($color['red']);
        $this->green = intval($color['green']);
        $this->blue = intval($color['blue']);
        }
        else if (isset($color['rgb']))
        {
            $this->red = ($color['rgb']>>16) & 0xff;
            $this->green = ($color['rgb']>>8) & 0xff;
            $this->blue = ($color['rgb']) & 0xff;
        }
        if (Self::$verbose) {
                printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
        }
    }
    
    function __destruct() {
        if (SELF::$verbose) {
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
        }
    }
    public function add($new_add) {
        $ret = new Color(array('red' => $this->red + $new_add->red,
        'green' => $this->green + $new_add->green,
        'blue' => $this->blue + $new_add->blue));
    return ($ret);
    }
    
    public function sub($new_sub) {
        $ret = new Color(array('red' => $this->red - $new_sub->red,
            'green' => $this->green - $new_sub->green,
            'blue' => $this->blue - $new_sub->blue));
        return ($ret);
    }
    
    public function mult($new_mult) {
        $ret = new Color(array('red' => $this->red * $new_mult->red,
            'green' => $this->green * $new_mult->green,
            'blue' => $this->blue * $new_mult->blue));
        return ($ret);
    }
    function __toString() {
        return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )",
        array($this->red, $this->green, $this->blue)));
    }
    static function doc() {
        echo file_get_contents("Color.doc.txt")."\n";
    }
}
?>