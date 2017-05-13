(function () {
    'use strict';

    var img = document.querySelector('img'),
        list = document.querySelector('.relatedthumb'),
        section = document.querySelector('.relatedtext'),
        paletteReady = false;

    img.addEventListener('load', function() {
        if ( !paletteReady )
            getPalette();
    });

    if (!paletteReady)
        getPalette();

    function getPalette() {
        paletteReady = true;

        var vibrant = new Vibrant(img),
            swatches = vibrant.swatches(),
            listFragment = new DocumentFragment();

        for ( var swatch in swatches ) {
            if (swatches.hasOwnProperty(swatch) && swatches[swatch]) {
                console.log(swatch, swatches[swatch].getHex());
                document.querySelector('.relatedtext.style.color') = swatches[swatch].getTitleTextColor();
                document.querySelector('.relatedtext.style.backgroundColor') = swatches[swatch].getHex();
            }
        }

        list.appendChild(listFragment);

        if (swatches['DarkVibrant']) {
            section.style.backgroundColor = swatches['DarkVibrant'].getHex();
        }
    }
} ());
