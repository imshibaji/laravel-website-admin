 // code to set the `color_scheme` cookie
 var $color_scheme = Cookies.get("color_scheme");
 function get_color_scheme() {
   return (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches) ? "dark" : "light";
 }
 function update_color_scheme() {
   Cookies.set("color_scheme", get_color_scheme());
 }
 // read & compare cookie `color-scheme`
 if ((typeof $color_scheme === "undefined") || (get_color_scheme() != $color_scheme))
   update_color_scheme();
 // detect changes and change the cookie
//  if (window.matchMedia)
//    window.matchMedia("(prefers-color-scheme: dark)").addListener( update_color_scheme );


// Test Color Mode
// console.log(get_color_scheme());



// This is the Color Ser Mode
// Use two ids (id="auto-color-switch"  id="color-switch") in the CheckBox
// Onclick Change color mode
function getColorMode(){
    return (Cookies.get("color_switch") === 'true') ? 'dark' : 'light';
}
function updateColorMode(){
    $('#color-switch').prop('checked', (Cookies.get("color_switch") == 'true')? true : false );
    Cookies.set("color_scheme", getColorMode());
}
$('#color-switch, #night_mode').click(function(){
    var dark = Cookies.get("color_switch");
    dark = (dark === 'true')? 'false' : 'true';
    Cookies.set("color_switch", dark);

    // Set Property
    $('#color-switch').prop('checked', !!"true");
    // Set Color Mode
    updateColorMode();

    // Reload browser after color mode setting
    window.location.reload();
    // console.log(getColorMode());
});

if (window.matchMedia){
    // Check Auto Color Mode
    getAutoColor();
    // Check For Auto Color Set
    setDarkLight();
}

function updateAutoColor(auto) {
    Cookies.set("auto_color", auto);
    setDarkLight();
    console.log(getAutoColor());
}
function getAutoColor(){
    return (Cookies.get('auto_color') === 'true')? 'true' : 'false';
}

function setDarkLight(){
    if(getAutoColor()==='true'){
        $('#color-switch').prop('disabled', true);
        window.matchMedia("(prefers-color-scheme: dark)").addListener( update_color_scheme );
        update_color_scheme();
    }else{
        updateColorMode();
        $('#color-switch').prop('disabled', false);
    }
}
// Auto Color Switch
$('#auto-color-switch').prop('checked', (getAutoColor() === 'true')? true : false );

$('#auto-color-switch').click(function(){
    var auto = Cookies.get('auto_color');
    auto = !((auto === "true")? true: false);
    $(this).prop('checked', auto);
    updateAutoColor(auto);

    // Reload After Auto Setup
    window.location.reload();
});

// console.log(getAutoColor());
