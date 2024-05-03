<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Effects Demo</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    #effect-div {
        width: 200px;
        height: 200px;
        background-color:black;
        margin-top: 20px;
    }
</style>
</head>
<body>
    <select id="effect-select">
        <option value="fadeIn">Fade In</option>
        <option value="fadeOut">Fade Out</option>
        <option value="slideDown">Slide Down</option>
        <option value="slideUp">Slide Up</option>
        <option value="hide">Hide</option>
    </select>
    <div id="effect-div"></div>

    <script>
        $(document).ready(function() {
            $('#effect-select').change(function() {
                var selectedEffect = $(this).val();
                var effectDiv = $('#effect-div');
                
                // Reset the div to its initial state
                effectDiv.finish().css('background-color', 'blue');
                
                // Apply the selected effect
                switch(selectedEffect) {
                    case 'fadeIn':
                        effectDiv.fadeIn();
                        break;
                    case 'fadeOut':
                        effectDiv.fadeOut();
                        break;
                    case 'slideDown':
                        effectDiv.slideDown();
                        break;
                    case 'slideUp':
                        effectDiv.slideUp();
                        break;
                    case 'hide':
                        effectDiv.hide();
                        break;
                    default:
                        break;
                }
            });
        });
    </script>
</body>
</html>
