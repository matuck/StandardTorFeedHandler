<?php
namespace matuck\TorFeed\Handler;

use matuck\TorFeed\Items;

class StandardTorFeedHandler
{
    public function __construct($xml, &$items)
    {
        $items = array();
        foreach($xml->xpath('channel/item') as $node)
        {
            $items[] = new Items((string) $node->title[0], (string) $node->link[0], NULL);
        }
    }
}