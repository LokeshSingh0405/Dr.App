<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ex</title>
    <style>
        
        	.contact-method {
		margin: 0 0 2em 0;
		padding-left: 3.25em;
		position: relative;
	}

		.contact-method .icon {
			left: 0;
			position: absolute;
			top: 0;
		}

		.contact-method h3 {
			margin: 0 0 0.5em 0;
		}
        #contact {
		border-bottom: solid 1px rgba(212, 212, 255, 0.1);
		overflow-x: hidden;
	}

		#contact > .inner {
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
			padding: 0 !important;
		}

			#contact > .inner > :nth-child(2n - 1) {
				padding: 4em 3em 2em 0 ;
				border-right: solid 1px rgba(212, 212, 255, 0.1);
				width: 60%;
			}

			#contact > .inner > :nth-child(2n) {
				padding-left: 3em;
				width: 40%;
			}

			#contact > .inner > .split {
				padding: 0;
			}

				#contact > .inner > .split > * {
					padding: 3em 0 1em 3em ;
					position: relative;
				}

					#contact > .inner > .split > *:before {
						border-top: solid 1px rgba(212, 212, 255, 0.1);
						content: '';
						display: block;
						margin-left: -3em;
						position: absolute;
						top: 0;
						width: calc(100vw + 3em);
					}

				#contact > .inner > .split > :first-child:before {
					display: none;
				}

		@media screen and (max-width: 980px) {

			#contact > .inner {
				display: block;
			}

				#contact > .inner > :nth-child(2n - 1) {
					padding: 4em 0 2em 0 ;
					border-right: 0;
					width: 100%;
				}

				#contact > .inner > :nth-child(2n) {
					padding-left: 0;
					width: 100%;
				}

				#contact > .inner > .split > * {
					padding: 3em 0 1em 0 ;
				}

				#contact > .inner > .split > :first-child:before {
					display: block;
				}

		}

		@media screen and (max-width: 736px) {

			#contact > .inner > :nth-child(2n - 1) {
				padding: 3em 0 1em 0 ;
			}

		}

/* Footer */

	#footer .copyright {
		font-size: 0.8em;
		list-style: none;
		padding-left: 0;
	}

		#footer .copyright li {
			border-left: solid 1px rgba(212, 212, 255, 0.1);
			color: rgba(244, 244, 255, 0.2);
			display: inline-block;
			line-height: 1;
			margin-left: 1em;
			padding-left: 1em;
		}

			#footer .copyright li:first-child {
				border-left: 0;
				margin-left: 0;
				padding-left: 0;
			}

	@media screen and (max-width: 480px) {

		#footer .copyright li {
			display: block;
			border-left: 0;
			margin-left: 0;
			padding-left: 0;
			line-height: inherit;
		}

	}
        #menu .inner {
			-moz-transition: -moz-transform 0.35s ease-out, opacity 0.35s ease, visibility 0.35s;
			-webkit-transition: -webkit-transform 0.35s ease-out, opacity 0.35s ease, visibility 0.35s;
			-ms-transition: -ms-transform 0.35s ease-out, opacity 0.35s ease, visibility 0.35s;
			transition: transform 0.35s ease-out, opacity 0.35s ease, visibility 0.35s;
			-moz-transform: rotateX(20deg);
			-webkit-transform: rotateX(20deg);
			-ms-transform: rotateX(20deg);
			transform: rotateX(20deg);
			-webkit-overflow-scrolling: touch;
			max-width: 100%;
			max-height: 100vh;
			opacity: 0;
			overflow: auto;
			text-align: center;
			visibility: hidden;
			width: 18em;
		}

			#menu .inner > :first-child {
				margin-top: 2em;
			}

			#menu .inner > :last-child {
				margin-bottom: 3em;
			}

    </style>
</head>
<body>
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">information@untitled.tld</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(000) 000-0000 x12387</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Address</h3>
										<span>1234 Somewhere Road #5432<br />
										Nashville, TN 00000<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			
</body>
</html>