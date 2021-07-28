<script>
    function addArticle() {
        window.open('add_article.php', 'Add Article');
    }
</script>

<div class="container-fluid">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-6" style="padding: 0px;">
            <h4 style="font-weight: 700; font-size: 40px">Article</h4>
        </div>
        <div class="col-sm-6" style="padding: 10px 0px;">
            <div style="float: right;">
                <span class="tooltip-delete" data-toggle="tooltip" data-placement="left" data-html="true" title="Press <u>Delete All</u> to delete all messages">?</span>
                <button id="btn-modal-delete" type="button" class="btn btn-primary" style="margin-left: 10px;" onclick="addArticle()">Add Article</button>
            </div>
        </div>
        <div class="col-sm-12 logo-border" style="padding: 0px; margin: 40px 0px 20px 0px"></div>
    </div>
    <div class="row row-cols-3" id="article-data">
        <script>
            $("#article-data").load("load_article.php");
            // setInterval(function() {
            //     $("#messages-data").load("load_messages.php");
            // }, 1000);
        </script>
        <script>
            $('#article-data').on('click', '#button-news', function(e) {
                // alert($(this).data('id'));
                var articleId = $(this).data('id');
                var articleTitle = $(this).data('title');
                e.preventDefault();
                window.location.href = "load_news_details.php?newsid=" + articleId;
            });
        </script>
    </div>
</div>