<?php 
	include "../classes.php";

	$questionsAskedInstance = new QuestionsAsked();
	$questionsAsked = $questionsAskedInstance->readDB('260962407441');

?>

<!DOCTYPE html>
<html>
<head>
    
	<script src="jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="appstyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	
	<title>MOBILE PHONE</title>
</head>
<body style="background: #111111">


	<center>
	<div id="phonebody" style="font-family: sans-serif">
		<img src="icons/earpiece.png" width="59px" height="10px" style="margin-top: 10px"><div class="webcam"><img src="icons/camera.png" width="20px" height="20px" id="cam"></div>
		<div id="screenarea">
			
			<div id="screen">
				<header id="menu_title" style="font-size: 13px; color: white; text-shadow: 1px 1px black">CastleBet Emulator</header>
				<div id="phone_home_screen">
					<div style="background: white; width: 100%; height: 260px; position: absolute;" id="key-screen">
						<div style="height: 210px;padding-top: 10px; ">
							<div style="display: flex;padding: 10px">
								<div>
									<input type="text" placeholder="MSISDN" id="msisdn" style="width: 140px; padding: 5px 10px; font-size: 14px; font-weight: bold; box-shadow: none; border: grey 0.5px solid">
								</div>
								<div style="cursor: pointer; margin-left: 5px; font-size: 10px; width: 40px; border-radius: 2px; background: teal; color: white; height: 28.5px; display: flex; align-items: center; justify-content: center;"; onclick="$('#bottom-sheet').slideToggle();get_sessions()">
									Choose
								</div>
							</div>
						</div>			
						<div id="key-entry" style=" font-size: 30px; font-family: sans-serif; width: 100%; text-align: right; margin-right: 40px"></div>		
					</div>
					<div style="background: white; width: 100%; height: 260px; position: absolute;" id="response">
						<div style="height: 390px">
							<div style="height: 210px;padding-top: 10px;" id="response-container">
								
							</div>	
						</div>			
					</div> 
					<div style="background: white; width: 100%; height: 260px; position: absolute;" id="loading">
						<div style="display: flex; justify-content: center; align-items: center; height: 390px">
						<div style="height: 210px;padding-top: 10px;">
							<img src="../admin/dashboard/img/loading.gif" width="20px">
							<div style="font-family: sans-serif; font-size: 12px">
								Please Wait...
							</div>
						</div>	
						</div>		
						<div id="key-entry" style=" font-size: 30px; font-family: sans-serif; width: 100%; text-align: right; margin-right: 40px"></div>		
					</div>

					<div style="height: 150px; background: whitesmoke; width: 230px; position: absolute; bottom: 0px; border-radius: 20px; display: none" id="bottom-sheet">	
						<div>
							<div style="font-size: 12px; padding: 10px; font-weight: bold; color: teal; font-family: sans-serif; border-bottom: solid #dedede 0.5px">Recent Sessions</div>
							<div id="phone-numbers" style="overflow-y: auto; height: 100px; font-family: sans-serif; color: teal; ">
							 
							</div>
						</div>						
					</div>



			<div id="menu_bottom"><button id="ok_screen">OK</button><button id="back_screen">Back</button>
			</div>
                
		</div>
                
	</div>
            <img src="icons/kmobi.png" width="46px" height="12px" id="model">
	</div>
		<div id="keypad">
			<div id="menu_keypad">
				<button id="centerbtn"></button>
				<div id="leftpart">
					<div id="leftup" onclick="leftTopButton()">
					<button id="leftokbtn" ></button></div><br>
					<img src="icons/dialkey.png" width="50px" height="50px" onclick="call()">
				</div>
				<div id="rightpart">
					<div id="rightup" onclick="rightTopButton()" >
						<button id="rightokbtn" ></button>
					</div><br><br>
					<img id="endkey"src="icons/endkey.png" width="36px" height="20px" onclick="endKey()"></div>
				</div>
				
			<div id="numeric_keypad">
				<div id="firstrow">
					<button id="num1key"  onclick="insert('1')">1</button><button id="num2key" onclick="insert('2')">2</button><button id="num3key" onclick="insert('3')">3</button>
				</div>
				<div id="secondrow">
					<button id="num1key" onclick="insert('4')">4</button><button id="num2key" onclick="insert('5')">5</button><button id="num3key" onclick="insert('6')">6</button>
				</div>
				<div id="thirdrow">
					<button id="num1key" onclick="insert('7')">7</button><button id="num2key" onclick="insert('8')">8</button><button id="num3key" onclick="insert('9')">9</button>
				</div>
				<div id="lastrow">
					<button id="num1key" onclick="insert('*')" style="font-size: 35px;">*</button><button id="num2key" onclick="insert('0')">0</button><button id="num3key" onclick="insert('#')">#</button>
				</div>

				</div>
            
						
			</div>
		

	</center>

		<div style="font-size: 14px; position: absolute; top: 20px; left: 20px; width: 350px; height: 600px; background: black; border-radius: 10px">
			<div style="padding: 10px 20px; color: white; font-family: sans-serif; border-bottom: 1px solid grey">
				<div>DEBUG DISPLAY</div>
			</div>
			<div style="color: grey; padding: 20px">
				<?php 
					echo json_encode($questionsAsked);
				?>

				<div id="error-display" style="padding: 20px 0"></div>
			</div>
		</div>
		<div style="font-size: 14px; position: absolute; top: 20px; right: 20px; width: 350px; background: black; border-radius: 10px">
			<div style="padding: 10px 20px; color: white; font-family: sans-serif; border-bottom: 1px solid grey">
				<div>INFO DISPLAY</div>
			</div>
			<div style="color: grey; padding: 20px; font-family: sans-serif">
				<div id="info-display">
					 WELCOME TO CASTLEBET EMULATOR
					 <br>
					 <br>
					 <div style="font-size: 13px;">
						Built to simulate USSD commands/requests on a PHP Backend. Feel free to explore and report 
						any errors encountered.
					 </div>
					 <hr>
					 <div>Your Results</div>
					 <div id="results" style="display: flex;">
					 	

					 </div>
					 <br>
					 <div id="results-bottom">

					 </div>
				</div>
			</div>
		</div>

	</body>


