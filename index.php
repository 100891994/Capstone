<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WTF Is the forecast</title>

    <style>

        h1
        {
            /* text */
            color: white;
            font-family: "Courier New";
            font-size: 30px;
            text-align: center;


            /* border stuff */
            margin: auto;
            width: 100%;
            border: 2px solid #4e4e50;
            background-color: #7F7F81;
            padding: 10px;


        }

       
        .doubleSpace
        {
            line-height: 2;
        }
        .center
        {
            margin: auto;
            width: 80%;
           /* border: 3px solid #7F7F81; */
            padding: 20px;
        }
        .centerNoB
        {
            margin: auto;
            width: 80%;
        }
        .center2
        {
		
		background-image: url('outside.jpg');

	   /* background-image: url('outside.jpg'); */
	    background-size: no-repeat; 
	    background-size: cover; 
         
	    margin: auto;
            width: 80%;
            text-align: center;
        }
	
	.center3
	{
            background-image: url('outside.jpg');
	   /* background-image: url('outside.jpg'); */
	    background-size: no-repeat; 
	    background-size: cover; 
            width: 200px;
            height: 800px;

	    margin: auto;
            width: 80%;
            text-align: center;
		   
	}

        redText
        {
            color: #060606

            /* color: #c3073f */
        }

        .backgroundImage
        {
            /* background-image: url("outside.jpg");
             background-repeat: no-repeat;
             border-radius: 8px;
             background-size: cover; */
        }
	
	.background
	{
		width: 80%:
		margin: auto;
	}

        body
        {
            background-color: #1A1A1D; //black background
            font-family: "Courier New";

            /* background-image: url('outside.jpg');
	     background-size: no-repeat; 
	    background-size: cover; */
        }


	
 	tempBox
        {
            font-family: "Courier New";
            color: black;
            font-size: 25px
           /* border: 2px solid #4e4e50; */ //dark grey
           border: 2px solid black;
           /* border-left: hidden; */
            /* border-bottom: hidden; */
           /* padding-top: 10px; */

            padding: 5px;
            background-color: #ECF70A; //light grey

            /*left: 10%; */

        }
	soilBox
        {
            font-family: "Courier New";
            color: black;
           /* font-size: 25.5vw */
           /* border: 2px solid #4e4e50; */ //dark grey
           border: 2px solid black;
           /* border-left: hidden; */
            /* border-bottom: hidden; */
           /* padding-top: 10px; */

            padding: 5px;
            background-color: #F78F0A; //light grey

            /*left: 10%; */

        }
      	humBox
        {
            font-family: "Courier New";
            color: black;
           /* font-size: 25.5vw */
           /* border: 2px solid #4e4e50; */ //dark grey
           border: 2px solid black;
           /* border-left: hidden; */
            /* border-bottom: hidden; */
           /* padding-top: 10px; */

            padding: 5px;
            background-color: #72F70A; //light grey

            /*left: 10%; */

        }
  	airBox
        {
            font-family: "Courier New";
            color: black;
           /* font-size: 25.5vw */
           /* border: 2px solid #4e4e50; */ //dark grey
           border: 2px solid black;
           /* border-left: hidden; */
            /* border-bottom: hidden; */
           /* padding-top: 10px; */

            padding: 5px;
            background-color: #0AF7CC; //light grey

            /*left: 10%; */

        }

	picBox
        {
            font-family: "Courier New";
            color: black;
			
           /* font-size: 25.5vw */
           /* border: 2px solid #4e4e50; */ //dark grey
           border: 2px solid black;
           /* border-left: hidden; */
            /* border-bottom: hidden; */
           /* padding-top: 10px; */

            padding: 5px;
            background-color: #7F7F81; //light grey

            /*left: 10%; */

        }
    </style>

	<script src="refresh.js"></script>
</head>
<body>
<!-- <div class="backgroundImage"> -->

<div class="background">

<h1>W<redText>hat's</redText> T<redText>he</redText>  F<redText>orecast</redText> Outside</h1>
    <br>
        <!-- Sensor Data goes here-->
        <div class="doubleSpace">
               <div class="center">
                <div class="center2">
                    <tempBox> 
						<redText>Air Temperature: </redText>
						<?php
						$myfile = fopen("temp.txt", "r") or die("Unable to open file!");
						echo fread($myfile,filesize("temp.txt"));
						fclose($myfile);
						?>
					</tempBox>
					
                    <soilBox> 
						<redText>Soil Temperature: </redText>
						<?php
						$myfile = fopen("soil.txt", "r") or die("Unable to open file!");
						echo fread($myfile,filesize("soil.txt"));
						fclose($myfile);
						?>
					</soilBox>
					
                    <humBox> 
						<redText>Humidity: </redText>
						<?php
						$myfile = fopen("hum.txt", "r") or die("Unable to open file!");
						echo fread($myfile,filesize("hum.txt"));
						fclose($myfile);
						?>
					</humBox>
					
                    <airBox> 
						<redText>Air Pressure: </redText>
						<?php
						$myfile = fopen("air.txt", "r") or die("Unable to open file!");
						echo fread($myfile,filesize("air.txt"));
						fclose($myfile);
						?>
					</airBox>

		    
                </div>
            </div>

            <!-- Image goes here-->
            <div class="centerNoB">
                <div class="center3">
                    <picBox>Insert picture  here <img src="Capture.PNG" > </picBox>
		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
		    
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> 
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
   	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
<!-- </div> -->

</body>
</html>