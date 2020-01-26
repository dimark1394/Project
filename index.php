<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Comparible" content="ie=edge" />
        <link rel="stylesheet" href="./style.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"/>
        <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
        <title>Web2020</title>
    </head>
    <body>
        <div class="homepage">
            <header>
                <nav>
                    <h3 class="logo">Your route visualised</h3>
                    <a class="signout" href="loginform.php">SignOut</a> 
                </nav>
            </header>    
                <main>
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        Upload_Here: <input type="file" name="fileToUpload" id="fileToUpload">
                        <input type="submit" name="submit" value="Submit">
                        </form>

                    <div id="mapid"></div>


                </main>
            
        </div>
        <script src="index.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/heatmapjs@2.0.2/heatmap.js"> </script>
        <script src="https://raw.githubusercontent.com/pa7/heatmap.js/develop/plugins/leaflet-heatmap/leaflet-heatmap.js"></script>
       
    </body>






</html>