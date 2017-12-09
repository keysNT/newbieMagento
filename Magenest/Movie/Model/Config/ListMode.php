<?php
namespace Magenest\Movie\Model\Config;

class ListMode implements \Magento\Framework\Option\ArrayInterface {
    
    public function toOptionArray(){
        return array(
            array(
                'value' => '1',
                'label' => 'show'
            ),
            array(
                'value' => '2',
                'label' => 'not-show'
            )
        );
    }
}