/*function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
  }
 
  function isImage(filename) {
    var ext = getExtension(filename);
    switch (ext.toLowerCase()) {
      case 'jpg':
      case 'png':
        return true;
    }
    return false;
  }
 
  form = document.getElementById("form")
  form.on("submit",function () {
    alert('ok')
  })
*/
  function fileValidation() {
    var fileInput =
        document.getElementById('fimage');
     
    var filePath = fileInput.value;
 
    // Allowing file type
    var allowedExtensions =
            /(\.jpg|\.jpeg|\.png|\.gif)$/i;
     
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
    }
   
}
