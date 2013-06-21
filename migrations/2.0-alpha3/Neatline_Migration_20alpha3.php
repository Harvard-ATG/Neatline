<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 cc=76; */

/**
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

class Neatline_Migration_20alpha3 extends Neatline_Migration_Abstract
{


    /**
     * Migrate to `2.0-alpha3`.
     */
    public function migrate()
    {
        $this->_addPublishedColumn();
        $this->_renameUserIdColumns();
        $this->_addFulltextIndexes();
    }


    /**
     * Add a `published` column to the exhibits table.
     */
    private function _addPublishedColumn()
    {
        $this->db->query(
            "ALTER TABLE `{$this->db->prefix}neatline_exhibits`
            ADD COLUMN `published` TIMESTAMP NULL"
        );
    }


    /**
     * Rename `user_id` -> `owner_id` on exhibits and records tables.
     */
    private function _renameUserIdColumns()
    {

        $this->db->query(
            "ALTER TABLE `{$this->db->prefix}neatline_exhibits`
            CHANGE COLUMN `user_id` `owner_id`
            INT(10) UNSIGNED NOT NULL DEFAULT 0"
        );

        $this->db->query(
            "ALTER TABLE `{$this->db->prefix}neatline_records`
            CHANGE COLUMN `user_id` `owner_id`
            INT(10) UNSIGNED NOT NULL DEFAULT 0"
        );

    }


    /**
     * Add fulltext indexes to `slug`, `tags`, and `widgets`.
     */
    private function _addFulltextIndexes()
    {
        $this->db->query(
            "ALTER TABLE `{$this->db->prefix}neatline_records`
            ADD FULLTEXT(`slug`, `tags`, `widgets`)"
        );
    }


}
