@extends('theme.main')
@section('title', 'Menu')
@section('content')
<!--=================================
 intro bg -->

<div class="inner-intro parallax bg-overlay-black-70" style="background-image: url(images/bg/02.jpg);">
<div class="container">
    <div class="row text-center intro-title">
      <h1 class="text-orange">Menu style</h1>
      <p class="text-white">We Know The Secret Of Your Success</p>
      <ul class="page-breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
        <li><span>Menu  <i class="fa fa-angle-double-right"></i></span></li>
        <li><span>Menu style 1</span></li>
     </ul>
    </div>
  </div>
</div>
 
<!--=================================
 our-menu -->
 
<section class="our-menu white-bg  page-section-pt">
  <div class="container">
     <div class="row">
     <div class="col-lg-12 col-md-12">
      <div class="tabs clearfix"> 
          <!-- Nav tabs -->
          <ul class="tabs-link white text-center">
            <li class="active"><a href="#tab-1" data-toggle="tab" aria-expanded="false"><i class="glyph-icon flaticon-hot-mug-doodle"></i> Breakfast</a></li>
            <li><a href="#tab-2" data-toggle="tab" aria-expanded="true"><i class="glyph-icon flaticon-food-36"></i> Lunch</a></li>
            <li><a href="#tab-3" data-toggle="tab"><i class="glyph-icon flaticon-food-9"></i> Dinner</a></li>
            <li><a href="#tab-4" data-toggle="tab"><i class="glyph-icon flaticon-foamy-beer-jar"></i> Drinks</a></li>
         
          </ul>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade active in" id="tab-1">
               <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/01.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Breakfast Complete</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/02.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>French Toast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/03.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Crepe Complete</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/04.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Vegetarian Breakfast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                </div>
              </div>
            </div>
           </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/05.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>French Breakfast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/06.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Eggs Benedict</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/07.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>English Breakfast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/08.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Barrel's Breakfast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                </div>
              </div>
            </div>
           </div>
        </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-2">
               <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/09.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Shrimp and Grits</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/10.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Spring Salad</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/11.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Fried Chicken Breast</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/12.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Seafood Pasta</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                </div>
              </div>
            </div>
           </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/13.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>She Crab Soup</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/14.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Black Bean Soup</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/15.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Turkey Melt</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/16.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Lobster Roll</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                </div>
              </div>
            </div>
           </div>
        </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-3">
               <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/01.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Caesar Salad</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/02.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Mixed Greens Salad</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/03.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Pork Belly</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/04.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Peach Gazpacho</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                </div>
              </div>
            </div>
           </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/05.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Veal Chop</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/06.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Wood Roasted Salmon</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/07.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Pan Seared Chicken</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/08.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Butter Poached Lobster</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
                </div>
              </div>
            </div>
           </div>
        </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="tab-4">
             <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/09.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Raspberry Iced Tea</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/10.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Black Iced Tea</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/11.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Arnold Palmer</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/12.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Coffee</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
                </div>
              </div>
            </div>
           </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/13.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Loose Leaf Teas</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/14.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Red Bull</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/15.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>San Pellegrino</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Stir fried king prawn, tender stem broccoli and asparagus with oyster sauce. Deep-fried mince prawn</p>
                </div>
              </div>
            </div>
            <div class="menu-body menu-left menu-white">
              <div class="menu-thumbnail">
                <img class="img-responsive center-block" src="images/dish/16.png" alt="">
              </div>
              <div class="menu-details">
                <div class="menu-title clearfix">
                  <h4>Saratoga</h4>
                  <span class="price">$99.0</span>
                </div>
                <div class="menu-description">
                  <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
                </div>
              </div>
            </div>
           </div>
          </div>
         </div>
         </div>
        </div>
      </div>
    </div>
  </div>
</section>

 <!--=================================
 special-menu -->

 <!--=================================
menu-list-bg -->

<section class="menu-list-bg bg-overlay-black-20" style="background-image: url(images/bg/04.jpg);">
  <div class="container text-center">
    <div class="row content-text">
      <h2>DESERTS</h2>
    </div>
  </div>
</section>

 <!--=================================
menu-list-bg -->

<!--=================================
our-menu -->

<section class="our-menu page-section-pt">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="menu-body menu-right menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/01.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Breakfast Complete</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-right menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/12.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>French Toast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-right menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/13.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Crêpe Complète</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-right menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/14.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Vegetarian Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
              </div>
            </div>
          </div>
         </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/15.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>French Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/16.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Eggs Benedict</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/01.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>English Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/02.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Barrel's Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
              </div>
            </div>
          </div>
         </div>
      </div>
  </div>
</section>
 
<!--=================================
our-menu -->

 <!--=================================
menu-list-bg -->

<section class="menu-list-bg bg-overlay-black-80" style="background-image: url(images/bg/09.jpg);">
  <div class="container text-center">
    <div class="row content-text">
      <h2>cold drinks</h2>
    </div>
  </div>
</section>

 <!--=================================
menu-list-bg -->

<!--=================================
our-menu -->

<section class="our-menu page-section-pt">
  <div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/01.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Breakfast Complete</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Grill boneless corn-fed chicken, marinated in coconut milk, lemongrass, galangal, turmeric and lime leaves</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/12.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>French Toast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Grill sirloin beef with cracked black pepper. Served with green salad and sweet and sour sauce on the side</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/13.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Crêpe Complète</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Tender stem broccoli and asparagus with oyster sauce. Stir fried king prawn. Lime mousse with mango ganache</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/14.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Vegetarian Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>With chopped vegetables, served with plum sauce. Tossed in peppercorns and spiced salt</p>
              </div>
            </div>
          </div>
         </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/15.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>French Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>With peppercorns and spiced salt, delicately battered. Tossed in peppercorns and spiced salsa</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/16.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Eggs Benedict</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Salmon fillet in a rich red curry with coconut milk, sweet basil leaves ,pea aubergine, and kaffir lime leaves</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/01.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>English Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>The famous hot, sour and spicy thai soup with king prawn, shimeji mushrooms, lemongrass, and lime leaf</p>
              </div>
            </div>
          </div>
          <div class="menu-body menu-left menu-white">
            <div class="menu-thumbnail">
              <img class="img-responsive center-block" src="images/dish/02.png" alt="">
            </div>
            <div class="menu-details">
              <div class="menu-title clearfix">
                <h4>Barrel's Breakfast</h4>
                <span class="price">$99.0</span>
              </div>
              <div class="menu-description">
                <p>Thai rice noodles stir-fried with bean curd, chinese chives, peanuts and beans sprouts in a special homemade sauce</p>
              </div>
            </div>
          </div>
         </div>
      </div>
  </div>
</section>
 
<!--=================================
our-menu --> 
@endsection