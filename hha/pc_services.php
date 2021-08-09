<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location: admin-login.php");
}
?>
<div class="row" style="margin: 0px; margin-bottom: 20px;">
    <div class="col-sm-12" style="padding: 0px;">
        <ul id="service-menu" style="padding-inline-start: 0px;">
            <li id="text-cpod" data-target="cpod">CPOD</li>
            <li id="text-cpoa" data-target="cpoa">CPOA</li>
            <li id="text-cpor" data-target="cpor">CPOR</li>
        </ul>
        <div class="col-sm-12 logo-border" style="padding: 0px; margin: 40px 0px 20px 0px"></div>
    </div>
    <!-- <div class="col-sm-6" style="padding: 10px 0px;">
            <div style="float: right;">
                <span class="tooltip-delete" data-toggle="tooltip" data-placement="left" data-html="true" title="Press <u>Delete All</u> to delete all messages">?</span>
                <button id="btn-modal-delete" type="button" class="btn btn-primary" style="margin-left: 10px;" onclick="addArticle()">Add Article</button>
            </div>
        </div> -->
</div>
<div class="row">
    <div class="col-sm content2" id="content2" style="width: calc(70% - 200px);">

    </div>
</div>
<script>
    $(document).ready(function() {
        var trigger = $('#service-menu li'),
            container = $('#content2');

        trigger.on('click', function() {
            var $this = $(this),
                target = $(this).data('target');

            $("#content2").load(target + '.php');

            return false;
        });
    });
</script>