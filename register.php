<html>
    <head>
        <title>Form</title>
    </head>

    <body>
        <form action="action.php" method="POST">
            <table>
                <tr>
                    <th>Question</th>
                    <th>Answer</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type = "text" name = "name">
                    </td> 
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type = "radio" name = "gender" value="Male">Male
                        <input type = "radio" name = "gender" value="Female">Female
                    </td> 
                </tr>
                <tr>
                    <td>Country</td>
                    <td>
                        <select name="Country">
                            <option value = "PH">Philippines</option>
                            <option value = "AUS">Australia</option>
                            <option value = "US">United States</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: right;">
                        <input type="Submit" name = "Submit" value="Save">
                    </td>    
                </tr>
            </table>
        </form>
    </body>
</html>