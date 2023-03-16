
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
input[type=no] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=button]{
    color:red;
    align-items:center;
}
        </style>
    <body>
<div class="delete-form">
<form autocomplete="off" id="form" >
insert question no
<input type="no" placeholder="enter question no" id="no1" >
<button type="button"  id="click">delete question</button>
</div>
</form>
<div id="vk"></div>

<script>
    
    $("#click").click(function(){
      alert('dfsd');
  var number = $("#no1").val();
  

  $.ajax({
url: "backgrounddelete.php",
type: "GET",
data: {bb:number},

success: function(data){
  $('#vk').html(data);
}

});
});

</script>
</body>
</html>