<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loops</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>


    <div class="container-fluid">
        <container>

            <row>
                <col>
                    <h1 class="display-2 mt-3 mb-3">PHP Loops</h1>
                </col>
            </row>

            <row>
                <col>
                    <?php
                   
                        function getUsers(){

                                                    // URL to grab data
                            $url = 'https://dummyjson.com/users';

                            // get response from url
                            $data = file_get_contents( $url );
                            


                            return json_decode($data, true);
                        }

                        $users = getUsers();

                        

                    ?>
                </col>
            </row>

            <?php
            
                echo '<pre>' . $users['users'] . '</pre>';

                            
            ?>

        </container>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>