<?php 
include("header.php");
require 'config/config.php' ;
require 'includes/form_handlers/createJoinClass_handler.php';
?>

<?php 
        
        if(isset($_POST['joinClass_button'])) {
        	echo '
             <script>
               $(document).ready(function(){
                 $("#first").hide();
                 $("#second").show();
               });
             </script>
        	';
        }
	 ?>
<div class="bg">
    <div class="wrapper">

        <div class="creatClass_box">  	
			
             
             <div id="">
                    <div class="joinClass_header">
                        <h1>Join class</h1>
                    </div>

                        <form action="createJoinClass.php" method="POST">
                                <input type="text" name="code" placeholder="Class code" autocomplete="off" value = "<?php 
                                if(isset($_SESSION['code'])){
                                echo $_SESSION['code'];
                                } 
                                ?>">
                                <br>
                                <button class="cancel_button" ><a href="index.php">Cancel</a></button>
                                <button  type="sumbit" name="joinClass_button" id="create_class_button">Join</button>
                                
                                </form>
                   
            </div>
     </div>          
</div>
               
                    
		 </div>   

 
</div> 
</body>
</html>