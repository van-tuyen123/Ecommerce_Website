<h3 class="text-center text-success">All Categories</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-danger">
        <tr class='text-center'>
            <th class="bg-info">Slno</th>
            <th class="bg-info">Category titile</th>
            <th class="bg-info">Edit</th>
            <th class="bg-info">Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
      <?php
        $select_cat="SELECT * FROM `categories`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $category_id=$row['category_id'];
            $category_title=$row['category_title'];
            $number++;
      ?>
        <tr class='text-center'>
            <td class='bg-secondary text-light'><?php echo $number;?></td>
            <td class='bg-secondary text-light'><?php echo $category_title ?></td>
            <td class='bg-secondary text-light'><a href='index.php?edit_category=<?php echo $category_id?>' class='text-light'><i class='fa-solid fa-pen-to-square bg-secondary'></i></a></td>
            <td class='bg-secondary text-light'><a href='index.php?delete_category=<?php echo $category_id?>' class='text-light'><i class='fa-solid fa-trash bg-secondary'></i></a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
</table>


