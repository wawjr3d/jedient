define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    
    var Event = BaseModel.extend({
        urlRoot: "../api/event.php"
    });
    
    return Event;
});