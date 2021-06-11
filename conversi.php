<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet"type="text/css"href="body.css" >
    <title>conversion of units of length

    </title>
</head>
<body class="elementt">
 
    <header>
        <a href="#" class= "logo" onclick="Hello()"> Phone</a>
        <div class ="toggle" onclick="toggle()"></div>
    </header>
<section class="element1" >
<div >
    <form>
        <table class="da">
            <tr>
                <td><h1 class ="register"> Lenght Converter</h1></td>
            </tr>
            
            <tr>
                <td>
                    <label for="Name">Input :</label>
                    <br>
                    <br>
                    <input required name ="Name" placeholder="your Input"class="input" id="inputnumber"></input>
                    <br>
                    <select name="input" id="input">
                        <option value="milimeter" class="option">milimeter</option>
                        <option value="centimeter"  class="option">centimeter</option>
                        <option value="desimeter"  class="option">desimeter</option>
                        <option value="meter"  class="option">meter</option>
                        <option value="decameter"  class="option">decameter</option>
                        <option value="hectometer"  class="option">hectometer</option>
                        <option value="kilometer"  class="option">kilometer</option>
                       
                      </select>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <label for="Email">Result :</label>
                    <br>
                    <input required name ="Email" placeholder="your Result"class="input" id="resultnumber"></input>
                    <select name="result" id="result">
                        <option value="milimeter" class="option">milimeter</option>
                        <option value="centimeter"  class="option">centimeter</option>
                        <option value="desimeter"  class="option">desimeter</option>
                        <option value="meter"  class="option">meter</option>
                        <option value="decameter"  class="option">decameter</option>
                        <option value="hectometer"  class="option">hectometer</option>
                        <option value="kilometer"  class="option">kilometer</option>
                       
                      </select>
                </td> 
            </tr>
        </table>
    </section>
        <ul class="menu">
            <li><a href="index.php">HOME</a></li>>
            <li><a href="time.php"> WHAT TIME IS IT?</a></li>>
            <li><a href="dark.php">TRY DARK THEME IN GALLERY</a></li>>
            <li><a href="conversi.php">CONVERTION of UNITS of LENGTH
            </a></li>>
            <li><a href="aksi_logout.php">LOGOUT</a></li>>
         </ul>

