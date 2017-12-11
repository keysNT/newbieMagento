<?php
namespace Magenest\Movie\Block\Adminhtml\Movie;

use Magento\Framework\View\Element\Template;

class MovieTemplate extends Template {
    public function getLandingsUrl(){
        return $this->getUrl('magenestmovie');
    }
    
}