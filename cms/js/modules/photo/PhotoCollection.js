define(function(require) {
    "use strict";
    
    var Backbone = require("backbone");
    var Photo = require("modules/photo/Photo");
    
    var PhotoCollection = Backbone.Collection.extend({
        model: Photo,
        url: "../api/photo.php"
    });
    
    return PhotoCollection;
});