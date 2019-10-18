<?php

class Vertex {
    private $_x;
    private $_y;
    private $_z;
    private $_w = 1.0;
    private $_color;
    static $verbose = false;
    
    public function __construct($data) {
        $this->_x = $data['x'];
        $this->_y = $data['y'];
        $this->_z = $data['z'];
        
        if (isset($data['w']) && $data['w'] != "")
        $this->_w = $data['w'];
        
        if (isset($data['color']) && $data['color'] != "" && $data['color'] instanceof Color)
        $this->_color = $data['color'];
        else
        $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        
        if (Self::$verbose) {
            echo $this." constructed".PHP_EOL;
        }
    }
    public function __destruct() {
        echo $this." destructed".PHP_EOL;
    }
    function __toString() {
        if (Self::$verbose)
            return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )",
            array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
        return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f)",
        array($this->_x, $this->_y, $this->_z, $this->_w)));
    }
    public static function doc() {
        echo file_get_contents("Vertex.doc.txt");
    }
    public function get_x() {
        return ($this->_x);
    }
    
    public function get_y() {
        return ($this->_y);
    }
    
    public function get_z() {
        return ($this->_z);
    }
    
    public function get_w() {
        return ($this->_w);
    }
    
    public function get_color() {
        return ($this->_color);
    }
    
    public function set_x($new) {
        $this->_x = $new;
    }
    
    public function set_y($new) {
        $this->_y = $new;
    }
    
    public function set_z($new) {
        $this->_z = $new;
    }
    
    public function set_w($new) {
        $this->_w = $new;
    }
    
    public function set_color($new) {
        $this->_color = $new;
    }
}
?>