(this["webpackJsonpadjusted-age-calc"] = this["webpackJsonpadjusted-age-calc"] || []).push([[0], {
  144: function(e, t, n) {},
  152: function(e, t, n) {
      var a = {
          "./bg-BG.json": 153,
          "./ca-ES.json": 154,
          "./cs-CZ.json": 155,
          "./de-DE.json": 156,
          "./en-US.json": 119,
          "./es-ES.json": 157,
          "./et-EE.json": 158,
          "./fi-FI.json": 159,
          "./fr-FR.json": 160,
          "./he-IL.json": 161,
          "./it-IT.json": 162,
          "./ja-JP.json": 163,
          "./ko-KR.json": 164,
          "./nb-NO.json": 165,
          "./nn-NO.json": 166,
          "./pl-PL.json": 167,
          "./pt-BR.json": 168,
          "./ru-RU.json": 169,
          "./sv-SE.json": 170,
          "./tr-TR.json": 171,
          "./zh-CN.json": 172
      };
      function c(e) {
          var t = o(e);
          return n(t)
      }
      function o(e) {
          if (!n.o(a, e)) {
              var t = new Error("Cannot find module '" + e + "'");
              throw t.code = "MODULE_NOT_FOUND",
              t
          }
          return a[e]
      }
      c.keys = function() {
          return Object.keys(a)
      }
      ,
      c.resolve = o,
      e.exports = c,
      c.id = 152
  },
  175: function(e, t, n) {
      "use strict";
      n.r(t);
      var a = n(0)
        , c = n.n(a)
        , o = n(51)
        , s = n.n(o)
        , r = (n(144),
      n(74))
        , j = (n(145),
      n(190))
        , l = n(196)
        , i = n(192)
        , b = n(194)
        , u = n(35)
        , d = n(193)
        , h = n(191)
        , O = n(197)
        , f = n(198)
        , g = n(199)
        , x = n(189)
        , p = n(114)
        , m = (n(173),
      n(10));
      var y = function() {
          var e = Object(a.useState)("")
            , t = Object(r.a)(e, 2)
            , n = t[0]
            , c = t[1]
            , o = Object(a.useState)(null)
            , s = Object(r.a)(o, 2)
            , y = s[0]
            , v = s[1]
            , C = Object(a.useState)(null)
            , k = Object(r.a)(C, 2)
            , A = k[0]
            , D = k[1]
            , E = Object(a.useState)("")
            , M = Object(r.a)(E, 2)
            , S = M[0]
            , I = M[1]
            , T = ""
            , F = ""
            , P = ""
            , Y = ""
            , B = ""
            , N = !1
            , w = !1
            , G = !1;
          function L(e, t, n, a) {
              return Object(m.jsxs)(b.a.Item, {
                  children: [Object(m.jsx)(u.a, {
                      name: t
                  }), Object(m.jsxs)(b.a.Content, {
                      children: [Object(m.jsx)(b.a.Header, {
                          children: n
                      }), Object(m.jsx)(b.a.Description, {
                          style: {
                              color: a
                          },
                          children: e
                      })]
                  })]
              })
          }
          function R(e) {
              if (e) {
                  var t = function(e) {
                      var t = 0
                        , n = 0;
                      if (e >= 0)
                          n = e % 7,
                          t = Math.floor(e / 7);
                      else {
                          var a = Math.abs(e);
                          n = -(7 * Math.ceil(a / 7) - a),
                          t = -Math.floor(a / 7)
                      }
                      return [t, n]
                  }(e)
                    , n = Object(r.a)(t, 2)
                    , a = n[0]
                    , c = n[1];
                  return "".concat(e, " \u0e27\u0e31\u0e19 (").concat(a, " \u0e2a\u0e31\u0e1b\u0e14\u0e32\u0e2b\u0e4c ").concat(c, " \u0e27\u0e31\u0e19)")
              }
              return ""
          }
          function J(e) {
              return "[object Date]" === Object.prototype.toString.call(e) ? isNaN(e.getTime()) ? "" : Object(i.a)(e, "EEEE dd/MM/yyyy") : ""
          }
          return y === parseInt(y) && A === parseInt(A) && (B = 7 * y + A,
          n && S && (T = Object(j.a)(n, 7 * (40 - y) - A),
          Y = 7 * y + A + (P = Object(l.a)(S, n)),
          Object(l.a)(T, n) > 0 ? F = 7 * y + A + P - 280 : (F = "",
          w = !0,
          G = !0),
          P < 0 && (N = !0),
          F < 0 && (w = !0))),
          Object(m.jsxs)(m.Fragment, {
              children: [Object(m.jsx)(d.a, {
                  fixed: "top",
                  inverted: !0,
                  color: "purple",
                  widths: 1,
                  children: Object(m.jsx)(h.a, {
                      children: Object(m.jsx)(d.a.Item, {
                          children: "Adjusted Age Calculation"
                      })
                  })
              }), Object(m.jsxs)(h.a, {
                  style: {
                      marginTop: "4em"
                  },
                  children: [Object(m.jsx)(O.a, {
                      children: Object(m.jsxs)(f.a, {
                          stackable: !0,
                          columns: 3,
                          children: [Object(m.jsxs)(f.a.Column, {
                              style: {
                                  margin: "0em"
                              },
                              children: [Object(m.jsx)(g.a, {
                                  as: "h4",
                                  children: "Date of Birth"
                              }), Object(m.jsx)(p.a, {
                                  onChange: function(e, t) {
                                      return c(t.value)
                                  },
                                  format: "DD/MM/YYYY"
                              })]
                          }), Object(m.jsxs)(f.a.Column, {
                              style: {
                                  margin: "0em"
                              },
                              children: [Object(m.jsx)(g.a, {
                                  as: "h4",
                                  children: "Gestational Age, GA "
                              }), Object(m.jsx)(x.a, {
                                  label: {
                                      basic: !0,
                                      content: "Week"
                                  },
                                  labelPosition: "right",
                                  placeholder: "Week",
                                  onChange: function(e, t) {
                                      var n = parseInt(t.value);
                                      v(n || 0 === n ? n : null)
                                  }
                              }), Object(m.jsx)(x.a, {
                                  label: {
                                      basic: !0,
                                      content: "Day"
                                  },
                                  labelPosition: "right",
                                  placeholder: "Day",
                                  onChange: function(e, t) {
                                      var n = parseInt(t.value);
                                      D(n || 0 === n ? n : null)
                                  },
                                  style: {
                                      marginTop: "8px"
                                  }
                              })]
                          }), Object(m.jsxs)(f.a.Column, {
                              style: {
                                  margin: "0em"
                              },
                              children: [Object(m.jsx)(g.a, {
                                  as: "h4",
                                  children: "Today"
                              }), Object(m.jsx)(p.a, {
                                  onChange: function(e, t) {
                                      return I(t.value)
                                  },
                                  format: "DD/MM/YYYY"
                              })]
                          })]
                      })
                  }), Object(m.jsx)(O.a, {
                      children: Object(m.jsxs)(b.a, {
                          relaxed: !0,
                          children: [L(R(B), "clock", "Gestational Age, GA"), L(J(n), "birthday cake", "Date of Birth", "black"), L(J(T), "birthday cake", "Adjusted Date of Birth", G ? "red" : "black"), L(R(P), "clock", "Chronological Age, CA ", N ? "red" : "black"), L(R(Y), "clock", "Post Conceptional Age, PCA ", "black"), L(R(F), "time", "Adjusted Age, AJ", w ? "red" : "black")]
                      })
                  }), Object(m.jsxs)("p", {
                      style: {
                          textAlign: "right",
                          fontSize: "12px",
                          color: "gray"
                      },
                      children: [" ", "V1.1"]
                  })]
              })]
          })
      }
        , v = function(e) {
          e && e instanceof Function && n.e(3).then(n.bind(null, 200)).then((function(t) {
              var n = t.getCLS
                , a = t.getFID
                , c = t.getFCP
                , o = t.getLCP
                , s = t.getTTFB;
              n(e),
              a(e),
              c(e),
              o(e),
              s(e)
          }
          ))
      };
      s.a.render(Object(m.jsx)(c.a.StrictMode, {
          children: Object(m.jsx)(y, {})
      }), document.getElementById("root")),
      v()
  }
}, [[175, 1, 2]]]);
//# sourceMappingURL=main.87c19d48.chunk.js.map
