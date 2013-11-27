<?php
/**
 * This file is part of the TorFeed package.
 *
 * (c) Mitch Tuck <matuck@matuck.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace matuck\TorFeed\Handler;

use matuck\TorFeed\Items;

/**
 * Standard handler for Torfeed
 * Processes torrent feeds.
 *
 * @author Mitch Tuck<matuck@matuck.com>
 */
class StandardTorFeedHandler
{
    /**
     * Constructor
     * 
     * @param SimpleXMLElement $xml
     * @param array $items This is the return of items.
     */
    public function __construct($xml, &$items = array())
    {
        $items = array();
        foreach($xml->xpath('channel/item') as $node)
        {
            $items[] = new Items((string) $node->title[0], (string) $node->link[0], NULL);
        }
    }
}