<style>
	body{margin-top: 30px}
	
</style>
<script>

	$('#loading').hide()
	$('#response').hide()
	exit_screens()


		function insert(key){
			$('#key-screen').fadeIn()
			$('#key-entry').append(key)
			$('#back_screen').text('Cancel')
		}

		let entry = $('#key-entry').text()
		let msisdn = $('#msisdn').val()

		function call(){
			entry = $('#key-entry').text()
			msisdn = $('#msisdn').val()

			if(msisdn!=""&&entry!=""){
				$('#response').fadeIn(300)
				$('#loading').fadeIn(100)

				$.post('../main.php',{"text":entry,"msisdn":msisdn},function(response){
					
					$('#ok_screen').text('Reply')
					if(response==='0'){
						$('#key-entry').text('')
						exit_screens()
					}else{
						$('#response-container').html(response)
						$('#key-entry').text('')
						get_rt_results()
					}
				})
				setTimeout(function(){
					$('#loading').fadeOut()
				}, 2000)
			}else{
				$('#key-screen').fadeIn()
				$('#error-display').append(`
					<div style="padding: 10px 0; color: green"> Looks like Phone Number or Command Text is missing! </div>
				`)
			}
			
		}

		function endKey(){
			$('#key-entry').text('')
			exit_screens()
		}

		function leftTopButton(){
			var value = $('#ok_screen').text()
		
			switch(value){
				case "Reply":
					$('#response').fadeOut()
					$('#ok_screen').text('OK')
					$('#key-entry').text('')
				break;
				case "Dial":
					call()
				break;
			}
		}

		function rightTopButton(value){
			backspace();
		}

		function exit_screens(){
			$('#key-screen').hide()
			$('#response').hide()
			$('#ok_screen').text('Dial')
			$('#back_screen').text('Contacts')
		}

		function get_sessions(){
			$('#phone-numbers').html('');
			$.post('fetch_sessions.php',function(data){
				console.log(data.length)
				var sessions = JSON.parse(data)

				if(sessions.length>0){

					for(let i = 0; i < sessions.length; i++){
						$('#phone-numbers').append(`
							<div style="display: flex; justify-content: space-between">
								<div style="padding: 6px 10px; boder-bottom: 1px solid #dedede; text-align: left; font-size: 11px; cursor: pointer" onclick="selectSession(${sessions[i]})">${sessions[i]}</div>
									<i class="fa fa-delete-left" style="padding: 5px 10px; font-size: 12px; color: red; cursor: pointer" onclick="deleteSession(${sessions[i]})"></i>
								</div>
						`)
					}

				}else{
					$('#phone-numbers').html(`
					
					<div style="font-size: 12px; display: flex; align-items: center; justify-items: center; height: 100%; width: 100px">
									No Sessions found!
							   </div>
					`)
				}

				
			})
		}
		
		// Function to handle backspace
		function backspace() {
			// Check if the display string is not empty
			if (document.getElementById('key-entry').innerHTML.length > 0) {
				// Remove the last character from the display string
				document.getElementById('key-entry').innerHTML = document.getElementById('key-entry').innerHTML.substring(0, document.getElementById('key-entry').innerHTML.length - 1); 
				 
			}
			alert(display)
		
		}

	

		get_sessions()

		function selectSession(value){

			$('#msisdn').val(value)
			$('#bottom-sheet').slideUp()
		}

		function deleteSession(msisdn){
			$.post('delete_session.php',{'msisdn':msisdn},function(data){
				get_sessions()
			})
		}


		function get_rt_results(){
			$.post('get_results.php',{'msisdn':msisdn},function(data){

				var results = JSON.parse(data)
				var correctLength = 0;


				results.forEach(function(item){
					if(item.userAnswer==item.rightAnswer){
						correctLength++;
					}
					
				var customElement = `<div style="margin-top: 15px; width: 20px; height: 20px; border-radius: 20px; background:${item.userAnswer==item.rightAnswer?"green":"red"} "></div>`


					$('#results').append(`
						<div style="margin-right: 5px">
							${
								customElement
							}

						</div>
					`) 
				})

				$('#results-bottom').append(`
					<div style="font-size: 15px">
						${correctLength}/${results.length}
					</div>
				`)
		
			}) 
		}

		



</script> 


<img src="images/kalutechlogo.png" width="300px" height="70px" id="ktgit2">

</body>
</html>