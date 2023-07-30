      
               <div id="footer" class="cf">
                   <div class="column three">
                       <strong>Phone</strong>
                       123456789
                   </div>
                   <div class="column three">
                       <strong>Location</strong>
                       Varna, Bulgaria
                   </div>
                   <div class="column three last">
                       <storng>Hours</storng><br><br>
                       <em>Tuesday - Thursday</em><br>
                       1:00pm - 9:00pm <br><br>
                       
                       <em>Friday - Saturday</em><br>
                       4:00pm - 11:00pm <br><br>
                       
                       <em>Sunday - Monday</em><br>
                       Closed <br><br>
                       <?php 
                           include('store-hours.php');
                        ?>
                   </div> <!--Column-->
               </div> <!--footer-->
               <small>&copy: <?php echo date('Y');?> <?php echo $companyName;?></small>
           </div> <!--conternr-->
       </div> <!--wapper-->
       
       <div class="copyright-info">
           <?php 
               include('copyright.php');
            ?>
       </div>
    
</body>
</html>