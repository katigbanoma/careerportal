<div class="decoration decoration-margins"></div>
				<div class="footer footer-dark">
					<a href="#" class="footer-logo scale-hover"></a>
					<p>
						Simplicity and complexity packed into a beautiful,
						feature filled, powerful, gorgeous mobile template.
					</p>
					<div class="footer-socials">
						<a href="#" class="default-link icon icon-round no-border icon-xs facebook-bg"><i class="fa fa-facebook"></i></a>
						<a href="#" class="default-link icon icon-round no-border icon-xs twitter-bg"><i class="fa fa-twitter"></i></a>
						<a href="#" class="default-link icon icon-round no-border icon-xs google-bg"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="icon icon-round no-border icon-xs back-to-top bg-night-dark"><i class="fa fa-angle-up"></i></a>
					</div>
					<div class="decoration"></div>
					<p class="copyright-text">Copyright <span id="copyright-year"></span>. All Rights Reserved.</p>
				</div>
			</div>
		</div>
		<div class="sidebar-left sidebar-light">
			<div class="sidebar-scroll">
				<div class="sidebar-header sidebar-header-background">
					<img class="sidebar-logo-image preload-image" data-original="<?php echo get_stylesheet_directory_uri()?>/images/logo.png">
					<div class="sidebar-header-controls">
						<a href="#" class="close-sidebar"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="sidebar-divider">Navigation</div>
				<div class="sidebar-menu">
					<a class="menu-item open-submenu" href="#">
						<i class="bg-green-dark fa fa-home"></i>Home
					</a>
					<div class="has-submenu">
						<a class="menu-item open-submenu active-submenu" href="#">
							<i class="bg-blue-dark fa fa-navicon"></i>Blog<em class="menu-number">1</em>
						</a>

						<div class="submenu">
							<?php $categories = get_categories();?>
							<?php // print_r($categories); ?>
							<?php foreach ($categories as $category):?>
							<a class="menu-item" href="<?php echo get_category_link($category->term_id)?>">
								<i class="fa fa-navicon"></i><?php echo $category->name?><i class="fa fa-circle"></i>
							</a>
							<?php endforeach;?>
						</div>
					</div>

					<?php
					$all_pages = get_pages();
					//print_r($all_pages)
					?>

					<?php foreach ($all_pages as $key => $page):?>
					<a class="menu-item" href="<?php echo $page->guid?>">
						<i class="bg-orange-dark fa fa-navicon"></i><?php echo $page->post_title?>
					</a>
					<?php endforeach?>
					<!-- <a class="menu-item" href="#">
							<i class="bg-orange-dark fa fa-briefcase"></i>Job Search
						</a>
						<a class="menu-item" href="mock-test.php">
							<i class="bg-orange-dark fa fa-sitemap"></i>Take a Test
					</a> -->
				</div>
				<div class="sidebar-divider no-bottom">Copyright <span class="copyright-year"></span>. All rights Reserved</div>
			</div>
		</div>
			<div class="page-menu light-footer-menu">
				<div class="footer-menu-wrapper remove-menu">
					<div class="footer-menu-scroll">
						<div class="footer-menu">
							<a href="talk-to-mentor.php" class="footer-menu-item">
								<em>Talk to a Life Coach</em><i class="scale-hover bg-red-light fa fa-comments-o"></i>
							</a>
							<a href="#" class="footer-menu-item">
								<em>Get a Job</em><i class="scale-hover bg-magenta-dark fa fa-briefcase"></i>
							</a>
							<a href="mock-test.php" class="footer-menu-item active-menu">
								<em>Take a Test</em><i class="scale-hover bg-night-dark fa fa-question"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-menu-controls light-footer-menu">
				<a href="#" class="footer-menu-open"><i class="fa fa-ellipsis-v bg-blue-dark"></i></a>
				<a href="#" class="footer-menu-close remove-menu"><i class="fa fa-times bg-red-dark"></i><em>Close</em></a>
			</div>
			<div class="footer-menu-tap-close remove-menu"></div>
				<div class="footer-menu-background light-footer-background remove-menu"></div>
					<div class="share-bottom share-light">
						<h3>Share Page</h3>
						<div class="share-socials-bottom">
							<a href="https://www.facebook.com/sharer/sharer.php?u=http://www.themeforest.net/">
								<i class="fa fa-facebook facebook-color"></i>
								Facebook
							</a>
							<a href="https://twitter.com/home?status=Check%20out%20ThemeForest%20http://www.themeforest.net">
								<i class="fa fa-twitter twitter-color"></i>
								Twitter
							</a>
							<a href="https://plus.google.com/share?url=http://www.themeforest.net">
								<i class="fa fa-google-plus google-color"></i>
								Google
							</a>
							<a href="sms:">
								<i class="fa fa-comment-o sms-color"></i>
								Text
							</a>
							<a href="#">
								<i class="fa fa-envelope-o mail-color"></i>
								Email
							</a>
							<div class="clear"></div>
						</div>
					</div>
						<div class="sidebar-tap-close"></div>
							<a href="#" class="back-to-top-badge">
								<i class="fa fa-caret-up"></i>Back to Top
							</a>
	</div>
	<script type="text/javascript">/* <![CDATA[ */(function(d,s,a,i,j,r,l,m,t){try{l=d.getElementsByTagName('a');t=d.createElement('textarea');for(i=0;l.length-i;i++){try{a=l[i].href;s=a.indexOf('/cdn-cgi/l/email-protection');m=a.length;if(a&&s>-1&&m>28){j=28+s;s='';if(j<m){r='0x'+a.substr(j,2)|0;for(j+=2;j<m&&a.charAt(j)!='X';j+=2)s+='%'+('0'+('0x'+a.substr(j,2)^r).toString(16)).slice(-2);j++;s=decodeURIComponent(s)+a.substr(j,m-j)}t.innerHTML=s.replace(/</g,'&lt;').replace(/>/g,'&gt;');l[i].href='mailto:'+t.value}}catch(e){}}}catch(e){}})(document);/* ]]> */</script>

<?php wp_footer();?>

</body>
</html>