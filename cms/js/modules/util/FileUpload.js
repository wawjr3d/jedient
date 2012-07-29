define(function(require) {
    "use strict";
    
    var $ = require("jquery");
    
    function makeChangeHandler(options) {
        return function(e) {
            var input = this;
            var file = e.target.files[0];
            var formData = new FormData(); 
            
            if (typeof options.before == "function") {
                options.before();
            }
            
            formData.append(this.name, file);
            formData.append("filename", file.name);
            formData.append("filekey", this.name);
            
            for(var key in options.formData) {
                formData.append(key, options.formData[key]);
            }
         
            $.ajax({
                url: options.url,
                type: "POST",
                dataType: "json",
                data: formData,
                contentType: false,
                processData: false
            })
            .done(options.done)
            .fail(options.fail)
            .always(options.always);
        }
    }
    
    var FileUpload = {
        enable: function(selector, options) {
            $(selector).change(makeChangeHandler(options));
        }
    }
    
    return FileUpload;
});