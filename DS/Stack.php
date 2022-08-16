<?php

class Stack {
    protected $stack;
    protected $number;

    // Khoi tao 1 ngan xep
    public function __construct($number) {
        $this->number = $number;
        $this->stack = array();
    }

    public function isEmpty() {
        return empty($this->stack);
    }

    // Them 1 gia tri vao dau ngan xep
    public function push($item) {
        // Kiem tra ngan xep da day chua
        if(count($this->stack) < $this->number) {
            array_unshift($this->stack, $item);
        } else {
            echo "Ngan xep da day!";
        }
    }

    // Xoa gia tri cuoi cung duoc them vao ngan xep
    public function pop() {
        // Kiem tra ngan xep rong
        if(!$this->isEmpty()) {
            array_shift($this->stack);
        } else {
            echo "Ngan xep rong!";
        }
    }

    // Hien thi gia tri tren cung cua ngan xep
    public function top() {
        return current($this->stack);
    }

    public function display() {
        return $this->stack;
    }
}

$stack = new Stack(10);

// Them phan tu vao
$stack->push('A');
$stack->push('B');
$stack->push('C');
$stack->push('D');

// Xoa 2 gia tri cuoi cung cua ngan xep
$stack->pop();
$stack->pop();

echo $stack->top();
