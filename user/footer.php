<style type="text/css">
footer {
  margin-top: : 250px !important;
  background: red !important;
}

.fluid-container {
  margin-top: 250px !important;
}
</style>

<div class="fluid-container">
<footer class="page-footer">
  <div class="text-center py-3">
    <p class="m-0 text-center text-white">Copyright &copy; www.utdallas.edu 2020</p>
    <p class="m-0 text-center text-white">This site is developed by Humayoon, Faraz and Raisaat</p>
  </div>
</footer>
</div>

<!-- adding script as required in 23, ask humayun -->
<script type="text/javascript">
$(document).ready(function() {
  $('.login').click(function(event) {
    event.stopPropagation();
    event.stopImmediatePropagation();
    $('#loginModal').modal('show');
    return false;

  });

  // console.log("orint");
  //new code
  $('button[type=button]').click(function() {
    var id = $(this).attr("id");
    console.log(id);
    alert(id);
  });

});

</script>
</body>
</html>
