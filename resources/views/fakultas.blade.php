<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px" id="fakultasTable">
         <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Fakultas</th>
            </tr>
        </thead>
        <tbody>
                
        </tbody>
        
    </table>

    <script>
        fetch('/api/fakultas')
            .then(response => response.json())
            .then(data => {
                let tbody = document.querySelector("#fakultasTable tbody");
                data.forEach(item => {
                    let row = `<tr>
                        <td>${item.kode}</td>
                        <td>${item.nama_fakultas}</td>
                    </tr>`;
                    tbody.innerHTML += row;
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>