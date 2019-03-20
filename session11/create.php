<?php
require_once 'common.php';
?>
<html>
<body>
    <p>
        <a href="index.php">Home</a>
    </p>
    
    <form action="process_create.php" method="post">
        <table>
        <tr>
            <th>
                Email
            </th>
            <td>
                <input name="email" value="" />
            </td>
        </tr>
        <tr>
            <th>
                Name
            </th>
            <td>
                <input name="name" value=""/>
            </td>
        </tr>
        <tr>
            <th>
                Tel
            </th>
            <td>
                <input name="tel" value="" />
            </td>
        </tr>
        <tr>
            <th>
                Address
            </th>
            <td>
                <input name="address" value="" />
            </td>
        </tr>
        </table>
        <input type="submit" />
    </form>
    
    
</body>
</html>
