<?php
/*
Template name: Contact Template

*/
get_header(); ?>
<div id="primary">
	<div id="content" role="main">
		<font color="#FF0000">
			<?php
			if(isset($_POST['submit']))
			{
				$flag=1;
				if($_POST['yourname']=='')
				{
					$flag=0;
					echo "Please Enter Your Name<br>";
				}
				else if(!preg_match('/[a-zA-Z_x7f-xff][a-zA-Z0-9_x7f-xff]*/',$_POST['yourname']))
				{
					$flag=0;
					echo "Please Enter Valid Name<br>";
				}
				if($_POST['email']=='')
				{
					$flag=0;
					echo "Please Enter E-mail<br>";
				}
				else if(!eregi("^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,3})$", $_POST['email']))
				{
					$flag=0;
					echo "Please Enter Valid E-Mail<br>";
				}
				if($_POST['subject']=='')
				{
					$flag=0;
					echo "Please Enter Subject<br>";
				}
				if($_POST['message']=='')
				{
					$flag=0;
					echo "Please Enter Message";
				}
				if ( empty($_POST) )
				{
					print 'Sorry, your nonce did not verify.';
					exit;
				}
				else
				{
					if($flag==1)
					{
						wp_mail(get_option("admin_email"),trim($_POST[yourname])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[message])),"From: ".trim($_POST[yourname])." <".trim($_POST[email]).">rnReply-To:".trim($_POST[email]));
						echo "Mail Successfully Sent";
					}
				}
			}
			?>
		</font>
		<section class="contact-header">
			<h3>Didnt find the right tool for the job, or just wanted to say how aswesome the site is?</h3>
			<h3>Send us a message, Peace!</h3>
		</section>
		<form method="post" id="contactus_form">
			Your Name:<input type="text" name="yourname" id="yourname" rows="1" value="" />
			<br /><br />
			Your Email:<input type="text" name="email" id="email" rows="1" value="" />
			<br /><br />
			Subject:<input type="text" name="subject" id="subject" rows="1" value=""></p>
			<br /><br />
			Leave a Message:<textarea name="message" id="message" ></textarea>
			<br /><br />
			<input type="submit" name="submit" id="submit" value="Send"/>
		</form>
	</div><!-- #content -->
</div><!-- #primary -->
<?php
get_footer();
?>