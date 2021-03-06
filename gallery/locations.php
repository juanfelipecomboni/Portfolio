<!doctype html>
<html>
	<head>
		<?php
		include '../Header.php';
		?>
	<title>Architectural</title>

	</head>
	<body>
		<div class="container">
			<h1><img src="images/JFClogos.png" width="385" height="137" alt="logo"><span>Architectural Shots</span></h1>
			<div id="wrapper">
					<div id="menu">
								<ul class="bmenu">
										<li><a href="../index.php">Home</a></li>
										<li><a href="../gallery/index.php">Gallery</a></li>
										<li><a href="../web/index.php">Websites</a></li>
										<li><a href="../about/index.php">About Me</a></li>
										<li><a href="../contact/index.php">Contact</a></li>
								</ul>
						</div>
			<div class="wrapper">
				<ul id="sb-slider" class="sb-slider">
					<li>
						<a href="#"><img src="images/InteriorShot.jpg" alt="image1"/></a>
						<div class="sb-description">
							<h3>Euler StairWell</h3>
						</div>
					</li>
					<li>
						<a href="#"><img src="images/bellTower.jpg" alt="image2"/></a>
						<div class="sb-description">
							<h3>Bell Tower at Taylor University</h3>
						</div>
					</li>
                    <li>
						<a href="#"><img src="images/luzSnow.jpg" alt="image3"/></a>
						<div class="sb-description">
							<h3>Snow day</h3>
						</div>
					</li>
				</ul>

				<div id="shadow" class="shadow"></div>

				<div id="nav-arrows" class="nav-arrows">
					<a href="#">Next</a>
					<a href="#">Previous</a>
				</div>

                <div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
                    <span></span>
				</div>

			</div><!-- /wrapper -->
			<p class="info"> Juan Felipe Comboni | © Copyright 2013 - Present | JFCinc.</p>
            </div><!-- /out-wrapper -->

		</div><!-- /container -->
		<script type="text/javascript" src="_js/jquery.slicebox.js"></script>
		<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$navDots = $( '#nav-dots' ).hide(),
						$nav = $navDots.children( 'span' ),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$navDots.show();
								$shadow.show();

							},
							onBeforeChange : function( pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();

						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {

								slicebox.previous();
								return false;

							} );

							$nav.each( function( i ) {

								$( this ).on( 'click', function( event ) {

									var $dot = $( this );

									if( !slicebox.isActive() ) {

										$nav.removeClass( 'nav-dot-current' );
										$dot.addClass( 'nav-dot-current' );

									}

									slicebox.jump( i + 1 );
									return false;

								} );

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
	</body>
</html>
