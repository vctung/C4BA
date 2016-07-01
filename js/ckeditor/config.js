/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */
var root_url =  window.location.protocol + "//" + document.location.hostname +'/blog_c4ba';
CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.filebrowserBrowseUrl = root_url+'/ckfinder/ckfinder.html';   
	config.filebrowserImageBrowseUrl = root_url+'/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = root_url+'/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = root_url+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
    config.filebrowserImageUploadUrl = root_url+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
    config.filebrowserFlashUploadUrl = root_url+'/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};
