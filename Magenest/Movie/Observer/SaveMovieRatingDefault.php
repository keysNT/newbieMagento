<?php
namespace Magenest\Movie\Observer;

class SaveMovieRatingDefault implements \Magento\Framework\Event\ObserverInterface {
    public function execute(\Magento\Framework\Event\Observer $observer){
        $movie = $observer->getData('movie');
        $movie->setData('rating','0');
        return $movie;
    }
}