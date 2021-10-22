
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Read</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">



    <!-- Content Wrapper -->
    <table class="table table-info">
  <thead>
    <tr>
      <th scope="col">Mã đề</th>
      <th scope="col">Cuộc thi</th>
      <th scope="col">Ngày thi</th>
      <th scope="col">Thời gian làm bài (phút)</th>
      <th scope="col">Số câu hỏi</th>
      <th scope="col">Trạng thái bài làm</th>
    </tr>
  </thead>
  <tbody>
  <?php 
                   
                   $con=mysqli_connect("localhost","root","","exam");
                   $sel="SELECT * FROM exams";
                   $rk=$con->query($sel);
                   while($row=$rk->fetch_assoc()){
 ?>
    <tr>
      <th scope ="row" ><?php echo $row["exam_code"]; ?></th>
      <td><?php echo $row["exam_title"]; ?></td>
      <td><?php echo $row["exam_datetime"]; ?></td>
      <td><?php echo $row["duration"]; ?></td>
      <td><?php echo $row["total_question"]; ?></td>
      <td><?php echo $row["status"]; ?></td>
      <td><a href="#">Thêm</a></td>
      <td><a href="#">Sửa</a></td>
      <td><a href="#">Xóa</a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>                





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
