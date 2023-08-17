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
			
            <div id="first">
                <div class="creatClass_header">
                    <h1>Create Class</h1>
                </div>

			   <form action="createJoinClass.php" method="POST">
					<input type="text" name="className" autocomplete="off" placeholder="Course Title" value = "<?php 
					// if(isset($_SESSION['className'])){
				    //    echo $_SESSION['className'];
					// } 
					?>" >
				   	<br>

				    <input type="text" name="section" autocomplete="off" placeholder="Class/Section" value = "<?php 
					// if(isset($_SESSION['section'])){
				    //    echo $_SESSION['section'];
					// } 
					?>" >
				    <br>

				    <input type="text" name="subject" autocomplete="off" placeholder="Course Code" value = "<?php 
					// if(isset($_SESSION['subject'])){
				    //    echo $_SESSION['subject'];
					// } 
					?>" >
				    <br>

                    <button class="cancel_button"><a href="index.php">Cancel</a></button>
				     <button  type="sumbit" name="createClass_button" id ="create_class_button">Create</button>
		     		 </form>
             </div>
             
     </div>          
</div>
               
                    
		 </div>   

 
</div> 
</body>
</html>