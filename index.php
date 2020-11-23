<!DOCTYPE HTML>
    <html>
        <head>
            <title>php로 간단한 게시판 만들기</title>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
                <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        </head>
        <body>
        <?php require_once('process.php'); ?>
            <div class="row justify-content-center">
                <form action="process.php" method="POST">
                    <div class="form-group">
                        <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="제목을 입력하세요!">
                    </div>
                    <div class="form-group">
                    <label>Description</label>
                        <textarea name="description" class="form-control" placeholder="내용을 입력하세요!"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="save" class="btn btn-primary">저장</button>
                    </div>
                </form>
            </div>
        </body>
    </html>