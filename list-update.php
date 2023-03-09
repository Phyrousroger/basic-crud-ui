<?php require_once "./template/header.php"?>

    <div class="container">
        <div class=" row">
            <div class="col-5 border border-2 p-5">
                <h1>Update List</h1>
                <?php

                $id = $_GET["id"];
                $sql = "SELECT * FROM my WHERE id = $id";
                $query=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($query);
//                dd(mysqli_fetch_assoc($query));
                ?>
                <form action="./list-update-info.php" method="post">
                    <input type="hidden" name="id" value="<?= $row["id"] ?>">
                    <div class="">

                        <label for="" class=" form-label">Name</label>
                        <input type="text" name="name" value="<?= $row["name"] ?>" class=" form-control" required>
                    </div>

                    <div class=" mb-2">
                        <label for="" class=" form-label">Money</label>
                        <input type="number" name="money" value="<?= $row["money"] ?>" class=" form-control" required>
                    </div>
                    <button class=" btn btn-primary">Update</button>

                </form>
            </div>
        </div>
    </div>
<?php require_once "./template/footer.php"?>