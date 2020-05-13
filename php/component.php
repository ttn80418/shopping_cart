<?php
function component(){
    //此為商品欄位物件
    $element = "

      <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
        <form method=\"post\" action=\"index.php\">
          <div class=\"card shadow\">
            <div>
              <img src=\"images/ip11red.png\" alt=\"i11\" class=\"img-fluid card-img-top\">
            </div>
            <div class=\"card-body\">
              <h5 class=\"card-title\">Product1</h5>
              <h6>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"fas fa-star\"></i>
                <i class=\"far fa-star\"></i>
              </h6>
              <p class=\"card-text\">
                Some quick example text to build on the card
              </p>
              <small><s class=\"text-secondary\">$159</s></small>
              <h5><span class=\"price\">$199</span></h5>
              <button type=\"submit\" name=\"add\" class=\"btn btn-warning my-3\">加入購物車<i class=\"fas fa-shopping-cart\"></i></button>
            </div>
          </div>
        </form>
      </div>    
    
    ";
    echo $element;
}
?>