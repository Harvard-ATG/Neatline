<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=76; */

/**
 * Fixture generator for "Map Cursor Events" Jasmine suite.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

class FixturesTest_MapCursorEvents extends Neatline_RecordsFixtureCase
{


    /**
     * `MapCursorEvents.records.json`
     */
    public function testMapCursorEvents()
    {

        $record  = $this->__record($this->exhibit);
        $record->coverage = 'POINT(1 2)';
        $record->save();

        $this->writeFixtureFromRoute('neatline/records',
            'MapCursorEvents.records.json'
        );

    }


}
