
    <div class="carousel-inner mb-4">
      <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-3-min.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="container">
            <div class="row">
             <form action="../inc/save_schedule.php" method="post" id="schedule-form">
                                <input type="hidden" name="id" id="id" >
                                <div class="form-group mb-2">
                                    <label for="title" class="control-label">Client Name</label>
                                    <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" disabled required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="start_datetime" class="control-label">Schedule</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="schedule_date" id="schedule_date" disabled required>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="end_datetime" class="control-label">Service Date</label>
                                    <input type="date" class="form-control form-control-sm rounded-0" name="service_date" id="service_date" required>
                                </div>
								<div class="form-group mb-2">
                                    <label for="description" class="control-label">Reported Problem</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="service_problem" id="service_problem" ></textarea>
                                </div>
								<div class="form-group mb-2">
                                    <label for="description" class="control-label">Diagnosis</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="service_diagnosis" id="service_diagnosis" ></textarea>
                                </div>
								<div class="form-group mb-2">
                                    <label for="description" class="control-label">Service Done</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="service_done" id="service_done" ></textarea>
                                </div>
								<div class="form-group mb-2">
                                    <label for="description" class="control-label">Remarks/Recommendation</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="remarks" id="remarks" ></textarea>
                                </div>
								<div class="form-group mb-2">
                                    <label for="description" class="control-label">Service By</label>
                                    <textarea rows="3" class="form-control form-control-sm rounded-0" name="service_by" id="service_by" required></textarea>
                                </div>
                            </form>
            </div>
          </div>
        </div>
      </div>
       <div class="carousel-item">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-1-min.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Our Team</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work with the best</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">Free people make free choices. Free choices mean you get unequal outcomes. You can have freedom, or you can have equal outcomes. You can’t have both.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <div class="page-header min-vh-75 m-3 border-radius-xl" style="background-image: url('https://demos.creative-tim.com/test/material-dashboard-pro/assets/img/products/product-2-min.jpg');">
          <span class="mask bg-gradient-dark"></span>
          <div class="container">
            <div class="row">
              <div class="col-lg-6 my-auto">
                <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Office Places</h4>
                <h1 class="text-white fadeIn2 fadeInBottom">Work from home</h1>
                <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">You’re spending time to save money when you should be spending money to save time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="min-vh-75 position-absolute w-100 top-0">
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon position-absolute bottom-50" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>