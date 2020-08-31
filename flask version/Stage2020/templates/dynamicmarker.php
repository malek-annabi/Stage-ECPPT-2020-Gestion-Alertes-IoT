<?php
$strJsonFileContents = file_get_contents("E:\stage2020\Sample.json");
// Convert to array
$arrJson = json_decode($strJsonFileContents, true);
$a = array();
foreach ($arrJson['briefs'] as $brief) {
    if ($brief['cnxState'] == 'DISC' and $brief['healthState'] == 'BACKHAUL_CNX_ERROR') {
        if (!is_null($brief['lat']) and !is_null($brief['lon'])) {
            $ar = array($brief['lrrID'],$brief['lat'], $brief['lon']);
        }
        array_push($a, $ar);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Title</title>
    <style>
        .map-container{
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe{
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }
        .zoom {
            padding: 0px;

            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.05); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>
<body id="body">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="zoom navbar-brand" href="Dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="zoom nav-link" href="dynamicmarker.php">DISC GETAWAYS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a STYLE="color: red" class="zoom nav-link" href="https://www.3s.com.tn">3S</a>
            </li>
            <li class="nav-item">
                <a class="zoom nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Getaway ID</th>
        <th scope="col">State</th>
        <th scope="col">CnxState</th>
        <th scope="col">healthState</th>
        <th scope="col">lat</th>
        <th scope="col">lon</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($a as $cor){ ?>
        <tr class="zoom" id="<?php echo $cor['0']  ?>">
            <th scope="row" style="cursor: pointer;" onclick="cartnotif(<?php echo $cor['1'];?>,<?php echo $cor['2'];?>)" ><?php echo $cor['0'];?></th>
            <td>Active</td>
            <td>DISC</td>
            <td>BACKHAUL_CNX_ERROR</td>
            <td><?php echo $cor['1'];?></td>
            <td><?php echo $cor['2'];?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>



<script>
    function cartnotif(cor1,cor2){
        html="<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">\n" +
            "    <div id=\"map-container-google-1\" class=\"z-depth-1-half map-container\" style=\"height: 500px\">\n" +
            "    <iframe src=\"https://maps.google.com/maps?q="+ cor1 +", " + cor2 + "&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\"\n" +
            "    style=\"border:0\" allowfullscreen></iframe>\n" +
            "    </div>\n" +
            "    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">\n" +
            "        <span aria-hidden=\"true\">&times;</span>\n" +
            "    </button>\n" +
            "</div>" ;
        document.getElementById("body").innerHTML+= html;
    };
</script>

</body>

</html>