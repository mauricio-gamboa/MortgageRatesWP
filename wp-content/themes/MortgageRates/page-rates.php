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
        <div class="page sub-page rates-page">
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
          <h2>5 Year Fixed-Closed Mortgage Rates in Canada</h2>
          <div class="rates">
            <table class="table table-striped">
              <thead class="hide-m hide-s">
                <tr>
                  <th>&nbsp;</th>
                  <th>Mortgage provider 
                    <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="Mortgage providers include lenders and mortgage brokers. Lenders will provide the funding for your mortgage whereas mortgage brokers will shop your mortgage around for the best rate.">?</span>
                  </th>
                  <th>Rate 
                    <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The mortgage rate is the amount of interest you will pay on the principal balance of your mortgage. This rate will vary depending on whether you choose a fixed or variable mortgage rate.">?</span>
                  </th>
                  <th>Rate Hold 
                    <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The rate hold is the length of time (usually 30-120 days) a lender will guarantee the current mortgage rate being offered.">?</span>
                  </th>
                  <th>Prepayment 
                    <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The mortgage prepayment options allow you to either make a lump sum payment against your mortgage principal without penalty or increase your original monthly mortgage payments by a specific percentage.">?</span>
                  </th>
                  <th>Monthly Payment 
                    <span class="tool-tip" data-toggle="popover" data-placement="top" data-content="The monthly mortgage payment is calculated based on the mortgage amount, amortization period, and the associated mortgage interest rate.">?</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><span class="number">1</span></td>
                  <td>
                    <img src="<?php echo THEME_DIR?>/images/news-1.png">
                  </td>
                  <td class="s-rate">
                    <span>3.79%</span>
                    <button class="btn green-gradient show-m show-s hide-xl" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                  <td class="s-hold hide-m hide-s">30 Days</td>
                  <td class="hide-m hide-s">
                    <span>Lump Sum: 20%</span>
                    <span>Monthly: 20%</span>
                  </td>
                  <td class="s-payment hide-m hide-s"><span>$1,240</span>
                    <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                </tr>
                <tr>
                  <td><span class="number">2</span></td>
                  <td>
                    <img src="<?php echo THEME_DIR?>/images/news-1.png">
                  </td>
                  <td class="s-rate">
                    <span>3.79%</span>
                    <button class="btn green-gradient show-m show-s hide-xl" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                  <td class="s-hold hide-m hide-s">30 Days</td>
                  <td class="hide-m hide-s">
                    <span>Lump Sum: 20%</span>
                    <span>Monthly: 20%</span>
                  </td>
                  <td class="s-payment hide-m hide-s"><span>$1,240</span>
                    <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                </tr>
                <tr>
                  <td><span class="number">3</span></td>
                  <td>
                    <img src="<?php echo THEME_DIR?>/images/news-1.png">
                  </td>
                  <td class="s-rate">
                    <span>3.79%</span>
                    <button class="btn green-gradient show-m show-s hide-xl" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                  <td class="s-hold hide-m hide-s">30 Days</td>
                  <td class="hide-m hide-s">
                    <span>Lump Sum: 20%</span>
                    <span>Monthly: 20%</span>
                  </td>
                  <td class="s-payment hide-m hide-s"><span>$1,240</span>
                    <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                </tr>
                <tr>
                  <td><span class="number">4</span></td>
                  <td>
                    <img src="<?php echo THEME_DIR?>/images/news-1.png">
                  </td>
                  <td class="s-rate">
                    <span>3.79%</span>
                    <button class="btn green-gradient show-m show-s hide-xl" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                  <td class="s-hold hide-m hide-s">30 Days</td>
                  <td class="hide-m hide-s">
                    <span>Lump Sum: 20%</span>
                    <span>Monthly: 20%</span>
                  </td>
                  <td class="s-payment hide-m hide-s"><span>$1,240</span>
                    <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                </tr>
                <tr>
                  <td><span class="number">5</span></td>
                  <td>
                    <img src="<?php echo THEME_DIR?>/images/news-1.png">
                  </td>
                  <td class="s-rate">
                    <span>3.79%</span>
                    <button class="btn green-gradient show-m show-s hide-xl" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                  <td class="s-hold hide-m hide-s">30 Days</td>
                  <td class="hide-m hide-s">
                    <span>Lump Sum: 20%</span>
                    <span>Monthly: 20%</span>
                  </td>
                  <td class="s-payment hide-m hide-s"><span>$1,240</span>
                    <button class="btn green-gradient" data-toggle="modal" data-target="#rates-modal">Get This Rate!</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="rates-footer">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-5 col-lg-5">
                  Rates last updated Today at 4:45pm EDT
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                  <img src="<?php echo THEME_DIR?>/images/ratehub.png">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                  <a href="" class="arrow-2">Show More rates</a>
                </div>
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