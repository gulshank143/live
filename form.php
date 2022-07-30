<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title>Apply Here</title>
	<style>

		label{
			display: block;
			font:1rem 'Fira Sans',Sans-serif;
		}


	

	</style>
</head>
<body>
	<section class="vh-140" style="background-image: url('images/car3.jpg');">
	<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-4 col-xl-4">
        <div class="card text-black" style="border-radius: 40px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
            
	<form action="action_page.php" method="post">

		<fieldset>
			<br><label for="start">Start date:</label>
			<input type="date" id="start" name="trip_start"
			       value="2022-07-25"
			       min="2022-01-01" max="2022-12-31"><br>
			<br><label for="end">End date:</label>
			<input type="date" id="end" name="trip_end"
			       value="2022-07-26"
			       min="2022-01-01" max="2022-12-31"><br>
			<br><label>Choose a car:
				<select class="car" name="car">
					<option value="">select one...</option>
					<option value="BMW">BMW</option>
					<option value="Toyota">Toyota</option>
					<option value="Honda">Honda</option>
					<option value="Ford">Ford</option>
					<option value="Mercedes-Benz">Mercedes-Benz</option>
					<option value="Jeep">Jeep</option>
					<option value="Audi">Audi</option>
					<option value="Ferrari">Ferrari</option>
					<option value="Volvo">Volvo</option>
                    <option value="Hyundai">Hyundai</option>
                    <option value="Suzuki">Suzuki</option>
                    <option value="Mini">Mini</option>    
				</select><br>

			<br><button onclick="myfunction()" style="background-color: gray">Calculate </button>
			</label>
			<div class="result"></div>
		</fieldset>
	</form>

</div>
</body>
</html>