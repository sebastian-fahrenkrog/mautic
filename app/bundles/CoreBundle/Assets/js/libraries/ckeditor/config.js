/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */
CKEDITOR.config.allowedContent = true;
CKEDITOR.editorConfig = function( config ) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.format_tags = 'p;h1;h2;h3;h4;h5;h6;pre;address;div';
    config.enterMode = 2;
    config.shiftEnterMode = 1;    
};
