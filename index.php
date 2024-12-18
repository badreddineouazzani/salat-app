<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azan App - Fes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <header class="text-center mb-4">
            <h1 class="fw-bold text-primary">Prayer Times for Fez</h1>
            <p class="lead text-muted" id="clock">00:00:00</p>
        </header>

        <!-- Prayer Times -->
        <div class="row g-2 justify-content-center">
            <div class="col-md-2">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">Fajr</h5>
                        <p class="card-text" id="fajr-time">--:--</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">Dhuhr</h5>
                        <p class="card-text" id="dhuhr-time">--:--</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">Asr</h5>
                        <p class="card-text" id="asr-time">--:--</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">Maghrib</h5>
                        <p class="card-text" id="maghrib-time">--:--</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title text-success">Isha</h5>
                        <p class="card-text" id="isha-time">--:--</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
