<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4; */

/**
 * Partial template for the Nealtine record edit form.
 *
 * PHP version 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at http://www.apache.org/licenses/LICENSE-2.0 Unless required by
 * applicable law or agreed to in writing, software distributed under the
 * License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS
 * OF ANY KIND, either express or implied. See the License for the specific
 * language governing permissions and limitations under the License.
 *
 * @package     omeka
 * @subpackage  neatline
 * @author      Scholars' Lab <>
 * @author      Bethany Nowviskie <bethany@virginia.edu>
 * @author      Adam Soroka <ajs6f@virginia.edu>
 * @author      David McClure <david.mcclure@virginia.edu>
 * @copyright   2011 The Board and Visitors of the University of Virginia
 * @license     http://www.apache.org/licenses/LICENSE-2.0.html Apache 2 License
 */
?>

<div id="edit-form" class="neatline-record-edit-form">

    <form class="form-stacked">

        <a class="fieldset title-and-description" href="">
            <div class="fieldset-arrow"></div>Text Description
        </a>
        <div class="fieldset">

            <div class="clearfix">
                <label for="title">Title</label>
                <div class="input">
                    <textarea id="item-title" class="xlarge" name="title" placeholder="Title" rows="1"></textarea>
                </div>
            </div>

            <div class="clearfix">
                <label>Slug</label>
                <div class="input">
                    <div class="inline-inputs">
                        <input class="xlarge" name="slug" type="text" placeholder="Slug" />
                        <span class="help-inline">The record slug is a unique identifier that can be used to externally reference the record.</span>
                    </div>
                </div>
            </div>

            <div class="clearfix">
                <label for="description">Description</label>
                <div class="input">
                    <textarea id="item-description" class="xlarge" name="description" placeholder="Description" rows="4"></textarea>
                </div>
            </div>

        </div>

        <hr />

        <a class="fieldset date-information" href="">
            <div class="fieldset-arrow"></div>Start and End Dates
        </a>
        <div class="fieldset">

            <div class="clearfix">
                <label>Start Date</label>
                <div class="input">
                    <div class="inline-inputs">
                        <input class="xlarge" name="start-date-date" type="text" placeholder="Start Date" />
                        <span class="help-inline">Use <a href="http://www.w3.org/TR/NOTE-datetime" target="_blank">ISO 8601</a> format dates.</span>
                    </div>
                </div>
            </div>

            <div class="clearfix">
                <label>End Date</label>
                <div class="input">
                    <div class="inline-inputs">
                        <input class="xlarge" name="end-date-date" type="text" placeholder="End Date" />
                    </div>
                </div>
            </div>

        </div>

        <hr />

        <a class="fieldset date-styles" href="">
            <div class="fieldset-arrow"></div>Timeline Styles
        </a>
        <div class="fieldset">

            <div class="clearfix">
                <label>Date Ambiguity</label>
                <div class="input">
                    <div class="inline-inputs">
                        <div class="date-ambiguity-container">
                            <div class="date-ambiguity-editor">
                                <div class="stop-marker left"><div class="color-swatch"></div></div>
                                <div class="stop-marker right"><div class="color-swatch"></div></div>
                            </div>
                            <input name="left-ambiguity-percentage" type="hidden" />
                            <input name="right-ambiguity-percentage" type="hidden" />
                        </div>
                        <span class="help-inline">Drag the beginning and ending sliders inward to capture
                            uncertainty over the date interval.</span>
                    </div>
                </div>
            </div>

        </div>

        <hr />

        <a class="fieldset map-styles" href="">
            <div class="fieldset-arrow"></div>Map Styles
        </a>
        <fieldset>

            <div class="control-group">
                <label>Shape Color</label>
                <div class="controls">
                    <input type="text" class="color-picker" name="vector-color" />
                    <p class="help-block">Select a fill color for the map shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Line Color</label>
                <div class="controls">
                    <input type="text" class="color-picker" name="stroke-color" />
                    <p class="help-block">Select a color for the border lines around shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Highlight Color</label>
                <div class="controls">
                    <input type="text" class="color-picker" name="highlight-color" />
                    <p class="help-block">Select a highlight color for the map shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Shape Opacity</label>
                <div class="controls">
                    <input type="text" class="integer-dragger" name="vector-opacity" />
                    <p class="help-block">Set the opacity for the map shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Line Opacity</label>
                <div class="controls">
                    <input type="text" class="integer-dragger" name="stroke-opacity" />
                    <p class="help-block">Set the opacity for the border lines around shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Line Thickness</label>
                <div class="controls">
                    <input type="text" class="integer-dragger" name="stroke-width" />
                    <p class="help-block">Set the width of the border lines around shapes.</p>
                </div>
            </div>

            <div class="control-group">
                <label>Point Radius</label>
                <div class="controls">
                    <input type="text" class="integer-dragger" name="point-radius" />
                    <p class="help-block">Set the radius of points on the map.</p>
                </div>
            </div>

            <div class="control-group">
                <div class="controls">
                    <button id="reset-styles-button" class="btn" href="#"><i class="icon-ok-sign"></i> Save</button>
                    <button class="btn icon undo reset-styles">Reset Item Styles</button>
                </div>
            </div>

        </fieldset>

        <hr />

        <div class="fieldset">

            <div class="clearfix">
                <div class="input">
                    <div class="inline-inputs">
                        <button id="map-focus-button" class="btn" href="#"><i class="icon-map-marker"></i> Fix Item-Specific Map Focus</button>
                        <span class="help-inline">Set a custom map focus for the item.</span>
                    </div>
                </div>
            </div>

            <div id="edit-form-actions" class="actions">
                <button id="record-save-button" class="btn btn-primary" href="#"><i class="icon-ok-sign icon-white"></i> Save</button>
                <button id="record-delete-button" class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i> Delete</button>
            </div>

        </div>

    </form>

</div>
