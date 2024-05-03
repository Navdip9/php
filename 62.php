<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>jQuery Events Demo</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .box {
        width: 100px;
        height: 100px;
        background-color: #3498db;
        color: #fff;
        text-align: center;
        line-height: 100px;
        cursor: pointer;
        margin: 10px;
    }
</style>
</head>
<body>

<div class="box" id="box1">Click Me</div>
<div class="box" id="box2">Hover Me</div>
<div class="box" id="box3">Double Click Me</div>
<div class="box" id="box4">Mouse Enter</div>
<div class="box" id="box5">Mouse Leave</div>

<script>
    $(document).ready(function(){
        // Click event
        $("#box1").click(function(){
            $(this).css("background-color", "#e74c3c").text("Clicked!");
        });

        // Hover event
        $("#box2").hover(
            function(){
                $(this).css("background-color", "#2ecc71").text("Hovered!");
            },
            function(){
                $(this).css("background-color", "#3498db").text("Hover Me");
            }
        );

        // Double click event
        $("#box3").dblclick(function(){
            $(this).css("background-color", "#9b59b6").text("Double Clicked!");
        });

        // Mouse enter event
        $("#box4").mouseenter(function(){
            $(this).css("background-color", "#f39c12").text("Mouse Entered!");
        });

        // Mouse leave event
        $("#box5").mouseleave(function(){
            $(this).css("background-color", "#34495e").text("Mouse Left!");
        });
    });
</script>

</body>
</html>
