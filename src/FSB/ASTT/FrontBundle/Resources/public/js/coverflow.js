var numPhotos;
var slideFlowSlider;
var slideFlow;
var currentImg;
var preloader;
var fadeInTimeout;
var scrollHandler;
var photos;
var currentEffect;
var slHover;

var SLIDE_TPL = {
        'b_vertical' : false,
        'b_watch': true /* update while dragging */,
        'n_controlWidth': 300,
        'n_controlHeight': 7,
        'n_sliderWidth': 14,
        'n_sliderHeight': 7,
        'n_pathLeft' : 0,
        'n_pathTop' : 0,
        'n_pathLength' : 300-14,
        'n_zIndex': 1
}

var SLIDE_INIT = {
        'n_minValue' : 0,
        'n_maxValue' : 100,
        'n_value' : 0,
        'n_step' : 1
}

var SLIDEFLOW_DATA = {
        'imgWidthNormal': 100, 'imgWidthTilted': 75, 'imgHeight': 90, 'slideDistance': 10,
        'onCenterClick': handleSlideClick, 'handleSlideMove': handleSlideMove, 'containerElement': null,
        'pathLeft': 'photos/left', 'pathCenter': 'photos/center', 'pathRight': 'photos/right',
        'transparentImg': 'images/transparent.gif', 'cursorOpenHand': 'images/openhand.cur', 'cursorClosedHand': 'images/closedhand.cur'
}

function handleSlideMove(pos) {
        if (slideFlowSlider)
                slideFlowSlider.f_setValue(pos, false, true /* kein update */);
}

function handleSlideClick(imgNumber) {
        swapPhoto(imgNumber);
}

function handleSlideSeek(pos) {
        slideFlow.disableMoveUpdate();
        slideFlow.glideToPerc(pos);
}

function swapPhoto(photoNumber) {
    /* Preload */
    var imgSrc = 'photos/large/'+ photos.item(photoNumber - 1).getElementsByTagName("src")[0].childNodes[0].nodeValue;
    var wasPreloading = (preloader != undefined);
    preloader = new Image;
    preloader.src = imgSrc;
    currentImg = photoNumber;

    /* Fade out and show new photo */
    if (!wasPreloading) {
                if (currentEffect && currentEffect.state != 'finished') {
                        currentEffect.cancel();
                }
        currentEffect = new Effect.Fade($('fadeArea'), { duration:0.4, to: 0.001, afterFinish: fadeIn });
    }
}

function skipPhoto(offset) {
        photoNumber = currentImg + offset;
        if (photoNumber < 1 || photoNumber > numPhotos)
                return;

        swapPhoto(photoNumber);
        slideFlow.glideToSlide(photoNumber);
}

function fadeIn() {
        fadeInTimeout = null;

        if (!preloader)
                return;
        else if (preloader.complete) {
                if (currentEffect && currentEffect.state != 'finished')
                        currentEffect.cancel();
            currentEffect = new Effect.Appear($('fadeArea'), {duration: 0.8, beforeSetup: function(effect) {
                $('photo').src = preloader.src;
                $('title').innerHTML = photos.item(currentImg - 1).getElementsByTagName("title")[0].childNodes[0].nodeValue;
                $('subtitle').innerHTML = photos.item(currentImg - 1).getElementsByTagName("subtitle")[0].childNodes[0].nodeValue;
                preloader = undefined;
            }});
        } else if (!fadeInTimeout) {
                fadeInTimeout = window.setTimeout("fadeIn()", 100);
        }
}

function handleWheel(delta) {
        if (slideFlow)
                slideFlow.scroll(delta);
}

function handleKeys(evt) {
    evt = (evt) ? evt : ((window.event) ? event : null);
    if (evt) {
        //debugLog("key " + evt.keyCode);
        switch (evt.keyCode) {
                case 40: /* down */
                case 39: /* right */
                        skipPhoto(1);
                        return false;
                        break;
                case 38: /* up */
                case 37: /* left */
                        skipPhoto(-1);
                        return false;
                        break;
        }
    }
}

function init() {
        swapPhoto(1);
        slideFlowSlider.f_show();
        document.onkeydown = handleKeys;
        scrollHandler = new ScrollHandler(handleWheel);

        /* Preload slider hover */
        slHover = new Image;
        slHover.src = "images/seekslider-hover.gif";	

        /* IE6 hover fix */
        if (window.ieFixHover) {
                $$('.sliderbutton').each(ieFixHover);
        }
}

httpReq = getHttpReq();

if (httpReq) {
        xmlDoc = getXmlDoc(httpReq, "../bundles/fsbasttfront/xml/photos.xml");

        if (xmlDoc) {
                photos = xmlDoc.getElementsByTagName("photo");

                SLIDEFLOW_DATA['containerElement'] = $('.coverflow');

                SLIDEFLOW_DATA['images'] = new Array();

                for (var i=0; i < photos.length; i++) {
                        SLIDEFLOW_DATA['images'][i] = photos.item(i).getElementsByTagName("src")[0].childNodes[0].nodeValue;
                }

                slideFlow = new Slideflow(SLIDEFLOW_DATA);
                numPhotos = photos.length;
        }
}

slideFlowSlider = new slider(SLIDE_INIT, SLIDE_TPL);
slideFlowSlider.onSetValue = handleSlideSeek;