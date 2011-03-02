
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title> 
</head>

	
   
<!--Calendar-->
	<link rel="stylesheet" href="CSS/jquery.ui.all.css">
	<script src="JavaScript/jquery-1.4.4.js"></script>
	<script src="JavaScript/jquery.ui.core.js"></script>
	<script src="JavaScript/jquery.ui.widget.js"></script>
	<script src="JavaScript/jquery.ui.datepicker.js"></script>
    
    <!--Autocomplete-->
	<script src="JavaScript/jquery.ui.position.js"></script>
	<script src="JavaScript/jquery.ui.autocomplete.js"></script>
    <script src="JavaScript/jquery.ui.button.js"></script>
    
    <script>	
	$(function() {
		$( "#fecha_publicacion" ).datepicker();
	});
	</script>
    
    <script>
	(function( $ ) {
		$.widget( "ui.combobox", {
			_create: function() {
				var self = this,
					select = this.element.hide(),
					selected = select.children( ":selected" ),
					value = selected.val() ? selected.text() : "";
				var input = this.input = $( "<input>" )
					.insertAfter( select )
					.val( value )
					.autocomplete({
						delay: 0,
						minLength: 0,
						source: function( request, response ) {
							var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
							response( select.children( "option" ).map(function() {
								var text = $( this ).text();
								if ( this.value && ( !request.term || matcher.test(text) ) )
									return {
										label: text.replace(
											new RegExp(
												"(?![^&;]+;)(?!<[^<>]*)(" +
												$.ui.autocomplete.escapeRegex(request.term) +
												")(?![^<>]*>)(?![^&;]+;)", "gi"
											), "<strong>$1</strong>" ),
										value: text,
										option: this
									};
							}) );
						},
						select: function( event, ui ) {
							ui.item.option.selected = true;
							self._trigger( "selected", event, {
								item: ui.item.option
							});
						},
						change: function( event, ui ) {
							if ( !ui.item ) {
								var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
									valid = false;
								select.children( "option" ).each(function() {
									if ( $( this ).text().match( matcher ) ) {
										this.selected = valid = true;
										return false;
									}
								});
								if ( !valid ) {
									// remove invalid value, as it didn't match anything
									$( this ).val( "" );
									select.val( "" );
									input.data( "autocomplete" ).term = "";
									return false;
								}
							}
						}
					})
					.addClass( "ui-widget ui-widget-content ui-corner-left" );

				input.data( "autocomplete" )._renderItem = function( ul, item ) {
					return $( "<li></li>" )
						.data( "item.autocomplete", item )
						.append( "<a>" + item.label + "</a>" )
						.appendTo( ul );
				};

				this.button = $( "<button type='button'>&nbsp;</button>" )
					.attr( "tabIndex", -1 )
					.attr( "title", "Show All Items" )
					.insertAfter( input )
					.button({
						icons: {
							primary: "ui-icon-triangle-1-s"
						},
						text: false
					})
					.removeClass( "ui-corner-all" )
					.addClass( "ui-corner-right ui-button-icon" )
					.click(function() {
						// close if already visible
						if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
							input.autocomplete( "close" );
							return;
						}

						// pass empty string as value to search for, displaying all results
						input.autocomplete( "search", "" );
						input.focus();
					});
			},

			destroy: function() {
				this.input.remove();
				this.button.remove();
				this.element.show();
				$.Widget.prototype.destroy.call( this );
			}
		});
	})( jQuery );

	$(function() {
		$( "#combobox" ).combobox();
		$( "#toggle" ).click(function() {
			$( "#combobox" ).toggle();
		});
	});
	</script>
	<link rel="stylesheet" href="CSS/demos.css">
	
<?php include_once("dao/FUENTEDAO.php")?>
<!--<script src="jquery-1.3.2.min.js" type="text/javascript"><script>   -->
<body>

<form method="post" action="NOTICIA_do_insert.php">

 <div>
  <div>
   <div>Titulo</div>
   <div><input name="title"/></div>
  </div> 
  
  <div>
   <div>URL</div>
   <div><input name="url"/></div>
  </div> 
  
  <div>
   <div>Fecha de publicacion:</div>
   <div><input id="fecha_publicacion"  name="fecha_publicacion"/></div> 
   </div> 
  
  <div>
   <div>fecha_ingreso ----------------</div>
   <div><input name="fecha_ingreso"/></div>
  </div> 
  
  <div>
   <div>Fuente</div>
   <div><input name="FUENTE"/></div>
   

  <?php
  $result = FUENTE_find_all();
?>
 <div class="demo">

<div class="ui-widget">
	
	<select id="combobox">	                 

  
 <?php
    $len = count($result);
   for($i=0;$i<$len;$i++){ ?>      

		<option value="<?php echo $result[$i]->get_id(); ?>"><?php echo $result[$i]->get_fuente(); ?></option>
        
		<?php }
 ?>	
	</select>
</div>


</div><!-- End demo -->
   
   
   
  </div> 
  
  <div>
   <div>Autor</div>
   <div><input name="AUTOR"/></div>
  </div> 
  
  <div>
  
   <div>Categoria</div>
   <div><input name="CATEGORIA"/></div>
  </div> 
  
  <div><input type="submit" value="Ingresar" /></div> 
 </div>

</form> 

</body>
</html>


