<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Leaderboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body style="background-color:gray;">
<body>
    <h1>Live Leaderboard</h1>
    <p id="refreshMessage">New entry detected! Please refresh the page.</p>
    <table id="leaderboard">
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
    </table>
    <body>
    <h1>Live Leaderboard</h1>
    <p id="refreshMessage">New entry detected! Please refresh the page.</p>
    <table id="leaderboard">
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
    </table>

    <script>
        function fetchLeaderboard() {
            $.ajax({
                url: "tstajaxbackend.php",
                method: "GET",
                dataType: "json",
                success: function(data) {
                    $("#leaderboard tr:not(:first)").remove(); // Clear old data

                    let newEntryDetected = false;
                    let rank = 1;
                    data.forEach(row => {
                        let name = row.name ? row.name : "<i>Waiting for name...</i>";
                        $("#board").append(<tr><td>${rank++}</td><td>${name}</td><td>${row.score}</td></tr>);

                        if (!row.name) {
                            newEntryDetected = true;
                        }
                    });

                    if (newEntryDetected) {
                        $("#refreshMessage").fadeIn();
                    } else {
                        $("#refreshMessage").fadeOut();
                    }
                }
            });
        }

        setInterval(fetchLeaderboard, 5000); // Refresh every 5 seconds
        fetchLeaderboard(); // Load data on page load
    </script>
</body>
</html>    