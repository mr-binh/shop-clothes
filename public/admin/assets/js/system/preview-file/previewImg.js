const preview = {
    showFile: function(elementInput, elementPreview) {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(elementPreview).attr('src', e.target.result);
                    $(elementPreview).hide();
                    $(elementPreview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(elementInput).change(function() {
            readURL(this);
        });
    }
}

// const preview = {
//     showFile: $(function (elementInput, elementPreview) {
//         function readURL(input, selector) {
//             if (input.files && input.files[0]) {
//                 let reader = new FileReader();
//
//                 reader.onload = function (e) {
//                     $(selector).attr('src', e.target.result);
//                 };
//
//                 reader.readAsDataURL(input.files[0]);
//             }
//         }
//
//         $(elementInput).change(function () {
//             readURL(this, elementPreview);
//         });
//     })
// }
