(function () {
    "use strict";
    window.onload = function () {
        var theButton = document.getElementById("theButton");
        theButton.addEventListener('click', function () {
            var getBgColor = document.getElementById("backgroundColor").value;
            var getFcColor = document.getElementById("fontColor").value;

            document.body.style.backgroundColor = getBgColor;
            document.body.style.color = getFcColor;
        });

        var divTT = document.getElementById("hw-80");
        var intervalId;
        var i = 0;
        var startString = 'Start';
        var stopString = 'Stop';

        function colorit() {
            var color = "rgb(";
            for (var i = 0; i < 3; i++) {
                color += Math.floor(Math.random() * 255);
                if (i != 2) {
                    color += ",";
                }

            }
            color += ")";
            divTT.style.backgroundColor = color;
        }


        var theColorItButton = document.getElementById("theColorItButton");
        theColorItButton.innerHTML = startString;

        theColorItButton.addEventListener('click', function () {

            if (theColorItButton.innerHTML === startString) {
                intervalId = setInterval(colorit, 250);
                theColorItButton.innerHTML = stopString;

            } else {
                clearInterval(intervalId);
                theColorItButton.innerHTML = startString;
            }
        });

    };

})();