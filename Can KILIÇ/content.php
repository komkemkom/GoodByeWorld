 <!-- Content
   ================================================== -->
   <div id="content-wrap">

   	<div class="row">

   		<div id="main" class="eight columns">
   		<?php foreach (icerikgetir() as $icerik) {?>
   			
	   		<article class="entry">

					<header class="entry-header">

						<h2 class="entry-title">
							<a href="single.html" title=""><?php echo $icerik['baslik']; ?></a>
						</h2> 				 
					
						<div class="entry-meta">
							<ul>
								<li><?php echo $icerik['tarih']; ?></li>
								<span class="meta-sep">&bull;</span>								
								<li><a href="#" title="" rel="category tag"><?php echo $icerik['ad']; ?></a></li>
								<span class="meta-sep">&bull;</span>
								<li><?php echo $icerik['kuladi']; ?></li>
							</ul>
						</div> 
					 
					</header> 
					
					<div class="entry-content">
						<p><?php echo $icerik['icerik']; ?></p>
					</div> 

				</article> <!-- end entry -->
						

   		<?php } ?> 
   		</div> <!-- end main -->

   		<div id="sidebar" class="four columns">

   			<div class="widget widget_search">
                  <h3>Search</h3> 
                  <form action="#">

                     <input type="text" value="Search here..." onblur="if(this.value == '') { this.value = 'Search here...'; }" onfocus="if (this.value == 'Search here...') { this.value = ''; }" class="text-search">
                     <input type="submit" value="" class="submit-search">

                  </form>
               </div>

   			<div class="widget widget_categories group">
   				<h3>Categories.</h3> 
   				<ul><?php foreach (kategorigetir() as $kategori) { ?>
   					<li><a href="#" title=""><?php echo $kategori['ad'] ?></a> (<?php echo $kategori['say']; ?>)</li>
   				<?php } ?> 
						
					</ul>
				</div>

				<div class="widget widget_text group">
					<h3>Widget Text.</h3>

   				<p>Lorem ipsum Ullamco commodo laboris sit dolore commodo aliquip incididunt fugiat esse dolor aute fugiat minim eiusmod do velit labore fugiat officia ad sit culpa labore in consectetur sint cillum sint consectetur voluptate adipisicing Duis irure magna ut sit amet reprehenderit.</p>

   			</div>

   			<div class="widget widget_tags">
               <h3>Post Tags.</h3>

               <div class="tagcloud group">
                	<a href="#">Corporate</a>
                  <a href="#">Onepage</a>
                  <a href="#">Agency</a>
                  <a href="#">Multipurpose</a>
                  <a href="#">Blog</a>
                  <a href="#">Landing Page</a>
                  <a href="#">Resume</a>
               </div>
                  
            </div>

            <div class="widget widget_popular">
               <h3>Popular Post.</h3>

               <ul class="link-list">
                  <li><a href="#">Sint cillum consectetur voluptate.</a></li>
                  <li><a href="#">Lorem ipsum Ullamco commodo.</a></li>
                  <li><a href="#">Fugiat minim eiusmod do.</a></li>                     
               </ul>
                  
            </div>
   			
   		</div> <!-- end sidebar -->

   	</div> <!-- end row -->

   </div> <!-- end content-wrap -->
   