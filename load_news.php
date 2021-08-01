<?php

require_once 'hha/dbh.inc.php';
$query = "SELECT * FROM article";
$query_run = mysqli_query($con, $query);
$check_article = mysqli_num_rows($query_run) > 0;

if ($check_article) {
    while ($row = mysqli_fetch_array($query_run)) {
        $title = $row['article_title'];
        $getDate = date_create($row['article_date']);
        $date = date_format($getDate, "d / m / Y");
        $desc = $row['article_content'];
        $articleID = $row['article_id'];
        // echo $articleID;
        echo '
        <div class="col-xs-1 col-md-3 col-lg-3" style="padding: 0px;">
        <div id="news-card-item">
            <div class="card">
                <div class="card-body">
                    <div class="card-media">
                        <a>
                            <img src="assets/uploads/' . $row['article_img'] . '" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        </a>
                    </div>
                    <h4 id="news-card-title" class="card-title news-card-title" data-id=' . $articleID . '>' . $title . '</h4>
                    <p>' . $date . '</p>
                    <div id="news-card-content">' . $desc . '</div>
                    <!-- <button class="btn btn-secondary btn-block" type="button" id="button-news" data-id=' . $articleID . ' data-title=' . $title . '>Details</button> -->
                    <a id="button-news" class="about-us-link" style="text-decoration: none;" href="" data-id="' . $articleID . '" data-title="' . $title . '">Details &rarr;</a>
                </div>
            </div>
        </div>
        </div>
        ';
    }
} else {
    echo "No articles found";
}
