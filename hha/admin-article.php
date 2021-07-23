<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function addArticle() {
        window.open('add_article.php', 'Stackoverflow');
    }
</script>
<link rel="stylesheet" href="../public/css/admin.css" />
<div class="container-fluid">
    <div class="row" style="margin-bottom: 20px;">
        <div class="col-sm-6" style="padding: 0px;">
            <h4 style="font-weight: 700; font-size: 40px">Article</h4>
        </div>
        <div class="col-sm-6" style="padding: 10px 0px;">
            <div style="float: right;">
                <span class="tooltip-delete" data-toggle="tooltip" data-placement="left" data-html="true" title="Press <u>Delete All</u> to delete all messages">?</span>
                <button id="btn-modal-delete" type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-mssg" style="margin-left: 10px;">Delete All</button>
                <button id="btn-modal-delete" type="button" class="btn btn-primary" style="margin-left: 10px;" onclick="addArticle()">Add Article</button>
            </div>
        </div>
        <div class="col-sm-12 logo-border" style="padding: 0px; margin-top: 40px"></div>
    </div>
</div>