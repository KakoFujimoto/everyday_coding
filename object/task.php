<?php

class Task
{

    public $name;

    public $priority;

    public $progress;

    public function isCompleted(): bool
    {
        return $this->progress >= 100;
    }
}
