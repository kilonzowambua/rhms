<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
//$name=$_POST['name'];
$content=$_POST['content'];
//$lname=$_POST['lname'];
//$national_id=$_POST['national_id'];
//$phoneno=$_POST['phoneno'];
//$email=$_POST['email'];
//$username=$_POST['username'];
//$password=md5($_POST['password']);

$query="insert into message(content) values(?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('s',$content);
$stmt->execute();
echo"<script>alert('Message Sent ');</script>";
}
?>
<?php include("includes/head.php")?>
<?php
      $aid=$_SESSION['id'];
      	$ret="select * from admin where id=?";
      		$stmt= $mysqli->prepare($ret) ;
      	 $stmt->bind_param('i',$aid);
      	 $stmt->execute() ;//ok
      	 $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
      	  {
      	  	?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include("includes/header.php")?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include('includes/navbar.php')?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
          	        		
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>House Renting Trend</h3>
            </div>
            <div class="custom-bar-chart">
              <ul class="y-axis">
                <li><span></span></li>
              </ul>
              <?php
//code for getting all values from regestration table
$result ="SELECT count(*)  FROM client where month_rent = 'January'  ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($jan_feb);
$stmt->fetch();
$stmt->close();?>
              <div class="bar">
                <div class="title">JAN</div>
                <div class="value tooltips" data-original-title="<?php echo $jan_feb;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $jan_feb;?>%</div>
              </div>

              <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='March' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($march_april);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">MARCH</div>
                <div class="value tooltips" data-original-title="<?php echo $march_april;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $march_april;?>%</div>
              </div>
              <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='May' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($may_june);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">MAY</div>
                <div class="value tooltips" data-original-title="<?php echo $may_june;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $may_june;?>%</div>
              </div>
              <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='July' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($july_aug);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">JULY</div>
                <div class="value tooltips" data-original-title="<?php echo $july_aug;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $july_aug;?>%</div>
              </div>
              <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='September' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($sep_oct);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">SEP</div>
                <div class="value tooltips" data-original-title="<?php echo $sep_oct;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $sep_oct;?>%</div>
              </div>
              <?
              //code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='November' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($nov);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">NOV</div>
                <div class="value tooltips" data-original-title="<?php echo $nov;?> Clients" data-toggle="tooltip" data-placement="top"><?php echo $nov;?>%</div>
              </div>
              <?
              //code for getting all values from regestration table
$result ="SELECT count(*) FROM client where month_rent='December' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();
?>
              <div class="bar ">
                <div class="title">DEC</div>
                <div class="value tooltips" data-original-title='<?php echo $dec;?> Clients' data-toggle="tooltip" data-placement="top"><?php echo $dec;?>%</div>
              </div>
            
              
            
            </div>
                         <!--custom chart end-->
            <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>Apartment</h5>
                  </div>
                  <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($k);
$stmt->fetch();
$stmt->close();
?>
                  <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house where status='occupied' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count)/$k*100;
