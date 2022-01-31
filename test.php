<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap star rating example</title>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
</head>
<body>


<div class="container">

	<h2>Bootstrap star rating example</h2>

    <br/>
    <label for="input-1" class="control-label">Give a rating for Skill:</label>
    <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="2">


    <br/>
    <label for="input-2" class="control-label">Give a rating for Knowledge:</label>
    <input id="input-2" name="input-2" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="4">


    <br/>
    <label for="input-3" class="control-label">Give a raating for PaHPa:</label>
    <input id="input-3" name="input-3" class="rating rating-loading" data-min="0" data-max="5" data-step="1" value="0">


</div>


<script>
$("#input-3").rating({ 
    showCaption: false
});


$('#input-3').on('rating.change', function() {
    console.log($('#input-3').val());
});

</script>


</body>
</html>