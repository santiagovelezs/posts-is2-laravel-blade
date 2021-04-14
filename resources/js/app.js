require('./bootstrap');
const ClassicEditor = require('@ckeditor/ckeditor5-build-classic');

ClassicEditor
    .create(document.querySelector('#CkEditor'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.log(error);
    });
