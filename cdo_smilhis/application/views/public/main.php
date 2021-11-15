<!doctype html>
<html lang="en">
  <?php $this->load->view('public/common/header');?>
  <body>
    <?php $this->load->view('public/common/accessibility');?>
    <?php $this->load->view('public/common/menu');?>

    
    <div id="main-content">

      <div class="row">
        <div class="large-12 columns">
          <div class="callout secondary">
            <h3> Cagayan de Oro City</h3>
            <p>

            Cagayan de Oro (CDO), officially the City of Cagayan de Oro (Cebuano: Dakbayan sa Cagayan de Oro; Tagalog: Lungsod ng Cagayan de Oro), is a 1st class highly urbanized city in the region of Northern Mindanao, Philippines. It is the capital of the province of Misamis Oriental where it is geographically situated but governed administratively independent from the provincial government. According to the 2020 census, it has a population of 728,402 residents. </p>
            <p>

            Cagayan de Oro also serves as the regional center and business hub of Northern Mindanao, and part of the growing Metropolitan Cagayan de Oro area, which includes the city of El Salvador, the towns of Opol, Alubijid, Laguindingan, Gitagum, Lugait, Naawan, Initao, Libertad and Manticao at the western side, and the towns of Tagoloan, Villanueva, Jasaan, Claveria and Balingasag at the eastern side. </p>
            <p>

            Cagayan de Oro is located along the north central coast of Mindanao island facing Macajalar Bay and is bordered by the municipalities of Opol to the west, Tagoloan to the east, and the provinces of Bukidnon and Lanao del Norte to the south of the city. According to the 2020 census, the city has a population of 728,402, making it the 10th most populous city in the Philippines. </p>
            <p>

            Cagayan de Oro is also famous for its white water rafting or kayaking adventures, one of the tourism activities being promoted along the Cagayan de Oro River. </p>
            
            
          </div>
        </div>

      </div> 

        <div class="row">

         
        <div class="large-12 columns">
          <h5>Do your part to help!</h5>
           <?php 
           if($success == 1)
          {?>
           <div class="callout success">
            <h5>Successfull Submission</h5>
                      
          </div>

         <?php }?>

          

          <!-- Grid Example -->
          <div class="row">
          
          <div class="large-4 columns">
          <div class="callout primary">
            <h5>Citizen Profiling</h5>
            <p>Enlistment of citizens to primary health care units.</p>
            <a class="success button" data-open="patient-modal"> Register Here</a>          
          </div>

        </div>
         <div class="large-4 columns">
          <div class="callout primary">
            <h5>Health Worker Registration</h5>
            <p> Enlistment of health workers.</p>
            <a class="success button" data-open="hwr-modal">Register Here</a>            
          </div>
        </div>
         <div class="large-4 columns">
          <div class="callout primary">
            <h5>Facility Registration</h5>
            <p>Enlistment of health facilities.</p>
            <a class="success button" data-open="facility-modal">Register Here</a>            
          </div>
        </div>
          </div>
        </div>     

       
      </div> 

        <?php $this->load->view('public/common/transparency');?>

      <?php $this->load->view('public/modal/patient-modal');?>
      <?php $this->load->view('public/modal/facility-modal');?>
      <?php $this->load->view('public/modal/hwr-modal');?>

    

    </div>
    

<!-- main end -->


<!--Standard Footer-->
<div id="gwt-standard-footer"></div>

<div><a href="#main-nav" id="back-to-top" title="Back to Top"><i class="fa fa-arrow-circle-up fa-3x" aria-hidden="true"></i>

      </div><!-- off-canvas-content -->
    </div><!-- off-canvas-wrapper-inner -->
  </div><!-- off-canvas-wrapper -->
    <?php $this->load->view('public/common/footer');?>
	</body>
</html>
