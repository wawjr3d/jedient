define(function(require) {
    "use strict";
    
    var BaseView = require("modules/base/BaseView");
    var PhotoListView = require("modules/photo/PhotoListView");
    var FileUpload = require("modules/util/FileUpload");
    var audioTemplate = require("text!templates/audio/audio.html");
    var editAudioTemplate = require("text!templates/audio/edit-audio.html");
    
    var AudioView = BaseView.extend({
        tagName: "article",
        className: "audio",
        
        template: audioTemplate,
        
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
                this.template = editAudioTemplate;
            } else {
                this.template = audioTemplate;
            }
        },
        
        disableSubmit: function() {
            this.$el.find("input[type=submit]").prop("disabled", true);
        },
        
        enableSubmit: function() {
            this.$el.find("input[type=submit]").prop("disabled", false);
        },
        
        additionalRendering: function() {
            var model = this.model;
            
            if (this.shouldShowEdit()) {
                FileUpload.enable(this.$el.find("input[name=file]"), {
                    url: "../api/upload-audio.php",
                    done: function(data) {
                        model.set("file", data.filePath);
                    },
                    before: _.bind(this.disableSubmit, this),
                    always: _.bind(this.enableSubmit, this)
                });
            }
        }
    });
    
    return AudioView;
});