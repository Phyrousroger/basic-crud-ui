<?php require_once "./template/header.php"?>


    <div class=" container">
        <div class="row">
            <div class="col-12">

                <div class="border rounded p-5">
                    <?php
                    if(!empty($_SESSION["status"])){
                        echo alert($_SESSION["status"]["massage"]);
                        $_SESSION["status"]=null;
                    }

                    ?>
                    <h3>Doubt Lists</h3>
                <table class=" table table-bordered">
                        <thead>
                            <?php

                            $sql="SELECT * FROM my";

                            if(isset($_GET["q"])){
                                $q = $_GET["q"];
                                $sql .= " WHERE name LIKE '%$q%'";
                            }
//                                dd(date("j M Y",strtotime("2023-02-23 10:47:42")));
                                $query=mysqli_query($conn,$sql);
                                $totalSql="SELECT sum(money) AS total FROM my ";
                                $totalQuery=mysqli_query($conn,$totalSql);



//                                dd(mysqli_fetch_assoc($totalQuery));
                            ?>

                            <div class="mb-3 row justify-content-between align-items-center">
                                <div class="col-4">
                                Total-lists - <?= $query -> num_rows ?>
                                </div>
                                <div class="col-4">
                                    <form action="" class="" method="get">
                                        <div class=" input-group">
                                            <input type="text" name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET["q"] ?> <?php endif; ?>" class=" form-control">
                                            <?php if (isset($_GET['q'])) : ?>
                                                <a href="./list-index.php" class=" btn btn-danger">
                                                    <i class=" bi bi-x"></i>
                                                </a>
                                            <?php endif; ?>
                                            <button class=" btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <tr>
                                <th class="text-end">#</th>
                                <th class="text-center">Name</th>
                                <th class=" text-end">Money</th>
                                <th>Control</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row= mysqli_fetch_assoc($query)): ?>
                                <tr class="align-middle">
                                    <td class="text-end"><?= $row["id"]; ?></td>
                                    <td class="text-center"><?= $row["name"]?></td>
                                    <td class="text-end"><?= $row["money"] ?></td>
                                    <td class="text-center">
                                        <form action="./list-delete.php" class="d-inline-block" method="post">
                                            <input type="hidden" name="id" value="<?= $row["id"]; ?>">
                                            <button onclick="return confirm('ARE YOU SURE TO DELETE')" class="btn btn-danger">Delete</button>
                                        </form>
                                        <a  href="./list-update.php?id=<?= $row["id"]; ?>" class="btn btn-info">Update</a>
                                    </td>
                                    <td>
                                        <p class="mb-0 small">
                                            <i class="bi bi-calendar me-2"></i><?= showDateTime($row["created_at"]) ?></p>
                                        <p class="mb-0 small">
                                            <i class="bi bi-clock me-2"></i><?= showDateTime($row["created_at"],"H:i:s") ?></p>
                                    </td>
                                </tr>



                            <?php endwhile; ?>
                            <tr>
                                <td colspan="2">Total</td>
                                <td class="text-end"><?= mysqli_fetch_assoc($totalQuery)["total"];?></td>
                            </tr>
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>




<?php require_once "./template/footer.php"?>