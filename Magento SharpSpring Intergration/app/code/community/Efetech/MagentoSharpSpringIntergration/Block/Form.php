<?php
class Efetech_MagentoSharpSpringIntergration_Block_Form extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface {

  protected function _construct() {
    parent::_construct();
  }
  
  protected function _toHtml() {
    return parent::_toHtml();
  }

  public function getId(){
    return $this->getFormId();
  }
}