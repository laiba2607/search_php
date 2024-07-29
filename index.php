<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <title>Document</title>
</head>
<body>
    <div class="container" style="max-width: 50%;">
    <div class="text-center mt-5 mb-4">
        <h2>php mysql live search</h2>
    </div>
    <input type="text" class="form-control " id="live_search" autocomplete="off" placeholder="search">
     
</div>
    <div id="searchresult"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#live_search").keyup(function(){
            var input= $(this).val();
            // alert(input);
            if(input != ""){
                $.ajax({
                    url:"livesearch.php",
                    method:"POST",
                    data:{input:input},
                    success:function(data){
                        $("#searchresult").html(data);
                $("#searchresult").css("display","block");

                    }

                });
            }else{
                $("#searchresult").css("display","none");
            }
            
        });
    });
    </script>
</body>
</html>