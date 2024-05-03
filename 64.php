<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Methods Demo</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="box">Box</div>

    <button id="btnHtml">Html</button>
    <button id="btnAppend">Append</button>
    <button id="btnPrepend">Prepend</button>
    <button id="btnAfter">After</button>
    <button id="btnBefore">Before</button>

    <script>
        $(document).ready(function() {
            $('button').click(function() {
                var btnId = $(this).attr('id');
                var targetDiv = $('#box');

                switch(btnId) {
                    case 'btnHtml':
                        targetDiv.html('<p>New HTML content</p>');
                        break;
                    case 'btnAppend':
                        targetDiv.append('<p>Appended content</p>');
                        break;
                    case 'btnPrepend':
                        targetDiv.prepend('<p>Prepended content</p>');
                        break;
                    case 'btnAfter':
                        targetDiv.after('<div>New box after</div>');
                        break;
                    case 'btnBefore':
                        targetDiv.before('<div>New box before</div>');
                        break;
                    default:
                        break;
                }
            });
        });
    </script>
</body>
</html>
