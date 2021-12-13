<?php


class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    // TODO Generate getters and setters of properties
    public function getItems(){
        return $this->items;
    }

    public function setItems(array $items){
        $this->items = $items;
    }
     private function getItem (Product $product)
    {
       
        $it=0;
        $items_length=count($this->items);
        for($i=0;$i< $items_length;$i++){
            $it= $this->items[$i];
            if($it->getProduct() == $product){
                return $it;
            }
        }
        return null;
    }
    

    
    
        /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    
    
    public function addProduct(Product $product, int $quantity): CartItem
    {
        //TODO Implement method
         $cIt = $this->getItem($product);

        if($cIt){
            $cIt->increaseQuantity();
            return $cIt;
        }
        

        $cartItem = new cartItem($product, $quantity);
        
        array_push($this->items, $cartItem);
        
        return $cartItem;     
        
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        //TODO Implement method
         $ossz = 0;

        foreach($this->items as $it){
            $ossz += $it->getQuantity();
        }

        return $ossz;
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        //TODO Implement method
        $ossz = 0;

        foreach($this->items as $it){
            $ossz += $it->getQuantity() * $it->getProduct()->getPrice();
        }

        return $ossz;
    }
}