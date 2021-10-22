<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<form class="rt" action="signupfetch.php" method="post"  enctype='multipart/form-data' name="form2" style="margin:0 auto">
         
         <table>     
     <tr>
       <th> 

          Id bài thi:<span style="color:red";>*</span><input class="form-control"  type="text"  id="idTesst" placeholder="Nhập đầy đủ mã cuộc thi">
         

          Tiêu đề bài thi:<span style="color:red";>*</span><input class="form-control" type="text" id="examTitle" placeholder="Nhập vào tiêu đề bài thi">
          Ngày làm bài: <span style="color:red";>*</span><input class="form-control" type="date" id="examDate" placeholder="Nhập vào ngày làm bài thi dự kiến">
          Ngày làm đề: <span style="color:red";>*</span><input class="form-control" type="date" id="examCreate" placeholder="Nhập vào ngày làm bài thi dự kiến">
          Thời gian làm bài:<span style="color:red";>*</span><input class="form-control" type="text" id="duration" placeholder="Nhập vào thời gian yêu cầu cho bài thi,đơn vị phút">
          Tổng số câu hỏi:<span style="color:red";>*</span><input class="form-control" type="number" id="totalQuestion" placeholder="Nhập vào số câu hỏi trong bài">
          Số điểm từng câu<span style="color:red";>*</span><input class="form-control" type="number" id="markPerAnswer" placeholder="Nhập vào số điểm cho từng câu">
          Trạng thái bài làm:<span style="color:red";>*</span><input class="form-control" type="text" id="status" placeholder="Hiển thị trạng thái bài làm ">
          Mã đề:<span style="color:red";>*</span><input class="form-control" type="text" id="code" placeholder="Nhập vào mã đề thi (một bài test có nhiều mã đề)">


       </th>   
     </tr>
       <th>
         <input id="btnSubmit" type="submit" class="btn btn-primary btn-user btn-block" name="addTest" value="Thêm bài thi">
     </tr>          
   </table>     
 </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>