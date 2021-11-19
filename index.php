<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Api Random User (Php)</title>
</head>
<body>
    <?php
        $api_url = 'https://randomuser.me/api';

        $user_data = json_decode(file_get_contents($api_url), true);

        $user_name = $user_data['results']['0']['name']['first'];

        $user_thumbnail = $user_data['results']['0']['picture']['thumbnail'];

        echo "<div class=\"person\">
                <img src=".$user_thumbnail." alt=".$user_name." />
                  <br />
                  <p>$user_name</p>
                 
                 <form method=\"get\">
                    <button>Nouvelle personne</button>
                 </form>
              </div>"
             ;

        if (isset($_GET[$api_url])) {
            echo $user_data;
        }
    ?>
</body>
</html>
