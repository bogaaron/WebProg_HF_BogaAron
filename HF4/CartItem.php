<?php


class CartItem
{
    private Product $product;
    private int $quantity;

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties
    public function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }
    public function setProduct(Product $product){
        $this->product = $product;
        
        return $this;
    }

    public function setQuantity(int $quantity){
        $this->quantity = $quantity;
        
        return $this;
    }

    public function getProduct() {
        return $this->product;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

        public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
        $this->quantity++;
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
        
            $this->quantity--;
        
        
    }
}