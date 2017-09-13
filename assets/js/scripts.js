jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery(document).ready(function() {

// Remove empty P tags created by WP inside of Accordion and Orbit
jQuery('.accordion p:empty, .orbit p:empty').remove();

// Makes sure last grid item floats left
jQuery('.archive-grid .columns').last().addClass( 'end' );

// Adds Flex Video to YouTube and Vimeo Embeds
jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').wrap("<div class='flex-video'/>");
    });

/* New Calculator */
function calcbanehcp(form) {
    CR = new Array(76.5, 66.0, 71.2, 70.6, 62.0, 66.2);
    Slope = new Array(139, 117, 128, 127, 107, 117);
    High = new Array(14, -4, 5, 4, -11, -4);

    curCR = CR[form.teeselected.options[form.teeselected.selectedIndex].value];
    curSlope = Slope[form.teeselected.options[form.teeselected.selectedIndex].value];
    curHigh = High[form.teeselected.options[form.teeselected.selectedIndex].value];

    hcit = form.hcpidx.value;

    if (hcit.indexOf(",") != -1) {
        hcit = hcit.substring(0, parseFloat(hcit.indexOf(","))) + "." + hcit.substring(parseFloat(hcit.indexOf(",")) + 1, 5);
    }
    hcit = parseFloat(hcit);
    if (hcit > 36) {
    form.banehcp.value = Math.floor(hcit) + curHigh;
    }
    else {
    form.banehcp.value = Math.round(hcit * curSlope / 113 + curCR - 71)
    }
    if (form.banehcp.value == "NaN") form.banehcp.value = "";
    setfocus(form);
    }
function setfocus(form) {
    form.banehcp.focus();
    form.banehcp.select();
}