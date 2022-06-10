<?php

namespace Blog\Models\Articles;

class Blog
{
    private $id;
    private $name;
    private $text;

    public function __construct
    (
        $id,
        $name,
        $text
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->text = $text;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getText()
    {
        return $this->text;
    }
}
