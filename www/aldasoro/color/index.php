<!DOCTYPE html>
<html lang="es">
	<head>
	<!-- Meta data -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="title" content="Agustí Roig">
	<meta name="keywords" content="Agustí, Roig, Malaret, Aldasoro, Civil, Engineer, Ingeniero, Enginyer, Estructuras, Barcelona, Arquitecto"/>
	<meta name="author" content="Aldasoro">

	<!-- Títol i Favicons -->
	<title>Agustí Roig</title>
	<link rel="shortcut icon" href="../prova/img/favicons/favicon.ico">

	<!-- CSS custom -->
	<style>
		.val{
			visibility: hidden;
		}
		input[type=range] {
		  height: 30px;
		  -webkit-appearance: none;
		  margin: 10px 0;
		  width: 100%;
		}
		input[type=range]:focus {
		  outline: none;
		}
		input[type=range]::-webkit-slider-runnable-track {
		  width: 100%;
		  height: 5px;
		  cursor: pointer;
		  animate: 0.2s;
		  box-shadow: 0px 0px 0px #000000;
		  background: #CCCCCC;
		  border-radius: 3px;
		  border: 0px solid #000000;
		}
		input[type=range]::-webkit-slider-thumb {
		  box-shadow: 0px 0px 0px #000000;
		  border: 0px solid #000000;
		  height: 24px;
		  width: 24px;
		  border-radius: 12px;
		  background: #FF0000;
		  cursor: pointer;
		  -webkit-appearance: none;
		  margin-top: -9.5px;
		}
		input[type=range]:focus::-webkit-slider-runnable-track {
		  background: #CCCCCC;
		}
		input[type=range]::-moz-range-track {
		  width: 100%;
		  height: 5px;
		  cursor: pointer;
		  animate: 0.2s;
		  box-shadow: 0px 0px 0px #000000;
		  background: #CCCCCC;
		  border-radius: 3px;
		  border: 0px solid #000000;
		}
		input[type=range]::-moz-range-thumb {
		  box-shadow: 0px 0px 0px #000000;
		  border: 0px solid #000000;
		  height: 24px;
		  width: 24px;
		  border-radius: 12px;
		  background: #FF0000;
		  cursor: pointer;
		}
		input[type=range]::-ms-track {
		  width: 100%;
		  height: 5px;
		  cursor: pointer;
		  animate: 0.2s;
		  background: transparent;
		  border-color: transparent;
		  color: transparent;
		}
		input[type=range]::-ms-fill-lower {
		  background: #CCCCCC;
		  border: 0px solid #000000;
		  border-radius: 6px;
		  box-shadow: 0px 0px 0px #000000;
		}
		input[type=range]::-ms-fill-upper {
		  background: #CCCCCC;
		  border: 0px solid #000000;
		  border-radius: 6px;
		  box-shadow: 0px 0px 0px #000000;
		}
		input[type=range]::-ms-thumb {
		  margin-top: 1px;
		  box-shadow: 0px 0px 0px #000000;
		  border: 0px solid #000000;
		  height: 24px;
		  width: 24px;
		  border-radius: 12px;
		  background: #FF0000;
		  cursor: pointer;
		}
		input[type=range]:focus::-ms-fill-lower {
		  background: #CCCCCC;
		}
		input[type=range]:focus::-ms-fill-upper {
		  background: #CCCCCC;
		}
	</style>

	<!-- JS basics -->
	<script src="https://yui-s.yahooapis.com/3.18.1/build/yui/yui-min.js"></script>

	<!-- JS custom -->
 	<script>
	    YUI().use('slider', 'color', function(Y){
	            // sliders
		var rSlider = new Y.Slider({ min: 0, max: 255, value: Math.round(Math.random()*255) }),
		    gSlider = new Y.Slider({ min: 0, max: 255, value: Math.round(Math.random()*255) }),
		    bSlider = new Y.Slider({ min: 0, max: 255, value: Math.round(Math.random()*255) }),

		    // slider values
		    rVal = Y.one('#r-val'),
		    gVal = Y.one('#g-val'),
		    bVal = Y.one('#b-val'),

		    // color strings
		    hex = Y.one('#hex'),
		    rgb = Y.one('#rgb'),
		    hsl = Y.one('#hsl'),

		    // color chip
		    color1 = Y.one('.color1');
		    color2 = Y.one('.color2');
		    color3 = Y.one('.color3');

		// render sliders
		rSlider.render('#r-slider');
		gSlider.render('#g-slider');
		bSlider.render('#b-slider');


		// register update events
		rSlider.after('thumbMove', function(e) {
		    rVal.set('text', rSlider.get('value'));
		    updateColors();
		});
		gSlider.after('thumbMove', function(e) {
		    gVal.set('text', gSlider.get('value'));
		    updateColors();
		});
		bSlider.after('thumbMove', function(e) {
		    bVal.set('text', bSlider.get('value'));
		    updateColors();
		});

		// update the colors strings
		function updateColors() {
		    var r = rSlider.get('value'),
		        g = gSlider.get('value'),
		        b = bSlider.get('value'),
		        rgbStr = Y.Color.fromArray([r,g,b], Y.Color.TYPES.RGB);

		    color1.setStyle('backgroundColor', rgbStr);
		    color2.setStyle('backgroundColor', rgbStr);
		    color3.setStyle('backgroundColor', rgbStr);

		    rgb.set('text', rgbStr);

		    document.getElementById("red-val").value = rVal;

		    hex.set('text', Y.Color.toHex(rgbStr));
		    hsl.set('text', Y.Color.toHSL(rgbStr));
		}


		        
		rVal.set('text', rSlider.get('value'));
		gVal.set('text', gSlider.get('value'));
		bVal.set('text', bSlider.get('value'));
		updateColors();
		        });
	</script>
</head>

<body class="color1">
	<div class="sliders yui3-skin-sam">
	    <dt><span id="r-val" class="val"></span></dt><dd id="r-slider"></dd>
        <dt><span id="g-val" class="val"></span></dt><dd id="g-slider"></dd>
        <dt><span id="b-val" class="val"></span></dt><dd id="b-slider"></dd>
	</div>


	<div class="sliders yui3-skin-sam">
		<input type="range" min="0" max="255" value="50" class="color1" id="red-val">
		<input type="range" min="0" max="255" value="50"  class="color1" id="green-val">
		<input type="range" min="0" max="255" value="50" class="color1" id="blue-val">
	</div>
</div>

</body>
</html>
