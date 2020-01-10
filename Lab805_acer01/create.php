<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Thêm sinh viên</h1>
        <div class="row">
            <div class="col-md-12">

                <form name="create" action="save.php" method="post">
                    <div class="form-group">
                        <label>Tên sản phẩm: </labeL>
                        <input type="text" name="ten" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Giá : </label>
                        <input type="text" name="gia" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Số lượng: </label>
                        <input type="text" name="number" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Năm sản xuất: </label>
                        <input type="text" name="year" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Hãng : </label>
                        <input type="text" name="mode" class="form-control" placeholder="">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>