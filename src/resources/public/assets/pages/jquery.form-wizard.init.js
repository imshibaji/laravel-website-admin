/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Form Wizard
 */


$(function ()
{
    $("#form-horizontal").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slide"
    });
    $("#form-vertical").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        stepsOrientation: "vertical"
    });
});

