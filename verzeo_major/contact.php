<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/styleall.css"/>
  <link rel="stylesheet" href="css/footerstyle.css"/>
<link rel="stylesheet" href="css/headerstyle.css"/>
<style>
.special-card{
    background-color: rgba(0,0,0,.2);
} 
/* .button {
background-color: #A00E5E;
border: none;
color: white;
border-radius: 8px;
padding: 10px 15px;

text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
} */
#more {display: none;}
.h5{
    text-align: center;
  }
  input[type=text]{
    background-color: transparent;
  } 
  input[type=email]{
    background-color: transparent;
  } 
  textarea.form-control{
    background-color: transparent;
  }
.h4{
  animation-duration: 8s;
  animation-name: slidein;
  animation-iteration-count: infinite;
} 

.card {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 0rem;
  background: #ffffff;
  margin-bottom: 2rem;
} 

.card h3 {
  margin-bottom: 2rem;
}

.card img {
  height: 600px;
}

/* .card > div {
  padding: 1rem;
} */

.card:nth-child(even) img {
  order: 2;
}


.btn1 {
  display: inline-block;
  background: #000;
  color: #fff;
  padding: 0.8rem 1.8rem;
  margin-top: 2rem;
  cursor: pointer;
}

.btn1:hover {
  opacity: 0.8;
} 

@media(max-width:600px) {
  .card {
    display: block;
  }
}

</style> 

<?php 
include 'reuseheader.php'
?>

<br><br><br><br><br>
<div class="container">
    <div class="card">
        <img src="https://images.pexels.com/photos/3356416/pexels-photo-3356416.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
        <div class="card-header">
            <h2>Contact Us</h2>
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="inputComment">Message</label>
              <textarea class="form-control" rows="5" id="inputComment" placeholder="Message"></textarea>
            </div>
            <a href="" class="btn1 disabled">SEND</a>
          </div>
    </div>
</div>
</div>
<!-- <div class="container">
    <div class="card"> 
        <div class="card-img-overlay">
          <br>
          <div class="card col-sm-6 mx-auto  special-card text-white animate__animated animate__flipInX">
          
            <div class="card-header">
              <h2>Contact me</h2>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
              </div>
              <div class="form-group">
                <label for="inputComment">Message</label>
                <textarea class="form-control" rows="5" id="inputComment" placeholder="Message"></textarea>
              </div>
              <a href="" class="button disabled">SEND</a>
            </div>
      </div>
        </div>
      </div>
</div> -->
<?php 
include 'reusefooter.php'
?>
  </div>