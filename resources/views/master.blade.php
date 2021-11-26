<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Front</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <!-- <script>
        $(document).ready(function()
        {
            $("button").click(function(){
                alert("all set")
            })
        })
    </script> -->
</body>
<style>
    .custom-login{
        height:500px;
        padding-top: 100px;
    }

    img.slider-img{
         height: 700px !important;
     }

    .custom-product{
        height: 1000px;
    }

    .slider-text{
        background-color: #3156667d !important;
    }

    .trending-image{
        height: 150px;
    }

    .trending-item{
        float: left;
        width: 25%;
    }

    .trending-wrapper{
        margin: 30px;
    }

    .detail-img{
        height: 300px;
    }

    .detail-container{
        height: 400px;
        margin-top: 50px;
    }
</style>
</html>
