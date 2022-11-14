
 
 

 
 <?php

$ans="print('>> welcome to python interpreter')";


if(isset($_POST['submit'])){

    $text1=$_POST['text'];
    $text=$_POST['text'];
   
    $ans=$text;

    if(empty($_POST['text'])){

    $ans='print("empty !!!!")';

    }

    

}

?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="How make Own Coderunner by html jquery bootstrap5 ">
  <meta name="keywords" content="htmlcss,coderunner vscode,coderunner by html css,coderunner by bootstrap,how make own coderunner,codewithkunal404,jquery coderunner,jquery html,coderunner by html css jquery,video,send,image,link,download,upload,code runner settings,bootstrap,html5 bootstrap 5,coderunner kaise bnaye,how run code on coderunner,source code,runcode,khud ka coderunner kaise bnaye,html jquery css,css3,howto,make,jquery tricks and tips,apna coderunner kaise bnaye">
  <meta name="author" content="kunalchaudhary | Codewithkunal404">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codewithkunal404 | CodeRunner</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <script defer src="https://pyscript.net/latest/pyscript.js"></script> 
    <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
   
    <style>

@media(max-width:1500px) {

    #output202{
        margin-top: 70px;
       
        
    }



}
    </style>
   
  
    
<body style="background-color: black;" >

    <div class="container-fluid bg-light text-dark p-3 ">
    <h3 class="text-secondary">Code<span class="text-danger">|Runner</span><i class="bi bi-filetype-py text-success"></i></h3>
      
       </div> 
      <div class="container-fluid "> 
        <!-- form start -->
        <form method="POST">
        <div class="row ">
            <div class="col-xxl-6  d-flex justify-content-end"><button type="button" class="btn btn-outline-success mt-3  mx-2" onclick="window.location.href='index.php'"> Start HTML <i class="bi bi-filetype-html"></i></button><input type="submit"  name="submit"  class="btn btn-outline-info mt-3  mx-2" value="Run Code"></div>
        </div>
      </div>
    
       
          
        
    

          <div class="container-fluid " >
            <div class="row mt-3"  >
                <div class="col-xxl" style="height: 70vh;">
                
                    <div class="input-group" >
                        <textarea class="form-control p-5" name="text"  placeholder="Enter code here....."  aria-label="With textarea" style="width: 100%;height:70vh;resize: none;overflow-y: auto;border: 1px solid black;background-color: #023047;color: white;" ><?php echo @$text1; ?></textarea>
                      </div>
                </form>

                <!-- form end -->
                </div>
                
                    <div class="col-xxl position-relative "  style="height:70vh;overflow-y: auto;background-color: white;padding: 20px;">

                    <!-- py -->
                   
                    <py-script style="color:green;font-size:20px;">
                     <?php echo $ans;?>
                    </py-script>
                    
                    </div>
            </div>

           
          </div>


          <div class="container text-center text-muted p-3 " >
              <h6>copyright &copy; 2022 Design by <a href="https://github.com/codewithkunal404" class="text-decoration-none">Codewithkunal404</a> </h6>
          </div>

          

       


     
</body>






</html>
