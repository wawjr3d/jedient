define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    
    var Photo = BaseModel.extend({
        urlRoot: "../api/photo.php"
    });
    
    return Photo;
});