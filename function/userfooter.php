<div class="container-fluid footer" align="center" >
		<div class="row">
			<div class="col-lg-7">
				<div class="f_des">
				<span class="f_name">Designed & Developed By Min La Pyae</span>
				<a href="http://www.facebook.com/sharer.php?u=http://www.example.com" target="_blank"><img src="icon/facebook.png" width="50px"></a>

				<a href="http://twitter.com/share?url=http://www.example.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><img src="icon/twitter.png" width="50px"></a>

				<a href="http://instagram.com/share?url=http://www.example.com&text=Simple Share Buttons&hashtags=simplesharebuttons" target="_blank"><img src="icon/instagram.png" width="50px"></a>
			</div>
			</div>
			<div class="col-lg-5 mt-5 pt-3">

				<div>
					<h3>Contact Us</h3>
					<form action="contact/contact.php" id="footer_form" class="mb-3" method="POST">

						<input type="email" name="f_uemail" value="<?php echo $user_email?>" class="f_email" required>

						<input type="text" name="f_umsg" placeholder ="Message" class="f_msg" required>

						<!--<input type="hidden" name="usubject" name="denanime">-->

						<input type="submit" name="usend" value="Send" class="f_send">
					</form>
				</div>

			</div>
		</div>
	</div>