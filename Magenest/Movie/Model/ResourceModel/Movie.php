<?php
namespace Magenest\Movie\Model\ResourceModel;

use \Magento\Framework\Model\AbstractModel;

class Movie extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb {
    
    protected function _construct(){
        $this->_init('magenest_movie','movie_id');
    }
}