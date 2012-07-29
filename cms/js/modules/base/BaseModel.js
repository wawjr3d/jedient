define(function(require) {
    "use strict";
    
    var _ = require("underscore");
    var Backbone = require("backbone");
    
    var BaseModel = Backbone.Model.extend(_.extend({}, {
        url: function() {
            return this.urlRoot + "?id=" + this.id; 
        }
    }));
    
    return BaseModel;
});