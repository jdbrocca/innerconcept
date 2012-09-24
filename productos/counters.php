<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<?php include("/includes/head.php"); ?>
	<script type="text/javascript" src="../js/jquery.galleriffic.js"></script>
	<script type="text/javascript">
		$(document).on("ready", function(){

		    var gallery = $('#thumbs').galleriffic({
		        delay:                     3000, // in milliseconds
		        numThumbs:                 20, // The number of thumbnails to show page
		        preloadAhead:              40, // Set to -1 to preload all images
		        enableTopPager:            false,
		        enableBottomPager:         true,
		        maxPagesToShow:            7,  // The maximum number of pages to display in either the top or bottom pager
		        imageContainerSel:         '', // The CSS selector for the element within which the main slideshow image should be rendered
		        controlsContainerSel:      '', // The CSS selector for the element within which the slideshow controls should be rendered
		        captionContainerSel:       '', // The CSS selector for the element within which the captions should be rendered
		        loadingContainerSel:       '', // The CSS selector for the element within which should be shown when an image is loading
		        renderSSControls:          true, // Specifies whether the slideshow's Play and Pause links should be rendered
		        renderNavControls:         true, // Specifies whether the slideshow's Next and Previous links should be rendered
		        playLinkText:              'Play',
		        pauseLinkText:             'Pause',
		        prevLinkText:              'Previous',
		        nextLinkText:              'Next',
		        nextPageLinkText:          'Next &rsaquo;',
		        prevPageLinkText:          '&lsaquo; Prev',
		        enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
		        enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
		        autoStart:                 false, // Specifies whether the slideshow should be playing or paused when the page first loads
		        syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
		        defaultTransitionDuration: 1000, // If using the default transitions, specifies the duration of the transitions
		        onSlideChange:             undefined, // accepts a delegate like such: function(prevIndex, nextIndex) { ... }
		        onTransitionOut:           undefined, // accepts a delegate like such: function(slide, caption, isSync, callback) { ... }
		        onTransitionIn:            undefined, // accepts a delegate like such: function(slide, caption, isSync) { ... }
		        onPageTransitionOut:       undefined, // accepts a delegate like such: function(callback) { ... }
		        onPageTransitionIn:        undefined, // accepts a delegate like such: function() { ... }
		        onImageAdded:              undefined, // accepts a delegate like such: function(imageData, $li) { ... }
		        onImageRemoved:            undefined  // accepts a delegate like such: function(imageData, $li) { ... }
		    });

		});
	</script>
</head>
<body>
	<div id="fondo"></div>
	<div id="barracentral"></div>
	<div id="principal">
		<?php include("includes/header.php"); ?>
		<?php include("includes/menu.php"); ?>
		<section id="todo">
			<div id="leftside">
				<div id="controls"></div>
				<div id="loading"></div>
				<div id="slideshow"></div>
				<div id="caption"></div>
				<div id="thumbs">
				    <ul class="thumbs noscript">
				        <li>
				            <a class="thumb" name="optionalCustomIdentifier" href="path/to/slide" title="your image title">
				                <img src="path/to/thumbnail" alt="your image title again for graceful degradation" />
				            </a>
				            <div class="caption">
				                (Any html can go here)
				            </div>
				        </li>
				        ... (repeat for every image in the gallery)
				    </ul>
				</div>
			</div>
			<div id="rightside">
				<h1>Productos</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labor voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</section>
		<?php include("includes/footer.php"); ?>
	</div>
</body>
</html>