<!--Horizontal-main -->
		<div class="sticky">
			<div class="horizontal-main hor-menu clearfix side-header">
				<div class="horizontal-mainwrapper container clearfix">
					<!--Nav-->
					<nav class="horizontalMenu clearfix">
						<ul class="horizontalMenu-list">
							<li aria-haspopup="true"><a href="{{ url('/' . $page='index') }}" class=""><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>Dashboard</a></li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg> Charts<i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-morris') }}" class="slide-item">Morris Charts</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-flot') }}" class="slide-item">Flot Charts</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-chartjs') }}" class="slide-item">ChartJS</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-echart') }}" class="slide-item">Echart</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-sparkline') }}" class="slide-item">Sparkline</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='chart-peity') }}" class="slide-item"> Chart-peity</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> E-Commerce<i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='products') }}" class="slide-item"> Products</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='product-details') }}" class="slide-item">Product-Details</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='product-cart') }}" class="slide-item">Shopping Cart</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg> Elements<i class="fe fe-chevron-down horizontal-icon"></i></a>
								<div class="horizontal-megamenu clearfix">
									<div class="container">
										<div class="mega-menubg hor-mega-menu">
											<div class="row">
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">

													<ul>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Elements</h3></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='alerts') }}" class="slide-item">Alerts</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='avatar') }}" class="slide-item">Avatar</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='breadcrumbs') }}" class="slide-item">Breadcrumbs</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='buttons') }}" class="slide-item">Buttons</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='badge') }}" class="slide-item">Badge</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='dropdown') }}" class="slide-item">Dropdown</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='thumbnails') }}" class="slide-item">Thumbnails</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='images') }}" class="slide-item">Images</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='list-group') }}" class="slide-item">List Group</a></li>

													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='navigation') }}" class="slide-item">Navigation</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='pagination') }}" class="slide-item">Pagination</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='popover') }}" class="slide-item">Popover</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='progress') }}" class="slide-item">Progress</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='spinners') }}" class="slide-item">Spinners</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='media-object') }}" class="slide-item">Media Object</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='typography') }}" class="slide-item">Typography</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='tooltip') }}" class="slide-item">Tooltip</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='toast') }}" class="slide-item">Toast</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='tags') }}" class="slide-item">Tags</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='tabs') }}" class="slide-item">Tabs</a></li>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Apps</h3></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='cards') }}" class="slide-item">Cards</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='darggablecards') }}" class="slide-item">Darggablecards</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='rangeslider') }}" class="slide-item">Range-slider</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='calendar') }}" class="slide-item">Calendar</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='contacts') }}" class="slide-item">Contacts</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='image-compare') }}" class="slide-item">Image-compare</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='notification') }}" class="slide-item">Notification</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='widget-notification') }}" class="slide-item">Widget-notification</a></li>
													</ul>
												</div>
												<div class="col-lg-3 col-md-12 col-xs-12 link-list">
													<ul>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='treeview') }}" class="slide-item">Treeview</a></li>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Icons <span class="badge badge-danger ">New</span></h3></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='icons') }}" class="slide-item">Icons</a></li>
														<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Maps</h3></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='map-leaflet') }}" class="slide-item">Mapel Maps</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='map-vector') }}" class="slide-item">Vector Maps</a></li>

														<li><h3 class="fs-14 font-weight-bold mb-1 mt-2">Tables</h3></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='table-basic') }}" class="slide-item">Basic Tables</a></li>
														<li aria-haspopup="true"><a href="{{ url('/' . $page='table-data') }}" class="slide-item">Data Tables</a></li>

													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg> Advanced UI <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='accordion') }}" class="slide-item"> Accordion</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='carousel') }}" class="slide-item" >Carousel</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='collapse') }}" class="slide-item">Collapse</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='modals') }}" class="slide-item">Modals</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='timeline') }}" class="slide-item">Timeline</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='sweet-alert') }}" class="slide-item">Sweet Alert</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='rating') }}" class="slide-item">Ratings</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='counters') }}" class="slide-item">Counters</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='search') }}" class="slide-item">Search</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='userlist') }}" class="slide-item"> Userlist</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='blog') }}" class="slide-item">Blog</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg> Utilities <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='background') }}" class="slide-item">Background</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='border') }}" class="slide-item">Border</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='display') }}" class="slide-item">Display</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='flex') }}" class="slide-item">Flex</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='height') }}" class="slide-item">Height</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='margin') }}" class="slide-item">Margin</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='padding') }}" class="slide-item">Padding</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='position') }}" class="slide-item">Position</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='width') }}" class="slide-item">Width</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='extras') }}" class="slide-item">Extras</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" class="side-menu__icon" viewBox="0 0 24 24" ><g><rect fill="none"/></g><g><g/><g><path d="M21,5c-1.11-0.35-2.33-0.5-3.5-0.5c-1.95,0-4.05,0.4-5.5,1.5c-1.45-1.1-3.55-1.5-5.5-1.5S2.45,4.9,1,6v14.65 c0,0.25,0.25,0.5,0.5,0.5c0.1,0,0.15-0.05,0.25-0.05C3.1,20.45,5.05,20,6.5,20c1.95,0,4.05,0.4,5.5,1.5c1.35-0.85,3.8-1.5,5.5-1.5 c1.65,0,3.35,0.3,4.75,1.05c0.1,0.05,0.15,0.05,0.25,0.05c0.25,0,0.5-0.25,0.5-0.5V6C22.4,5.55,21.75,5.25,21,5z M3,18.5V7 c1.1-0.35,2.3-0.5,3.5-0.5c1.34,0,3.13,0.41,4.5,0.99v11.5C9.63,18.41,7.84,18,6.5,18C5.3,18,4.1,18.15,3,18.5z M21,18.5 c-1.1-0.35-2.3-0.5-3.5-0.5c-1.34,0-3.13,0.41-4.5,0.99V7.49c1.37-0.59,3.16-0.99,4.5-0.99c1.2,0,2.4,0.15,3.5,0.5V18.5z"/><path d="M11,7.49C9.63,6.91,7.84,6.5,6.5,6.5C5.3,6.5,4.1,6.65,3,7v11.5C4.1,18.15,5.3,18,6.5,18 c1.34,0,3.13,0.41,4.5,0.99V7.49z" opacity=".3"/></g><g><path d="M17.5,10.5c0.88,0,1.73,0.09,2.5,0.26V9.24C19.21,9.09,18.36,9,17.5,9c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,10.69,16.18,10.5,17.5,10.5z"/><path d="M17.5,13.16c0.88,0,1.73,0.09,2.5,0.26V11.9c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,13.36,16.18,13.16,17.5,13.16z"/><path d="M17.5,15.83c0.88,0,1.73,0.09,2.5,0.26v-1.52c-0.79-0.15-1.64-0.24-2.5-0.24c-1.28,0-2.46,0.16-3.5,0.47v1.57 C14.99,16.02,16.18,15.83,17.5,15.83z"/></g></g></svg>Pages <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='profile') }}" class="slide-item">Profile</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='editprofile') }}" class="slide-item">Edit-profile</a></li>
									<li aria-haspopup="true" class="sub-menu-sub"><a href="{{ url('/' . $page='#') }}">Mail</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{ url('/' . $page='mail') }}" class="slide-item">Mail-inbox</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='mail-compose') }}" class="slide-item">Mail-compose</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='mail-read') }}" class="slide-item">Mail-read</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='mail-settings') }}" class="slide-item">Mail-settings</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='chat') }}" class="slide-item">Chat</a></li>

										</ul>
									</li>
									<li aria-haspopup="true" class="sub-menu-sub"><a href="{{ url('/' . $page='#') }}">Forms</a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-elements') }}" class="slide-item">Form Elements</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-advanced') }}" class="slide-item">Advanced Forms</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-layouts') }}" class="slide-item">Form Layouts</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-validation') }}" class="slide-item">Form Validation</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-wizards') }}" class="slide-item">Form Wizards</a></li>
											<li aria-haspopup="true"><a href="{{ url('/' . $page='form-editor') }}" class="slide-item">WYSIWYG Editor</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='invoice') }}" class="slide-item">Invoice</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='todotask') }}" class="slide-item">Todotask</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='pricing') }}" class="slide-item">Pricing</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='gallery') }}" class="slide-item">Gallery</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='faq') }}" class="slide-item">Faqs</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='empty') }}" class="slide-item">Empty Page</a></li>
								</ul>
							</li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='widgets') }}" class=""><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> Widgets </a></li>
							<li aria-haspopup="true"><a href="{{ url('/' . $page='#') }}" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 20h12V10H6v10zm6-7c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z" opacity=".3"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zM9 6c0-1.66 1.34-3 3-3s3 1.34 3 3v2H9V6zm9 14H6V10h12v10zm-6-3c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2z"/></svg> Custom <i class="fe fe-chevron-down horizontal-icon"></i></a>
								<ul class="sub-menu">
									<li aria-haspopup="true"><a href="{{ url('/' . $page='signin') }}" class="slide-item">Sign In</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='signup') }}" class="slide-item">Sign Up</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='forgot') }}" class="slide-item">Forgot Password</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='reset') }}" class="slide-item">Reset Password</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='lockscreen') }}" class="slide-item">Lock screen</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='underconstruction') }}" class="slide-item">UnderConstruction</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='404') }}" class="slide-item">404 Error</a></li>
									<li aria-haspopup="true"><a href="{{ url('/' . $page='500') }}" class="slide-item">500 Error</a></li>
								</ul>
							</li>
						</ul>
					</nav>
					<!--Nav-->
				</div>
			</div>
		</div>
<!--Horizontal-main -->
