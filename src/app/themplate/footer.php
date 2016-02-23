    <div class="starter-template bottom-section">
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script>
    ( function( $ ) {
    	$(document).ready( function(){
    		var pageOffsetAttrId, idToNumber, pageOffsetId
    		var scroll = true
    		function downloaddScroll( action, download ){
				pageOffsetAttrId = $( 'ul.container_scroll>li:last-child' ).attr( 'id' );
  				idToNumber = pageOffsetAttrId.match( /\d{1,}$/i );
  				pageOffsetId = Number( idToNumber[0] );
  				$.ajax( {
					url: "scroll.php",
					type: "post",
					data: { offset:pageOffsetId, action: action },
					success: function(data){
						$(".container_scroll").append( data ).fadeIn();
						if( typeof download !== "undefined" )
							download()
					},
					error:function(){
						$(".container_scroll").append('Error Occurred while fetching data.');
					}
				} )
    		}
    		$(window).scroll( function() {	
	  			if( $( 'ul.container_scroll>li:last-child' ).offset().top < $(window).scrollTop() + 700 && scroll ) {
	  				scroll = false;
	  				pageOffsetAttrId = $( 'ul.container_scroll>li:last-child' ).attr( 'id' );
	  				idToNumber = pageOffsetAttrId.match( /\d{1,}$/i );
	  				pageOffsetId = Number( idToNumber[0] );
					$.ajax( {
						url: "/wall/scroll",
						type: "post",
						data: { offset:pageOffsetId, action:'scroll' },
						success: function(data){
							$(".container_scroll").append( data ).fadeIn();
							scroll = true;
						},
						error:function(){
							$(".container_scroll").append('Error Occurred while fetching data.');
						}
					} )

				}
			});
    	})
	})( jQuery );
	</script>
  </body>
</html>