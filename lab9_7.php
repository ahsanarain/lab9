<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script>
$(document).ready(function () {
    $("#type").change(function () {
        var val = $(this).val();
        if (val == "item1") {
            $("#size").html("<option value='test'>karachi</option><option value='test2'>hyderabad</option>");
        } else if (val == "item2") {
            $("#size").html("<option value='test'>mumbai</option><option value='test2'>Dehli</option>");
        } else if (val == "item3") {
            $("#size").html("<option value='test'>Hobart</option><option value='test2'>Sydney</option>");
        } else if (val == "item0") {
            $("#size").html("<option value=''>--select one--</option>");
        }
    });
});
</script>
</head>
<body>
<form id="form" action="combo_box.php" method="post">
<select id="type">
    <option value="item0">--Select an Item--</option>
    <option value="item1">pakistan</option>
    <option value="item2">india</option>
    <option value="item3">australia</option>
</select>

<select id="size">
    <option value="">-- select one -- </option>
</select>
</form>
</body>
</html>