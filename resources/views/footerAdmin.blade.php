
<div class="AddNavBottom">
  <div class="sortInputs">
    <button type="add"><a href="<?= url('/product'); ?>">New Product</a></button>

    <button type="home"><a href="<?= url('/productDashboard'); ?>">View Products</a></button>
  </div>
</div>

<script src="{{ asset('js/content.js') }}"></script>

<script>
function sort(num) {
  var input, filter, table, tr, td, i, txtValue;
  if(num == 0){

    input = document.getElementById("inputTitle");
  }
  else if(num == 3){

    input = document.getElementById("inputDateUploaded");
  }
  else if(num == 4){

    input = document.getElementById("inputDateModified");
}
  
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[num];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}



</script>


</body>
</html>
