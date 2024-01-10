<?php

declare(strict_types=1);

class Ad extends Content
{
    public function getTitle()
    {
        return strtoupper(parent::getTitle());
    }
}

/*
When showing the title, 
they are modified as follows:
    ads are shown in all caps
*/