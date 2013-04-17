
/* vim: set expandtab tabstop=2 shiftwidth=2 softtabstop=2 cc=76; */

/**
 * Tests for map cursor events.
 *
 * @package     omeka
 * @subpackage  neatline
 * @copyright   2012 Rector and Board of Visitors, University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html
 */

describe('Map Cursor Events', function() {


  var layer, feature, vent;


  beforeEach(function() {

    _t.loadNeatline();
    _t.respondMap200(_t.json.MapCursorEvents.records);

    layer = _t.vw.MAP.getVectorLayers()[0];
    feature = layer.features[0];

    vent = spyOn(Neatline.vent, 'trigger').andCallThrough();

  });


  it('should publish `highlight` on feature highlight', function() {

    _t.hoverOnMapFeature(feature);

    expect(vent).toHaveBeenCalledWith('highlight', layer.nModel);

  });


  it('should publish `unhighlight` on feature unhighlight', function() {

    _t.hoverOnMapFeature(feature);
    _t.unHoverOnMapFeature();

    expect(vent).toHaveBeenCalledWith('unhighlight', layer.nModel);

  });


  it('should publish `select` on feature select', function() {

    _t.clickOnMapFeature(feature);

    expect(vent).toHaveBeenCalledWith('select', layer.nModel);

  });


  it('should publish `unselect` on feature unselect', function() {

    _t.clickOnMapFeature(feature);
    _t.clickOffMapFeature();

    expect(vent).toHaveBeenCalledWith('unselect', layer.nModel);

  });


  it('should issue GET request when map is moved', function() {

    _t.triggerMapMove();

    // Should trigger GET request to /records.
    _t.assertLastRequestRoute(Neatline.global.records_api);
    _t.assertLastRequestMethod('GET');

    // Should filter on extent and zoom.
    _t.assertLastRequestHasGetParameter('extent');
    _t.assertLastRequestHasGetParameter('zoom');

  });


});
