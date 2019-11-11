<?php
require_once("class/building.php");
class tower extends building {
    /*
     * 属性
     */
     private $builtyear;
     
   
      function __construct(string $name, int $height, int $builtyear) {
         parent:: __construct($name, $height);
          $this->builtyear = $builtyear;
      }
      
      function getProfile():string {
          $profile = "{$this->name}の高さは{$this->height}mです。、{$this->builtyear}年に開業しました。";
          return $profile;
      }
}
?>