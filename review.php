<?php
    include('header.php');
    include('navbar.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.checked {
  color: orange;
}

    bd{
background-color: cornsilk;}

#od-body{
  
  font-family: "Century Gothic";
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
  box-sizing:border-box;
}
.title{
  text-align:center ;
  text-transform: capitalize;
  color: #726a95;
  margin: 10px 0;
}
.title::after{
  content: "";
  position: absolute;
  width: 20%;
  height: 2px;
  background-image: linear-gradient(to left,transparent 5%,#726a95);
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
}
.team-row{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}
.member{
  flex: 1 1 250px;
  margin: 20px;
  text-align: center;
  padding: 20px 10px;
  cursor: pointer;
  max-width: 300px;
  transition: all 0.3s;
}
.member:hover{
  box-shadow: 0 10px #0000001a;
  transform: translateY(-20px);
}
.member img{
  display: block;
  width: 150px;
  height: 150px;
  object-fit: cover;
  border: 4px solid #726a95;
  border-radius: 50%;
  margin: 0 auto;
}
.member h2{
  text-transform:uppercase ;
  font-size: 24px;
  color: #726a95;
  margin: 15px 0;
}
.member p{
  font-size: 15px;
  color: #838388;
  line-height: 1.6;
}
    </style>
<section class=" text-center py-4 productbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Costomer's Review</h1>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,320L26.7,288C53.3,256,107,192,160,165.3C213.3,139,267,149,320,170.7C373.3,192,427,224,480,234.7C533.3,245,587,235,640,192C693.3,149,747,75,800,85.3C853.3,96,907,192,960,213.3C1013.3,235,1067,181,1120,176C1173.3,171,1227,213,1280,240C1333.3,267,1387,277,1413,282.7L1440,288L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
    
<section id="od-body">
        
        <div class="team-row">
          <div class="member">
            <img src="images/cr1.png" alt="Driver">
            <h2>Jhon</h2>
            <p>I'm 30 years old.</p>
            <p>Star Rating</p>
            <p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <br>
            </p>
            <a href="#" class="btn btn-primary btn-sm">See more</a>
          </div>
          <div class="member">
            <img src="images/cr2.png" alt="Driver">
            <h2>Melvin</h2>
            <p>I'm 25 years old.</p>
            <p>Star Rating</p>
            <p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            </p>
            <a href="#" class="btn btn-primary btn-sm">See more</a>
          </div>
          <div class="member">
            <img src="images/cr3.png" alt="Driver">
            <h2>Ronald Barr</h2>
            <p>I'm 29 years old.</p>
            <p>Star Rating</p>
            <p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star  checked"></span>
            <span class="fa fa-star"></span>
            <br>
            </p>
            <a href="#" class="btn btn-primary btn-sm">See more</a>
          </div>
          <div class="member">
            <img src="images/cr4.jpeg" alt="Driver">
            <h2>Joe Smith</h2>
            <p>I'm 32 years old.</p>
            <p>Star Rating</p>
            <p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            </p>
            <a href="#" class="btn btn-primary btn-sm">See more</a>
          </div>
          <div class="member">
            <img src="images/cr5.png" alt="Driver">
            <h2>Amelia</h2>
            <p>I'm 22 years old.</p>
            <p>Star Rating</p>
            <p>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br>
            </p>
            <a href="#" class="btn btn-primary btn-sm">See more</a>
          </div>
        </div>
      </section>
        
    




<?php 
include('footer.php');
?>