<?php
include './includes/connect.php';
?>
<?php
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);
$news = "";
if( isset( $_POST['news'])) {
  $news = $_REQUEST['news']; 

// $news =  $_REQUEST['news'];

// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO newsletter (email) VALUE ('$news')";

if(mysqli_query($conn, $sql)){
  // header("index.php");
} else{
  echo "ERROR: Hush! Sorry $sql. " 
      . mysqli_error($conn);
}
}
// Close co$conection
mysqli_close($conn);
?>
<style>
	
	.footer
{
	display: block;
	background: black;
	padding-top: 48px;
	padding-bottom: 48px;
}
.footer .logo
{
	position: relative;
	top: auto;
	left: auto;
	-webkit-transform: none;
	-moz-transform: none;
	-ms-transform: none;
	-o-transform: none;
	transform: none;
}
.footer .logo a
{
	color: rgba(255,255,255,0.3);
}
.footer_content_row
{
	margin-top: 34px;
}
.footer_title
{
	font-size: 24px;
	color: darkgray;
	font-weight: 700;
	line-height: 1.2;
    letter-spacing: 0.03em;
    font-family:'Aeonik' sans-serif;
    
}
.location-p{
    color: #eee;
    letter-spacing: 0.09rem;
    font-weight: 600;
    line-height: 1.5;
    font-size: 13px;
    
    font-family:'Aeonik' sans-serif;
}
.footer_list
{
	-webkit-column-count: 2;
	-moz-column-count: 2;
	column-count: 2;
	margin-top: 63px;
}
.footer_list > div > div
{
	display: inline-block;
	height: 20px;
	background: #ff3500;
	border-radius: 3px;
	margin-bottom: 5px;
	margin-bottom: 10px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.footer_list  > div > div:hover
{
	background: #2e3038;
}
.footer_list  > div > div a
{
	display: block;
	position: relative;
	width: 100%;
	height: 100%;
	font-size: 12.73px;
	line-height: 20px;
	color: #FFFFFF;
	font-weight: 500;
	padding-left: 6px;
	padding-right: 7px;
    font-family:'Aeonik' sans-serif;
}
.footer_social_row
{
	margin-top: 50px;
}
.footer_social ul li
{
	width: 45px;
	height: 45px;
	border: solid 1px #FFFFFF;
	box-shadow: 0 0 1px 0px #FFFFFF inset, 0 0 1px 0px #FFFFFF;
	border-radius: 50%;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.footer_social ul li:not(:last-of-type)
{
	margin-right: 7px;
}
.footer_social ul li a
{
	display: block;
    width: 100%;
    height: 100%;
    text-align: center;
}
.footer_social ul li a i
{
	font-size: 18px;
	color: #FFFFFF;
	line-height: 43px;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    font-family:'Aeonik' sans-serif;
}
.footer_social ul li:hover
{
	border-color: #ff3500;
	box-shadow: 0 0 1px 0px #ff3500 inset, 0 0 1px 0px #ff3500;
}
.footer_social ul li:hover a i
{
	color: #ff3500;
}
.latest_container
{
	margin-top: 30px;
}
.latest_container a {
    text-decoration: none;
}
.latest:not(:last-child)
{
	margin-bottom: 36px;
}
.latest_play
{
	width: 16px;
	height: 16px;
	opacity: 0.5;
	margin-top: 2px;
}
.latest_play svg
{
	max-width: 100%;
	max-height: 100%;
	vertical-align: top;
}
.latest_play svg path
{
	fill: rgba(255,255,255,0.5);
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}
.latest_title_container:hover .latest_play svg path
{
	fill: #ff3500;
}
.latest_title_content
{
	padding-left: 11px;
}
.latest_title
{
	
	color: #eee;
	line-height: 1.2;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.5;
    letter-spacing: 0.09rem;
    font-family:'Aeonik' sans-serif;
}
.latest_title_container:hover .latest_title
{
	color: #ff3500;
}
.latest_episode_info
{
	margin-top: 6px;
	padding-left: 27px;
}
.latest_episode_info ul li:not(:last-of-type)::after
{
	display: inline-block;
	content: '|';
	font-size: 12px;
	color: #FFFFFF;
	margin-left: 10px;
	margin-right: 10px;
}
.latest_episode_info ul li a
{
	font-size: 12px;
	font-weight: 300;
	color: #FFFFFF;
    margin-left: -33px;
}
.latest_episode_info ul li a:hover
{
	color: #ff3500;
}


@media(max-width:1080px) {
  
    a.facebook-footer,
    a.twitter-footer {
        font-size: 0.7em;
        padding: 0.5em 0.5em;
    }
    footer h3 {
        font-size: 1rem;
        font-family:'Aeonik' sans-serif;
    }
    footer p,
    footer ul li,
    .blog-grid-right h5 {
        font-size: 0.8rem;
        line-height: 26px;
        letter-spacing: 1px;
        font-family:'Aeonik' sans-serif;
        
    }
    .about-in h5.card-title {
        font-size: 0.9em;
    }
}
/* news letter */

.news-letter-form {
  margin-top: 15px;
}
.news-letter-form input {
  width: 100%;
  padding: 12px 25px;
  background-color: snow;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  border: none;
  font-size: 15px;
  letter-spacing: 0.09rem;
    font-weight: 500;
    line-height: 1.5;
    font-family:'Aeonik' sans-serif;
}

.news-letter-form input[type="submit"] {
  width: auto;
  border: none;
  background-color: slategray;
  padding: 9px 30px;
  margin-top: 20px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  -o-border-radius: 5px;
  color: #eee;
  font-size: 15px;
  letter-spacing: 0.09rem;
    font-weight: 600;
    line-height: 1.5;
    font-family:'Aeonik' sans-serif;
}
/* end of news letter */
@media(max-width:991px) {
   
    a.facebook-footer,
    a.twitter-footer {
        font-size: 0.9em;
        padding: 0.5em 1em;
    }
    footer h3 {
        font-size: 1rem;
        margin-top: 2rem;
    }
    h3.tittle {
        font-size: 2.3em;
    }
.latest{
    margin-top: 20px;
}
  
.footer_title {
    margin-top: 20px; 
}
  .foot p {
    font-size: 12px;
  } 
}
.form-1 p {
    color: #c2fbd7;
    font-size: 13px;
    font-weight: 600;
    line-height: 1.5;
    letter-spacing: 0.09rem;
    font-family:'Aeonik' sans-serif;
}




/* CSS */
.button-30 {
  align-items: center;
  margin-top: 30px;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 4px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  color: #36395A;
  cursor: pointer;
  display: inline-flex;
  font-family: 'Aeonik' sans-serif;
  height: 40px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 18px;
}

.button-30:focus {
  box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.button-30:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);
}

.button-30:active {
  box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);
}
	#progress { 
                display: none;
                color: green; 
            }
