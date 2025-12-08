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
            <div class=\"form-group\">
                <label for=\"mobile\">Mobile No:</label>
                <input type=\"tel\" id=\"mobile\" placeholder=\"Enter number\" pattern=\"[0-9]{10}\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"dob\">Date of Birth:</label>
                <input type=\"date\" id=\"dob\" required>
            </div>
            <div class=\"form-group\">
                <label>Gender:</label>
                <input type=\"radio\" name=\"gender\" value=\"Male\"> Male
                <input type=\"radio\" name=\"gender\" value=\"Female\"> Female
                <input type=\"radio\" name=\"gender\" value=\"Not prefer to say\"> Prefer not to say
            </div>
            <div class=\"form-group\">
                <label for=\"email\">Email:</label>
                <input type=\"email\" id=\"email\" placeholder=\"abc123@gmail.com\" required>
            </div>

            <div class=\"section-title\">CONTACT INFORMATION</div>
            <div class=\"form-group\">
                <label for=\"address\">Address:</label>
                <input type=\"text\" id=\"address\" placeholder=\"Enter Address\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"city\">City:</label>
                <input type=\"text\" id=\"city\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"pincode\">Pincode:</label>
                <input type=\"number\" id=\"pincode\" required>
            </div>

            <div class=\"section-title\">PARENT DETAILS</div>
            <div class=\"form-group\">
                <label for=\"father\">Father's Name:</label>
                <input type=\"text\" id=\"father\" required>
            </div>
            <div class=\"form-group\">
                <label for=\"mother\">Mother's Name:</label>
                <input type=\"text\" id=\"mother\" required>
            </div>

            <div class=\"page-break\"></div>

            <div class=\"section-title\">ACADEMICS</div>
            <div class=\"form-group\">
                <label for=\"reg10\">10th Register No:</label>
                <input type=\"number\" id=\"reg10\" required>
            </div>
            <div class=\"form-group\">
                <label>10th Board:</label>
                <select>
                    <option value=\"CBSE\">CBSE</option>
                    <option value=\"ICSE\">ICSE</option>
                    <option value=\"STATEBOARD\">STATEBOARD</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"reg12\">12th Register No:</label>
                <input type=\"number\" id=\"reg12\" required>
            </div>
            <div class=\"form-group\">
                <label>12th Board:</label>
                <select>
                    <option value=\"CBSE\">CBSE</option>
                    <option value=\"ICSE\">ICSE</option>
                    <option value=\"STATEBOARD\">STATEBOARD</option>
                </select>
            </div>

            <div class=\"form-group\">
                <label>Preferred Course:</label>
                <select required>
                    <option value=\"\">Select Course</option>
                    <option value=\"B.Sc Data Science\">B.Sc CS(Data Science & Analytics)</option>
                    <option value=\"B.Sc SSS\">B.Sc CS(SSS)</option>
                    <option value=\"B.Sc FSPM\">B.Sc FSPM</option>
                    <option value=\"B.Sc Viscom\">B.Sc Animation</option>
                    <option value=\"B.Com\">B.Com Honors</option>
                    <option value=\"B.Com\">B.Com ACCA</option>
                    <option value=\"BBA\">BBA</option>
                    <option value=\"BCA\">B.Com B&I</option>
                </select>
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