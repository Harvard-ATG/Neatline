﻿/*
 Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.md or http://ckeditor.com/license
*/
CKEDITOR.plugins.add("uicolor",{requires:"dialog",lang:"ar,bg,ca,cs,cy,da,de,el,en,eo,es,et,eu,fa,fi,fr,fr-ca,gl,he,hr,hu,id,it,ja,km,ko,ku,lv,mk,nb,nl,no,pl,pt,pt-br,ru,si,sk,sl,sq,sv,tr,ug,uk,vi,zh-cn",icons:"uicolor",hidpi:!0,init:function(a){CKEDITOR.env.ie6Compat||(a.addCommand("uicolor",new CKEDITOR.dialogCommand("uicolor")),a.ui.addButton&&a.ui.addButton("UIColor",{label:a.lang.uicolor.title,command:"uicolor",toolbar:"tools,1"}),CKEDITOR.dialog.add("uicolor",this.path+"dialogs/uicolor.js"),
CKEDITOR.scriptLoader.load(CKEDITOR.getUrl("plugins/uicolor/yui/yui.js")),CKEDITOR.document.appendStyleSheet(CKEDITOR.getUrl("plugins/uicolor/yui/assets/yui.css")))}});