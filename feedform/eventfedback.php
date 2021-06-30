<!DOCTYPE html>
<html>
    <head>
        <style>
            .container{
                box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
                padding: 3%;
                margin-left: 20%;
                margin-right: 20%;
                margin-top: 5%;
                font-family: Arial, Helvetica, sans-serif;
            }
            #box{
                display: left;
            }
            .button
            {
                width: 50px;

            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 style=" text-align: center;color: purple;">EVENT FEEDBACK</h2>
                <form name="fdbck1" method="POST"action="">
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>1.Overall how would you rate the event</b></label>
                        <select name="ques_1"required>
                            <option>Select your rating*</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>2.How well organised the event was?</b></label>
                        <select name="ques_2">
                            <option>Select your option </option></option>
                            <option>Average</option>
                            <option>Good</option>
                            <option>Excellent</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>3.What you think about speakers knowledge? </b></label>
                        <select name="ques_3">
                            <option>Select your option</option>
                            <option>Average</option>
                            <option>Good</option>
                            <option>Excellent</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>4.Did the event help you with learning new things?</b></label>
                        <select name="ques_4">
                            <option>Select your option</option>
                            <option>Average</option>
                            <option>Good</option>
                            <option>Excellent</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>5.overall  how satisfed were you with this event?</b></label>
                        <select name="ques_5">
                            <option>Select your option</option>
                            <option>Average</option>
                            <option>Good</option>
                            <option>Excellent</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>6.Would you say event was interactive?</b></label>
                        <select name="ques_6">
                            <option>Select your option</option>
                            <option>Average</option>
                            <option>Good</option>
                            <option>Excellent</option>
                            <option>Poor</option>
                        </select>
                    </div>
                    <div style="padding:5%;resize: none;box-shadow:  0 30px 60px 0 rgba(0,0,0,0.3);margin-top: 5%;">
                        <label><b>7.Write opinion about this event..</b></label>
                      <textarea  rows="" cols="30" name="ques_7" placeholder="write something..."></textarea>
                        
                    </div>
                    <div style="text-align:center;margin-top:5%;">
                        <button type="submit" name="btn_submit"><a href="login.php">Submit</a></button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
            
</body>
</html>
<?php

    include("connection.php");

    if(isset($_POST['btn_submit']))
    {
       $quest_1=$_POST["ques_1"];
       $quest_2=$_POST["ques_2"];
       $quest_3=$_POST["ques_3"];
       $quest_4=$_POST["ques_4"];
       $quest_5=$_POST["ques_5"];
       $quest_6=$_POST["ques_6"];
       $quest_7=$_POST["ques_7"];

       $sqli = "INSERT INTO `questions`(`id`, `overall`, `organized`, `speakers`, `learning`, `satisfied`, `interactive`, `opinion`) VALUES ('[]','[$quest_1]','[$quest_2]','[$quest_3]','[$quest_4]','[$quest_5]','[$quest_6]','[$quest_7]')";
       mysqli_query($conn,$sqli)or die(mysqli_error());      
    }
?>