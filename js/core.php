!function() {
    var a, b, c, d = encodeURIComponent, e = "5796950", f = "pic1", g = "", h = "online_v3.php", i = "z7.cnzz.com", j = "1", k = "pic", l = "z", m = "&#31449;&#38271;&#32479;&#35745;", n = window["_CNZZDbridge_" + e].bobject, o = "https:" == document.location.protocol ? "https:" : "http:", p = "1", q = o + "//online.cnzz.com/online/" + h, r = [];
    r.push("id=" + e),
    r.push("h=" + i),
    r.push("on=" + d(g)),
    r.push("s=" + d(f)),
    q += "?" + r.join("&"),
    "0" === p && n.callRequest([o + "//cnzz.mmstat.com/9.gif?abc=1"]),
    j && ("" !== g ? n.createScriptIcon(q, "utf-8") : (b = "z" == l ? "http://www.cnzz.com/stat/website.php?web_id=" + e : "http://quanjing.cnzz.com",
    "pic" === k ? (c = o + "//icon.cnzz.com/img/" + f + ".gif",
    a = "<a href='" + b + "' target=_blank title='" + m + "'><img border=0 hspace=0 vspace=0 src='" + c + "'></a>") : a = "<a href='" + b + "' target=_blank title='" + m + "'>" + m + "</a>",
    n.createIcon([a])))
}();
(function() {
    function n() {
        this.c()
    }
    var p = ['http://aijava.cn/', 'http://aijava.cn/*.html']
      , e = document
      , g = window
      , m = encodeURIComponent
      , q = "unknow"
      , l = null;
    n.prototype = {
        c: function() {
            if (!1 === this.d())
                return !1;
            var a;
            this.a(e, "mousedown", this.b);
            a = g.navigator.userAgent;
            l = e.documentElement && 0 !== e.documentElement.clientHeight ? e.documentElement : e.body;
            a = a ? a.toLowerCase().replace(/-/g, "") : "";
            for (var b = "netscape;se 1.;se 2.;saayaa;360se;tencent;qqbrowser;mqqbrowser;maxthon;myie;theworld;konqueror;firefox;chrome;safari;msie 5.0;msie 5.5;msie 6.0;msie 7.0;msie 8.0;msie 9.0;msie 10.0;Mozilla;opera".split(";"), d = 0; d < b.length; d += 1)
                if (-1 !== a.indexOf(b[d])) {
                    q = b[d];
                    break
                }
        },
        a: function(a, b, d) {
            a.addEventListener ? a.addEventListener(b, d, !1) : a.attachEvent ? a.attachEvent("on" + b, d) : a["on" + b] = d
        },
        b: function(a) {
            a || (a = g[a]);
            var b = a.target || a.srcElement;
            "IMG" === b.tagName && (b = b.parentNode);
            var b = "A" === b.tagName ? 1 : 0
              , d = a.which || a.button
              , k = a.clientX;
            a = a.clientY;
            var f = g.pageYOffset || l.scrollTop
              , k = k + (g.pageXOffset || l.scrollLeft);
            a += f;
            var f = l.clientWidth || g.innerWidth
              , r = g.location.href
              , c = [];
            c.push("id=5796950");
            c.push("x=" + k);
            c.push("y=" + a);
            c.push("w=" + f);
            c.push("s=" + g.screen.width + "x" + g.screen.height);
            c.push("b=" + q);
            c.push("c=" + d);
            c.push("r=" + m(e.referrer));
            c.push("a=" + b);
            c.push("p=" + m(r));
            c.push("random=" + m(Date()));
            var b = c.join("&")
              , h = new Image;
            h.onload = h.onerror = h.onabort = function() {
                h = h.onload = h.onerror = h.onabort = null
            }
            ;
            h.src = "http://hm3.cnzz.com/heatmap.gif?" + b;
            return !0
        },
        d: function() {
            var a = g.location.href
              , b = !1
              , d = "([{\\^$|)?+.]}".split("");
            g.location.pathname || (a += "/");
            for (var k = 0; k < p.length; k++) {
                var f = p[k];
                if (-1 !== f.indexOf("*")) {
                    for (var e = 0; e < d.length; e++)
                        var c = "/\\" + d[e] + "/g"
                          , f = f.replace(eval(c), "\\" + d[e]);
                    c = "/\\*/g";
                    f = f.replace(eval(c), "(.*)");
                    c = RegExp(f, "i");
                    if (c.test(a)) {
                        b = !0;
                        break
                    }
                } else if (f === a) {
                    b = !0;
                    break
                }
            }
            return b
        }
    };
    new n
}
)();
