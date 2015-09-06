@extends('layouts.master')
@section('content')
<?php		$i=1;?>
		
		<div class="slider_wrapper">
			<div id="camera_wrap" class="">
			@foreach($bannerDetails as $bannerDetail)
			<?php
      $path ='uploads/banners/'. $bannerDetail->bannerImage;
	 ?>
				<div data-src="{{$path}}">
					<div class="caption fadeIn">
						<h2>LONDON</h2>
						<div class="price">
							FROM
							<span>$1000</span>
						</div>
						<a href="#">LEARN MORE</a>
					</div>
				</div>
				<?php $i++;?>
				@endforeach
			</div>
		</div>

						
<!--==============================Content=================================-->
		<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
			<div class="container_12">
			@foreach($hotelLists as $hotelList)
				<div class="grid_4">
					<div class="banner">
						   <?php
      $path ='uploads/hotels/thumbnailImage/'. $hotelList->thumbImage;
	 ?>
						<img src="{{$path}}" alt="">
						<div class="label">
							<div class="title">{{$hotelList->title}}</div>
							<div class="price">PRICE<span>{{$hotelList->price}}</span></div>
							<a href="#">LEARN MORE</a>
						</div>
					</div>
				</div>
				@endforeach
				<div class="clear"></div>
				<div class="grid_6">
					<h3>Booking Form</h3>
					  <form id="bookingForm" method="post" action="{{ url('/bookingaction') }}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="fl1">
							<div class="tmInput">
								<input name="name" placeHolder="Name" type="text" data-constraints='@NotEmpty @Required @AlphaSpecial'>
							</div>
							<div class="tmInput">
								<input name="location" placeHolder="Location" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="fl1">
							<div class="tmInput">
								<input name="email" placeHolder="Email:" type="text" data-constraints="@NotEmpty @Required @Email">
							</div>
							<div class="tmInput mr0">
								<input name="hotelName" placeHolder="Hotel Name" type="text" data-constraints="@NotEmpty @Required">
							</div>
						</div>
						<div class="clear"></div>
						<strong>Check-in</strong>
						<label class="tmDatepicker">
							<input type="text" name="checkIn" placeHolder='10/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<strong>Check-out</strong>
						<label class="tmDatepicker">
							<input type="text" name="CheckOut" placeHolder='20/05/2014' data-constraints="@NotEmpty @Required @Date">
						</label>
						<div class="clear"></div>
						<div class="tmRadio">
							<p>Type</p>
							<span>Deluxe</span>
							<input name="type" type="radio" id="tmRadio1" data-constraints='@RadioGroupChecked(name="type", groups=[RadioGroup])' />
							<span>Standard</span>
							<input name="type" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="type", groups=[RadioGroup])' />
							<span>Club</span>
							<input name="type" type="radio" id="tmRadio2" data-constraints='@RadioGroupChecked(name="type", groups=[RadioGroup])' />
							<span>Exectute</span>
							<input name="type" type="radio" id="tmRadio0" data-constraints='@RadioGroupChecked(name="type", groups=[RadioGroup])' checked/>
						</div>
						<div class="clear"></div>
						<div class="fl1 fl2">
							<em>Adults</em>
							<select name="adult" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
							<?php for($i=1; $i<=20;$i++){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
							</select>
							<div class="clear"></div>
							<em>Rooms</em>
							<select name="RoomNo" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
						  <?php for($i=1; $i<=20;$i++){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
							</select>
						</div>
						<div class="fl1 fl2">
							<em>Children</em>
							<select name="children" class="tmSelect auto" data-class="tmSelect tmSelect2" data-constraints="">
							<?php for($i=1; $i<=20;$i++){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
							</select>
						</div>
						<div class="clear"></div>
						<div class="tmTextarea">
							<textarea name="message" placeHolder="Message" data-constraints='@NotEmpty @Required @Length(min=20,max=999999)'></textarea>
						</div>
						<input type="submit" name="Submit">
					</form>
				</div>

				<div class="grid_5 prefix_1">
					<h3>Welcome</h3>
					<img src="{{asset('public/images/page1_img1.jpg')}}" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p>Lorem ipsum dolor sit ere amet, consectetur ipiscin.</p>
						In mollis erat mattis neque facilisis, sit ametiol
					</div>
					<div class="clear cl1"></div>
					<p>Find the detailed description of this <span class="col1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="dofollow">freebie</a></span> at TemplateMonster blog.</p>
					<p><span class="col1"><a href="http://www.templatemonster.com/category/travel-website-templates/" rel="nofollow">Travel Website Templates</a></span> category offers you a variety of designs that are perfect for travel sphere of business.</p>
					Proin pharetra luctus diam, a scelerisque eros convallis
					<h4>Clients’ Quotes</h4>
					<blockquote class="bq1">
						<img src="{{asset('public/images/page1_img2.jpg')}}" alt="" class="img_inner noresize fleft">
						<div class="extra_wrapper">
							<p>Duis massa elit, auctor non pellentesque vel, aliquet sit amet erat. Nullam eget dignissim nisi, aliquam feugiat nibh. </p>
							<div class="alright">
								<div class="col1">Miranda Brown</div>
								<a href="#" class="btn">More</a>
							</div>
						</div>
					</blockquote>
				</div>
				<div class="grid_12">
					<h3 class="head1">Latest News</h3>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">10<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Aliquam nibh</a></div>
							Proin pharetra luctus diam, any scelerisque eros convallisumsan. Maecenas vehicula egestas
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">21<span>Jan</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">Etiam dui eros</a></div>
							Any scelerisque eros vallisumsan. Maecenas vehicula egestas natis. Duis massa elit, auctor non
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="block1">
						<time datetime="2014-01-01">15<span>Feb</span></time>
						<div class="extra_wrapper">
							<div class="text1 col1"><a href="#">uamnibh Edeto</a></div>
							Ros convallisumsan. Maecenas vehicula egestas venenatis. Duis massa elit, auctor non
						</div>
					</div>
				</div>
			</div>
		</div>
		@stop