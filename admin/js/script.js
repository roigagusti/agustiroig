/*
# Author: ldrs
# Template: Agustí Roig
# Version: 1.0
# Copyright 2016 Aldasoro, inc.
# www: http://www.agustiroig.com


Taula de continguts
-------------------
1.Typed


/* ----------- 1. Typed ------------ */
$(function(){
    $("#typed").typed({
        // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
        stringsElement: $('#typed-strings'),
        typeSpeed: 50,
        backDelay: 2000,
        loop: true,
        contentType: 'html', // or text
        // defaults to false for infinite loop
        loopCount: false,
        callback: function(){ foo(); },
        resetCallback: function() { newTyped(); }
    });

    $(".reset").click(function(){
        $("#typed").typed('reset');
    });
});

function newTyped(){ /* A new typed object */ }
function foo(){ console.log("Callback"); }