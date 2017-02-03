
<div class="navbar">
  <div class="navbar-inner" id="header">
    <div class="container">
      <div id="ascii_logo"><a class="brand" href="<?php echo ($content === 'frontpage') ? '#' : '/' ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="zalora-logo zalora-logo--white pts" style="
            fill: #fff;
            width: 154px;
            height: 21px;
        ">
          <polygon points="18.523,1.054 18.518,0.265 0.719,0.265 0.719,1.93 15.282,1.93 0,20.07 0,20.735 18.626,20.735
                      18.626,19.07 3.248,19.07"></polygon>
          <path d="M36.263,0.118l-9.709,20.617h2.081l3.269-6.956h9.838l3.269,6.956h2.081L37.383,0.118H36.263z
                       M40.963,12.114h-8.281l4.126-8.833L40.963,12.114z"></path>
          <polygon points="58.669,0.265 56.686,0.265 56.686,20.735 68.87,20.735 68.87,19.07 58.669,19.07   "></polygon>
          <path d="M88.688,0c-6.217,0-11.087,4.612-11.087,10.5c0,5.888,4.87,10.5,11.087,10.5
                      c6.251,0,11.147-4.612,11.147-10.5C99.836,4.612,94.939,0,88.688,0z M88.749,19.188c-5.071,0-9.044-3.816-9.044-8.688
                      c0-4.872,3.973-8.688,9.044-8.688c5.037,0,8.983,3.816,8.983,8.688C97.732,15.372,93.786,19.188,88.749,19.188z"></path>
          <path d="M119.743,10.567c2.457-0.985,3.702-2.642,3.702-4.93c0-3.363-2.628-5.371-7.031-5.371h-5.487v20.469h1.983
                      v-9.638h2.596c2.432,0,3.181,0.348,5.592,4.042l3.658,5.597h2.33l-4.854-7.242C121.318,12.157,120.58,11.136,119.743,10.567z
                       M112.909,1.93h3.171c3.392,0,5.26,1.327,5.26,3.736c0,2.428-1.846,3.765-5.199,3.765h-3.231V1.93z"></path>
          <path d="M144.291,0.118h-1.121l-9.709,20.617h2.081l3.269-6.956h9.838l3.269,6.956H154L144.291,0.118z
                       M147.871,12.114h-8.281l4.126-8.833L147.871,12.114z"></path>
        </svg>
      </a></div>
        <div>
      <ul class="nav">
<?php foreach (Configuration::get_navbar_features() as $navbar_feature) {
/*
 * For each feature that declares navbar, we will draw a link in the navbar.
 * If the feature defines custom_js_assets we will load the script here too.
 */ ?>
		<li class="<?php echo $navbar_feature['name'] ?>">
			<a  class="nav_link" href="<?php echo ($content === '/'.$navbar_feature['name']) ? '#' : '/'.$navbar_feature['name'] ?>"><?php echo ucfirst($navbar_feature['name']) ?></a><?php
			if (isset($navbar_feature['custom_js_assets'])) {
				if (!is_array($navbar_feature['custom_js_assets'])) {
					$js_assets = array($navbar_feature['custom_js_assets']);
				} else {
					$js_assets = $navbar_feature['custom_js_assets'];
				}
				foreach ($js_assets as $js_asset) {
                                    if (strpos($js_asset, "https://") === false && strpos($js_asset, "http://") === false) {
					echo "<script type=\"text/javascript\" src=\"/features/{$navbar_feature['name']}/js/{$js_asset}\"></script>";
                                    } else {
					echo "<script type=\"text/javascript\" src=\"{$js_asset}\"></script>";
                                    }
                                }
			}
?></li>
<?php } ?>

      </ul>
          <div id="search_div">
              <input id="search_field" type="text" placeholder="Search">
          </div>
          <script type="text/javascript" src="/features/search/js/search.js"></script>
      </div>
    </div>
  </div>
</div>
