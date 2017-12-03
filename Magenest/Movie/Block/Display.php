<?php
namespace Magenest\Movie\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\App\ResourceConnection;

class Display extends Template {
    protected $_connection;
    public function __construct(\Magento\Framework\View\Element\Template\Context $context,\Magento\Framework\App\ResourceConnection $resourceConnection, array $data = []){
        $this->_connection = $resourceConnection->getConnection();
        parent::__construct($context, $data);
    }

    public function getCustomerDataInDatabase($table){
        $myTable = $this->_connection->getTableName($table);
        $sql = $this->_connection->select()->from(
            ['tn' => $myTable]
        );
        $result = $this->_connection->fetchAll($sql);
        return $result;
    }
}