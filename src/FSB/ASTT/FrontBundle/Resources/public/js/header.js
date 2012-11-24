(function ($) {
    _animationDuration = 1000,
    _elements = [
        $('#photo-1', '#header'),
        $('#photo-2', '#header'),
        $('#photo-3', '#header'),
        $('#photo-4', '#header'),
        $('#photo-5', '#header')
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
    _globalDuration = (_elements.length) * 2 * _animationDuration;

    launchAnimation();
    setInterval(launchAnimation, _globalDuration);
})(jQuery);

function launchAnimation() {
    for (var i = 0, animationSize = _animationDescription.length; i < animationSize; i++) {
        var _this = _animationDescription[i];
        fadeElement(_this, i);
    }
}

function fadeElement(object, index) {
    setTimeout(function () {
        object.elt.fadeTo(_animationDuration, object.to);
    }, _animationDuration * index);
}