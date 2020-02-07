<!-- Sales stats -->
      <div class="card collapse-icon accordion-icon-rotate" >
        <div class="card-header bg-danger">
          <h1 class="card-title text-white">SSG Candidates</h1>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="accordion" id="cardAccordion1" data-toggle-hover="true">



              <div class="card" style="margin-bottom: 0px;">
                <div class="card-header collapsed" id="headingOne1" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1" role="button">
                  <span class="collapsed collapse-title h3 font-weight-bold">President</span>
                  <span style="float: right;"><b><i class="fas fa-chevron-down"></i></b></span>
                </div>
                <div id="collapseOne1" class="pt-1 pb-1 collapse" aria-labelledby="headingOne1" data-parent="#cardAccordion1" style="">
                  <div class="card-body container">
                    




       <div id="viewpresidentssg1"></div>
                                    



                   
                  </div>
                </div>
              </div>


              <div class="card" style="margin-bottom: 0px;">
                <div class="card-header collapsed" id="headingTwo2" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2" role="button">
                  <span class="collapsed collapse-title h3 font-weight-bold">Vice President</span>
                  <span style="float: right;"><b><i class="fas fa-chevron-down"></i></b></span>
                </div>
                <div id="collapseTwo2" class="pt-1 pb-1 collapse" aria-labelledby="headingTwo2" data-parent="#cardAccordion1" style="">
                  <div class="card-body container">
                    




       <div id="viewpresidentssg2"></div>
                                    



                   
                  </div>
                </div>
              </div>


              <div class="card" style="margin-bottom: 0px;">
                <div class="card-header collapsed" id="headingTwo333" data-toggle="collapse" data-target="#collapseTwo333" aria-expanded="false" aria-controls="collapseTwo333" role="button">
                  <span class="collapsed collapse-title h3 font-weight-bold">Senators</span>
                  <span style="float: right;"><b><i class="fas fa-chevron-down"></i></b></span>
                </div>
                <div id="collapseTwo333" class="pt-1 pb-1 collapse" aria-labelledby="headingTwo333" data-parent="#cardAccordion1" style="">
                  <div class="card-body container">
                    




       <div id="viewpresidentssg3"></div>
                                    



                   
                  </div>
                </div>
              </div>











            </div>
          </div>
        </div>
      </div>


 
      <script>
        $(document).ready(function(){
          setInterval(function(){

          $.ajax({
          url:"process/ssgcandidate.php",
          type:"POST",
          data:{
            "submit1":1,
          },
          success :function(viewpresidentssg1){
            $("#viewpresidentssg1").html(viewpresidentssg1);
          }
          })

          $.ajax({
          url:"process/ssgcandidate.php",
          type:"POST",
          data:{
            "submit2":1,
          },
          success :function(viewpresidentssg2){
            $("#viewpresidentssg2").html(viewpresidentssg2);
          }
          })

          $.ajax({
          url:"process/ssgcandidate.php",
          type:"POST",
          data:{
            "submit3":1,
          },
          success :function(viewpresidentssg3){
            $("#viewpresidentssg3").html(viewpresidentssg3);
          }
          })





          },1000);
        });


      </script>