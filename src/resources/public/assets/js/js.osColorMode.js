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
 if (window.matchMedia)
   window.matchMedia("(prefers-color-scheme: dark)").addListener( update_color_scheme );


// Test Color Mode
console.log(get_color_scheme());