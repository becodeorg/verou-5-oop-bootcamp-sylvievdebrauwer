<?php

declare(strict_types=1);

class Vacancy extends Content
{
    public function getTitle()
    {
        return parent::getTitle() . ' - apply now!';
    }
}
/*
    When showing the title, 
they are modified as follows:
    vacancies are appended with " - apply now!".
    */

    