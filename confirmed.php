<?php
include "gateway/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awsome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="body">
    <div class="row" style="margin-top: 5%;">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="input-group-text text-center" style="display: block;"><img src="<?php echo BASE_URL?>img/logo_JazzCash.png"></div>
            <div class="text-center" style="margin-top: 5%;">
                <h4>The transaction has been completed successfully.</h4><br>
                <a href="<?=BASE_URL?>" id="payBtn" class="btn btn-primary py-2">Home</a>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>