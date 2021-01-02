<?php 

function home($appName){
	?>
    <!--Main Navigation-->
    <header>
      <div class="view intro-2 paralax">
        <div class="full-bg-img">
          <div class="mask rgba-black-strong flex-center">
            <div class="container">
              <div class="white-text text-center mx-auto">
                <h5>Welcome to</h5>
                <h1><?=$appName?></h1>
                <hr class="w-80-p mx-auto bg-3">
                <h5>FullStack Dev</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
	<?php
}

?>
