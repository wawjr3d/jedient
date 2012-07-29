define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var EventCollection = require("modules/event/EventCollection");
    var photoTemplate = require("text!templates/photo/photo.html");
    var editPhotoTemplate = require("text!templates/photo/edit-photo.html");
    
    var PhotoView = BaseView.extend({
        tagName: "article",
        className: "photo",
        
        template: photoTemplate,
        
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
        
        shouldShowEdit: function() {
            return this.model.isNew() || this.inEditMode;
        },
        
        pickTemplate: function() {
            if (this.shouldShowEdit()) {
                this.template = editPhotoTemplate;
            } else {
                this.template = photoTemplate;
            }
        },
        
        additionalRendering: function() {
            var view = this;
            
            if (this.shouldShowEdit()) {
                new EventCollection().fetch({
                    success: function(collection) {
                        var $select = $("<select name='eventId'/>");
                        for(var i = 0; i < collection.models.length; i++) {
                            var model = collection.models[i];
                            
                            $select.append("<option value='" + model.id + "'>" + model.get("venue") + "</option>");
                        }
                        
                        view.$el.find("input[name=eventId]").replaceWith($select);
                    }
                });               
            }
        }
    });
    
    return PhotoView;
});