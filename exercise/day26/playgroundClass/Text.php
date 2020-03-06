
<?php

class Text {

    public $text = null;
  
  public function __construct ($text) {
    $this->text = $text;

    }
    
    public function length () {
      return $length = strlen($this->text);
      
  }
    public function nrOfWords () {
    return $num = str_word_count($this->text, 1);
  }
}