var pcs = pcs || {};

pcs.tools = (function () {
    "use strict";

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    return {
        wrap: function (id) {
            var elem = get(id);
            var origDspl;
            return {
                setCss: function (property, value) {
                    setCss(elem, property, value);
                    return this;
                },
                pulsate: function () {
                    var fontSize = 32;
                    var i = 0;
                    var interval = setInterval(function () {
                        if (i <= 5 || i > 15) {
                            fontSize += 5;
                        } else {
                            fontSize -= 5;
                        }

                        setCss(elem, "fontSize", fontSize + 'px');

                        if (i++ === 20) {
                            clearInterval(interval);
                        }
                    }, 100)

                },
                click: function (callback) {
                    elem.addEventListener("click", callback);
                    return this;
                },
                hide: function () {
                    origDspl = getComputedStyle(elem).getPropertyValue('display');
                    setCss(elem, "display", "none");
                    // elem.setCss("display", "none");
                    return this;
                },
                show: function () {
                    setCss(elem, "display", origDspl);
                    // elem.setCss("display", origDspl);
                    return this;
                }
            }
        }
    }
}())