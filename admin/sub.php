<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:login.php");
  exit();
}
require("templates/header.php");
?>
<h1 class="center xlarge">Danh mục con</h1>
<div class="row-padding">
  <div class="third">
    <div class="card-4 container">
      <h2 class="xlarge">Thêm danh mục</h2>
      <form action="sub_add.php" method="post">
        <p>
          <label for="" class="label">Name</label>
          <input type="text" class="input border" name="name" required>
        </p>
        <p>
          <label for="" class="validate">Parent</label>
          <select name="cate_id" id="" class="select">
          echo "<option value='0'>Chọn</option>":
            <?php
            require("../library/conn.php");
            $sql1 = "SELECT cate_id, cate_name FROM cate";
            $re1 = mysqli_query($conn, $sql1);
            while ($data1= mysqli_fetch_assoc($re1)) {

              echo "<option value='$data1[cate_id]'>$data1[cate_name]</option>";
            }
            mysqli_close($conn);
            ?>
          </select>
        </p>
        <p>
          <label for="" class="label">Slug</label>
          <input type="text" class="input border" name="slug" placeholder="Tự động">
        </p>
        <p>
          <label for="" class="label">Description</label>
          <textarea name="des" id="" rows="5" class="input border"></textarea>
        </p>
        <p>
          <label for="" class="label">Order</label>
          <input type="text" class="input" name="tt">
        </p>
        <p>
          <label for="" class="label">Status: </label>
          <input type="radio" name="status" value="1" checked> Bật
          <input type="radio" name="status" value="0"> Tắt
        </p>
        <p>
          <button class="btn blue ripple" type="submit" value="Insert" name="ok">Thêm danh mục</button>
        </p>
      </form>
    </div>
  </div>

  <div class="twothird">
    <div class="card-4 white">
      <div class="responsive">
        <table class="table-all">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Parent</th>
            <th>Order</th>
            <th>Status</th>
            <th>Count</th>
          </tr>
          <?php
          require("../library/conn.php");
          $sql = "SELECT a.sub_id, a.sub_name, a.sub_tt, a.sub_status, a.cate_id, b.cate_id, b.cate_name FROM cate as b INNER JOIN sub as a ON a.cate_id=b.cate_id";
          $re = mysqli_query($conn, $sql);
          while ($data = mysqli_fetch_assoc($re)) {
          echo "<tr class='tooltip' >";
            echo "<td>$data[sub_id]</td>";
            echo "<td style='height:62px; min-width:160px;'>$data[sub_name]<br><span class='text small'><a href='sub_edit.php?id=$data[sub_id]' alt='Sửa bài viết' class='text-green hover-opacity'>Edit<span class='text-grey'> | </span></a><a href='sub_del.php?id=$data[sub_id]' alt='Xóa bài viết' class='text-red hover-opacity'>Delete<span class='text-grey'> | </span></a><a href='sub_edit.php?id=$data[sub_id]' alt='Xem bài viết' class='text-blue hover-opacity'>View</a></span></td>";
            echo "<td>$data[cate_name]</td>";
            echo "<td>$data[sub_tt]</td>";
            echo "<td>";
              if ($data["sub_status"] == '1') {
                echo "<span class='tag green'>Bật</span>";
              } else {
                echo "<span class='tag grey'>Tắt</span>";
              }
            echo "</td>";
            echo "<td>24</th>";
         echo "</tr>";
          }
          mysqli_close($conn);
          ?>
        </table>
      </div>
    </div>
  </div> 
</div>

<?php
require("templates/footer.php");
?>