<?php
require_once 'classes.php';

$usanoghner = [];

$usanoghner[] = new Student("Արամ", "Պետրոսյան", "AN1234567", "+37477123456", 20, "IT2023001", "Ինֆորմատիկա", 2);
$usanoghner[] = new Student("Անի", "Գրիգորյան", "AN2345678", "+37477234567", 19, "EC2024002", "Տնտեսագիտություն", 1);
$usanoghner[] = new Student("Դավիթ", "Հակոբյան", "AN3456789", "+37477345678", 21, "LW2022003", "Իրավագիտություն", 3);
$usanoghner[] = new Student("Մարիամ", "Սարգսյան", "AN4567890", "+37477456789", 20, "MD2023004", "Բժշկություն", 2);
$usanoghner[] = new Student("Տիգրան", "Ավագյան", "AN5678901", "+37477567890", 22, "EN2021005", "Ճարտարագիտություն", 4);

?>
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ուսանողների ցուցակ</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .students-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .student-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }
        
        .student-card:hover {
            transform: translateY(-5px);
        }
        
        .student-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .student-name {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .student-id {
            font-size: 0.9em;
            opacity: 0.9;
        }
        
        .student-info {
            list-style: none;
        }
        
        .student-info li {
            padding: 10px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
        }
        
        .student-info li:last-child {
            border-bottom: none;
        }
        
        .info-label {
            font-weight: bold;
            color: #667eea;
        }
        
        .info-value {
            color: #333;
        }
        
        .table-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .table-section h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 1.8em;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        
        th, td {
            padding: 15px;
            text-align: left;
        }
        
        th {
            font-weight: bold;
        }
        
        tbody tr {
            border-bottom: 1px solid #eee;
        }
        
        tbody tr:hover {
            background: #f5f5f5;
        }
        
        tbody tr:last-child {
            border-bottom: none;
        }
        
        .stats {
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            margin-bottom: 20px;
            text-align: center;
        }
        
        .stats h3 {
            color: #667eea;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        
        .stats p {
            font-size: 2em;
            font-weight: bold;
            color: #764ba2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📚 Ուսանողների տեղեկատու համակարգ</h1>
        
        <!-- Վիճակագրություն -->
        <div class="stats">
            <h3>Ընդհանուր ուսանողների քանակ</h3>
            <p><?php echo count($usanoghner); ?> ուսանող</p>
        </div>
        
        <!-- Ուսանողների քարտեր -->
        <div class="students-grid">
            <?php foreach($usanoghner as $usanog): ?>
                <?php $tvyalner = $usanog->getAmboghjakanTvyalner(); ?>
                <div class="student-card">
                    <div class="student-header">
                        <div class="student-name">
                            <?php echo $tvyalner['anun'] . " " . $tvyalner['azganun']; ?>
                        </div>
                        <div class="student-id">ՄՈԳ: <?php echo $tvyalner['mog']; ?></div>
                    </div>
                    
                    <ul class="student-info">
                        <li>
                            <span class="info-label">Անձնագիր:</span>
                            <span class="info-value"><?php echo $tvyalner['andznagrHamar']; ?></span>
                        </li>
                        <li>
                            <span class="info-label">Հեռախոս:</span>
                            <span class="info-value"><?php echo $tvyalner['heraxosahamar']; ?></span>
                        </li>
                        <li>
                            <span class="info-label">Տարիք:</span>
                            <span class="info-value"><?php echo $tvyalner['tariq']; ?> տարեկան</span>
                        </li>
                        <li>
                            <span class="info-label">Ֆակուլտետ:</span>
                            <span class="info-value"><?php echo $tvyalner['fakultet']; ?></span>
                        </li>
                        <li>
                            <span class="info-label">Կուրս:</span>
                            <span class="info-value"><?php echo $tvyalner['kurs']; ?>-րդ կուրս</span>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Աղյուսակ -->
        <div class="table-section">
            <h2>📋 Ուսանողների ընդհանուր աղյուսակ</h2>
            <table>
                <thead>
                    <tr>
                        <th>№</th>
                        <th>Անուն Ազգանուն</th>
                        <th>ՄՈԳ</th>
                        <th>Ֆակուլտետ</th>
                        <th>Կուրս</th>
                        <th>Տարիք</th>
                        <th>Հեռախոս</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $hamarakarg = 1; ?>
                    <?php foreach($usanoghner as $usanog): ?>
                        <?php $tvyalner = $usanog->getAmboghjakanTvyalner(); ?>
                        <tr>
                            <td><?php echo $hamarakarg++; ?></td>
                            <td><?php echo $tvyalner['anun'] . " " . $tvyalner['azganun']; ?></td>
                            <td><?php echo $tvyalner['mog']; ?></td>
                            <td><?php echo $tvyalner['fakultet']; ?></td>
                            <td><?php echo $tvyalner['kurs']; ?>-րդ</td>
                            <td><?php echo $tvyalner['tariq']; ?></td>
                            <td><?php echo $tvyalner['heraxosahamar']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
