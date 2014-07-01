<?php get_header(); ?>
<?php get_sidebar('includes-rates-modal'); ?>
<div id="page-title-wrapper">
  <div class="container">
    <div class="page-title">
      <h1>Best Mortgage Rates in Canada</h1>
      <form class="search-form hide-xs">
        <div><input class="form-control" type="text" placeholder="Search" /></div>
      </form>
    </div>
  </div>
</div>
<div class="general-padding">
  <div class="container">
    <div class="row">
      <?php get_sidebar(); ?>
      <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

        <!-- RateHub Related section -->
        <div class="page sub-page rates-page rates-main-page">
          <div class="rates-form">
            <h4 class="clearfix">Filter Mortgage Rates <a href="#" class="pull-right arrow-3 show-hidden">Hide</a></h4>
            <div class="hidden-element">
              <form>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Mortgage Amount 
                      <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The mortgage amount is the total cost of the home you plan to purchase, minus your down payment. If you are refinancing or renewing your mortgage, this is the current value of your mortgage.">?</span>
                    </label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Term 
                      <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The mortgage term is the length of time you are locked into a certain interest rate. The most common term is 5 years. However, the term can be anywhere from 6 months to 10 years.">?</span>
                    </label>
                    <select class="form-control">
                      <option>5 Year</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Province 
                      <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="Select the province that you currently reside in or the province you plan on moving to in order to access the best mortgage rates in your area.">?</span>
                    </label>
                    <select class="form-control">
                      <option>Selected Province</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Mortgage Type 
                      <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="There are different types of mortgages available. A fixed-rate mortgage doesn't change during your mortgage term while a variable mortgage rate is subject to change based on the lender's prime rate.">?</span>
                    </label>
                    <select class="form-control">
                      <option>Fixed-Closed</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>Amortization 
                      <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The amortization period is the total length of time it takes to pay off your mortgage. The most common amortization period is 25 years. Longer amortization periods will reduce your monthly payments, but you will pay more interest over the life of your mortgage.">?</span>
                    </label>
                    <select class="form-control">
                      <option>25 Years</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-4">
                    <label>&nbsp;</label><br>
                    <button type="submit" class="btn green-gradient">Filter Results</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="single-main-rate">
            <h2 class="clearfix">
              Best Fixed Mortgage Rates 
              <a href="#" class="pull-right arrow-1 link-green hide-s">View All Fixed Rates</a>
              <a href="#" class="pull-right arrow-1 link-green show-s">View All</a>
            </h2>
            <p><strong>Fixed Mortgage Rates</strong> provide you with the security of never going up over your term. The most popular fixed mortgage rate term is five years.</p>
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Fixed Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Bank Fixed Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="single-main-rate">
            <h2 class="clearfix">
              Best Variable Mortgage Rates 
              <a href="#" class="pull-right arrow-1 link-green hide-s">View All Variable Rates</a>
              <a href="#" class="pull-right arrow-1 link-green show-s">View All</a>
            </h2>
            <p><strong>Fixed Mortgage Rates</strong> provide you with the security of never going up over your term. The most popular fixed mortgage rate term is five years.</p>
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Variable Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Bank Variable Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="single-main-rate">
            <h2 class="clearfix">
              Best HELOC Mortgage Rates 
              <a href="#" class="pull-right arrow-1 link-green hide-s">View All HELOC Rates</a>
              <a href="#" class="pull-right arrow-1 link-green show-s">View All</a>
            </h2>
            <p><strong>Fixed Mortgage Rates</strong> provide you with the security of never going up over your term. The most popular fixed mortgage rate term is five years.</p>
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <h4>Lowest HELOC Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Bank HELOC Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="single-main-rate">
            <h2 class="clearfix">
              Best Cash-Back Mortgage Rates 
              <a href="#" class="pull-right arrow-1 link-green hide-s">View All Cash-Back Rates</a>
              <a href="#" class="pull-right arrow-1 link-green show-s">View All</a>
            </h2>
            <p><strong>Fixed Mortgage Rates</strong> provide you with the security of never going up over your term. The most popular fixed mortgage rate term is five years.</p>
            <div class="row">
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Cash-Back Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-6 col-lg-6">
                <h4>Lowest Bank Cash-Back Rates</h4>
                <table class="table">
                  <tbody>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                    <tr>
                      <td><span class="year"><span>1</span> <br>Year</span></td>
                      <td><img src="<?php echo THEME_DIR?>/images/news-1.png"></td>
                      <td>
                        <span>$1,240</span>
                        <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- End of RateHub Related section -->
        <?php get_sidebar('include-accordion'); ?>
        <?php get_sidebar('include-find-rate'); ?>
        <?php get_sidebar('include-share'); ?>
      </div>
      <?php get_sidebar('xs'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>