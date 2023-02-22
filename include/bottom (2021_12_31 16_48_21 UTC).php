	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../errorDocs/Nebula-master/Nebula-master/lib/dat.gui/build/dat.gui.min.js"></script>
	<script type="text/javascript" src="../errorDocs/Nebula-master/Nebula-master/src/nebula.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var text = new Nebula();
			
			text.write(null, ['rgba(0,76,255,0.5)', 'rgba(255,81,0,0.5)']);

			
			
			$('canvas').mousemove(function(e){ text.mouseMove(e); });
			$('canvas').resize(function(e){text.resizeCanvas(); });
			$('canvas').click(function(e){text.explosion(e); });
			
			$("a[href='#colorful']").click(function(e){
				e.preventDefault();
				text.set('mode','colorful');
			});
		});
	</script>

	

</body>