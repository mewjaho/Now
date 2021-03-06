<!DOCTYPE html>
<!-- saved from url=(0034)https://adjusted-age-calc.web.app/ -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" href="https://adjusted-age-calc.web.app/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta name="Adjusted Age Calculation" content="Adjusted Age Calculation" />
    <link
      rel="apple-touch-icon"
      href="https://adjusted-age-calc.web.app/logo192.png"
    />
    <link rel="stylesheet" href="/static/fontaw/font-awesome.min.css">
   
    <link
      rel="manifest"
      href="https://adjusted-age-calc.web.app/manifest.json"
    />                
    <title>Adjusted Age Calculation</title>
    <link href="/static/css/2.5e049171.chunk.css" rel="stylesheet" />
    <link href="/static/css/main.6dea0f05.chunk.css" rel="stylesheet" />
    
    
  </head>
  <body>
 
    <div id="root">
    
        <div class="ui segment">
          <div class="ui stackable three column grid">
            <div class="column" style="margin: 0em">
              <h4 class="ui header">Date of Birth</h4>
              <div
                class="field"
                style="display: inline-block; position: relative"
              >
                <div class="field">
                  <div class="ui icon input">
                    <input
                      placeholder="DD/MM/YYYY"
                      type="text"
                      data-testid="datepicker-input"
                      value=""
                    /><i
                      data-testid="datepicker-icon"
                      aria-hidden="true"
                      class="calendar icon"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="column" style="margin: 0em">
              <h4 class="ui header">Gestational Age, GA</h4>
              <div class="ui right labeled input">
                <input placeholder="Week" type="text" />
                <div class="ui basic label label">Week</div>
              </div>
              <div class="ui right labeled input" style="margin-top: 8px">
                <input placeholder="Day" type="text" />
                <div class="ui basic label label">Day</div>
              </div>
            </div>
            <div class="column" style="margin: 0em">
              <h4 class="ui header">Today</h4>
              <div
                class="field"
                style="display: inline-block; position: relative"
              >
                <div class="field">
                  <div class="ui icon input">
                    <input
                      placeholder="DD/MM/YYYY"
                      type="text"
                      data-testid="datepicker-input"
                      value=""
                    /><i
                      data-testid="datepicker-icon"
                      aria-hidden="true"
                      class="calendar icon"
                    ></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ui segment">
          <div role="list" class="ui relaxed list">
            <div role="listitem" class="item">
              <i aria-hidden="true" class="clock icon"></i>
              <div class="content">
                <div class="header">Gestational Age, GA</div>
                <div class="description"></div>
              </div>
            </div>
            <div role="listitem" class="item">
              <i aria-hidden="true" class="birthday cake icon"></i>
              <div class="content">
                <div class="header">Date of Birth</div>
                <div class="description" style="color: black"></div>
              </div>
            </div>
            <div role="listitem" class="item">
           
              <div class="content">
                <div class="header">Adjusted Date of Birth</div>
                <div class="description" style="color: black"></div>
              </div>
            </div>
            <div role="listitem" class="item">
              <i aria-hidden="true" class="clock icon"></i>
              <div class="content">
                <div class="header">Chronological Age, CA</div>
                <div class="description" style="color: black"></div>
              </div>
            </div>
            <div role="listitem" class="item">
              <i aria-hidden="true" class="clock icon"></i>
              <div class="content">
                <div class="header">Post Conceptional Age, PCA</div>
                <div class="description" style="color: black"></div>
              </div>
            </div>
            <div role="listitem" class="item">
              <i aria-hidden="true" class="time icon"></i>
              <div class="content">
                <div class="header">Adjusted Age, AJ</div>
                <div class="description" style="color: black"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      !(function (e) {
        function t(t) {
          for (
            var n, a, i = t[0], c = t[1], l = t[2], s = 0, p = [];
            s < i.length;
            s++
          )
            (a = i[s]),
              Object.prototype.hasOwnProperty.call(o, a) &&
                o[a] &&
                p.push(o[a][0]),
              (o[a] = 0);
          for (n in c)
            Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
          for (f && f(t); p.length; ) p.shift()();
          return u.push.apply(u, l || []), r();
        }
        function r() {
          for (var e, t = 0; t < u.length; t++) {
            for (var r = u[t], n = !0, i = 1; i < r.length; i++) {
              var c = r[i];
              0 !== o[c] && (n = !1);
            }
            n && (u.splice(t--, 1), (e = a((a.s = r[0]))));
          }
          return e;
        }
        var n = {},
          o = { 1: 0 },
          u = [];
        function a(t) {
          if (n[t]) return n[t].exports;
          var r = (n[t] = { i: t, l: !1, exports: {} });
          return e[t].call(r.exports, r, r.exports, a), (r.l = !0), r.exports;
        }
        (a.e = function (e) {
          var t = [],
            r = o[e];
          if (0 !== r)
            if (r) t.push(r[2]);
            else {
              var n = new Promise(function (t, n) {
                r = o[e] = [t, n];
              });
              t.push((r[2] = n));
              var u,
                i = document.createElement("script");
              (i.charset = "utf-8"),
                (i.timeout = 120),
                a.nc && i.setAttribute("nonce", a.nc),
                (i.src = (function (e) {
                  return (
                    a.p +
                    "static/js/" +
                    ({}[e] || e) +
                    "." +
                    { 3: "6f52511a" }[e] +
                    ".chunk.js"
                  );
                })(e));
              var c = new Error();
              u = function (t) {
                (i.onerror = i.onload = null), clearTimeout(l);
                var r = o[e];
                if (0 !== r) {
                  if (r) {
                    var n = t && ("load" === t.type ? "missing" : t.type),
                      u = t && t.target && t.target.src;
                    (c.message =
                      "Loading chunk " +
                      e +
                      " failed.\n(" +
                      n +
                      ": " +
                      u +
                      ")"),
                      (c.name = "ChunkLoadError"),
                      (c.type = n),
                      (c.request = u),
                      r[1](c);
                  }
                  o[e] = void 0;
                }
              };
              var l = setTimeout(function () {
                u({ type: "timeout", target: i });
              }, 12e4);
              (i.onerror = i.onload = u), document.head.appendChild(i);
            }
          return Promise.all(t);
        }),
          (a.m = e),
          (a.c = n),
          (a.d = function (e, t, r) {
            a.o(e, t) ||
              Object.defineProperty(e, t, { enumerable: !0, get: r });
          }),
          (a.r = function (e) {
            "undefined" != typeof Symbol &&
              Symbol.toStringTag &&
              Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }),
              Object.defineProperty(e, "__esModule", { value: !0 });
          }),
          (a.t = function (e, t) {
            if ((1 & t && (e = a(e)), 8 & t)) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (
              (a.r(r),
              Object.defineProperty(r, "default", { enumerable: !0, value: e }),
              2 & t && "string" != typeof e)
            )
              for (var n in e)
                a.d(
                  r,
                  n,
                  function (t) {
                    return e[t];
                  }.bind(null, n)
                );
            return r;
          }),
          (a.n = function (e) {
            var t =
              e && e.__esModule
                ? function () {
                    return e.default;
                  }
                : function () {
                    return e;
                  };
            return a.d(t, "a", t), t;
          }),
          (a.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
          }),
          (a.p = "/"),
          (a.oe = function (e) {
            throw (console.error(e), e);
          });
        var i = (this["webpackJsonpadjusted-age-calc"] =
            this["webpackJsonpadjusted-age-calc"] || []),
          c = i.push.bind(i);
        (i.push = t), (i = i.slice());
        for (var l = 0; l < i.length; l++) t(i[l]);
        var f = c;
        r();
      })([]);
    </script>
    <script src="/static/js/2.b5c6ba6b.chunk.js"></script>
    <script src="/static/js/main.87c19d48.chunk.js"></script>
  </body>
</html>
