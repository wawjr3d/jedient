define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    
    var Photo = BaseModel.extend({
        urlRoot: "../api/photo.php",
        
        hasEvent: function() {
            return this.get("eventId") > 0;
        }
    });
    
    return Photo;
});