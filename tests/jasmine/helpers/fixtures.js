
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * Fixture loading helpers.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */


var _t = (function(_t) {


  /**
   * Set the fixtures path.
   */
  _t.setFixturesPath = function() {
    jasmine.getFixtures().fixturesPath = 'tests/jasmine/fixtures';
    jasmine.getStyleFixtures().fixturesPath = 'views/shared/css/payloads';
  };


  /**
   * Read JSON fixtures.
   */
  _t.loadJsonFixtures = function() {

    this.json = {

      MapCursorEvents: {
        records:    readFixtures('MapCursorEvents.records.json')
      },

      MapRecordFocusing: {
        records:    readFixtures('MapRecordFocusing.records.json'),
        record:     readFixtures('MapRecordFocusing.record.json')
      },

      MapVectorLayers: {
        records: {
          regular:  readFixtures('MapVectorLayers.records.regular.json'),
          deleted:  readFixtures('MapVectorLayers.records.deleted.json'),
          styles:   readFixtures('MapVectorLayers.records.styles.json')
        }
      },

      StaticBubble: {
        records:    readFixtures('StaticBubble.records.json')
      },

      MapEditLayer: {
        records: {
          regular:  readFixtures('MapEditLayer.records.regular.json'),
          deleted:  readFixtures('MapEditLayer.records.deleted.json')
        }
      },

      RecordForm: {
        record:     readFixtures('RecordForm.record.json'),
        records:    readFixtures('RecordForm.records.json')
      },

      RecordFormOpen: {
        records:    readFixtures('RecordFormOpen.records.json')
      },

      RecordsList: {
        records: {
          regular:  readFixtures('RecordsList.records.regular.json'),
          html:     readFixtures('RecordsList.records.html.json'),
          empty:    readFixtures('RecordsList.records.empty.json')
        }
      },

      RecordsPagination: {
        records: {
          p12:      readFixtures('RecordsPagination.records.p12.json'),
          p23:      readFixtures('RecordsPagination.records.p23.json'),
          p34:      readFixtures('RecordsPagination.records.p34.json'),
          p56:      readFixtures('RecordsPagination.records.p56.json'),
          p6:       readFixtures('RecordsPagination.records.p6.json')
        }
      },

      SearchInit: {
        records:    readFixtures('SearchInit.records.json')
      },

      SearchMapMirror: {
        records: {
          list:     readFixtures('SearchMapMirror.records.list.json'),
          map:      readFixtures('SearchMapMirror.records.map.json')
        }
      },

      SearchQuery: {
        records:    readFixtures('SearchQuery.records.json')
      }

    };

    this.xml = {

      RecordFormText: {
        items:      readFixtures('RecordFormText.items.xml')
      }

    };

  };


  return _t;


})(_t || {});
