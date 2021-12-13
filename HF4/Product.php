<?php


class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct(int $id, string $title, float $price, int $availableQuantity) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }

    // TODO Generate constructor with all properties of the class
    // TODO Generate getters and setters of properties

    public function getId(): int {
        return $this->id;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function getAvailableQuantity(): int {
        return $this->availableQuantity;
    }

    public function setId(int $id){
        $this->id = $id;
        
        return $this;
    }

    public function setTitle(string $title){
        $this->title = $title;
        return $this;
    }

    public function setPrice(float $price){
        $this->price = $price;        
        return $this;
    }

    public function setAvailableQuantity(int $availableQuantity) {
        $this->availableQuantity = $availableQuantity;
        return $this;
    }

    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        //TODO Implement method
        $item = $cart->addProduct($this, $quantity);
        return $item;
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        //TODO Implement method
        $cart->removeProduct($this);
    }
}