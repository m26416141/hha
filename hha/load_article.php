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
        $articleID = $row['article_id'];

        echo '
        <div id="news-card-item" class="col">
            <div class="card c-admin-news">
                <div class="card-body cbody-admin-news">
                    <div class="card-media">
                        <a>
                            <img src="../assets/uploads/' . $row['article_img'] . '" alt="" style="height: 200px; width: 100%; object-fit: cover">
                        </a>
                    </div>
                    <h4 id="news-card-title" class="card-title news-card-title" style=" font-weight: 400">' . $title . '</h4>
                    <div id="news-card-content" style="font-weight: 300;">' . $desc . '</div>
                    <!-- <button class="btn btn-secondary btn-block" type="button" id="button-news" data-id=' . $articleID . ' data-title=' . $title . '>Details</button> -->
                    <a id="button-news" class="about-us-link" style="text-decoration: none;" href="" data-id="' . $articleID . '" data-title="' . $title . '">Details &rarr;</a>
                </div>
            </div>
        </div>
        ';
    }
} else {
    echo "No articles found";
}
