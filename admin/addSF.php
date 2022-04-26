<?php
  require_once "../db.php";

  $titleErr = $contentErr = null;
  
  if( $_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST['article_submit']))
  {
    $t = $_POST['article_title'] ?? null;
    $img= $_FILES["article_image"];
    $content = $_POST['article_content'] ?? null;
    $author = "admin";

    // var_dump($img);
    if(!$t)
      $titleErr = "Title is required";
    else if(!$content)
      $contentErr = "Content is required";
    else{
      
      if($img['tmp_name'] == ""){
        $img = null;            
        $stm =  $pdo->prepare("INSERT INTO tbl_school_feed ( title , content, author) VALUES (?, ?, ?) ");
        $stm->bindValue(1, $t);
        $stm->bindValue(2, $content);
        $stm->bindValue(3, $author);
        $stm->execute();
        echo "<script> alert ('asdadasd'); </script>";
        header( 'refresh: 1; url=schoolfeed.php' );
      }
      else 
      {
        $imgName =  date("Ymd") . $img['name'];
        $imageTemp   = $img['tmp_name'];
        $path = "/img/schoolfeed";
        move_uploaded_file($imageTemp, "../.." . $path);
        
        $stm =  $pdo->prepare("INSERT INTO tbl_school_feed( title , content, author, image) VALUES (?, ?, ? ,?) ");
        $stm->bindValue(1, $t);
        $stm->bindValue(2, $content);
        $stm->bindValue(3, $author);
        $stm->bindValue(4, $path);
        $stm->execute();
        
        echo "<script> alert ('asdadasd'); </script>";
        header( 'refresh:1; url=schoolfeed.php' );
       }

    }
    

    
    
  


 

    


   
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add post - School Feed</title>

      <!-- LINKS bootstrap and cdns -->
      <?php  require_once "../cdn.php"  ?>
      
      <!-- CSS -->
      <link rel="stylesheet" href="/sps/css/main.css">


  </head>
  <body>
        <!-- HEADER -->
        <?php require_once "./components/header.php" ?>
        <div class="form-wrapper">
          <h1 class="h1">School Feed Publication</h1>
          <form  class="mt-4" method="POST" enctype="multipart/form-data">
            <div class="field">
              <label class="label">Article Title</label>
              <div class="control">
                <!-- ARTICLE TITLE INPUT -->
                <input required name="article_title"  class="input" type="text" placeholder="Enter title">  
              </div>
            </div>
            <div id="display-image">
            </div>
            <div class="mb-3">
              <div class="field">
                <label class="label">Article Image</label>
              </div>
              <div id="display-image">
                
              </div>
              <!-- ARTICLE  IMAGE INPUT -->
              <input id="image-input" accept="image/jpeg, image/png, image/jpg" name="article_image" class="form-control" type="file" id="formFile">
            </div>
            
            <div class="field">
              <label class="label">Article Content</label>
              <?php if( $contentErr): ?>
                <p class="help is-danger" > 
                  <span class="icon is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                  </span> 
                  <?php  echo $contentErr  ?>
                </p>
              <?php endif; ?>
            </div>
              <!-- ARTICLE CONTENT INPUT-->
              <textarea required name="article_content" id="Article_editor" cols="30" rows="10" class="textarea is-primary"></textarea>
             
              <!-- ARTICLE SUBMIT INPUT-->
              <input class="button is-link mt-1 is-fullwidth" name="article_submit"  type="submit" value="Publish">
              
            </div>          
          </form>
        </div>

        <script src="../ckeditor/ckeditor.js"> </script>
        <script>
          CKEDITOR.replace("Article_editor");
        </script>

        <!-- FOR FILE PREVIEW -->
        <script>
          const image_input = document.querySelector("#image-input");

          image_input.addEventListener("change", function() {
            const reader = new FileReader();
            reader.addEventListener("load", () => {
              const uploaded_image = reader.result;
              document.querySelector("#display-image").innerHTML = `<img style="width:40%" src="${uploaded_image}">`;
              
            });
            reader.readAsDataURL(this.files[0]);
          });
        </script>

  </body>
</html>