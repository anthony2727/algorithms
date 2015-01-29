<?php
// Do not modify the Shipping class.
abstract class Shipping
{
    private $_itemsCount;
    private $_distance;

    public function __construct($itemsCount, $distance)
    {
        $this->_itemsCount = $itemsCount;
        $this->_distance = $distance;
    }

    abstract public function getFees();
    
    public function getDistance()
    {
        return $this->_distance;
    }
    
    public function getItemsCount()
    {
        return $this->_itemsCount;
    }
}

// You can modify code below this comment.
class InternationalShipping extends Shipping
{
    private $_internationalDistance;
    
    public function __construct($count, $localDistance, $intDistance){
        parent::__construct($count, $localDistance);
        $this->_internationalDistance = $intDistance;
    }
    
    public function getFees(){
        $items = $this->getItemsCount();
        $localDistance = $this->getDistance();
        $intDistance = $this->getIntDistance();
        return ($items*($localDistance*0.8 + $intDistance*1.2));
       
    }
    
    public function getIntDistance(){
        return $this->_internationalDistance;
    }
}

class LocalShipping extends Shipping
{
    public function getFees(){
        $items = $this->getItemsCount();
        $localDistance = $this->getDistance();
        
        return ($items*$localDistance*0.8);
    }
}

function calculateShippingFees($items) {

    // To print results to the standard output you can use print
    // Example:
    // print "Hello world!";
    $total = 0;
    foreach($items as $item){
        if($item instanceof Shipping )
        $total += $item->getFees();
    }
    print $total;
}

calculateShippingFees([new InternationalShipping(5,50,150), new LocalShipping(5,50)]);

// Do NOT call the calculateShippingFees function in the code
// you write. The system will call it automatically.

?>
