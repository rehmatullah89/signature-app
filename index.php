
<!DOCTYPE html>
<html>

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">

		<script src="signature.js"></script>

	</head>

	<style>
		body, canvas, div, form, input {
			margin: 0;
			padding: 0;
		}
		#wrapper {
			width: 100%;
			padding: 1px;
		}
		canvas {
			position: relative;
			margin: 1px;
			margin-left: 0px;
			border: 1px solid #3a87ad;
		}
		h1, p {
			padding-left: 2px;
			width: 100%;
			margin: 0 auto;
		}
		#controlPanel {
			margin: 2px;
		}		
	</style>

	<body>
		<div id="wrapper">
			<p>RB Signature Pad</p>
			<div id="canvas">
				Canvas is not supported.
			</div>

			<script>
				rbSignature.capture();
			</script>

			<button type="button" onclick="rbSignature.clear()">
				Clear Signature
			</button>
			<button type="button" onclick="rbSignature.save('1001', 'Auditor', '2019-01-01')">
				Save Signature
			</button>			
		</div>
	</body>
</html>
