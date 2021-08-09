<?php

require_once 'hha/dbh.inc.php';

$item_limit = 4;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;

$query = "SELECT * FROM article";
$result = mysqli_query($con, $query);
$total = mysqli_num_rows($result);

$pages = ceil($total / $item_limit);

$query_limit = mysqli_query($con, "SELECT * FROM article ORDER BY article_date DESC LIMIT $mulai, $item_limit");
$no = $mulai + 1;

while ($data = mysqli_fetch_assoc($query_limit)) {
    $title = $data['article_title'];

    $getDate = date_create($data['article_date']);
    $date = date_format($getDate, "m/d/Y");
    $dateToTime = strtotime($date);
    $diff = time() - $dateToTime;
    $day_diff = floor($diff / 86400);
    $dateDisplay;
    if ($day_diff == 0) {
        if ($diff < 60) $dateDisplay = 'Just now';
        else if ($diff < 120) $dateDisplay = '1 minute ago';
        else if ($diff < 3600) $dateDisplay = strval(floor($diff / 60)) . ' minutes ago';
        else if ($diff < 7200) $dateDisplay = '1 hour ago';
        else if ($diff < 86400) {
            $strDiff = strval(floor($diff / 3600));
            // $dateDisplay = $strDiff . ' hours ago';
            $dateDisplay = 'Today';
        }
    } else if ($day_diff < 2) {
        $dateDisplay = 'Yesterday';
    } else if ($day_diff < 7) $dateDisplay = $day_diff . ' days ago';
    else if ($day_diff < 31) $dateDisplay = ceil($day_diff / 7) . ' weeks ago';
    else if ($day_diff < 60) $dateDisplay = 'last month';

    $desc = $data['article_content'];
    $articleID = $data['article_id'];
    // echo $articleID;
    echo '
        <div class="col-xs-1 col-md-4 col-lg-3" style="padding: 0px;">
        <div id="news-card-item">
            <div class="card">
                <div class="card-body">
                    <div class="card-media">
                        <a>
                            <img src="assets/uploads/' . $data['article_img'] . '" alt="" style="height: 200px; width: 100%; object-fit: cover;">
                        </a>
                    </div>
                    <p id="news-card-date">' . $dateDisplay . '</p>
                    <h4 id="news-card-title" class="card-title news-card-title" data-id=' . $articleID . '>' . $title . '</h4>
                    <div id="news-card-content">' . $desc . '</div>
                    <!-- <button class="btn btn-secondary btn-block" type="button" id="button-news" data-id=' . $articleID . ' data-title=' . $title . '>Details</button> -->
                    <a id="button-news" class="about-us-link" style="text-decoration: none;" href="" data-id="' . $articleID . '" data-title="' . $title . '">Details &rarr;</a>
                </div>
            </div>
        </div>
        </div>
    ';
}

// $query = "SELECT * FROM article ORDER BY article_date DESC";
// $query_run = mysqli_query($con, $query);
// $check_article = mysqli_num_rows($query_run) > 0;

// if ($check_article) {
//     while ($row = mysqli_fetch_array($query_run)) {
//         $title = $row['article_title'];

//         $getDate = date_create($row['article_date']);
//         $date = date_format($getDate, "m/d/Y");
//         $dateToTime = strtotime($date);
//         $diff = time() - $dateToTime;
//         $day_diff = floor($diff / 86400);
//         $dateDisplay;
//         if ($day_diff == 0) {
//             if ($diff < 60) $dateDisplay = 'Just now';
//             else if ($diff < 120) $dateDisplay = '1 minute ago';
//             else if ($diff < 3600) $dateDisplay = strval(floor($diff / 60)) . ' minutes ago';
//             else if ($diff < 7200) $dateDisplay = '1 hour ago';
//             else if ($diff < 86400) {
//                 $strDiff = strval(floor($diff / 3600));
//                 // $dateDisplay = $strDiff . ' hours ago';
//                 $dateDisplay = 'Today';
//             }
//         } else if ($day_diff < 2) {
//             $dateDisplay = 'Yesterday';
//         } else if ($day_diff < 7) $dateDisplay = $day_diff . ' days ago';
//         else if ($day_diff < 31) $dateDisplay = ceil($day_diff / 7) . ' weeks ago';
//         else if ($day_diff < 60) $dateDisplay = 'last month';

//         $desc = $row['article_content'];
//         $articleID = $row['article_id'];
//         // echo $articleID;
//         echo '
//         <div class="col-xs-1 col-md-4 col-lg-3" style="padding: 0px;">
//         <div id="news-card-item">
//             <div class="card">
//                 <div class="card-body">
//                     <div class="card-media">
//                         <a>
//                             <img src="assets/uploads/' . $row['article_img'] . '" alt="" style="height: 200px; width: 100%; object-fit: cover;">
//                         </a>
//                     </div>
//                     <p id="news-card-date">' . $dateDisplay . '</p>
//                     <h4 id="news-card-title" class="card-title news-card-title" data-id=' . $articleID . '>' . $title . '</h4>
//                     <div id="news-card-content">' . $desc . '</div>
//                     <!-- <button class="btn btn-secondary btn-block" type="button" id="button-news" data-id=' . $articleID . ' data-title=' . $title . '>Details</button> -->
//                     <a id="button-news" class="about-us-link" style="text-decoration: none;" href="" data-id="' . $articleID . '" data-title="' . $title . '">Details &rarr;</a>
//                 </div>
//             </div>
//         </div>
//         </div>
//         ';
//     }
// } else {
//     echo "No articles found";
// }
