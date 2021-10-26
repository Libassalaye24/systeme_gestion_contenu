
<?php require_once(ROUTE_DIR.'views/imc/header.html.php'); ?>

  <div class="container ml-4">
  <div class="row pt-5 m-auto">

    <?php  foreach($articles as $categorie):?>
      
      <div class="col-md-6 col-lg-4 pb-3 ">

        <!-- Add a style="height: XYZpx" to div.card to limit the card height and display scrollbar instead -->
        <div class="card card-custom bg-white border-white border-0" style="height: 450px">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">You can also set maximum height on and the card will not expand, instead a scrollbar in the card body will appear.</p>
            <p class="card-text">Some example text to show the scrollbar.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, te vix omittam fastidii, enim paulo omnes ea has, illud luptatum no qui. Sed ea qualisque urbanitas, purto elit nec te. Possim inermis antiopam ut eum. Eos te zril labore laboramus, quem erant nam in. Ut sed molestie
              antiopam. At altera facilisis mel.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="#" class="btn btn-primary">Details</a>
            <a href="#" class="btn btn-outline-primary">Commenter</a>
          </div>
        </div>

      </div>

      
   
    <?php  endforeach?>
    </div>

  </div>
  
  <style>
  html {
    font-size: 14px;
  }
  
  .container {
    font-size: 14px;
    color: #666666;
    font-family: "Open Sans";
  }
  .card-custom {
  overflow: hidden;
  min-height: 450px;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
}

.card-custom-img {
  height: 200px;
  min-height: 200px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  border-color: inherit;
}

/* First border-left-width setting is a fallback */
.card-custom-img::after {
  position: absolute;
  content: '';
  top: 161px;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-top-width: 40px;
  border-right-width: 0;
  border-bottom-width: 0;
  border-left-width: 545px;
  border-left-width: calc(575px - 5vw);
  border-top-color: transparent;
  border-right-color: transparent;
  border-bottom-color: transparent;
  border-left-color: inherit;
}

.card-custom-avatar img {
  border-radius: 50%;
  box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
  position: absolute;
  top: 100px;
  left: 1.25rem;
  width: 100px;
  height: 100px;
}

</style>

<?php require_once(ROUTE_DIR.'views/imc/footer.html.php'); ?>