$stmt->fetch();
$stmt->close();
?>
                  <canvas id="serverstatus01" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = 
                    [{
                        value: <?php echo $count;?>,
                        color: "#FF6B6B"
                      },
                      {
                        value: <?php echo $k;?>,
                        color: "#fdfdfd"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  <div class="row">
                    <div class="col-sm-6 col-xs-6 goleft">
                      <p>Occupied</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2><?php echo $count;?>%</h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
              <!-- /col-md-4-->
              <div class="col-md-4 col-sm-4 mb">
                <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Apartment</h5>
                  </div>
                  <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($k);
$stmt->fetch();
$stmt->close();
?>
                  <?php
//code for getting all values from regestration table
$result ="SELECT count(*) FROM house where status !='occupied' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count)/$k*100;
$stmt->fetch();
$stmt->close();
?>
                  <canvas id="serverstatus02" height="120" width="120"></canvas>
                  <script>
                    var doughnutData = [{
                        value: <?php echo $count;?>,
                        color: "#1c9ca7"
                      },
                      {
                        value: <?php echo $k;?>,
                        color: "#f68275"
                      }
                    ];
                    var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                  </script>
                  
                  <footer>
                    <div class="pull-left">
                      <h5>Vacant</h5>
                    </div>
                    <div class="pull-right">
                      <h5><?php echo $count;?>% Vacant </h5>
                    </div>
                  </footer>
                </div>
                <!--  /darkblue panel -->
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 col-sm-4 mb">
                <!-- REVENUE PANEL -->
                <div class="green-panel pn">
                  <div class="green-header">
                    <h5>Anually House Renting</h5>
                  </div>
<?
$result ="SELECT count(*) FROM client";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='january' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($jan);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='February' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($feb);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='March' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($mar);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='April' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($apr);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='May' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($may);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='June' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($june);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='July' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($july);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='August' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($aug);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='September' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($sep);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='Octomber' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($oct);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='November' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($nov);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client where month_rent='December' ";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($dec);
$stmt->fetch();
$stmt->close();
?>
<?
$result ="SELECT count(*) FROM client";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($all);
$stmt->fetch();
$stmt->close();
?>

                  <div class="chart mt">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" 
                    data-data="[<?php echo $jan;?>,<?php echo $feb;?>,<?php echo $mar;?>,<?php echo $apr;?>,<?php echo $may;?>,<?php echo $june;?>,<?php echo $july;?>,<?php echo $aug;?>,<?php echo $sep;?>,
                    <?php echo $oct;?>,<?php echo $nov;?>,<?php echo $dec;?>]"></div>
                  </div>
                  <p class="mt"><b>Total Clients <?php echo $all;?></b><br/></p>
                </div>
              </div>
              <!-- /col-md-4 -->
            </div>
            <!-- /row -->
            <div class="row">
              <!-- WEATHER PANEL --
              <div class="col-md-4 mb">
                <div class="weather pn">
                  <i class="fa fa-cloud fa-4x"></i>
                  <h2>11º C</h2>
                  <h4>BUDAPEST</h4>
                </div>
              </div>
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              <?php
      $aid=$_SESSION['id'];
      	$ret="select * from admin where id=?";
      		$stmt= $mysqli->prepare($ret) ;
      	 $stmt->bind_param('i',$aid);
      	 $stmt->execute() ;//ok
      	 $res=$stmt->get_result();
      	 //$cnt=1;
      	   while($row=$res->fetch_object())
      	  {
      	  	?>
              <div class="col-md-12 mb">
                <div class="message-p pn">
                  <div class="message-header">
                    <h5>DIRECT MESSAGE</h5>
                  </div>
                  <div class="row">
                    <div class="col-md-3 centered hidden-sm hidden-xs">
                      <img src="img/dpic/<?php echo $row->pic;?>" class="img-circle" width="100">
                    </div>
                    <div class="col-md-9">
                      <p>
                        <name><?php echo $row->name;?></name>
                        
                      </p>
                      <p class="small"></p>
                      <p class="message">Send A Message To Your Clients</p>
                      <form class="form-inline" role="form" method='post' action=''>
                        <div class="form-group">
                          <textarea type="text" class="form-control" id="exampleInputText" name='content' ></textarea>
                        </div>
                        <input type='submit' value='send' class='btn btn-primary btn-success' name='submit'>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /Message Panel-->
                <?php }?>
              </div>
            </div>
           
            
            <!-- /row -->
          </div>
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg-3 ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <?
$result ="SELECT SUM(creditrent) FROM rentalpayments";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
?>

<?
$result ="SELECT SUM(creditrent) FROM rentalpayments";
$stmt = $mysqli->prepare($result);
$stmt->execute();
$stmt->bind_result($k);
$stmt->fetch();
$stmt->close();
?>

            <div class="donut-main">
              <h4>Expenditures | Earnings</h4>
              <canvas id="newchart" height="130" width="130"></canvas>
              <script>
                var doughnutData = [{
                    value: <?php echo $count;?>,
                    color: "#4ECDC4"
                  },
                  {
                    value: <?php echo $k;?>,
                    color: "#fdfdfd"
                  }
                ];
                var myDoughnut = new Chart(document.getElementById("newchart").getContext("2d")).Doughnut(doughnutData);
              </script>
            </div>
           
            <!--NEW EARNING STATS -->
            <div class="panel terques-chart">
              <div class="panel-body">
                <div class="chart">
                  <div class="centered">
                    <span>TOTAL EARNINGS</span>
                    <strong>Ksh <?php echo $count;?></strong>
                  </div>
                  <br>
                  </div>
              </div>
            </div>
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
                  
            
            
            <!-- USERS ONLINE SECTION -->
            <h4 class="centered mt">My Clients</h4>
            <!-- First Member -->
            <?php
                    $aid=$_SESSION['id'];
                   $ret="SELECT * FROM `client` ORDER BY `id` ASC  ";
                    $stmt= $mysqli->prepare($ret) ;
                  //$stmt->bind_param('i',$aid);
                    $stmt->execute() ;//ok
                    $res=$stmt->get_result();
                    //$cnt=1;
                    while($row=$res->fetch_object())
                    	  {
                    	  	?>
            <div class="desc">
              <div class="thumb">
                <img class="img-circle" src="../client/img/profile_pic/<?php echo $row->pic;?>" width="35px" height="35px" align="">
              </div>
              <div class="details">
                <p>
                  <a href="#"><?php echo $row->fname;?> <?php echo $row->lname;?></a><br/>
                  <muted><?php echo $row->housetype;?></muted>
                </p>
              </div>
            </div>
            <?php }?>
            <!-- CALENDAR-->
            <div id="calendar" class="mb">
              <div class="panel green-panel no-margin">
                <div class="panel-body">
                  <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                    <div class="arrow"></div>
                    <h3 class="popover-title" style="disadding: none;"></h3>
                    <div id="date-popover-content" class="popover-content"></div>
                  </div>
                  <div id="my-calendar"></div>
                </div>
              </div>
            </div>
            <!-- / calendar -->
          </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <?php include("includes/footer.php")?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>
<?php }?>

</html>

