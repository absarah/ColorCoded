<!DOCTYPE html>
<html lang="en">
    <head>
    </head>

    <body style="margin-bottom: 60px;">
        <main class="main">
            <div class="contents">
                <form action="colorGenerator" target="" method="GET">
                    <p>
                        <label for="num"><b>Number of Rows/Columns:</b></label>
                        <input type="number" id="num" name ="num" placeholder="Input" min="1" max="26" title="Must be between 1 and 26" required>
                    </p>
                    <p>
                        <label for="colors"><b>Number of Colors:</b></label>
                        <input type="number" id="colors" name="colors" placeholder="Input" min="1" max="10" title="Must be between 1 and 10" required>
                    </p>
                    <input type="submit">
                </form>

                <?php
	                $table = '';
                    $color_choices = array('red', 'orange', 'yellow', 'green', 'blue', 'purple', 'grey', 'brown', 'black', 'teal');
	                if (isset($_GET['colors'])){
                            $table .= '<table border="2">';
                            for ($i = 0; $i < $_GET['colors']; $i++) {
                                $table .= '<tr>';
                                for ($j = 0; $j < 2; $j++) {
                                    if($j % 2 == 0){
                                        $table .= '<td width="20%"><select class="color_picker" name="color_picker" id="color_picker">
                                        <option id = "0" value="blank"> </option>
                                        <option id = "1" value="red" style="background-color: red;">Red</option>
                                        <option id = "2" value="orange" style="background-color: orange;">Orange</option>
                                        <option id = "3" value="yellow" style="background-color: yellow;">Yellow</option>
                                        <option id = "4" value="green" style="background-color: green;">Green</option>
                                        <option id = "5" value="blue" style="background-color: blue;">Blue</option>
                                        <option id = "6" value="purple" style="background-color: purple;">Purple</option>
                                        <option id = "7" valued="grey" style="background-color: grey;">Grey</option>
                                        <option id = "8" value="brown" style="background-color: brown;">Brown</option>
                                        <option id = "9" value="black" style="background-color: black;">Black</option>
                                        <option id = "10" value="teal" style="background-color: teal;">Teal</option>
                                        </select></td>';
                                    }
                                    else{
                                        $table .= '<td width="80%">&nbsp;</td>';
                                    }
                                    
                                }
                                $table .= '</tr>';
                            }
                            $table .= '</table>';
	                }
                ?>
                <br/>
                <br/>

                <?php
	               echo $table;
                ?>
                
                <script>
                    $("#color_picker").change(function () {
                        var end = this.value;
                        var DropVal0 = $('#0').val();
                        var DropVal1 = $('#1').val();
                        var DropVal2 = $('#2').val();
                        var DropVal3 = $('#3').val();
                        var DropVal4 = $('#4').val();
                        var DropVal5 = $('#5').val();
                        var DropVal6 = $('#6').val();
                        var DropVal7 = $('#7').val();
                        var DropVal8 = $('#8').val();
                        var DropVal9 = $('#9').val();
                        var DropVal10 = $('#10').val();
                        window.print(DropVal1);
                        //try to make it so that you can see what was chosen based off the value id
                        //and then you can check if it was equal to previous? 
                    });
                </script>


                <?php
                    $alphabet = range('A', 'Z');
                    $numbers = range(1,26);
	                $table = '';
	                if (isset($_GET['num'])){ 
		                $table .= '<table border="2">';
		                for ($i = 0; $i < $_GET['num']+1; $i++) {
			                $table .= '<tr>';
			                for ($j = 0; $j < $_GET['num']+1; $j++) {
                                if($i ==0 and $j == 0){
                                    $table .= '<td width="50">&nbsp;</td>';
                                }
                                else if($i == 0){
                                    $table .= '<td>'.$alphabet[$j - 1].'</td>';
                                }
                                else if($j==0){
                                    $table .= '<td>'.$numbers[$i-1].'</td>';
                                }
                                else{
                                    $table .= '<td width="50">&nbsp;</td>';
                                }
                            }
                            $table .= '</tr>';
                        }
	                }
                ?>
                <br/>
                <br/>

                <?php
	               echo $table;
                ?>
                
            </div>
        </main>
    </body>

</html>