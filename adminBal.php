<!--<link href="assets/dist/basic.css" rel="stylesheet">
<link href="assets/dist/dropzone.css" rel="stylesheet">

<form action="assets/uploads" class="dropzone" id="my-awesome-dropzone">
</form>

<script src="assets/dist/dropzone-amd-module.js"></script>
<script src="assets/dist/dropzone.js"></script>
<script src="assets/js/dropzone.js"></script>-->
<link href="assets/css/bootstrap.css" rel="stylesheet">


<form id="my-form">
    <input class="form-control" name="search" type="text" placeholder="type something ..." id="my-autoc">
        <br>
</form>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/typeahead.js"></script>
<script>    
$('#my-autoc').typeahead({
    name: 'search',
    remote: {
      url: 'model/kickGrassHotel/kickgrassAdmin.php?query=%QUERY',
      cache: false,
      filter: function(parsedResponse){
          return (parsedResponse.length > 1) ? parsedResponse[1] : [] ;
      }
    }
  }).on('typeahead:selected', function(e){
    e.target.form.submit();
  });
</script>