</style>



<footer class="footer panel gray">
		<div class="container">
			<div class="row footer_logo_row">
				<div class="col d-flex flex-row align-items-center justify-content-center">
					<div class="logo1">
						<img src="images/logo.png" style="width: 120px;">
						<!--<a href="#"><span>my</span>podcast<img src="images/play.png" alt=""></a>-->
					</div>
				</div>
			</div>
			<div class="row footer_content_row">
				
				<!-- Tags -->
				<div class="col-lg-3 ">
					<div class="footer_title">Location</div>
					<p class="mt-5 location-p" style="" >
                    126 Westmuir Street, G31 5BW Glasgow, UK</p>
					<div id="hero">
                    <a href="./contact.php" class="btn-book" target="_blank" ref="noreferrer">Contact Us</a>
                    </div>
					
				</div>

				<div class="col-lg-3">
					<div class="footer_title">About Us</div>
					<div class="latest_container">
						
						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#" style="">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Our ministries</div>
										</div>
									</div>
								</a>
							</div>
							<div class="latest_episode_info">
							
							</div>
						</div>

						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Sermons</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Outreach</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

					</div>
					
				</div>

				<!-- Latest Episodes -->
				<div class="col-lg-3">
					<div class="footer_title">Quick Links</div>
					<div class="latest_container">
						
						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Ministry</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Give</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>
                        <div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Prayer Request</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

                        <div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
								<a href="#">
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div class="latest_play">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714" style="enable-background:new 0 0 714 714;" xml:space="preserve">
												<g id="Play">
													<path d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z" fill="#FFFFFF"/>
												</g>
											</svg>
										</div>
										<div class="latest_title_content">
											<div class="latest_title">Blog</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

					</div>
				</div>

				<div class="col-lg-3 form-1">
					<div class="footer_title">Stay Connected</div>
					
                    <p style="color: #eee; margin-top:20px;">Join Our Mailing List</p>
					<div class="latest_container">
						
						<!-- Latest -->
						<div class="latest">
							<div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
							<form class="news-letter-form" action="#" id="formm" onsubmit="event.preventDefault();" method="post">
                  <input type="email" id="input" name="news" id="news-email" required placeholder="Your email address">
				  <button id="showB" class="button-30" type="submit" value="Send"  name='submit'>Submit</button>
                  <!-- <input type="" value="Send"  name='submit' > -->
                </form>
				
							</div>
							<div id="progress">Thanks! Keep an eye on your inbox for updates.</div>
						</div>

						<!-- Latest -->
						
						

					</div>
				</div>

				<!-- Social -->
				
			</div>
                <div class="row footer_social_row">
                    <div class="col" style="text-align: center;">
                        <div class="footer_social">
                            <ul class="d-flex flex-row align-items-center justify-content-center" style="list-style-type: none;  ">
                                <li><a href="/" target="_blank"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>

                        </br></br>
                    </div>
                </div>
            </div>
      
	</footer>
    <div class="foot" style="background-color: rgb(34, 35, 38); color:#eee; height: 60px;;">
    <p style="justify-content: center; text-align:center;padding-top: 15px;">
    &copy; <script>document.write(new Date().getFullYear());</script> Copyright Glorious Vision. All rights reserved 
    </p>
     </div>
	 <script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
<script type="text/javascript">
	
		$("form").submit(function(check){
  $.post($(this).attr("action"), $(this).serialize());
 
  return false;

 
}
 
);

$('#showB').click(function(){
	$('#progress').show();
    $('#formm').hide();
 $('#formm').submit();
});
	
 
</script>

	