<script type="text/javascript" >
    function toggle()
    {
        const toggle = document.querySelector('.toggle');
        const elementt = document.querySelector('.elementt');
        toggle.classList.toggle('active');
        elementt.classList.toggle('active');
    }
    function Hello(){  
     alert("Welcome to the web for the best smartphone feature promotions ");  
    }  
    var input= document.getElementById('inputnumber');
    var result= document.getElementById('resultnumber');
    var tipeinput = document.getElementById('input');
    var tiperesult= document.getElementById('result');
    var tipeinputvalue,tiperesultvalue;

    
    input.addEventListener("keyup",myResult);
    tipeinput.addEventListener("change", myResult);
    tiperesult.addEventListener("change", myResult);
   

    tipeinputvalue = tipeinput.value;
    tiperesultvalue = tiperesult.value;
    function myResult()
{
    tipeinputvalue = tipeinput.value;
    tiperesultvalue = tiperesult.value;
    if (tipeinputvalue==="milimeter"&&tiperesultvalue==="centimeter")
    {
        result.value=Number(input.value)*0.1;
    }
    else if (tipeinputvalue==="milimeter"&&tiperesultvalue==="desimeter")
    {
        result.value=Number(input.value)*0.01;
    }
    else if (tipeinputvalue==="milimeter"&&tiperesultvalue==="meter")
    {
        result.value=Number(input.value)*0.001;
    }
    else if (tipeinputvalue==="milimeter"&&tiperesultvalue==="decameter")
    {
        result.value=Number(input.value)*0.0001;
    }
    else if (tipeinputvalue==="milimeter"&&tiperesultvalue==="hectometer")
    {
        result.value=Number(input.value)*0.00001;
    }
    else if (tipeinputvalue==="milimeter"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.000001;
    }

    

   
    else if (tipeinputvalue==="centimeter"&&tiperesultvalue==="desimeter")
    {
        result.value=Number(input.value)*0.1;
    }
    else if (tipeinputvalue==="centimeter"&&tiperesultvalue==="meter")
    {
        result.value=Number(input.value)*0.01;
    }
    else if (tipeinputvalue==="centimeter"&&tiperesultvalue==="decameter")
    {
        result.value=Number(input.value)*0.001;
    }
    else if (tipeinputvalue==="centimeter"&&tiperesultvalue==="hectometer")
    {
        result.value=Number(input.value)*0.0001;
    }
    else if (tipeinputvalue==="centimeter"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.00001;
    }

    else if (tipeinputvalue==="desimeter"&&tiperesultvalue==="meter")
    {
        result.value=Number(input.value)*0.1;
    }
    else if (tipeinputvalue==="desimeter"&&tiperesultvalue==="decameter")
    {
        result.value=Number(input.value)*0.01;
    }
    else if (tipeinputvalue==="desimeter"&&tiperesultvalue==="hectometer")
    {
        result.value=Number(input.value)*0.001;
    }
    else if (tipeinputvalue==="desimeter"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.0001;
    }

    else if (tipeinputvalue==="meter"&&tiperesultvalue==="decameter")
    {
        result.value=Number(input.value)*0.1;
    }
    else if (tipeinputvalue==="meter"&&tiperesultvalue==="hectometer")
    {
        result.value=Number(input.value)*0.01;
    }
    else if (tipeinputvalue==="meter"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.001;
    }

    else if (tipeinputvalue==="decameter"&&tiperesultvalue==="hectometer")
    {
        result.value=Number(input.value)*0.1;
    }
    else if (tipeinputvalue==="decameter"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.01;
    }
    else if (tipeinputvalue==="hectometer"&&tiperesultvalue==="kilometer")
    {
        result.value=Number(input.value)*0.1;
    }

    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*1000000;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="centimeter"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*100000;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="decameter"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="centimeter"
            || tipeinputvalue==="decameter"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*10000;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="meter"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="desimeter"
            || tipeinputvalue==="decameter"&&tiperesultvalue==="centimeter"
            || tipeinputvalue==="meter"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*1000;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="decameter"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="meter"
            || tipeinputvalue==="decameter"&&tiperesultvalue==="desimeter"
            || tipeinputvalue==="meter"&&tiperesultvalue==="centimeter"
            ||tipeinputvalue==="desimeter"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*100;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="hectometer"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="decameter"
            || tipeinputvalue==="decameter"&&tiperesultvalue==="meter"
            || tipeinputvalue==="meter"&&tiperesultvalue==="desimeter"
            ||tipeinputvalue==="desimeter"&&tiperesultvalue==="centimeter"
            ||tipeinputvalue==="centimeter"&&tiperesultvalue==="milimeter")
    {
        result.value=Number(input.value)*10;
    }
    else if (tipeinputvalue==="kilometer"&&tiperesultvalue==="kilometer"
            || tipeinputvalue==="hectometer"&&tiperesultvalue==="hectometer"
            || tipeinputvalue==="decameter"&&tiperesultvalue==="decameter"
            || tipeinputvalue==="meter"&&tiperesultvalue==="meter"
            ||tipeinputvalue==="desimeter"&&tiperesultvalue==="desimeter"
            ||tipeinputvalue==="centimeter"&&tiperesultvalue==="centimeter"
            ||tipeinputvalue==="milimeter"&&tiperesultvalue==="milimeter"

            ||tiperesultvalue==="kilometer"&&tipeinputvalue==="kilometer"
            || tiperesultvalue==="hectometer"&&tipeinputvalue==="hectometer"
            || tiperesultvalue==="decameter"&&tipeinputvalue==="decameter"
            || tiperesultvalue==="meter"&&tipeinputvalue==="meter"
            ||tiperesultvalue==="desimeter"&&tipeinputvalue==="desimeter"
            ||tiperesultvalue==="centimeter"&&tipeinputvalue==="centimeter"
            ||tiperesultvalue==="milimeter"&&tipeinputvalue==="milimeter")
    {
        result.value=Number(input.value);
    }


}
    </script> 
<script scr="script.js"></script>
</body>
</html>