 // Obtenir la vidéo et la canvas
//  alert('Code run');
 var video = document.getElementById('video');
 var canvas = document.createElement('canvas');

 // Utiliser la caméra
 navigator.mediaDevices.getUserMedia({video: true})
     .then(function(stream) {
         video.srcObject = stream;
         video.play();
     })
     .catch(function(err) {
         console.log("Erreur : " + err);
     });

 // Prendre la photo
 function takePicture() {
     var context = canvas.getContext('2d');
     canvas.width = video.videoWidth;
     canvas.height = video.videoHeight;
     context.drawImage(video, 0, 0, canvas.width, canvas.height);
     var imgData = canvas.toDataURL('image/png');
     console.log(imgData);
 }