<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Wisata Desa Pegadungan</title>

  <!-- Favicons -->
  <link href="<?=base_url();?>assets2/img/favicon.png" rel="icon">
  <link href="<?=base_url();?>assets2/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url();?>assets2/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?=base_url();?>assets2/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets2/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?=base_url();?>assets2/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets2/css/style-responsive.css" rel="stylesheet">
  <script src="<?=base_url();?>assets2/lib/chart-master/Chart.js"></script>


</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?=site_url('latihan/index')?>" class="logo"><b>DESA PEGADUNGAN<span></span></b></a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><img src="<?=base_url();?>assets2/img/logo buleleng.png" class="img-circle" width="80"></p>
          <h5 class="centered">ADMIN</h5>
          <hr></hr>
          <li class="sub-menu">
        <li class="active"><a href="<?=site_url('latihan/index')?>"><i class="fa fa-home">&nbsp;&nbsp;Menu Utama</i></a></li>
        <li class="active"><a href="<?=site_url('latihan/data_user')?>"><i class="fa fa-key">&nbsp;&nbsp;Data User</i></a></li>
        <li class="active"><a href="<?=site_url('latihan/data_wisata')?>"><i class="fa fa-key">&nbsp;&nbsp;Data Wisata</i></a></li>
			  <li class="active"><a href="<?=site_url('latihan/data_transaksi')?>"><i class="fa fa-money">&nbsp;&nbsp;Data Transaksi</i></a></li>
        <li class="active"><a href="<?=site_url('login/index')?>"><i class="fa fa-circle">&nbsp;&nbsp;Logout</i></a></li>
          </li>
          <br>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <div id="beranda">
	  <?php $this->load->view($beranda1);?>
    </div>
    <!--main content end-->
    <!--footer start-->

    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?=base_url();?>assets2/lib/jquery/jquery.min.js"></script>

  <script src="<?=base_url();?>assets2/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="<?=base_url();?>assets2/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="<?=base_url();?>assets2/lib/jquery.scrollTo.min.js"></script>
  <script src="<?=base_url();?>assets2/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets2/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="<?=base_url();?>assets2/lib/common-scripts.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets2/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="<?=base_url();?>assets2/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="<?=base_url();?>assets2/lib/sparkline-chart.js"></script>
  <script src="<?=base_url();?>assets2/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

      return false;
    });
  </script>
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

</html>
