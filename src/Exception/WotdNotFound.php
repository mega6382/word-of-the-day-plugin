<?php declare(strict_types=1);

namespace AsyncBot\Plugin\WordOfTheDay\Exception;

class WotdNotFound extends Exception
{
    public function __construct()
    {
        parent::__construct('WOTD not found');
    }
}
