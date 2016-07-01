﻿CKEDITOR.dialog.add("syntaxhighlightDialog", function(c) {
    var f = function() {
        var b = {};
        b.hideGutter = "true" === ("" + c.config.syntaxhighlight_hideGutter).toLowerCase();
        b.hideControls = "true" === ("" + c.config.syntaxhighlight_hideControls).toLowerCase();
        b.collapse = "true" === ("" + c.config.syntaxhighlight_collapse).toLowerCase();
        b.codeTitle = c.config.syntaxhighlight_codeTitle;
        b.showColumns = "true" === ("" + c.config.syntaxhighlight_showColumns).toLowerCase();
        b.noWrap = "true" === ("" + c.config.syntaxhighlight_noWrap).toLowerCase();
        b.firstLine = c.config.syntaxhighlight_firstLine;
        b.highlightChecked = "true" === ("" + c.config.syntaxhighlight_highlightChecked).toLowerCase();
        b.highlight = c.config.syntaxhighlight_highlight;
        b.lang = -1 < "applescript actionscript3 as3 bash shell sh coldfusion cf cpp c c# c-sharp csharp css delphi pascal pas diff patch erl erlang groovy haxe hx java jfx javafx js jscript javascript perl Perl pl php text plain powershell ps posh py python ruby rails ror rb sass scss scala sql tap Tap TAP ts typescript vb vbnet xml xhtml xslt html".split(" ").indexOf(c.config.syntaxhighlight_lang) ?
            c.config.syntaxhighlight_lang : "as3";
        b.code = c.config.syntaxhighlight_code;
        return b
    };
    return {
        title: c.lang.syntaxhighlight.title,
        minWidth: 500,
        minHeight: 400,
        contents: [{
            id: "source",
            label: c.lang.syntaxhighlight.sourceTab,
            accessKey: "S",
            elements: [{
                type: "vbox",
                children: [{
                    id: "cmbLang",
                    type: "select",
                    labelLayout: "horizontal",
                    label: c.lang.syntaxhighlight.langLbl,
                    widths: ["25%", "75%"],
                    items: [
                        ["ActionScript3", "as3"],
                        ["AppleScript", "applescript"],
                        ["Bash (Shell)", "bash"],
                        ["ColdFusion", "cf"],
                        ["C#", "csharp"],
                        ["C++", "cpp"],
                        ["CSS", "css"],
                        ["Delphi", "delphi"],
                        ["Diff", "diff"],
                        ["Erlang", "erl"],
                        ["Groovy", "groovy"],
                        ["Haxe", "hx"],
                        ["Javascript", "jscript"],
                        ["Java", "java"],
                        ["Java FX", "javafx"],
                        ["Perl", "perl"],
                        ["PHP", "php"],
                        ["Plain (Text)", "plain"],
                        ["PowerShell", "ps"],
                        ["Python", "python"],
                        ["Ruby", "ruby"],
                        ["Sass", "scss"],
                        ["Scala", "scala"],
                        ["SQL", "sql"],
                        ["TAP", "tap"],
                        ["TypeScript", "ts"],
                        ["VB", "vb"],
                        ["XML/XHTML", "xml"]
                    ],
                    setup: function(b) {
                        b.lang && this.setValue(b.lang)
                    },
                    commit: function(b) {
                        b.lang = this.getValue()
                    }
                }]
            }, {
                type: "textarea",
                id: "hl_code",
                rows: 22,
                style: "width:100%",
                validate: CKEDITOR.dialog.validate.notEmpty(c.lang.syntaxhighlight.sourceTextareaEmptyError),
                setup: function(b) {
                    b.code && this.setValue(b.code)
                },
                commit: function(b) {
                    b.code = this.getValue()
                }
            }]
        }, {
            id: "advanced",
            label: c.lang.syntaxhighlight.advancedTab,
            accessKey: "A",
            elements: [{
                type: "vbox",
                children: [{
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.hideGutter + "</strong>"
                }, {
                    type: "checkbox",
                    id: "hide_gutter",
                    label: c.lang.syntaxhighlight.hideGutterLbl,
                    setup: function(b) {
                        this.setValue(b.hideGutter)
                    },
                    commit: function(b) {
                        b.hideGutter = this.getValue()
                    }
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.hideControls + "</strong>"
                }, {
                    type: "checkbox",
                    id: "hide_controls",
                    label: c.lang.syntaxhighlight.hideControlsLbl,
                    setup: function(b) {
                        this.setValue(b.hideControls)
                    },
                    commit: function(b) {
                        b.hideControls = this.getValue()
                    }
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.collapse + "</strong>"
                }, {
                    type: "checkbox",
                    id: "collapse",
                    label: c.lang.syntaxhighlight.collapseLbl,
                    setup: function(b) {
                        this.setValue(b.collapse)
                    },
                    commit: function(b) {
                        b.collapse = this.getValue()
                    }
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.codeTitleLbl + "</strong>"
                }, {
                    type: "hbox",
                    widths: ["5%", "95%"],
                    children: [{
                        type: "text",
                        id: "default_ti",
                        style: "width:40%",
                        label: "",
                        setup: function(b) {
                            null != b.codeTitle && this.setValue(b.codeTitle)
                        },
                        commit: function(b) {
                            this.getValue() && "" != this.getValue() && (b.codeTitle = this.getValue())
                        }
                    }]
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.showColumns + "</strong>"
                }, {
                    type: "checkbox",
                    id: "show_columns",
                    label: c.lang.syntaxhighlight.showColumnsLbl,
                    setup: function(b) {
                        this.setValue(b.showColumns)
                    },
                    commit: function(b) {
                        b.showColumns = this.getValue()
                    }
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.lineWrap + "</strong>"
                }, {
                    type: "checkbox",
                    id: "line_wrap",
                    label: c.lang.syntaxhighlight.lineWrapLbl,
                    setup: function(b) {
                        this.setValue(b.noWrap)
                    },
                    commit: function(b) {
                        b.noWrap = this.getValue()
                    }
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.lineCount + "</strong>"
                }, {
                    type: "hbox",
                    widths: ["5%", "95%"],
                    children: [{
                        type: "text",
                        id: "default_lc",
                        style: "width:15%",
                        label: "",
                        setup: function(b) {
                            1 < b.firstLine && this.setValue(b.firstLine)
                        },
                        commit: function(b) {
                            this.getValue() && "" != this.getValue() && (b.firstLine = this.getValue())
                        }
                    }]
                }, {
                    type: "html",
                    html: "<strong>" + c.lang.syntaxhighlight.highlight + "</strong>"
                }, {
                    type: "hbox",
                    widths: ["5%", "95%"],
                    children: [{
                        type: "text",
                        id: "default_hl",
                        style: "width:40%",
                        label: "",
                        setup: function(b) {
                            null != b.highlight && this.setValue(b.highlight)
                        },
                        commit: function(b) {
                            this.getValue() && "" != this.getValue() && (b.highlight = this.getValue())
                        }
                    }]
                }, {
                    type: "hbox",
                    widths: ["5%",
                        "95%"
                    ],
                    children: [{
                        type: "html",
                        html: "<i>" + c.lang.syntaxhighlight.highlightLbl + "</i>"
                    }]
                }]
            }]
        }],
        onShow: function() {
            var b = this.getParentEditor().getSelection().getStartElement(),
                b = b && b.getAscendant("pre", !0),
                a = null;
            if (b) {
                code = b.getHtml().replace(/<br>/g, "\n").replace(/&nbsp;/g, " ").replace(/&lt;/g, "<").replace(/&gt;/g, ">").replace(/&quot;/g, '"').replace(/&amp;/g, "&");
                var a = f(),
                    c = b.getAttribute("class");
                if (c) {
                    if (-1 < c.indexOf("brush")) {
                        var d = /brush:[ ]*(\w*)/.exec(c);
                        if (null != d && 0 < d.length)
                            if (a.lang = d[1].replace(/^\s+|\s+$/g,
                                    ""), "actionscript" == a.lang) a.lang = "as3";
                            else if ("shell" == a.lang || "sh" == a.lang) a.lang = "bash";
                        else if ("coldfusion" == a.lang) a.lang = "cf";
                        else if ("c" == a.lang) a.lang = "cpp";
                        else if ("c#" == a.lang || "c-sharp" == a.lang) a.lang = "csharp";
                        else if ("pascal" == a.lang || "pas" == a.lang) a.lang = "delphi";
                        else if ("patch" == a.lang) a.lang = "diff";
                        else if ("erlang" == a.lang) a.lang = "erl";
                        else if ("haxe" == a.lang) a.lang = "hx";
                        else if ("jfx" == a.lang) a.lang = "javafx";
                        else if ("js" == a.lang || "javascript" == a.lang) a.lang = "jscript";
                        else if ("Perl" ==
                            a.lang || "pl" == a.lang) a.lang = "perl";
                        else if ("text" == a.lang) a.lang = "plain";
                        else if ("powershell" == a.lang || "posh" == a.lang) a.lang = "ps";
                        else if ("py" == a.lang) a.lang = "python";
                        else if ("rails" == a.lang || "ror" == a.lang || "rb" == a.lang) a.lang = "ruby";
                        else if ("sass" == a.lang) a.lang = "scss";
                        else if ("Tap" == a.lang || "TAP" == a.lang) a.lang = "tap";
                        else if ("typescript" == a.lang) a.lang = "ts";
                        else if ("vbnet" == a.lang) a.lang = "vb";
                        else if ("xhtml" == a.lang || "xslt" == a.lang || "html" == a.lang) a.lang = "xml"
                    } - 1 < c.indexOf("gutter") && (a.hideGutter = !0); - 1 < c.indexOf("toolbar") && (a.hideControls = !0); - 1 < c.indexOf("collapse") && (a.collapse = !0); - 1 < c.indexOf("first-line") && (d = /first-line:[ ]*([0-9]{1,4})/.exec(c), null != d && (0 < d.length && 1 < d[1]) && (a.firstLine = d[1])); - 1 < c.indexOf("highlight") && c.match(/highlight:[ ]*\[[0-9]+(,[0-9]+)*\]/) && (d = /highlight:[ ]*\[(.*)\]/.exec(c), null != d && 0 < d.length && (a.highlightChecked = !0, a.highlight = d[1])); - 1 < c.indexOf("ruler") && (a.showColumns = !0); - 1 < c.indexOf("wrap-lines") && (a.noWrap = !0);
                    if (b = b.getAttribute("title")) b = b.replace(/^\s+|\s+$/g,
                        ""), 0 < b.length && (a.codeTitle = b)
                }
                a.code = code
            } else a = f();
            this.setupContent(a)
        },
        onOk: function() {
            var b = this.getParentEditor(),
                a = b.getSelection().getStartElement(),
                c = a && a.getAscendant("pre", !0),
                a = f();
            this.commitContent(a);
            var d;
            d = "brush:" + a.lang + ";";
            a.hideGutter && (d += "gutter:false;");
            a.hideControls && (d += "toolbar:false;");
            a.collapse && (d += "collapse:true;");
            a.showColumns && (d += "ruler:true;");
            a.noWrap && (d += "wrap-lines:false;");
            0 < a.firstLine.length && (a.firstLine = a.firstLine.replace(/[^0-9]+/g, ""), 0 < a.firstLine.length &&
                1 < a.firstLine && (d += "first-line:" + a.firstLine + ";"));
            null != a.highlight && 0 < a.highlight.length && (a.highlight = a.highlight.replace(/[^\d,]+/g, "").replace(/,{2,}/g, ",").replace(/(^,)|(,$)/g, ""), 0 < a.highlight.length && (d += "highlight:[" + a.highlight.replace(/\s/gi, "") + "];"));
            var e;
            a.codeTitle = a.codeTitle.replace(/^\s+|\s+$/g, "");
            e = 0 < a.codeTitle.length ? a.codeTitle : !1;
            c ? (c.setAttribute("class", d), !1 != e ? c.setAttribute("title", e) : c.removeAttribute("title"), c.setText(a.code)) : (c = new CKEDITOR.dom.element("pre"), c.setAttribute("class",
                d), !1 != e && c.setAttribute("title", e), c.setText(a.code), b.insertElement(c))
        }
    }
});