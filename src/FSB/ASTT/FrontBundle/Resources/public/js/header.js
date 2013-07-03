(function ($) {
    var _animationDuration = 1000,
        _elements = [
            $('#header').find('#photo-1').first(),
            $('#header').find('#photo-2').first(),
            $('#header').find('#photo-3').first(),
            $('#header').find('#photo-4').first(),
            $('#header').find('#photo-5').first()
        ],
        _animationDescription = [
            { elt: _elements[0], to: 0.0 },
            { elt: _elements[1], to: 1.0 },
            { elt: _elements[1], to: 0.0 },
            { elt: _elements[2], to: 1.0 },
            { elt: _elements[2], to: 0.0 },
            { elt: _elements[3], to: 1.0 },
            { elt: _elements[3], to: 0.0 },
            { elt: _elements[4], to: 1.0 },
            { elt: _elements[4], to: 0.0 },
            { elt: _elements[0], to: 1.0 },
        ],
        _globalDuration = (_elements.length) * 2 * _animationDuration,
        fadeElement = function (object, index) {
            setTimeout(function () {
                object.elt.fadeTo(_animationDuration, object.to);
            }, _animationDuration * index);
        },
        launchAnimation = function () {
            var i;
            for (i = 0, animationSize = _animationDescription.length; i < animationSize; i++) {
                fadeElement(_animationDescription[i], i);
            }
        };

    launchAnimation();
    // setInterval(launchAnimation, _globalDuration);
})(window.jQuery);