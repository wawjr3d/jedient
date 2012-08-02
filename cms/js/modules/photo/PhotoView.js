define(function(require) {
    "use strict";
    
    var _ = require("underscore");
    var BaseView = require("modules/base/BaseView");
    var EventCollection = require("modules/event/EventCollection");
    var FileUpload = require("modules/util/FileUpload");
    var photoTemplate = require("text!templates/photo/photo.html");
    var editPhotoTemplate = require("text!templates/photo/edit-photo.html");
    
    var NOT_ASSOCIATED_WITH_AN_EVENT = "Not Associated with event";
    
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
            
            if (this.model.isNew()) {
                history.back();
            } else {
                this.render();
            }  
        },
        
        handleEditSubmit: function(e) {
            e.preventDefault();
            var $form = $(e.currentTarget);
            var formArray = $form.serializeArray();
            var formObject = {};
            
            for(var i = 0; i < formArray.length; i++) {
                var field = formArray[i];
                
                if (field.name != "thumbnail" && field.name != "image") {
                    formObject[field.name] = field.value;   
                }
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
        
        disableSubmit: function() {
            this.$el.find("input[type=submit]").prop("disabled", true);
        },
        
        enableSubmit: function() {
            this.$el.find("input[type=submit]").prop("disabled", false);
        },
        
        extra: function() {
            return {
                "hasEvent": this.model.hasEvent()
            }
        },
        
        additionalRendering: function() {
            var view = this;
            var model = this.model;

            if (this.shouldShowEdit()) {
                FileUpload.enable(this.$el.find("input[name=thumbnail]"), {
                    url: "../api/upload-photo.php",
                    formData: {
                        "isThumbnail": true
                    },
                    done: function(data) {
                        model.set("thumbnail", data.filePath);
                    },
                    before: _.bind(this.disableSubmit, this),
                    always: _.bind(this.enableSubmit, this)
                });
                
                FileUpload.enable(this.$el.find("input[name=image]"), {
                    url: "../api/upload-photo.php",
                    done: function(data) {
                        model.set("image", data.filePath);
                    },
                    before: _.bind(this.disableSubmit, this),
                    always: _.bind(this.enableSubmit, this)
                });
                
                new EventCollection().fetch({
                    success: function(collection) {
                        var $select = $("<select name='eventId'/>");
                        $select.append("<option value='0'>" + NOT_ASSOCIATED_WITH_AN_EVENT + "</option>");
                        for(var i = 0; i < collection.models.length; i++) {
                            var event = collection.models[i];
                            var $option = $("<option value='" + event.id + "'>" + event.get("venue") + "</option>")
                                            .prop("selected", model.get("eventId") == event.id);
                            $select.append($option);
                        }
                        
                        view.$el.find("input[name=eventId]").replaceWith($select);
                    }
                });               
            }
        }
    });
    
    return PhotoView;
});