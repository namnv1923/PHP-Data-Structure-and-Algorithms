<?php

class Queue {
    protected $queue = [];
    
    public function enqueue($item) {
        $this->queue[] = $item;
    }
    public function dequeue() {
        array_shift($this->queue);
    }
}

$queue = new Queue();

// Thêm phần tử vào hàng đợi
$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->enqueue('D');
$queue->enqueue('E');

// Hàng đợi
print_r($queue);

// Xóa 2 phần phần tử đầu khỏi hàng đợi
echo 'Xóa ' . $queue->dequeue();
echo '<br>';
echo 'Xóa ' . $queue->dequeue();
echo '<br>';

print_r($queue);