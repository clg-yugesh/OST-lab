<?php
echo "
<html>
<head>
    <title>Admission Form</title>
    <style>
        @page {
            size: A4;
            margin: 20mm; 
        }
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: rgba(255, 255, 255, 0.89);
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 190mm; 
            margin: auto;
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px gray;
        }
        h1, h2, h3{
            text-align: center;
            font-size: 20px;
        }
        .form-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .form-group label {
            width: 35%;
            font-weight: bold;
            padding: 5px;
        }
        .form-group input, .form-group select {
            width: 60%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 12px;
        }
        .form-group input[type=\"radio\"], 
        .form-group input[type=\"checkbox\"] {
            width: auto;
            margin-right: 5px;
        }
        .submit-btn {
            text-align: center;
            margin-top: 20px;
        }
        input[type=\"submit\"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type=\"submit\"]:hover {
            background-color: #0056b3;
        }
        .section-title {
            background: #f4f4f4;
            padding: 10px;
            padding-bottom: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: bold;
            border-radius: 2px;
            text-align: center;
        }
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <h3><ins>ADMISSION FORM</ins></h3>

    <div class=\"container\">
        <form>
            
            <div class=\"section-title\">PERSONAL DETAILS</div>
            <div class=\"form-group\">
                <label for=\"name\">Full Name:</label>
                <input type=\"text\" id=\"name\" placeholder=\"Enter Full Name\" required>
            </div>
            <div class=\"submit-btn\">
                <input type=\"submit\" value=\"Submit\" onclick='myfunction()'>
            </div>

        </form>
    </div>
</body>
<script>
    function myfunction() {
        let x = document.getElementById(\"name\").value;
        document.write(\"<h3>Welcome  to our College! \" + x + \"</h3>\");
    }
</script>
</html>";
?>