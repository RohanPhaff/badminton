<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css " href="../resources/css/app.css">
        <title>Badminton</title>
    </head>
    <body>
        <?php $dutchCompetitions = ["20318", "20324", "20316", "20322", "20320"]; ?>
        @foreach ($dutchCompetitions as $competition)
            <?php
                $curl = curl_init();
            
                curl_setopt_array($curl, array(
                    CURLOPT_URL => "https://api.sportradar.us/badminton/trial/v2/nl/competitions/sr:competition:$competition/info.json?api_key=3sqvz2v4knb6chg3jmxf9x2t",// your preferred link
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_TIMEOUT => 30000,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => "GET"
                ));

                $response = curl_exec($curl);
                curl_close($curl);

                sleep(1);
            ?>
            <div style="border-color: brown; border-radius: 5px; border-style: solid; margin-bottom: 2vh;">
                <p>{{ $response }}</p>
            </div>  
        @endforeach      
    </body>
</html>