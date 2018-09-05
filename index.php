<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Makitweb</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="jquery-1.12.0.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function(){

            $("#but_upload").click(function(){

                var fd = new FormData();

                var files = $('#file')[0].files[0];
                alert(files);
                fd.append('file',files);

                $.ajax({
                    url:'upload.php',
                    type:'post',
                    data:fd,
                    contentType: false,
                    processData: false,
                    success:function(response){
                        if(response != 0){
                            $("#img").attr("src",response);
                        }
                    },
                    error:function(response){
                        alert('error : ' + JSON.stringify(response));
                    }
                });
            });
        });


    </script>

</head>
<body>
    <div class="container">
        <h1>AJAX File upload</h1>

        <form method="post" action="" enctype="multipart/form-data" id="myform">
            <div >
                <img src="" id="img" width="100" height="100">
            </div>
            <div >
                <input type="file" id="file" name="file" />
                <input type="button" class="button" value="Upload" id="but_upload">
            </div>
        </form>
    </div>
</body>
</html>