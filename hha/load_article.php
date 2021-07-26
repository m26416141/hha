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
        <div id="news-info-item" class="col">
            <div class="card">
                <div class="card-body">
                    <div class="card-media">
                        <a>
                            <img src="../assets/uploads/' . $row['article_img'] . '" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                        </a>
                    </div>
                    <h4 id="news-card-title" class="card-title news-card-title" style=" font-weight: 700">' . $title . '</h4>
                    <!-- <p id="news-card-content" style="font-weight: 300;">' . $desc . '</p> -->
                    <button class="btn btn-secondary btn-block">Details</button>
                    <!-- <a class="about-us-link" style="text-decoration: none;" href="" data-target=" #modalOpis" data-toggle="modal">Details</a> -->
                </div>
            </div>
        </div>
        ';
    }
} else {
    echo "No articles found";
}
