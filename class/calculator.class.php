<?php



class Calculate{
    private $_num1, $_num2 ;
    public function __construct($val1, $val2){
        $this->_num1 = $val1;
        $this->_num2 = $val2;
    }
    public function add(){
            return $this->_num1 + $this->_num2;
    }
    public function subtract(){
            return $this->_num1 - $this->_num2;
    }
    public function multiply(){
            return $this->_num1 * $this->_num2;
    }
    public function divide(){
            return $this->_num1 / $this->_num2;
    }
    
}