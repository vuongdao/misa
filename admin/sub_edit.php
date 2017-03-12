<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location:login.php");
  exit();
}
require("templates/header.php");
$id = $_GET["id"];
if(isset($_POST["ok"])) {
  $name = $_POST["name"];
  $cate_id = $_POST["cate_id"];
  if (empty($_POST["slug"])) {
    require("../library/slug.php");
    $slug = slug($name);
  } else {
    $slug = $_POST["slug"];
  }
  $des = $_POST["des"];
  $tt= $_POST["tt"];
  $status = $_POST["status"];
  if ($name) {
    require("../library/conn.php");
    $sql = "UPDATE sub SET sub_name='$name', sub_slug='$slug', sub_des='$des', sub_tt='$tt', sub_status='$status', cate_id='$cate_id' WHERE sub_id='$id'";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:sub.php");
    exit();
  }
}
require("../library/conn.php");
$sql1 = "SELECT * FROM sub WHERE sub_id = '$id'";
$re1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_assoc($re1);

?>

<div class="container">
    <h2 class="xlarge">Sửa danh mục</h2>
    <form action="sub_edit.php?id=<?php echo $id ?>" method="post">
      <p>
        <label for="" class="label">Name</label>
        <input type="text" class="input border" name="name" value="<?php echo $data1['sub_name'] ?>" required>
      </p>
      <p>
        <label for="" class="validate">Parent</label>
            <select name="cate_id" id="" class="select">
            echo "<option value='0'>Chọn</option>":
              <?php
              require("../library/conn.php");
              $sql2 = "SELECT cate_id, cate_name FROM cate";
              $re2 = mysqli_query($conn, $sql2);
              while ($data2= mysqli_fetch_assoc($re2)) {
                if ($data1[cate_id] == $data2[cate_id]) {
                  echo "<option value='$data2[cate_id]' selected='selected'>$data2[cate_name]</option>";
                } else {
                  echo "<option value='$data2[cate_id]'>$data2[cate_name]</option>";
                }
              }
              mysqli_close($conn);
              ?>
            </select>
      </p>
      <p>
        <label for="" class="label">Slug</label>
        <input type="text" class="input border" name="slug" value="<?php echo $data1['sub_slug'] ?>" placeholder="Tự động">
      </p>
      <p>
        <label for="" class="label">Description</label>
        <textarea name="des" id="" rows="5" class="input border"><?php echo $data1['sub_des'] ?></textarea>
      </p>
      <p>
        <label for="" class="label">Order</label>
        <input type="text" class="input" name="tt" value="<?php echo $data1['sub_tt'] ?>">
      </p>
      <p>
        <label for="" class="label">Status: </label>
        <?php
        if ($data1['sub_status']=='1') {
          echo "<input type='radio' name='status' value='1' checked> Bật";
          echo "<input type='radio' name='status' value='0'> Tắt";
      } else {
        echo "<input type='radio' name='status' value='1'> Bật";
        echo "<input type='radio' name='status' value='0' checked> Tắt";
      }
        ?>
      </p>
      <p>
        <button class="btn blue ripple" type="submit" value="Update" name="ok">Sửa</button>
      </p>
    </form>
  </div>
<?php
mysqli_close($conn);
require("templates/footer.php");
?>