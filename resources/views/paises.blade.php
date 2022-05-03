<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paises</title>
</head>
<body>

    <h1>Paises de la region </h1>
    <table class="table table-hover">
        <thead>
            <tr class="table-primary">
                <th> Pais</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Poblacion</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach($paises as $pais => $infopais )
               <tr>
                   <td  class="table-primary" rowspan="{{ count($infopais['ciudades'])}}">
                       {{  $pais}}
                   </td>
                   <td class="table-danger" rowspan="{{ count($infopais['ciudades'])}}">
                       {{  $infopais["capital"]   }}
                   </td>
                   <td rowspan="{{ count($infopais['ciudades'])}}">
                       {{  $infopais["moneda"]   }}
                   </td>
                   <td rowspan="{{ count($infopais['ciudades'])}}">
                       {{  $infopais["poblacion"]  }}
                   </td>
                   @foreach($infopais["ciudades"] as $ciudad)
                   <th>
                       {{  $ciudad}}
                   </th>
               </tr>
               @endforeach
               @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>

</body>


</html>
