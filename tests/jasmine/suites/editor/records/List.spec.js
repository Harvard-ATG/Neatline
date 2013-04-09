
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * Record browser tests.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

describe('Records List', function() {


  beforeEach(function() {
    _t.loadEditor();
  });


  it('should list records', function() {

    // --------------------------------------------------------------------
    // #records should render the list of records.
    // --------------------------------------------------------------------

    _t.showRecordList(_t.json.records.standard);
    var recordModels = _t.getRecordListModels();
    var recordRows = _t.getRecordRows();

    // Titles and bodies should be listed.
    expect($(recordRows[1]).find('.title')).toHaveText('title1');
    expect($(recordRows[1]).find('.body')).toHaveText('body1');
    expect($(recordRows[2]).find('.title')).toHaveText('title2');
    expect($(recordRows[2]).find('.body')).toHaveText('body2');
    expect($(recordRows[3]).find('.title')).toHaveText('title3');
    expect($(recordRows[3]).find('.body')).toHaveText('body3');

    // Should link to new record.
    expect($(recordRows[0]).attr('href')).toEqual('#record/add');

    // Should link to existing records.
    expect($(recordRows[1]).attr('href')).
      toEqual('#record/'+recordModels[0].id);
    expect($(recordRows[2]).attr('href')).
      toEqual('#record/'+recordModels[1].id);
    expect($(recordRows[3]).attr('href')).
      toEqual('#record/'+recordModels[2].id);

  });


  it('should strip tags out of title and body fields', function() {

    // --------------------------------------------------------------------
    // HTML tags should be removed from title and body fields.
    // --------------------------------------------------------------------

    _t.showRecordList(_t.json.records.htmlTags);
    var recordRows = _t.getRecordRows();

    // Tags should be removed.
    expect($(recordRows[1]).find('.title')).toHaveText('title');
    expect($(recordRows[1]).find('.body')).toHaveText('body');

  });


  it('should render a placeholder for an empty title', function() {

    // --------------------------------------------------------------------
    // When a record title is empty, a placeholder should be displayed.
    // --------------------------------------------------------------------

    _t.showRecordList(_t.json.records.noTitle);
    var recordRows = _t.getRecordRows();

    // Placeholder should be displayed.
    expect($(recordRows[1]).find('.title')).toHaveText(
      STRINGS.placeholders.title);

  });


});
