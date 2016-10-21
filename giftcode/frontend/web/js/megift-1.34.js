(function(m) {
    var b = {};
    m.meGift = b;
    var h = function(a, d) {
            var k = function() {};
            k.prototype = d.prototype;
            a.prototype = new k;
            a.prototype.constructor = a;
            a.prototype.__super = d.prototype
        },
        g = function(a, d, k, b, c) {
            void 0 == c && (c = !0);
            var e = location.search.split("_obuser=")[1];
            e && (a += (-1 !== a.indexOf("?") ? "&" : "?") + "_obuser=" + e);
            $.ajax({
                url: a,
                type: "POST",
                data: d,
                async: c
            }).done(function(a) {
                0 > a.err ? (x.build(a.msg), b && b(a)) : k && k(a.data)
            })
        },
        c, l = function() {};
    c = l.prototype;
    c.getTitle = function() {
        return "Th\u00f4ng b\u00e1o"
    };
    c.getBody =
        function() {
            return ""
        };
    c.getButton = function() {
        return '<button id="modal_btn_ok" type="button" data-dismiss="modal" class="btn btn-primary">\u0110\u00f3ng</button>'
    };
    c.show = function() {
        var a = '<a id="confirm-box-link" href="#" data-toggle="modal" data-target="#modal-box"></a><div class="' + this.getModalStyle() + '" id="modal-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;">   <div class="modal-dialog" role="document">\t<div class="modal-content">\t    <div class="modal-header">\t    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>\t    <h4 class="modal-title" id="modal-box-title">' +
            this.getTitle() + '</h4>\t</div>   <div id="modal_box_body" class="modal-body">' + this.getBody() + '</div>   <div class="modal-footer">' + this.getButton() + "</div></div>";
        $("#modal_popup_container").html(a);
        $("#confirm-box-link").trigger("click")
    };
    c.updateBody = function() {
        $("#modal_box_body").html(this.getBody())
    };
    c.getModalStyle = function() {
        return "modal fade"
    };
    var r = function() {
        this.mMessage = ""
    };
    h(r, l);
    c = r.prototype;
    c.build = function(a, d) {
        this.mMessage = a || "";
        this.show();
        $("#modal_btn_ok").on("click", d)
    };
    c.getButton =
        function() {
            return '<button id="modal_btn_ok" type="button" data-dismiss="modal" class="btn btn-primary">\u0110\u1ed3ng \u00dd</button>'
        };
    c.getBody = function() {
        return '<div class="notify-ctn">' + this.mMessage + "</div>"
    };
    c.getModalStyle = function() {
        return "modal notify-pop fade in"
    };
    var t = function() {
        this.mMessage = ""
    };
    h(t, l);
    c = t.prototype;
    c.build = function(a, d, k) {
        this.mMessage = a || "";
        this.show();
        $("#modal_btn_ok").on("click", d);
        $("#modal_btn_cancel").on("click", k)
    };
    c.getButton = function() {
        return '<button id="modal_btn_ok" type="button" data-dismiss="modal" class="btn btn-primary">\u0110\u1ed3ng \u00dd</button><button id="modal_btn_cancel" type="button" data-dismiss="modal" class="btn btn-primary">H\u1ee7y</button>'
    };
    c.getBody = function() {
        return this.mMessage
    };
    var u = function() {
        this.mMessage = ""
    };
    h(u, l);
    c = u.prototype;
    c.build = function() {
        if (!this.isLoading) {
            this.mMessage = "<em>\u0110ang t\u1ea3i d\u1eef li\u1ec7u</em>";
            this.show();
            this.isLoading = !0;
            this.recordCounter = 1;
            var a = this;
            g("/megift/ajax/history", {
                nextSlice: 0
            }, function(d) {
                var k = "";
                b.CONFIG.historySlice = d.nextSlice;
                var f = d.html,
                    c;
                for (c in f) var e = f[c],
                    k = k + ("<tr>\t<td>" + a.recordCounter++ + "</td>\t<td>" + e.title + '</td>\t<td><span class="code-txt">' + e.code + "</span></td>\t<td>" +
                        e.receivetime + "</td>\t<td>" + e.status + "</td></tr>");
                a.mMessage = '<div class="gift-history">   <table class="table table-striped">\t<thead>\t    <tr>\t\t<th>STT</th>\t\t<th>Lo\u1ea1i qu\u00e0</th>\t\t<th>Th\u00f4ng tin</th>\t\t<th>Ng\u00e0y nh\u1eadn</th>\t\t<th>K\u1ebft qu\u1ea3</th>\t    </tr>\t</thead>\t<tbody id="modal_code_history_body">' + k + "</tbody>   </table>"; - 1 !== d.nextSlice && (a.mMessage += '   <a id="modal_code_history_seemore" href="javascript:void(0)" onclick="meGift.loadMoreCodeHistoryBox();" class="seemore">T\u1ea3i th\u00eam</a>');
                a.mMessage += "</div>";
                a.updateBody();
                a.isLoading = !1
            })
        }
    };
    c.loadMore = function(a) {
        if (!this.isLoading) {
            this.isLoading = !0;
            var d = this;
            g("/megift/ajax/history", {
                nextSlice: b.CONFIG.historySlice
            }, function(a) {
                var f = "";
                b.CONFIG.historySlice = a.nextSlice; - 1 === a.nextSlice && $("#modal_code_history_seemore").hide();
                a = a.html;
                for (var c in a) var e = a[c],
                    f = f + ("<tr>\t<td>" + d.recordCounter++ + "</td>\t<td>" + e.title + '</td>\t<td><span class="code-txt">' + e.code + "</span></td>\t<td>" + e.receivetime + "</td>\t<td>" + e.status + "</td></tr>");
                f = $("<div>").html(f);
                $("#modal_code_history_body").append(f.contents());
                d.isLoading = !1
            })
        }
    };
    c.getTitle = function() {
        return "L\u1ecbch s\u1eed nh\u1eadn qu\u00e0 - l\u01b0u code"
    };
    c.getBody = function() {
        return this.mMessage
    };
    var q = function() {
        this.mMessage = ""
    };
    h(q, l);
    c = q.prototype;
    c.formatDate = function(a) {
        a = new Date(1E3 * a);
        return a.getDate() + "/" + (a.getMonth() + 1) + "/" + a.getFullYear()
    };
    c.build = function() {
        this.mMessage = "<em>\u0110ang t\u1ea3i d\u1eef li\u1ec7u</em>";
        this.show();
        var a = this;
        g("/megift/ajax/getuserprofile", {}, function(d) {
            d.displayname = d.displayname || "Ch\u01b0a c\u1eadp nh\u1eadt";
            d.address = d.address || "Ch\u01b0a c\u1eadp nh\u1eadt";
            d.phone = d.phone || "Ch\u01b0a c\u1eadp nh\u1eadt";
            d.identity = d.identity || "Ch\u01b0a c\u1eadp nh\u1eadt";
            a.mMessage = '<div class="your-info">   <div class="row">\t<p class="lb">H\u1ecd t\u00ean:</p>\t<p class="txt">' + d.displayname + '</p>   </div>   <div class="row">\t<p class="lb">Ng\u00e0y sinh:</p>\t<p class="txt">' + a.formatDate(d.birday) + '</p>   </div>   <div class="row">\t<p class="lb">\u0110\u1ecba ch\u1ec9:</p>\t<p class="txt">' +
                d.address + '</p>   </div>   <div class="row">\t<p class="lb">\u0110i\u1ec7n tho\u1ea1i:</p>\t<p class="txt">' + d.phone + '</p>   </div>   <div class="row">\t<p class="lb">S\u1ed1 CMND:</p>\t<p class="txt">' + d.identity + '</p>   </div>   <div class="row">\t<p class="lb">Ng\u00e0y c\u1ea5p:</p>\t<p class="txt">' + a.formatDate(d.identityDate) + "</p>   </div></div>";
            a.updateBody();
            $("#modal_btn_update").on("click", function() {
                setTimeout(b.showPersonalInfoUpdateBox, 1)
            })
        })
    };
    c.getTitle = function() {
        return "Th\u00f4ng tin c\u00e1 nh\u00e2n"
    };
    c.getBody = function() {
        return this.mMessage
    };
    c.getButton = function() {
        return '<button id="modal_btn_update" type="button" data-dismiss="modal" class="btn btn-primary">C\u1eadp nh\u1eadt</button><button id="modal_btn_close" type="button" data-dismiss="modal" class="btn btn-primary">\u0110\u00f3ng</button>'
    };
    l = function() {
        this.mMessage = "";
        this.printDatetimeSelector = function(a, d) {
            for (var b = new Date(1E3 * d), f = '<div class="multi-col clearfix"><div class="col col-date">   <select id="' + a + '-day" class="form-control">\t<option value="1">01</option>\t<option value="2">02</option>\t<option value="3">03</option>\t<option value="4">04</option>\t<option value="5">05</option>\t<option value="6">06</option>\t<option value="7">07</option>\t<option value="8">08</option>\t<option value="9">09</option>\t<option value="10">10</option>\t<option value="11">11</option>\t<option value="12">12</option>\t<option value="13">13</option>\t<option value="14">14</option>\t<option value="15">15</option>\t<option value="16">16</option>\t<option value="17">17</option>\t<option value="18">18</option>\t<option value="19">19</option>\t<option value="20">20</option>\t<option value="21">21</option>\t<option value="22">22</option>\t<option value="23">23</option>\t<option value="24">24</option>\t<option value="25">25</option>\t<option value="26">26</option>\t<option value="27">27</option>\t<option value="28">28</option>\t<option value="29">29</option>\t<option value="30">30</option>\t<option value="31">31</option>   </select></div><div class="col col-date">   <select id="' +
                    a + '-month" class="form-control">\t<option value="1">01</option>\t<option value="2">02</option>\t<option value="3">03</option>\t<option value="4">04</option>\t<option value="5">05</option>\t<option value="6">06</option>\t<option value="7">07</option>\t<option value="8">08</option>\t<option value="9">09</option>\t<option value="10">10</option>\t<option value="11">11</option>\t<option value="12">12</option>   </select></div><div class="col col-date">   <select id="' + a + '-year" class="form-control">',
                    c = parseInt((new Date).getFullYear()), e = 1950; e <= c; e++) f += "<option>" + e + "</option>";
            f += "   </select></div></div>";
            setTimeout(function() {
                $("#" + a + "-day").val(b.getDate());
                $("#" + a + "-month").val(b.getMonth() + 1);
                $("#" + a + "-year").val(b.getFullYear())
            }, 1);
            return f
        }
    };
    h(l, q);
    c = l.prototype;
    c.build = function(a) {
        this.mMessage = "<em>\u0110ang t\u1ea3i d\u1eef li\u1ec7u</em>";
        this.show();
        var d = this;
        g("/megift/ajax/getuserprofile", {}, function(b) {
            d.mMessage = '<div class="update-your-info">   <div class="form-group">\t<label for="">H\u1ecd t\u00ean:</label>\t<div id="form-group-displayname" class="frms">\t    <input type="text" class="form-control" id="form-displayname" placeholder="H\u1ecd t\u00ean" value="' +
                b.displayname + '">\t</div>     </div>     <div class="form-group">\t<label for="">Ng\u00e0y sinh:</label>\t<div id="form-group-birthday" class="frms">' + d.printDatetimeSelector("form-birthday", b.birday) + '</div>     </div>     <div class="form-group">\t<label for="">\u0110\u1ecba ch\u1ec9:</label>\t<div id="form-group-address" class="frms">\t\t<input type="text" class="form-control" id="form-address" placeholder="\u0110\u1ecba ch\u1ec9" value="' + b.address + '">\t</div>     </div>     <div class="form-group">\t<label for="">\u0110i\u1ec7n tho\u1ea1i:</label>\t<div id="form-group-phone" class="frms">\t    <input type="text" class="form-control" id="form-phone" placeholder="\u0110i\u1ec7n tho\u1ea1i" value="' +
                b.phone + '">\t</div>     </div>     <div class="form-group">\t<label for="">S\u1ed1 CMND:</label>\t<div id="form-group-identity" class="frms">\t    <div class="cmnd-note">\t\tHo\u1eb7c m\u00e3 s\u1ed1 sinh vi\u00ean\t    </div>\t    <div class="cmnd">\t\t<input type="text" class="form-control" id="form-identity" placeholder="S\u1ed1 CMND ho\u1eb7c m\u00e3 s\u1ed1 sinh vi\u00ean" value="' + b.identity + '">\t    </div>\t</div>     </div>     <div class="form-group">\t<label for="">Ng\u00e0y c\u1ea5p:</label>\t<div id="form-group-identitydate" class="frms">' +
                d.printDatetimeSelector("form-iddate", b.identityDate) + "</div>     </div></div>";
            d.updateBody();
            $("#modal_btn_save").on("click", function() {
                var d = $("#form-displayname").val();
                $("#form-group-displayname").attr("class", "frms");
                if (0 == d.length) $("#form-group-displayname").attr("class", "frms has-error");
                else {
                    var b = $("#form-birthday-month").val() + "/" + $("#form-birthday-day").val() + "/" + $("#form-birthday-year").val(),
                        b = new Date(b);
                    $("#form-group-birthday").attr("class", "frms");
                    if ("Invalid Date" == b) $("#form-group-birthday").attr("class",
                        "frms has-error");
                    else {
                        var k = $("#form-address").val();
                        $("#form-group-address").attr("class", "frms");
                        if (0 == k.length) $("#form-group-address").attr("class", "frms has-error");
                        else {
                            var c = $("#form-phone").val(),
                                g = parseInt(c);
                            $("#form-group-phone").attr("class", "frms");
                            if (isNaN(g)) $("#form-group-phone").attr("class", "frms has-error");
                            else {
                                var g = $("#form-identity").val(),
                                    h = parseInt(g);
                                $("#form-group-identity").attr("class", "frms");
                                isNaN(h) ? $("#form-group-identity").attr("class", "frms has-error") : (h = $("#form-iddate-month").val() +
                                    "/" + $("#form-iddate-day").val() + "/" + $("#form-iddate-year").val(), h = new Date(h), $("#form-group-identitydate").attr("class", "frms"), "Invalid Date" == h ? $("#form-group-identitydate").attr("class", "frms has-error") : (a && a(d, b.getTime() / 1E3, k, c, g, h.getTime() / 1E3), $("#modal_btn_close").trigger("click")))
                            }
                        }
                    }
                }
            })
        })
    };
    c.getButton = function() {
        return '<button id="modal_btn_save" type="button" class="btn btn-primary">L\u01b0u l\u1ea1i</button><button id="modal_btn_close" type="button" data-dismiss="modal" class="btn btn-primary">\u0110\u00f3ng</button>'
    };
    var n = function() {};
    c = n.prototype;
    c.blinkBtnCheck = function(a, d) {
        $("#btn_check").attr("class", "btn-row inactive");
        $("#btn_check").off("click");
        setTimeout(function() {
            $("#btn_check").attr("class", "btn-row");
            $("#btn_check").on("click", function() {
                d.call(a)
            })
        }, 2800)
    };
    c.checkStatus = function(a, d) {
        g(a, {
            itemId: b.CONFIG.itemId,
            cateId: b.CONFIG.cateId,
            serverId: b.CONFIG.serverId,
            shopType: b.CONFIG.shopType
        }, function(a) {
            var b = $("#quest_like_fanpage");
            b.length && b.attr("class", "lnk " + (a.fanpage ? "finish" : "action"));
            b = $("#quest_charge_zingxu");
            b.length && b.attr("class", "lnk " + (a.chargeZX ? "finish" : "action"));
            b = $("#quest_play_time");
            b.length && b.attr("class", "lnk " + (a.playtime ? "finish" : "action"));
            b = $("#quest_charge_zm");
            b.length && (b.children().text("C\u1ea7n c\u00f3 " + a.zmRequire + " ZM. (B\u1ea1n \u0111ang c\u00f3 " + a.zmHas + " ZM)"), b.attr("class", "lnk " + (a.zmHas >= a.zmRequire ? "finish" : "action")));
            b = $("#quest_online");
            b.length && (b.children().text("Online Zing Me " + a.onlineRequire + "ng\u00e0y. (\u0110\u00e3 online " +
                a.online + ")"), b.attr("class", "lnk " + (a.online >= a.onlineRequire ? "finish" : "action")));
            b = $("#quest_level");
            b.length && (a.serverName && b.html("<a>\u0110\u1ea1t game level " + a.levelRequire + '. (\u0110\u00e3 \u0111\u1ea1t level <span style="color:red">' + a.level + '</span> \u1edf "<span style="color:red">' + a.serverName + '</span>", F5 \u0111\u1ec3 ch\u1ecdn l\u1ea1i)</a>'), b.attr("class", "lnk " + (a.level >= a.levelRequire ? "finish" : "action")), b.attr("onclick", 'window.open("' + a.appUrl + '", "_blank");'));
            b = $("#quest_gameventrequire");
            b.length && b.attr("class", "lnk " + (a.gameEvent ? "finish" : "action"));
            b = $("#quest_zingmeventrequire");
            b.length && b.attr("class", "lnk " + (a.event ? "finish" : "action"));
            a.passAllRequire && (d ? d(a) : ($("#label_percent").show(), $("#label_finish").show(), $("#btn_check_label_num").html("<span>" + a.pass + "</span>/" + a.total), $("#label_percent_num").css("width", 100 * a.pass / a.total + "%")))
        })
    };
    c.receive = function(a, d) {
        $("#btn_recieve").hide();
        b.CONFIG.serverId = b.CONFIG.serverId || "0";
        g(a, {
            itemId: b.CONFIG.itemId,
            cateId: b.CONFIG.cateId,
            shopType: b.CONFIG.shopType,
            serverId: b.CONFIG.serverId
        }, function(a) {
            $("#btn_recieve").show();
            $("#panel_ready").hide();
            $("#condition_received").show();
            var b = parseInt($("#remain_lbl").text());
            $("#remain_lbl").text(b - 1);
            d && d(a)
        }, function(a) {
            $("#btn_recieve").show()
        })
    };
    var v = function() {};
    h(v, n);
    c = v.prototype;
    c.doCheck = function() {
        if (b.CONFIG.allowReceive) {
            this.blinkBtnCheck(this, this.doCheck);
            var a = $("#quest_level_server_id").val();
            b.CONFIG.serverId = a || "0";
            b.CONFIG.shopType = b.CONFIG.shopType || "0";
            this.checkStatus("/megift/ajax/checkreqcode",
                function(a) {
                    $("#panel_ready").show();
                    $("#condition_no_recieve").hide()
                })
        }
    };
    c.doReceive = function() {
        this.receive("/megift/ajax/receivecode", function(a) {
            $("#received_code").html(a.code);
            $("#expired_lbl").html(a.expire)
        })
    };
    var w = function() {};
    h(w, n);
    c = w.prototype;
    c.doCheck = function() {
        if (b.CONFIG.allowReceive) {
            this.blinkBtnCheck(this, this.doCheck);
            var a = $("#quest_level_server_id").val();
            b.CONFIG.serverId = a || "0";
            this.checkStatus("/megift/ajax/checkreqshop", function(a) {
                $("#panel_ready").show();
                $("#condition_no_recieve").hide();
                a.exceedLimitPerMonth ? ($("#panel_ready").attr("class", "complete-conditions no-more clearfix"), $("#btn_recieve_container").hide(), $("#btn_recieve_txt1").text("\u0110\u00e3 v\u01b0\u1ee3t qu\u00e1 t\u1ed5ng s\u1ed1 qu\u00e0 \u0111\u01b0\u1ee3c nh\u1eadn trong th\u00e1ng (\u0111\u00e3 nh\u1eadn " + a.received + " l\u1ea7n)."), $("#btn_recieve_txt2").hide()) : a.profile && ($("#userprofil_displayname").text(a.profile.displayname), $("#userprofil_birthday").text(p.formatDate(a.profile.birthday)), $("#userprofil_address").text(a.profile.address),
                    $("#userprofil_phone").text(a.profile.phone), $("#userprofil_identity").text(a.profile.identity), $("#userprofil_identityDate").text(p.formatDate(a.profile.identityDate)))
            })
        }
    };
    c.doReceive = function() {
        $("#panel_confirm").show();
        $("#panel_ready").hide();
        $("#btn_edit_profile").on("click", function() {
            b.showPersonalInfoUpdateBox(function(a, b, c, C, e, g) {
                $("#userprofil_displayname").text(a);
                $("#userprofil_birthday").text(p.formatDate(b));
                $("#userprofil_address").text(c);
                $("#userprofil_phone").text(C);
                $("#userprofil_identity").text(e);
                $("#userprofil_identityDate").text(p.formatDate(g))
            })
        });
        var a = this;
        $("#btn_confirm_profile").on("click", function() {
            a.receive("/megift/ajax/receiveshop", function(a) {
                $("#panel_confirm").hide();
                "card" === a.showbox ? ($("#panel_received_card").show(), $("#card_code").text(a.code), $("#card_serial").text(a.serial)) : "gift" === a.showbox && ($("#panel_received_zm_gift").show(), $("#received_zx_gift_time").text(a.recievetime))
            })
        })
    };
    h = function() {};
    c = h.prototype;
    c.loadingOnScroll = !1;
    c.showSuccess = 0;
    c.init = function() {
        this.loadingOnScroll = !1;
        var a = this;
        setTimeout(function() {
            b.CONFIG.loadmoreurl && $(m).scroll(function() {
                !a.loadingOnScroll && $(m).scrollTop() > $(document).height() - $(m).height() - 100 && a.doLoad()
            })
        }, 100);
        (function() {
            var d = $("#home_item_container").children();
            if (0 === d.length) 0 < parseInt(b.CONFIG.itemSlice) && a.doLoad();
            else {
                for (var c = 0, e = 0; e < d.length; e++) $(d[e]).is(":visible") && c++;
                12 > c && a.doLoad()
            }
        })();
        if ("undefined" !== typeof Storage) {
            var d = (new Date).getTime(),
                c = (new Date("Nov 30, 2015")).getTime();
            d < c && !localStorage.getItem("megiftShowedIntro") &&
                (localStorage.setItem("megiftShowedIntro", !0), d = encodeURIComponent(m.location), m.location = "/megift/intro?cb=" + d)
        }
    };
    c.doLoad = function() {
        var a = this;
        if (0 > b.CONFIG.itemSlice)
            for (var d = $("#home_item_container").children(), c = 12 - this.showSuccess, f = 0; f < c; f++) this.showChild(d, 0) || this.showChild(d, 1) || this.showChild(d, 2) || this.showChild(d, 3);
        else this.loadingOnScroll = !0, g(b.CONFIG.loadmoreurl, {
            slice: b.CONFIG.itemSlice,
            type: b.CONFIG.type,
            query: b.CONFIG.query
        }, function(d) {
            b.CONFIG.itemSlice = d.nextSlice;
            var c =
                d.items,
                f;
            for (f in c) {
                d = c[f];
                var k = $("<div>" + d.html + "</div>");
                $("#home_item_container").append($(k).contents());
                $("#home_item_" + d.id).is(":visible") && a.showSuccess++
            }
            12 > a.showSuccess && a.doLoad();
            a.loadingOnScroll = !1
        })
    };
    c.showChild = function(a, b) {
        var c = [];
        if (0 == b) {
            for (var f = 0; f < a.length; f++) {
                var g = $(a[f]),
                    e = g.attr("orderdata");
                if (e) {
                    var h = e.substring(0, 1),
                        e = (e = e.substring(1)) || 0;
                    g.is(":visible") || 0 != h || (g = {
                        dom: g,
                        order: parseInt(e)
                    }, c.push(g))
                }
            }
            c.sort(function(a, b) {
                return a.order - b.order
            })
        }
        for (f = 0; f <
            a.length; f++)
            if (g = $(a[f]), e = g.attr("orderdata"))
                if (h = e.substring(0, 1), e = (e = e.substring(1)) || 0, !g.is(":visible") && h == b)
                    if (0 == h) {
                        if (0 < c.length) return g = $(c[0].dom), g.show(), g.appendTo($("#home_item_container")), !0
                    } else return g.show(), g.appendTo($("#home_item_container")), !0;
        return !1
    };
    n = function() {};
    c = n.prototype;
    c.copyCode = function() {
        m.prompt("Nh\u1ea5n Ctrl + C (ho\u1eb7c Cmd + C) \u0111\u1ec3 sao ch\u00e9p", $("#received_code").text());
        var a = $("#btn_play_game");
        0 !== a.length && a[0].click()
    };
    c.likeFanpage =
        function() {
            b.CONFIG.login ? $.ajax({
                url: "http://me.zing.vn/b/" + b.CONFIG.linkFanpage + "/follow",
                data: {
                    type: "add"
                },
                success: function(a) {
                    0 === a.error ? b.showMessageBox("Like fanpage " + b.CONFIG.linkFanpage + " th\u00e0nh c\u00f4ng") : -4 === a.error ? b.showMessageBox("B\u1ea1n \u0111\u00e3 h\u00e2m m\u1ed9 th\u00e0nh c\u00f4ng tr\u01b0\u1edbc \u0111\u00e2y.") : b.showMessageBox("C\u00f3 l\u1ed5i x\u00e3y ra (" + b.showMessageBox(a.data) + ")")
                }
            }) : b.showMessageBox("B\u1ea1n c\u1ea7n \u0111\u0103ng nh\u1eadp \u0111\u1ec3 c\u00f3 th\u1ec3 like fanpage.")
        };
    c.shareFeed = function() {
        g("/megift/ajax/sharedetailpagefeed", {
            itemId: b.CONFIG.itemId
        }, function() {
            b.showMessageBox("Chia s\u1ebb th\u00e0nh c\u00f4ng")
        })
    };
    c.initButtonHandler = function() {
        if ($("#btn_recieve").length) $("#btn_recieve").on("click", function() {
            b.CONFIG.isShop ? y.doReceive() : z.doReceive()
        });
        if ($("#btn_check").length) $("#btn_check").on("click", function() {
            b.CONFIG.isShop ? y.doCheck() : z.doCheck()
        });
        if ($("#btn_copy").length) $("#btn_copy").on("click", this.copyCode);
        if ($("#quest_like_fanpage").length) $("#quest_like_fanpage").on("click",
            this.likeFanpage);
        if ($("#btn_feed").length) $("#btn_feed").on("click", this.shareFeed)
    };
    var x = new r,
        D = new t,
        A = new u,
        p = new q,
        E = new l,
        z = new v,
        y = new w,
        F = new n,
        B = new h;
    $(document).ready(function() {
        F.initButtonHandler();
        B.init()
    });
    b.hideModalBox = function() {
        $("#modal_popup_container").html("");
        $(".modal-backdrop").html("")
    };
    b.showMessageBox = function(a, b) {
        x.build(a || "", b)
    };
    b.hideMessageBox = function() {
        b.hideModalBox()
    };
    b.showConfirmBox = function(a, b, c) {
        D.build(a || "", b, c)
    };
    b.hideConfirmBox = function() {
        b.hideModalBox()
    };
    b.showCodeHistoryBox = function() {
        A.build()
    };
    b.loadMoreCodeHistoryBox = function() {
        A.loadMore()
    };
    b.hideCodeHistoryBox = function() {
        b.hideModalBox()
    };
    b.showPersonalInfoBox = function() {
        p.build()
    };
    b.hidePersonalInfoBox = function() {
        b.hideModalBox()
    };
    b.showPersonalInfoUpdateBox = function(a) {
        b.hideModalBox();
        E.build(function(b, c, f, h, e, l) {
            g("/megift/ajax/updateuserprofile", {
                address: f,
                birday: c,
                displayname: b,
                identity: e,
                identityDate: l,
                phone: h
            });
            a && a(b, c, f, h, e, l)
        })
    };
    b.hidePersonalInfoUpdateBox = function() {
        b.hideModalBox()
    };
    b.hidePersonalInfoUpdateBox = function() {
        b.hideModalBox()
    };
    b.trackPlayApp = function() {
        g("/megift/ajax/trackplayapp", {
            itemId: b.CONFIG.itemId
        })
    };
    b.reloadHome = function(a) {
        $("#tabs-menu-vip").attr("class", "");
        $("#tabs-menu-new").attr("class", "");
        $("#tabs-menu-all").attr("class", "");
        switch (a) {
            case "code-vip":
                $("#tabs-menu-vip").attr("class", "active");
                break;
            case "code-tan-thu":
                $("#tabs-menu-new").attr("class", "active");
                break;
            default:
                $("#tabs-menu-all").attr("class", "active")
        }
        b.CONFIG.type = a;
        $.get("?r=home/gettab", {
            'type': b.CONFIG.type
        }, function(a) {
            $("#home_item_container").html("");
			$("#home_item_container").append(a);
			b.CONFIG.itemSlice = 10;// a.nextSlice;
             /*a = a.items;
            for (var c in a) {
                var f = $("<div>" + a[c] + "</div>");
                $("#home_item_container").append($(f).contents())
            }
            a = $("#home_item_container").children();
            for (c = f = 0; c < a.length; c++) $(a[c]).is(":visible") && f++;
            12 > f && */
			//B.doLoad()
        })
    };
    b.reloadPromotion = function(a) {
        $("#tabs-ongoing").attr("class", "");
        $("#tabs-coming-soon").attr("class", "");
        $("#tabs-end").attr("class", "");
        switch (a) {
            case "opensoon":
                $("#tabs-coming-soon").attr("class",
                    "active");
                $("#promotion-type").text("S\u1ef1 ki\u1ec7n s\u1eafp m\u1edf");
                break;
            case "end":
                $("#tabs-end").attr("class", "active");
                $("#promotion-type").text("S\u1ef1 ki\u1ec7n k\u1ebft th\u00fac");
                break;
            default:
                $("#tabs-ongoing").attr("class", "active"), $("#promotion-type").text("S\u1ef1 ki\u1ec7n \u0111ang di\u1ec5n ra")
        }
        b.CONFIG.type = a;
		
        g("/megift/ajax/get-promotion", {
            type: b.CONFIG.type
        }, function(a) {
            $("#promotion-content").html(a.html)
        })
    };
    b.setAttendance = function() {
        g("/megift/ajax/set-attendance", {},
            function(a) {
                b.showMessageBox(a.msg)
            })
    };
    b.CONFIG = {}
})(window);