<?php
    include('header.php');
    include('navbar.php');
    include('dbconfig.php');
    $sql = "SELECT * FROM services";
    $query = $dbConn->prepare($sql);
    $query->execute();
    $result = $query->fetchAll();
    //  var_dump($result);


    //  exit();
?>


<section class=" text-center py-4 productbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Our Services</h1>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,320L26.7,288C53.3,256,107,192,160,165.3C213.3,139,267,149,320,170.7C373.3,192,427,224,480,234.7C533.3,245,587,235,640,192C693.3,149,747,75,800,85.3C853.3,96,907,192,960,213.3C1013.3,235,1067,181,1120,176C1173.3,171,1227,213,1280,240C1333.3,267,1387,277,1413,282.7L1440,288L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
 

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                <?php
                    foreach ($result as $key => $value) {
                ?>
                <div class="col">
                    <div class="card h-100">
                    <img src="images/<?php echo $value['image'];?> "class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title"><?php echo $value['name'];?></h5>
                            <p class="card-text"><?php echo $value['description'];?></p>
                           
                            <a href="#" class="btn btn-primary btn-sm">See more</a>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php 
include('footer.php');
?>