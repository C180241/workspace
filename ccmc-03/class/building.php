<?php
class building {
    //properties
    /**
     * 属性
     * @var string $name 建物名
     * @var int $height 建物高さ
     */
     protected $name;
     protected $height;
    //constructor
    
    /**
     * コンストラクタ
     * @param string $name
     * @param string $height
     */
     function __construct(string $name, int $height) {
         $this->name = $name;
         $this->height = $height;
     }
     
    //assessor methods
    function getName ():string {
        return $this->name = $name;
    }
    function setName(string $name):void {
        $this->name = $name;
    }
    function getHeight():int {
        return $this->height = $height;
    }
    function setHeight(int $height):void {
        $this->height = $height;
    }
    function getYear():int {
        return $this->year = $year;
    }
    function setYear(int $year):void {
        $this->year = $year;
    }
    //methods
    
    function getProfile():string {
        $profile = "{$this->name}の高さは{$this->height}mです。";
        return $profile;
    }
}
?>