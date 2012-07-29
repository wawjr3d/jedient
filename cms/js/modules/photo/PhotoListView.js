define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var ListView = require("modules/traits/ListView");
    var PhotoItemView = require("modules/photo/PhotoItemView");
    
    var PhotoListView = BaseView.extend(_.extend({}, ListView, {
        listTitle: "Photos",
        listClassName: "photos",
        ItemView: PhotoItemView,
     
        events: {
            "click .add.btn": "addPhoto"
        },
        
        addPhoto: function() {
            document.location.href = "#photo";
        }
    }));
    
    return PhotoListView;
});