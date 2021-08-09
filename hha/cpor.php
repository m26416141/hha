<div class="row-cpod">
    <?php
    require_once 'dbh.inc.php';
    $query = 'SELECT * FROM services WHERE services_id = 3';
    $query_run = mysqli_query($con, $query);
    $check_services = mysqli_num_rows($query_run) > 0;
    if ($check_services) {
        while ($row = mysqli_fetch_array($query_run)) {
            $title = $row['services_title'];
            $content = $row['services_content'];
            $img = $row['services_img'];
            $media = $row['services_img_status'];
            echo '
            <div id="news-row" class="row d-flex justify-content-center" style="padding: 0px 16px">
                <div id="news-title" class="col-sm-8">
                    <h4>' . $title . '</h4>
                </div>
                <div class="col-sm-8 logo-border" style="padding: 0px;"></div>
                <div class="col-sm-8" style="padding: 40px 0px 0px">';
            if ($media == 1) {
                echo '
                <div id="news-img" class="col-sm-12" style="padding: 0px">
                    <img src="../assets/uploads/' . $img . '" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                </div>';
            } else if ($media == 2) {
                echo '
                <div id="services-media" class="col-sm-12">
                    <iframe src="' . $img . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 20px;"></iframe>
                </div>
                ';
            }
            echo ' 
                </div>
            ';
            echo nl2br('
                <div id="news-desc" class="col-sm-8" style="padding: 0px">
                    <p>' . $content . '</p>
                </div>
            ');
            echo '
                <div class="col-sm-8" style="padding: 0px 0px 40px">
                    <div id="edit-delete-article-col" class="col-sm-12">
                        <a id="button-edit" data-id="1" href="edit_services.php?servicesid=3" class="btn btn-primary btn-block" target="_blank">Edit Article</a>
                    </div>
                </div>
            </div>
            ';
        }
    } else {
        echo '
        <div class="col-sm-8" style="padding: 0px 0px 40px">
            <div id="edit-delete-article-col" class="col-sm-12">
                <a id="button-edit" data-id="1" href="edit_services.php?servicesid=3" class="btn btn-primary btn-block" target="_blank">Edit Article</a>
            </div>
        </div>
        ';
    }
    ?>
</div>