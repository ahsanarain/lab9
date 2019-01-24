<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script>
$(document).ready(function (e) {
var form = $('#ajax-contact');
 $(form).submit(function(e){//call submit btn onclick
 e.preventDefault(); //prevent normal behavior of submit button
 $.ajax({

 url: $(form).attr('action'), //server url
type: "POST", // sending method GET/POST
 data: $(form).serialize(), //parameters to send

 //specify what to do after receiving response from server
 success: function(data)
 {

 //data contains response from server
 $('#name').val("");

 $('#email').val("");
 $('#phone').val("");

 $('#message').val("");

 alert("Inserted successfully");
 },

 //display errors if any

 error: function(error){

 console.log(error);

 alert(error);

 alert(JSON.stringify(error));
}
});
});
});

</script>
</head>
<body>
<form id="ajax-contact" action="contact_form.php" method="POST">
  Name
      <input type="text" class="form-control col-sm-6" id="name" name="name" aria-describedby="name" placeholder="Enter Name">
  Email 
    <input type="email" class="form-control col-sm-6" id="email" name="email" placeholder="Email" name="email" >
  Phone
    <input type="text" class="form-control col-sm-6" id="phone" name="phone" placeholder="Phone no" name="Telephone"></div>
  Message
    <textarea class="form-control col-sm-6" name="message" id="message" rows="3"></textarea></div>
  <input  type="submit" class="btn btn-primary" id="btn" value="Submit">
</form>
</body>
</html>