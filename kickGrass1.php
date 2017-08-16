<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Language" content="en-us">
    <title>KickGrass Admin Dashboard</title>
    <meta charset="utf-8">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <style>
        h1 {
            font-size: 20px;
            color: #111;
        }

        .content {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
        }

        .tt-hint,
        .city {
            border: 2px solid #CCCCCC;
            border-radius: 8px 8px 8px 8px;
            font-size: 24px;
            height: 45px;
            line-height: 30px;
            outline: medium none;
            padding: 8px 12px;
            width: 400px;
        }

        .tt-dropdown-menu {
            width: 400px;
            margin-top: 5px;
            padding: 8px 12px;
            background-color: #fff;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px 8px 8px 8px;
            font-size: 18px;
            color: #111;
            background-color: #F1F1F1;
        }
    </style>
</head>

<body>
 
    <div class="content">

        <form>
            <h1>Try it yourself</h1>
            <input type="text" name="city" size="30" class="city" placeholder="Please Enter City or ZIP code">
        </form>
    </div>
</body>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>
<script>
        $(document).ready(function() {

            $('input.city').typeahead({
                name: 'city',
                remote: 'model/kickGrassHotel/kickgrassAdmin.php?query=%QUERY'

            });

        })
</script>
</html>