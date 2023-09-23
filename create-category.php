<?php

include "./config/config.php";
include "./app/manageCategory.php";

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-3">

        <div class="d-flex justify-content-between mb-3">
            <h3>Create Category</h3>
            <a href="" class="btn btn-primary">Add Category</a>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <form method="POST" action="" id="categoryForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status" id="status">
                            <?php foreach ($category_status as $key => $value) { ?>
                                <option value="<?= $key ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" id="categoryFormSubmit" class="btn btn-success" name="create_category">Save Changes</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="<?= $base_url ?>assets/js/category.js"></script>
</body>

</html>