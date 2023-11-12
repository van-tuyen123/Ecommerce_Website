<h3 class="text-center text-success">All Brands</h3>
<table class="table table-bordered mt-5">
    <thead class="bg-danger">
        <tr class='text-center'>
            <th class="bg-info">Slno</th>
            <th class="bg-info">Brand titile</th>
            <th class="bg-info">Edit</th>
            <th class="bg-info">Delete</th>
        </tr>
    </thead>
    <tbody class="bg-secondary text-light">
      <?php
        $select_cat="SELECT * FROM `brands`";
        $result=mysqli_query($con,$select_cat);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $brand_id=$row['brand_id'];
            $brand_title=$row['brand_title'];
            $number++;
      ?>
        <tr class='text-center'>
            <td class='bg-secondary text-light'><?php echo $number;?></td>
            <td class='bg-secondary text-light'><?php echo $brand_title ?></td>
            <td class='bg-secondary text-light'><a href='index.php?edit_brands=<?php echo $brand_id?>' class="text-light"  >
              <i class='fa-solid fa-pen-to-square bg-secondary'>
              </i>
            </a>
          </td>
            <td class='bg-secondary text-light '><a href='index.php?delete_brands=<?php echo $brand_id?>' type="button" class=" text-light" data-toggle="modal" data-target="#exampleModal"><i class='fa-solid fa-trash bg-secondary'></i></a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <h4>Are you sure you want to delete this?</h4>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><a href="./index.php?view_brands" class="text-light text-decoration-none">No</a></button>
        <button type="button" class="btn btn-primary"><a href='index.php?delete_brands=<?php echo $brand_id?>' class=" text-light text-decoration-none">Yes</a></button>
      </div>
    </div>
  </div>
</div>