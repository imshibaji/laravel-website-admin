/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Idle-timer Js
 */


        /*
        scrollToBottom plugin, chainable
        */
       $.fn.scrollToBottom = function () {
        this.scrollTop(this[0].scrollHeight);
        return this;
    };
    /*
    click event for alert button
    */
    (function ($) {
        //Display alert
        $("#alert").click(function () { alert("Hello!"); return false; });
    })(jQuery);

/*
        Code for document idle timer
        */
        (function ($) {
            //Define default
            var
                docTimeout = 5000
            ;

            /*
            Handle raised idle/active events
            */
            $(document).on("idle.idleTimer", function (event, elem, obj) {
                $("#docStatus")
                    .val(function (i, v) {
                        return v + "Idle @ " + moment().format() + " \n";
                    })
                    .removeClass("alert-soft-success")
                    .addClass("alert-soft-secondary")
                    .scrollToBottom();
            });
            $(document).on("active.idleTimer", function (event, elem, obj, e) {
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Active [" + e.type + "] [" + e.target.nodeName + "] @ " + moment().format() + " \n";
                    })
                    .addClass("alert-soft-success")
                    .removeClass("alert-soft-secondary")
                    .scrollToBottom();
            });

            /*
            Handle button events
            */
            $("#btPause").click(function () {
                $(document).idleTimer("pause");
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Paused @ " + moment().format() + " \n";
                    })
                    .scrollToBottom();
                $(this).blur();
                return false;
            });
            $("#btResume").click(function () {
                $(document).idleTimer("resume");
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Resumed @ " + moment().format() + " \n";
                    })
                    .scrollToBottom();
                $(this).blur();
                return false;
            });
            $("#btElapsed").click(function () {
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Elapsed (since becoming active): " + $(document).idleTimer("getElapsedTime") + " \n";
                    })
                    .scrollToBottom();
                $(this).blur();
                return false;
            });
            $("#btDestroy").click(function () {
                $(document).idleTimer("destroy");
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Destroyed: @ " + moment().format() + " \n";
                    })
                    .removeClass("alert-soft-success")
                    .removeClass("alert-soft-secondary")
                    .scrollToBottom();
                $(this).blur();
                return false;
            });
            $("#btInit").click(function () {
                // for demo purposes show init with just object
                $(document).idleTimer({ timeout: docTimeout });
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Init: @ " + moment().format() + " \n";
                    })
                    .scrollToBottom();

                //Apply classes for default state
                if ($(document).idleTimer("isIdle")) {
                    $('#docStatus')
                        .removeClass("alert-soft-success")
                        .addClass("alert-soft-secondary");
                } else {
                    $('#docStatus')
                        .addClass("alert-soft-success")
                        .removeClass("alert-soft-secondary");
                }
                $(this).blur();
                return false;
            });

            //Clear old statuses
            $('#docStatus').val('');

            //Start timeout, passing no options
            //Same as $.idleTimer(docTimeout, docOptions);
            $(document).idleTimer({
              timeout: docTimeout,
              timerSyncId: "document-timer-demo"
            });

            //For demo purposes, style based on initial state
            if ($(document).idleTimer("isIdle")) {
                $("#docStatus")
                  .val(function (i, v) {
                      return v + "Initial Idle State @ " + moment().format() + " \n";
                  })
                  .removeClass("alert-soft-success")
                  .addClass("alert-soft-secondary")
                  .scrollToBottom();
            } else {
                $('#docStatus')
                    .val(function (i, v) {
                        return v + "Initial Active State @ " + moment().format() + " \n";
                    })
                    .addClass("alert-soft-success")
                    .removeClass("alert-soft-secondary")
                    .scrollToBottom();
            }


            //For demo purposes, display the actual timeout on the page
            $('#docTimeout').text(docTimeout / 1000);


        })(jQuery);



        /*
        Code for element idle timer
        */
       (function ($) {
        //Define textarea settings
        var
            taTimeout = 3000
        ;

        /*
        Handle raised idle/active events
        */
        $('#elStatus').on("idle.idleTimer", function (event, elem, obj) {
            //If you dont stop propagation it will bubble up to document event handler
            event.stopPropagation();

            $('#elStatus')
                .val(function (i, v) {
                    return v + "Idle @ " + moment().format() + " \n";
                })
                .removeClass("alert-soft-success")
                .addClass("alert-soft-secondary")
                .scrollToBottom();

        });
        $('#elStatus').on("active.idleTimer", function (event) {
            //If you dont stop propagation it will bubble up to document event handler
            event.stopPropagation();

            $('#elStatus')
                .val(function (i, v) {
                    return v + "Active @ " + moment().format() + " \n";
                })
                .addClass("alert-soft-success")
                .removeClass("alert-soft-secondary")
                .scrollToBottom();
        });

        /*
        Handle button events
        */
        $("#btReset").click(function () {
            $('#elStatus')
                .idleTimer("reset")
                .val(function (i, v) {
                    return v + "Reset @ " + moment().format() + " \n";
                })
                .scrollToBottom();

            //Apply classes for default state
            if ($("#elStatus").idleTimer("isIdle")) {
                $('#elStatus')
                    .removeClass("alert-soft-success")
                    .addClass("alert-soft-secondary");
            } else {
                $('#elStatus')
                    .addClass("alert-soft-success")
                    .removeClass("alert-soft-secondary");
            }
            $(this).blur();
            return false;
        });
        $("#btRemaining").click(function () {
            $('#elStatus')
                .val(function (i, v) {
                    return v + "Remaining: " + $("#elStatus").idleTimer("getRemainingTime") + " \n";
                })
                .scrollToBottom();
            $(this).blur();
            return false;
        });
        $("#btLastActive").click(function () {
            $('#elStatus')
                .val(function (i, v) {
                    return v + "LastActive: " + $("#elStatus").idleTimer("getLastActiveTime") + " \n";
                })
                .scrollToBottom();
            $(this).blur();
            return false;
        });
        $("#btState").click(function () {
            $('#elStatus')
                .val(function (i, v) {
                    return v + "State: " + ($("#elStatus").idleTimer("isIdle")? "idle":"active") + " \n";
                })
                .scrollToBottom();
            $(this).blur();
            return false;
        });

        //Clear value if there was one cached & start time
        $('#elStatus').val('').idleTimer({
          timeout: taTimeout,
          timerSyncId: "element-timer-demo"
        });

        //For demo purposes, show initial state
        if ($("#elStatus").idleTimer("isIdle")) {
            $("#elStatus")
              .val(function (i, v) {
                  return v + "Initial Idle @ " + moment().format() + " \n";
              })
              .removeClass("alert-soft-success")
              .addClass("alert-soft-secondary")
              .scrollToBottom();
        } else {
            $('#elStatus')
                .val(function (i, v) {
                    return v + "Initial Active @ " + moment().format() + " \n";
                })
                .addClass("alert-soft-success")
                .removeClass("alert-soft-secondary")
                .scrollToBottom();
        }

        // Display the actual timeout on the page
        $('#elTimeout').text(taTimeout / 1000);

    })(jQuery);
