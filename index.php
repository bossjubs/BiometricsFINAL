<!DOCTYPE html>
<html>
    <head>
        <title>Biometrics - Time In and Time Out</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="views/assets/css/styles.css">
		<link rel="stylesheet" type="text/css" href="views/assets/css/tailwind.css">
	</head>

	<style>
		html {
            scroll-behavior: smooth;
        }
	</style>
    
    <body>
		<div id="Search" class="bg-no-repeat bg-left w-full h-full bg-fixed" style="background-image: url('views/assets/images/biometrics.jpg');">
            <!-- Navigation Bar -->
            <nav class="fixed flex justify-start py-2 w-full md:px-12 px-4 shadow-lg bg-purple-800 bg-opacity-25 text-white z-40 uppercase">
                <!-- Biometrics Logo -->
                <svg xmlns="http://www.w3.org/2000/svg" fill="#f394ff" width="64px" height="64px" viewBox="-16.08 -16.08 56.16 56.16" stroke="#f394ff" stroke-width="0.288"><g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(4.08,4.08), scale(0.66)"><path transform="translate(-16.08, -16.08), scale(1.755)" d="M16,28.49811735536371C18.639424420497143,28.76775420596666,21.508360878435433,29.475617177849905,23.789108630772713,28.1200896078875C26.084151771358638,26.75606579239575,26.87672425437558,23.90007835617931,27.891423867142592,21.43063131640914C28.870352651981086,19.048238774370894,29.980818916342255,16.591646747311568,29.57103143540195,14.048780252465756C29.164074011664486,11.523475196107741,27.14383056853167,9.712064144472983,25.66645549656655,7.623968632017087C24.011784404734335,5.285286094989065,23.020039442185535,2.1901680120514415,20.385135668738933,1.0655994121777397C17.692233744043243,-0.08372261527944458,14.563103418095483,0.7294983136868054,11.803254792536475,1.7071984020718372C9.144226375416572,2.6491820653641898,6.692863564458466,4.216943988179459,5.038885639872715,6.502140340781105C3.459252944192528,8.684618607849128,3.3288678307905393,11.458921449767075,2.829039817222304,14.1063018146445C2.3048091599663922,16.882932797726887,0.765426659496198,19.853530819377074,2.042204073122031,22.37431181626573C3.3182244481986016,24.893598168615316,6.584571392080861,25.49210206401777,9.170632377519347,26.626703448794977C11.376809452782531,27.594635596857955,13.60330164128475,28.253276778656645,16,28.49811735536371" fill="#673bce" strokewidth="0"></path></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.096"></g><g id="SVGRepo_iconCarrier"><path d="M17.81 4.47c-.08 0-.16-.02-.23-.06C15.66 3.42 14 3 12.01 3c-1.98 0-3.86.47-5.57 1.41-.24.13-.54.04-.68-.2-.13-.24-.04-.55.2-.68C7.82 2.52 9.86 2 12.01 2c2.13 0 3.99.47 6.03 1.52.25.13.34.43.21.67-.09.18-.26.28-.44.28zM3.5 9.72c-.1 0-.2-.03-.29-.09-.23-.16-.28-.47-.12-.7.99-1.4 2.25-2.5 3.75-3.27C9.98 4.04 14 4.03 17.15 5.65c1.5.77 2.76 1.86 3.75 3.25.16.22.11.54-.12.7-.23.16-.54.11-.7-.12-.9-1.26-2.04-2.25-3.39-2.94-2.87-1.47-6.54-1.47-9.4.01-1.36.7-2.5 1.7-3.4 2.96-.08.14-.23.21-.39.21zm6.25 12.07c-.13 0-.26-.05-.35-.15-.87-.87-1.34-1.43-2.01-2.64-.69-1.23-1.05-2.73-1.05-4.34 0-2.97 2.54-5.39 5.66-5.39s5.66 2.42 5.66 5.39c0 .28-.22.5-.5.5s-.5-.22-.5-.5c0-2.42-2.09-4.39-4.66-4.39-2.57 0-4.66 1.97-4.66 4.39 0 1.44.32 2.77.93 3.85.64 1.15 1.08 1.64 1.85 2.42.19.2.19.51 0 .71-.11.1-.24.15-.37.15zm7.17-1.85c-1.19 0-2.24-.3-3.1-.89-1.49-1.01-2.38-2.65-2.38-4.39 0-.28.22-.5.5-.5s.5.22.5.5c0 1.41.72 2.74 1.94 3.56.71.48 1.54.71 2.54.71.24 0 .64-.03 1.04-.1.27-.05.53.13.58.41.05.27-.13.53-.41.58-.57.11-1.07.12-1.21.12zM14.91 22c-.04 0-.09-.01-.13-.02-1.59-.44-2.63-1.03-3.72-2.1-1.4-1.39-2.17-3.24-2.17-5.22 0-1.62 1.38-2.94 3.08-2.94 1.7 0 3.08 1.32 3.08 2.94 0 1.07.93 1.94 2.08 1.94s2.08-.87 2.08-1.94c0-3.77-3.25-6.83-7.25-6.83-2.84 0-5.44 1.58-6.61 4.03-.39.81-.59 1.76-.59 2.8 0 .78.07 2.01.67 3.61.1.26-.03.55-.29.64-.26.1-.55-.04-.64-.29-.49-1.31-.73-2.61-.73-3.96 0-1.2.23-2.29.68-3.24 1.33-2.79 4.28-4.6 7.51-4.6 4.55 0 8.25 3.51 8.25 7.83 0 1.62-1.38 2.94-3.08 2.94s-3.08-1.32-3.08-2.94c0-1.07-.93-1.94-2.08-1.94s-2.08.87-2.08 1.94c0 1.71.66 3.31 1.87 4.51.95.94 1.86 1.46 3.27 1.85.27.07.42.35.35.61-.05.23-.26.38-.47.38z"></path></g></svg>
                <!-- Page Sections -->
                <ul class="font-montserrat items-center md:flex">
                    <li class="px-4">
                        <a class="transition delay-150 text-white hover:text-blue-200 duration-300" href="#Search">Biometrics</a>
                    </li>
					<li class="px-4">
                        <a class="transition delay-150 text-white hover:text-blue-200 duration-300" href="#Report">Employee Report</a>
                    </li>
                    <li class="px-4">
                        <a class="transition delay-150 text-white hover:text-blue-200 duration-300" href="#Records">Records</a>
                    </li>
                </ul>
            </nav>

            <!-- Search Section -->
            <div class="bg-black w-full h-screen items-center justify-center flex bg-opacity-50">
				<div class="text-center px-1 mx-8 text-white grid grid-cols-2">
					<div class="text-left mr-48">
						<h1 class="text-6xl font-bold uppercase">Biometrics</h1>
						<p class="text-xl"><em>Time in and Time Out</em></p>
						<form class="pt-2" role="form" id="search-form" method="POST" autocomplete="nope">
							<div class="hidden">
								<label for="">Date</label>
								<input type="text" id="inputDate" name="inputDate" class="flex text-black text-sm w-full mb-4" placeholder="enter date"  required readonly value="2023-01-13">
							</div>
							<div class="relative">
								<div class="flex flex-col justify-center items-end">
									<input type="search" name="searchEmpID" id="searchEmpID" class="flex text-black text-sm w-full p-3 pl-20 rounded-full focus:ring-blue-500" placeholder="Search Employee ID" required autocomplete="off">
									<button type="submit" class="m-1 text-white absolute bg-purple-500 hover:bg-purple-800 focus:ring-4 focus:ring-blue-300 font-medium w-14 h-10 rounded-full text-sm px-4 py-2">
										<svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class=""></div>
				</div>
			</div>

			<div id="Report" class="pt-20 bg-black w-full justify-center items-center flex flex-col bg-opacity-50 pb-10">
				<div class="items-start text-center w-5/6 bg-purple-800 text-white bg-opacity-50 rounded-t-full">
					<div>
						<h1 class="text-3xl font-bold uppercase pt-3">Employee Report</h1>
					</div>
				</div>
				<div class="w-5/6 bg-purple-800 text-gray-500 bg-opacity-50 px-10">
					<h1 class="text-xl py-1 text-white text-center unde"><em>Employee <span id="empID">16</span></em></h1>
					<table class="table my-8 table-fixed">
						<thead class="text-center text-white">
							<tr>
								<th>Meridian</th>
								<th>Time In</th>
								<th>Time Out</th>
								<th>Late</th>
								<th>Total Time Worked</th>
							</tr>
						</thead>
						<tbody class="text-center text-black bg-white">
							<tr>
								<th>AM</th>
								<td id="time-in-am">00</td>
								<td id="time-out-am">00</td>
								<td id="late-am">00</td>
								<td id="total-am">00</td>
							</tr>
							<tr>
								<th>PM</th>
								<td id="time-in-pm">00</td>
								<td id="time-out-pm">00</td>
								<td id="late-pm">00</td>
								<td id="total-pm">00</td>
							</tr>
							<tr class="table-secondary font-bold">
								<th colspan="3">TOTAL</th>
								<td id="total-late">00</td>
								<td id="total-hours">00</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="items-start text-center w-5/6 bg-purple-700 text-gray-500 bg-opacity-50 rounded-b-full">
					<div>
						<h1 class="text-3xl text-transparent">.</h1>
					</div>
				</div>
			</div>

			<!-- Summary of Reports Section -->
			<div id="Records" class="pt-20 bg-black w-full justify-center items-center flex flex-col bg-opacity-50 pb-10">
				<div class="items-start text-center w-5/6 bg-purple-800 text-white bg-opacity-50 rounded-t-full">
					<div>
						<h1 class="text-3xl font-bold uppercase pt-3">Records</h1>
					</div>
				</div>

				<div class="w-5/6 bg-purple-800 text-gray-500 bg-opacity-50 px-10">
					<table id="record-datatable" class="w-full table table-hover biometricsTable">
						<thead class="text-center text-white">
							<tr class="text-center">
								<th class="px-6">ID</th>
								<th class="py-12">Date</th>
								<th class="px-8">Time</th>
								<th class="px-8">Remarks</th>
							</tr>
						</thead>
						<tbody>
							<?php
								require_once 'controller/connection.php';
								require_once 'controller/controller.php';

								$emp = (new Controller)->ctrShowEmployees();
								
								foreach ($emp as $key => $value){
									echo '<tr class="text-center">
									<td style="padding:8px 0">'.$value["id"].'</td>
									<td>'.$value["date"].'</td>
									<td>'.$value["time"].'</td>  
									<td>'.$value["time_type"].'</td>
									</tr>';
								}
							?>
						</tbody>
					</table>
				</div>

				<div class="items-start text-center w-5/6 bg-purple-700 text-gray-500 bg-opacity-50 rounded-b-full">
					<div>
						<h1 class="text-3xl text-transparent">.</h1>
					</div>
				</div>
			</div>
        </div>
    </body>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="views/assets/js/script.js"></script>
