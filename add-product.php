<?php 
require_once 'header.php';
require_once 'connection.php';

if(!isset($_SESSION['auth'])){
    header("Location:login.php");
}
$query="SELECT * FROM category";
$data=mysqli_query($conn, $query);


?>
<form method="post" action="">
    Category: <select name="category_id" required>
        <option value="">Select Category</option>
        <?php foreach($data as $cat){ ?>
            <option value="<?php echo $cat['cid']; ?>">
                <?php echo $cat['name']; ?>
            </option>
        <?php }; ?>
    </select> <br>
    Title: <input type="text" name="title" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    Price: <input type="number" name="price" required><br>
    Description: <textarea name="description" required></textarea><br>
    Image: <input type="file" name="image" required><br> <br>
    <button> Add Product</button>
</form>