<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Update Text File</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>

<div id="result"></div>
<button id="updateBtn">Update Text File</button>

<script>
$(document).ready(function(){
    $("#updateBtn").click(function(){
        $.ajax({
            type: "POST",
            url: "update_text.php", // PHP file to handle the update
            data: {content: "HELLO WORLD"},
            success: function(response){
                $("#result").text(response);
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

</body>
</html>