</html>


<!-- PHP script -->
<?php 
	if(isset($_POST["searchEmpID"])){
		$id = $_POST["searchEmpID"];
		$date = $_POST["inputDate"];

		$timeInAM = (new Controller)->ctrGetTime($id,$date,"Time in AM");
		$timeOutAM = (new Controller)->ctrGetTime($id,$date,"Time out AM");
		$timeInPM = (new Controller)->ctrGetTime($id,$date,"Time in PM");
		$timeOutPM = (new Controller)->ctrGetTime($id,$date,"Time out PM");

		$lateAM = (new Controller)->ctrGetLate($timeInAM);
		$latePM = (new Controller)->ctrGetLate($timeInPM);
		$timeWorkedAM = (new Controller)->ctrGetTimeWorked($timeInAM,$timeOutAM);
		$timeWorkedPM = (new Controller)->ctrGetTimeWorked($timeInPM,$timeOutPM);
		$totalLate = (new Controller)->ctrGetTotalLate($lateAM, $latePM);
		$totalHours = (new Controller)->ctrGetTotalHours($timeWorkedAM, $timeWorkedPM);


		echo "<script> document.getElementById('empID').innerHTML='".$id."'; </script>";

		echo "<script> document.getElementById('time-in-am').innerHTML='".$timeInAM."'; </script>";
		echo "<script> document.getElementById('time-out-am').innerHTML='".$timeOutAM."'; </script>";
		echo "<script> document.getElementById('time-in-pm').innerHTML='".$timeInPM."'; </script>";
		echo "<script> document.getElementById('time-out-pm').innerHTML='".$timeOutPM."'; </script>";

		echo "<script> document.getElementById('late-am').innerHTML='".$lateAM."'; </script>";
		echo "<script> document.getElementById('late-pm').innerHTML='".$latePM."'; </script>";
		echo "<script> document.getElementById('total-late').innerHTML='".$totalLate."'; </script>";

		echo "<script> document.getElementById('total-am').innerHTML='".$timeWorkedAM."'; </script>";
		echo "<script> document.getElementById('total-pm').innerHTML='".$timeWorkedPM."'; </script>";
		echo "<script> document.getElementById('total-hours').innerHTML='".$totalHours."'; </script>";

	}
?>