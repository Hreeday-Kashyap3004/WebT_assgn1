<!DOCTYPE html>
<html>
<head>
    <title>Index of /wt_assignment1</title>
    <style>
        body { font-family: Arial, sans-serif; }
        h1 { font-size: 24px; }
        table { width: 60%; border-collapse: collapse; }
        th, td { padding: 8px; border-bottom: 1px solid #ddd; text-align: left; }
        a { text-decoration: none; color: #0000EE; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <h1>Index of /wt_assignment1</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Last modified</th>
            <th>Size</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><a href="#">Parent Directory</a></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <?php
        $files = [
            ["Q1.php", "2025-01-28 20:36", "423"],
            ["Q2.php", "2025-01-31 12:03", "256"],
            ["Q3.php", "2025-01-31 12:07", "504"]
        ];

        foreach ($files as $file) {
            echo "<tr>
                    <td><a href='{$file[0]}'>{$file[0]}</a></td>
                    <td>{$file[1]}</td>
                    <td>{$file[2]}</td>
                    <td></td>
                  </tr>";
        }
        ?>
    </table>
    <p>Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at localhost Port 8</p>
</body>
</html>
