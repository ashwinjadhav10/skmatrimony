</main>
<footer>
    <div class="footer-main">
        <div class="col-md-1 col-xs-3">
            <p>© 2017</p>
        </div>
        <div class="col-md-8 col-xs-1">
        </div>
        <div class="col-md-3 col-xs-8">
          <!--  <p>powered by <img src="<?php echo base_url();?>assets/images/sworx18-logo.png"></p>-->
            
        </div><div class="clearfix"></div>
    </div>
    <div class="clearfix"></div> 
</footer>
<!--Datepicker plugin-->
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->



<!--DatePicker Plugin-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
	
</script>
<script>
	$(document).ready(function(){
		$(".del_photo").click(function(e) {
          var r = confirm("Are you sure you want to delete this records ?");
          var id = $(this).attr("id");		  
          if(r) {
             window.location.href = "<?php echo site_url("delete-user"); ?>/"+id;
          }
            
        });
		/*$('input[id$=birthtime]').timepicker();*/
		$("#dateBirth").datepicker({ dateFormat: 'dd-mm-yy', changeYear: true, yearRange: '1970:1999'});
		$( ".alert-success,.alert-danger" ).fadeOut(5000);
	});
</script>

</body>
</html>