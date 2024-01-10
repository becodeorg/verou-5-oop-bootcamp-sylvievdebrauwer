<?php
class Content
{
    protected string $title;
    protected string $text;

    public function __construct(string $title, string $text)
    {
        $this->title = $title;
        $this->text = $text;
    }

    public function showTitle()
    {
        return $this->title;
    }

    public function getText()
    {
        return $this->text;
    }
}
