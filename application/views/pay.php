


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<div id="xxx">
  <input type="radio" name="radio1" value="cat_1" price="1.5" />
  <br/>
  <input type="radio" name="radio1" value="cat_2" price="2" />
  <br/>
  <input type="radio"  name="radio1" value="cat_3" price="3.5" />
  <br/>
  <input type="radio"  name="radio1" value="cat_4" price="4" />
  <br/>
  <input type="radio"  name="radio1" value="cat_5" price="5" />
  <br/>
  <input type="radio" name="radio1" value="cat_6" price="6.5" />
  <br/>
  <input type="radio" name="radio1"  value="cat_7" price="7" />
  <br/>
  <input type="radio" name="radio1"  value="cat_8" price="8" />
  <br/>
  <input type="radio" name="radio1" value="cat_9" price="9.5" />
</div>
<input type="text" id="total" value="0" />

<script>
function periode() {
  var total = 0;
  $('#xxx :radio:checked').each(function() {
    total += parseFloat($(this).attr('price')) || 0;
  });
  $('#total').val(total);
}

$('#xxx :radio').change(xxx).change();


</script>