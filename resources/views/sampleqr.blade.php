<!-- resources/views/qr-scanner.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>QR Scanner</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
</head>
<body>
    <h1>QR Scanner</h1>
    <video id="qr-video" width="300" height="300" style="display:none"></video>
    <canvas id="qr-canvas" width="300" height="300" style="display:none"></canvas>
    <div id="output"></div>
    <script>
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } }).then(function(stream) {
            var video = document.getElementById('qr-video');
            video.srcObject = stream;
            video.setAttribute('playsinline', true);
            video.play();
            requestAnimationFrame(tick);
        });

        function tick() {
            var video = document.getElementById('qr-video');
            var canvas = document.getElementById('qr-canvas');
            var context = canvas.getContext('2d');

            if (video.readyState === video.HAVE_ENOUGH_DATA) {
                canvas.height = video.videoHeight;
                canvas.width = video.videoWidth;
                context.drawImage(video, 0, 0, canvas.width, canvas.height);
                var imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                var code = jsQR(imageData.data, imageData.width, imageData.height, {
                    inversionAttempts: "dontInvert",
                });

                if (code) {
                    // Send the QR data to the server
                    $.post('/this/qr', { qr_data: code.data }, function(response) {
                        $('#output').html('<p>Scanned Data: ' + response.data + '</p>');
                    });
                }
            }
            requestAnimationFrame(tick);
        }
    </script>
</body>
</html>
