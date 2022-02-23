<?php
session_start();
include("dbconnection.php");
include("checklogin.php");
check_login();
error_reporting(0);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$company=$_POST['company'];
	$wdd=$_POST['wdnd'];
	$seo=$_POST['seo'];
	$swd=$_POST['swd'];
	$fwd=$_POST['fwd'];
	$whs=$_POST['whs'];
	$ed=$_POST['ed'];
	$opi=$_POST['opi'];
	$dba=$_POST['dba'];
	$nd=$_POST['nd'];
	$cms=$_POST['cms'];
	$smo=$_POST['smo'];
	$dwd=$_POST['dwd'];
	$dr=$_POST['dr'];
	$wm=$_POST['wm'];
	$wta=$_POST['wta'];
	$ld=$_POST['ld'];
	$osc=$_POST['osc'];
	$other=$_POST['other'];
	$query=$_POST['query'];
	$pd=date('Y-m-d');
mysqli_query($con,"insert into prequest(name,email,contactno,company,wdd,cms,seo,smo,swd,dwd,fwd,dr,whs,wm,ed,wta,opi,ld,da,osc,nd,others,query,posting_date) values('$name','$email','$contact','$company','$wdd','$cms','$seo','$smo','$swd','$dwd','$fwd','$dr','$whs','$wm','$ed','$wta','$opi','$ld','$dba','$osc','$nd','$other','$query','$pd')");
echo "<script>alert('Query received. We will contact you soon.');</script>";  
echo "<script>window.location.href='get-quote.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>CRM | Request Quote</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
</head>
<body class="">
<?php include("header.php");?>
<div class="page-container row-fluid">
	<?php include("leftbar.php");?>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  </div>
  <a href="#" class="scrollup">Scroll</a>
   <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div data-percentage="79%" class="progress-bar progress-bar-success animate-progress-bar" ></div>		
	</div>
	<div class="pull-right">
	</div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">  
		<div class="page-title">	
			<h3>Request a Consultation</h3>
     
	
             <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="panel panel-default">
                             
                                <div class="panel-body">
                                    <p>Please click below mention services of your interest to receive consultation for the same:</p>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
 <?php
$uid=$_SESSION['id'];
$query=mysqli_query($con,"select email,name,mobile from user where id='$uid'");
while($rw=mysqli_fetch_array($query)){
      ?>                                          

    <div class="form-group">
     <label class="col-md-3 control-label">Name </label>
    <div class="col-md-9">                                            
    <div class="input-group">
        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
         <input type="text" name="name" class="form-control" value="<?php echo $rw['name'];?>" readonly="true" />
          </div>                                            
                                                
        </div>
       </div>
                                            
        <div class="form-group">                                        
   <label class="col-md-3 control-label">Contact no</label>
  <div class="col-md-9 col-xs-12">
  <div class="input-group">
   <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
    <input type="text" name="contact" class="form-control" value="<?php echo $rw['mobile'];?>" readonly="true"/>
     </div>            
       </div>
     </div>
                                      
                                            
                                            
<div class="form-group">
<label class="col-md-3 control-label">Service Required :</label>
    <div class="col-md-9">                                                                                                                                        
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wp" value="Work Permit" checked="checked"/> Work Permit</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="sp" value="Special Pass" /> Special Pass</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="swd" value="Dependent Pass" /> Dependent Pass</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="fwd" value="Re-Entry" /> Re-Entry</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="whs" value="Internship Pass" /> Internship Pass</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ed"  value="Citizenship"/> Citizenship</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="opi" value="Permanent Residence" /> Permanent Residence</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dba" value="Student/Pupil Pass" /> Student/Pupil Pass</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="nd" value="Alien Registration" /> Alien Registration</label>
                                                
                                                  
                                                </div>
                                            </div>
                                            
                                          
                                            
                                        </div>
                                        <div class="col-md-6">
                                            
                                            <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Email</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                        <input type="email" name="email" class="form-control" value="<?php echo $rw['email'];?>" readonly="true">                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                            
                                               <div class="form-group">                                        
                                                <label class="col-md-3 control-label">Company</label>
                                                <div class="col-md-9">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" name="company" class="form-control datepicker" value="" required>                                            
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                       
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label"></label>
                                                <div class="col-md-9">                                                                                                                                        
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="cms" value="Visa extension" />Visa extension</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="smo" value="KRA PIN	" /> KRA PIN</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dwd" value="NHIF" /> NHIF</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="dr" value="NSSF" /> NSSF </label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wm" value="Office and home space" /> Office and home space</label><br>
                                             <label class="check">
                                             <input type="checkbox" class="icheckbox" name="wta" value="Single Journey Visa" /> Single Journey Visa</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="ld" value="Multiple Journey Visa" /> Multiple Journey Visa</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="osc" value="Airport Meet and Greet" /> Airport Meet and Greet</label><br>
                                                 <label class="check">
                                             <input type="checkbox" class="icheckbox" name="other" value="Others" /> Others </label>
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div style="margin-top:20px;" class="col-md-6">
                                         <div class="form-group">
                                                <label class="col-md-3 control-label">Query</label>
                                                <div class="col-md-9 col-xs-12">                                            
                                                    <textarea class="form-control" rows="5" name="query" required></textarea>
                                                </div>
                                            </div></div>
                                        
                                    </div>
   <?php } ?>   
                                </div>
                                <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <input value="Submit" type="submit" name="submit" class="btn btn-primary pull-right">
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>            
                                    
                                    
                                   
                                   
                                    
                               
                                    
                                    
                                      
             
            	
		</div>
    </div>
  </div>
<!-- BEGIN CHAT --> 

 </div>
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="assets/js/core.js" type="text/javascript"></script> 
<script src="assets/js/chat.js" type="text/javascript"></script> 
<script src="assets/js/demo.js" type="text/javascript"></script> 

</body>
</html>