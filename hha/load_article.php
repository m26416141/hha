<?php

require_once 'dbh.inc.php';
$query = "SELECT * FROM article";
$query_run = mysqli_query($con, $query);
$check_article = mysqli_num_rows($query_run) > 0;

if ($check_article) {
    while ($row = mysqli_fetch_array($query_run)) {
        $title = $row['article_title'];
        $date = $row['article_date'];
        $desc = $row['article_content'];
        echo '
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <div id="news-info-item" class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="card-media">
                            <a>
                                <img src="../assets/uploads/' . $row['article_img'] . '" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                            </a>
                        </div>
                        <h4 id="news-card-title" class="card-title news-card-title" style=" font-weight: 700">' . $title . '</h4>
                        <p id="news-card-content" style="font-weight: 300;">' . $desc . '</p>
                        <a class="about-us-link" style="text-decoration: none;" href="" data-target=" #modalOpis" data-toggle="modal">Details &rarr;</a>
                    </div>
                </div>
            </div>
        ';
    }
} else {
    echo "No articles found";
}
