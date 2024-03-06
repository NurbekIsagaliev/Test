<?php

class CircularDeque
{
    private $maxSize;
    private $deque;
    private $front;
    private $rear;
    private $count;

    public function __construct($maxSize)
    {
        $this->maxSize = $maxSize;
        $this->deque = array_fill(0, $maxSize, null);
        $this->front = 0;
        $this->rear = 0;
        $this->count = 0;
    }

    public function pushBack($value)
    {
        if ($this->count == $this->maxSize) {
            return false;
        }
        $this->deque[$this->rear] = $value;
        $this->rear = ($this->rear + 1) % $this->maxSize;
        $this->count++;
        return true;
    }

    public function pushFront($value)
    {
        if ($this->count == $this->maxSize) {
            return false;
        }
        $this->front = ($this->front - 1 + $this->maxSize) % $this->maxSize;
        $this->deque[$this->front] = $value;
        $this->count++;
        return true;
    }

    public function popBack()
    {
        if ($this->count == 0) {
            return false;
        }
        $this->rear = ($this->rear - 1 + $this->maxSize) % $this->maxSize;
        $value = $this->deque[$this->rear];
        $this->deque[$this->rear] = null;
        $this->count--;
        return $value;
    }

    public function popFront()
    {
        if ($this->count == 0) {
            return false;
        }
        $value = $this->deque[$this->front];
        $this->deque[$this->front] = null;
        $this->front = ($this->front + 1) % $this->maxSize;
        $this->count--;
        return $value;
    }
}


$maxSize = 5;
$deque = new CircularDeque($maxSize);
$deque->pushBack(1);
$deque->pushFront(2);
$deque->pushBack(3);
$deque->pushFront(4);

echo $deque->popBack().'<br>'; 
echo $deque->popFront().'<br>'; 
echo $deque->popBack() . '<br>'; 
echo $deque->popFront() . '<br>'; 
echo $deque->popBack() . '<br>'; 
