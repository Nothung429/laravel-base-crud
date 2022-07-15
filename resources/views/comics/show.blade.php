<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Comic</title>
    </head>

    <body>
        <h1>Comic</h1>
        <table>
            <thead>
                <tr>
                    <th>TITOLO</th>
                    <th>DESCRIZIONE</th>
                    <th>COPERTINA</th>
                    <th>PREZZO</th>
                    <th>DATA D'USCITA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td><img src="{{$comic->thumb}}"></td>
                    <td>{{$comic->price}} €</td>
                    <td>{{$comic->sale_date}}</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>