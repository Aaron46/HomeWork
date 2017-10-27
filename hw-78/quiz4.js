var app = app || {};

app.utils = (function (module) {
    "use strict";
    var count = 0;
    module.addCount =  function (){
        for (var i = 0; i < 10; i++) {
            count++;
            };
        };
        module.getCount = function (){
            return count;
                };
    
    return module;
}(app.utils || {}));


var a = app.utils.createCounter();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
a.addToCount();
var b = app.utils.createCounter();
b.addToCount();
b.addToCount();
b.addToCount();
b.addToCount();
b.addToCount();

app.utils.addCount();
app.utils.addToCount();
app.utils.addToCount();
app.utils.addToCount();
app.utils.addToCount();
app.utils.addToCount();
app.utils.addToCount();
app.utils.addToCount();
console.log("b.getCount()", b.getCount());
console.log("a.getCount()", a.getCount());
console.log("app.utils.getCount()", app.utils.getCount());