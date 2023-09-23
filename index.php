<?php
echo $_SERVER['DOCUMENT_ROOT'];

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
            <h3>Manage Category</h3>
            <a href="<?= $base_url ?>create-category.php" class="btn btn-primary">Add Category</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($categoryQueryCount > 0) {
                    while ($row = $categoryQueryResult->fetch_assoc()) {
                ?>
                        <tr>
                            <th scope="row"><?= $row['id'] ?></th>
                            <td><?= $row['name'] ?></td>
                            <td><?php if ($row['status'] == 1) {
                                    echo "<span class='badge text-bg-success'>" . $category_status[$row['status']] . "</span>";
                                } else {
                                    echo "<span class='badge text-bg-danger'>" . $category_status[$row['status']] . "</span>";
                                } ?></td>
                            <td>
                                <button class="btn btn-sm btn-success">Edit</button>
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="4">No Data Found</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script></script>
</body>

</html>