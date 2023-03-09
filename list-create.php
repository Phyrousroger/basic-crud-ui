<?php require_once "./template/header.php"?>

<!-- <?php 

echo "<pre>";
print_r($_SERVER); 
?> -->


<div class="container">
    <div class=" row">
        <div class="col-5 border border-2 p-5">
            <h1>Create List</h1>
            <?php 
                if($_SERVER["REQUEST_METHOD"]==="POST"){
                    $name=$_POST["name"];
                    $money=$_POST["money"];
                     $sql= "INSERT INTO my (name,money) VALUES ('$name',$money)";

                    if(mysqli_query($conn,$sql)){
                        echo alert("Data Inserted");
                    };
                     
                }
            
            ?>
            <form action="" method="post">
                <div class="">
                    <label for="" class=" form-label">Name</label>
                    <input type="text" name="name" class=" form-control" required>
                </div>

                <div class=" mb-2">
                    <label for="" class=" form-label">Money</label>
                    <input type="number" name="money" class=" form-control" required>
                </div>
                <button class=" btn btn-primary">Submit</button>
                
            </form>
        </div>
    </div>
</div>
<?php require_once "./template/footer.php"?>