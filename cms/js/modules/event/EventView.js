define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var PhotoListView = require("modules/photo/PhotoListView");
    var eventTemplate = require("text!templates/event/event.html");
    var editEventTemplate = require("text!templates/event/edit-event.html");
    
    var EventView = BaseView.extend({
        tagName: "article",
        className: "event",
        
        template: eventTemplate,
        
        inEditMode: false,
        
        events: {
            "click .edit.btn": "handleEdit",
            "click .cancel.btn": "handleCancel",
            "submit form": "handleEditSubmit"
        },
        
        handleEdit: function() {
            this.inEditMode = true;
            this.render();
        },
        
        handleCancel: function() {
            this.inEditMode = false;
            this.render();  
        },
        
        handleEditSubmit: function(e) {
            e.preventDefault();
            var $form = $(e.currentTarget);
            var formArray = $form.serializeArray();
            var formObject = {};
            
            for(var i = 0; i < formArray.length; i++) {
                var field = formArray[i];
                
                formObject[field.name] = field.value;
            }
            
            if (!formObject["isActive"]) {
                formObject["isActive"] = false;
            }
            
            this.model.save(formObject, {
                success: (function(view) {
                    return function(model) {
                        view.inEditMode = false;
                        view.render();
                    };
                })(this)
            });
        },
        
        pickTemplate: function() {
            if (this.model.isNew() || this.inEditMode) {
                this.template = editEventTemplate;
            } else {
                this.template = eventTemplate;
            }
        },
        
        renderChildViews: function() {
            var view = this;
            
            this.model.fetchPhotos({
                success: function(eventPhotoCollection) {
                    view.$el.append(new PhotoListView({ model: eventPhotoCollection }).render().el);
                }
            });
        }
    });
    
    return EventView;
});