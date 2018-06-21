var FormDropzone = function () {


    return {
        //main function to initiate the module
        init: function () {

            Dropzone.options.myDropzone = {
                dictDefaultMessage: "",
                paramName: "file",
                thumbnailWidth: 192,
                thumbnailheight: 108,
                thumbnailMethod: "contain",
                previewTemplate: document.querySelector('#preview').innerHTML,
                init: function() {
                    this.on("addedfile", function(file) {
                        // Create the remove button
                        var removeButton = Dropzone.createElement("<a href='javascript:;'' class='btn red btn-sm btn-block'>Remove</a>");

                        // Capture the Dropzone instance as closure.
                        var _this = this;

                        // Listen to the click event
                        removeButton.addEventListener("click", function(e) {
                          // Make sure the button click doesn't submit the form:
                          e.preventDefault();
                          e.stopPropagation();

                          // Remove the file preview.
                          _this.removeFile(file);
                          // If you want to the delete the file on the server as well,
                          // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });

                },
                success: function (file, done) {
                  console.log(file);
                  console.log(done);

                  var hiddenUpload = Dropzone.createElement("<input type=\"hidden\" name=\"images[]\" value=\""+done+"\" />");


                  // Add the button to the file preview element.
                  file.previewElement.appendChild(hiddenUpload);
                }
            }
        }
    };
}();

jQuery(document).ready(function() {
   FormDropzone.init();
});
