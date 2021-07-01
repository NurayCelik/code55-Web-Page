<?php

//güvenlik için
//header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);

include "header.php";

?>
<section style="height: 60vh;">

   <style>
      .notfound {}

      .notfound h2 {
         font-size: 80px;
         line-height: 130px;
         text-align: center;
         margin-top: 30px;
         color: #1c123d;
         font-weight: normal;
      }

      .notfound h2 span {
         display: block;
         color: #1c123d;
         font-size: 150px;
         font-weight: 900;
      }
   </style>
   <div class="main">
      <div class="row" style="margin:0 auto; top:50%;padding-top: 54px;">
         <div class="col-lg-12 content">
            <div class="section group">
               <div class="notfound">
                  <h2> <span>404</span> Not Found</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="clearfix"></div>

</section>
<br>
<?php
include "footer.php";
?>