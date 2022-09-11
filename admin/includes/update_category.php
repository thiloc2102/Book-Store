<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Edit Category</label>
        <?php
        if(isset($_GET['edit']))
        {
            $cat_id = $_GET['edit'];
            $query = "SELECT * FROM danhmucsach WHERE danhmucsach_id = {$cat_id}";
            $select_categories_id = mysqli_query($connect,$query);

            while($row = mysqli_fetch_assoc($select_categories_id))
            {
                $cat_id = $row['danhmucsach_id'];
                $cat_title = $row['danhmucsach_ten'];

                ?>
                <input class="form-control" type="text" name="cat_title" id="cat_title" value="<?php if(isset($cat_title)){echo $cat_title;}?>">
        <?php
            }   
        }
        ?>

        <?php
            //Update Category
            if(isset($_POST['update_category']))
            {
                $update_cat_title = $_POST['cat_title'];
                $query = "UPDATE danhmucsach SET danhmucsach_ten = '{$update_cat_title}' WHERE danhmucsach_id = '{$cat_id}'";
                $update_category_query = mysqli_query($connect,$query);
                if(!$update_category_query)
                {
                    die('Query Failed!' . mysqli_error($connect));
                }
            }
        ?>
            
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="update_category" value="Update Category">
    </div>
</form>