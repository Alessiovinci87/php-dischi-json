<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body style="background-color: #1D2D3C;">
    <div style="background-color:#112030" id="app" class="container;">
        <div class="row p-4">
            <div class="col-md-4 mb-4" v-for="album in albums" :key="album.title">
                <div class="card">
                    <img :src="'assets/img/' + album.cover" class="card-img-top" alt="Album Cover">
                    <div class="card-body">
                        <h5 class="card-title">{{ album.title }}</h5>
                        <p class="card-text">{{ album.artist }}</p>
                        <p class="card-age">{{ album.age }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/main.js"></script>
</body>
</html>
