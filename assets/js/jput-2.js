/*
 * jQuery jPut Plug-in 2.0.2
 * http://plugins.jquery.com/jput/
 * Develope By : Shabeer Ali M
 * Home Page : http://shabeer-ali-m.github.io/jPut/
 * last Update: Multiple Expression
 */
var jPut = [];
jPut.auto = !0,
function($) {
    $.fn.jPut = function(options) {
        function json_value(t, a) {
            if ("" == t) return a;
            if (-1 == t.indexOf(".")) return a[t];
            t = t.split(".");
            for (var e = 0; e < t.length; e++) a = a[t[e]];
            return a
        }

        function ajax(t) {
            $.ajax({
                url: t.ajax_url,
                data: t.ajax_data,
                dataType: t.ajax_dataType,
                jsonpCallback: t.ajax_jsonpCallback,
                type: t.ajax_type,
                success: function(a) {
                    -1 != t.new_data ? t.jsonData = a : t.new_data = a, process(t)
                },
                error: function() {}
            })
        }

        function process(options) {
            1 == options.clear && main.html("");
            var arr = options.jsonData;
            if ("undefined" != typeof options.new_data && -1 != options.new_data) arr = options.new_data;
            else {
                if ("object" != typeof arr && (arr = $.parseJSON(options.jsonData)), "object" != typeof arr) throw "Invalid JSON data!";
                if (0 == options.jrepeat && null == arr) throw "JSON data is empty!";
                null == arr && (arr = []), 0 != options.limit && (arr = arr.slice(0, options.limit)), options.jsonData = arr, (1 == options.singleData || "true" == options.singleData) && (arr = [arr])
            }
            "" != options.dataName && (arr = json_value(options.dataName, options.jsonData)), $.each(arr, function(i, json) {
                "undefined" != typeof options.new_data && -1 != options.new_data ? (0 == options.prepend ? options.jsonData.push(json) : options.jsonData.unshift(json), index = options.jsonData.length - 1) : index = i, "" == options.template ? (el1 = el.clone(), options.template = el1) : el1 = options.template, jrepeat = el.find("[jrepeat]").not("[jrepeat] [jrepeat]"), jrepeat.length > 0 && jrepeat.each(function() {
                    $(this).attr("jrepeat-" + i, $(this).attr("jrepeat"))
                }), el1_jrepeat = el1.find("[jrepeat]"), el1_jrepeat.length > 0 && el1_jrepeat.each(function() {
                    $(this).remove()
                });
                var matches = el1.html().match(regExp);
                html = el.html(), null != matches && $.each(matches, function(aindex, value) {
                    value = $("<div/>").html(value).text();
                    var reg = new RegExp(value);
                    t = "exp1" == options.expression ? value.replace(/{{|}}/g, "") : value.replace(/{[|]}/g, "");
                    try {
                        html = html.replace(value, eval(t))
                    } catch (e) {
                        html = html.replace(value, ""), console.log("jPut:" + e.message)
                    }
                }), html = html.replace("jsrc", "src"), 0 == options.prepend ? main.append(html) : main.prepend(html), jrepeat.length > 0 && jrepeat.each(function() {
                    $("[jrepeat-" + i + '="' + $(this).attr("jrepeat") + '"]').jPut({
                        jsonData: json[$(this).attr("jrepeat")],
                        name: $(this).attr("jrepeat"),
                        jrepeat: !0,
                        error: function(t) {
                            throw t
                        }
                    })
                })
            }), $.isFunction(options.done) && options.done.call(this, options.jsonData)
        }
        Object.defineProperty(this, "data", {
            get: function() {
                return options.jsonData
            },
            set: function(t) {
                options.jsonData = t, options.new_data = -1, options.clear = !0, process(options)
            }
        }), this.insertAt = function(t, a) {
            options.jsonData.splice(t, 0, a), process(options)
        }, this.update = function(t, a) {
            options.new_data = -1, options.clear = !0, options.jsonData[t] = a, process(options)
        }, this.remove = function(t) {
            options.clear = !0, options.jsonData.splice(t, 1), options.new_data = -1, process(options)
        }, this.append = function(t) {
            options.clear = !1, options.new_data = [t], process(options)
        }, this.prepend = function(t) {
            options.clear = !1, options.prepend = !0, options.new_data = [t], process(options)
        }, this.clear = function() {
            options.new_data = -1, options.clear = !0, options.jsonData = [], process(options)
        }, this.bind = function() {
            process(options)
        }, this.call_ajax = function(t) {
            options.clear = !1, options = $.extend(options, t), options.new_data = -1, ajax(options)
        };
        var defaults = {
            name: "",
            expression: "exp1",
            jsonData: [],
            dataName: "",
            limit: 0,
            prepend: !1,
            clear: !0,
            singleData: !1,
            jrepeat: !1,
            ajax_url: "",
            ajax_data: "",
            ajax_type: "GET",
            ajax_dataType: "json",
            ajax_jsonpCallback: "",
            template: "",
            done: function() {},
            error: function() {}
        }, options = $.extend({}, defaults, options),
            html;
        try {
            var main = $(this),
                el = "" == options.name ? $("[jput]").clone() : $('[jput="' + options.name + '"]').clone();
            if (0 == el.length) throw "Cant find the jPut template (" + options.name + ")!";
            if ("exp1" == options.expression) var regExp = /\{{([^}}]+)\}}/g;
            else var regExp = /\{\[([^}}]+)\]\}/g;
            var matches = el.html().match(regExp),
                $this = this;
            "" != options.ajax_url ? ajax(options) : process(options)
        } catch (err) {
            $.isFunction(options.error) && options.error.call(this, err)
        }
        return this.getValue = function(t) {
            return options.jsonData[t]
        }, this.each(function() {})
    }, $.jPut = function(t) {
        jPut[t.name] = $("#users").jPut(t)
    }
}(jQuery), $(document).ready(function() {
    if (1 == jPut.auto) {
        var t = ["jsonData", "dataName", "singleData"],
            a = ["jsondata", "dataname", "singledata"];
        $("[jput]").each(function(e, n) {
            var o = [];
            el = $(n).attr("jput"), o.name = el, $(n).each(function() {
                $.each(this.attributes, function() {
                    this.specified && (s_index = $.inArray(this.name.replace("jput-", ""), a), -1 != s_index ? o[t[s_index]] = this.value : -1 != this.name.search("jput-") && (o[this.name.replace("jput-", "")] = this.value))
                })
            }), jPut[el] = $(n).jPut(o)
        })
    }
});
