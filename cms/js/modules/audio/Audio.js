define(function(require) {
    "use strict";
    
    var BaseModel = require("modules/base/BaseModel");
    
    var Audio = BaseModel.extend({
        urlRoot: "../api/audio.php"
    });
    
    return Audio;
});