<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Sikkerhetskopiering gjennom Shell <br><br>
    1. mysqldump --user=root --password= --host=localhost test1 > test1.sql <br>
    2. Opprett en tom database ved navnet test1, må ha et å putte sikkerhetskopieringen. <br>
    3. mysql -u root -p -D test1 < test1.sql <br> <br>
    4. mysql - u root -p < alledb.sql (Ved en gjennopprettelse av alle databaser)
</body>
</html>