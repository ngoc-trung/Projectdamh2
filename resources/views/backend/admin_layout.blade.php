
<!DOCTYPE html>
<head>
<title>Trang Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
<!-- phan trang -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" type="text/css"/>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">

<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">


<meta name="csrf-token" content="{{csrf_token() }}" />

<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
<script src="{{asset('public/backend/js/morris.js')}}"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{URL::to('/dashboard')}}" class="logo">
	     ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img style="height: 35px;" src="{{asset('public/frontend/assets/img/team/trug.jpg')}}">
                <span class="username">
				@php
					$name = Auth::user();
					if ($name) {
						echo $name ;
					}
				@endphp
				</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout-auth')}}"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Tổng quan</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-book"></i>
                        <span>Danh mục sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{URL::to('/add-category-product')}}">Thêm danh mục sản phẩm</a></li>
						<li><a href="{{URL::to('/all-category-product')}}">Liệt kê danh mục sản phẩm</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="">
                        <i class="fa fa-file-text-o"></i>
                        <span> Đơn hàng</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="{{URL::to('/customer')}}">
					<i class="fa fa-user"></i>
                        <span>Quản lý khách hàng</span>
                    </a>
				</li>
				<li>
					<a href="">
                        <i class="fa fa-cc-discover"></i>
                        <span>Quản lý nhãn hàng</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/add-brand-product')}}">Thêm Thương Hiệu sản phẩm</a></li>
						<li><a href="{{URL::to('/all-brand-product')}}">Liệt kê Thương Hiệu sản phẩm</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="">
                        <i class="fa fa-cc-amex"></i>
                        <span>Quản lý mã giảm giá</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/add-coupon')}}">Thêm mã giảm giá</a></li>
						<li><a href="{{URL::to('/all-coupon')}}">Liệt kê mã giảm giá</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="">
                        <i class="fa fa-shopping-bag"></i>
                        <span>Quản lý Sản Phẩm</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
						<li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="">
                        <i class="fa  fa-envelope"></i>
                        <span>Danh Mục Bài Viết</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/add-cate-post')}}">Thêm danh mục bài biết</a></li>
						<li><a href="{{URL::to('/all-cate-post')}}">Liệt kê danh mục bài viết</a></li>
                        
                    </ul>
				</li>
				<li>
					<a href="">
                        <i class="fa  fa-envelope"></i>
                        <span> Bài Viết</span>
                    </a>
					<ul class="sub">
						<li><a href="{{URL::to('/add-post')}}">Thêm bài biết</a></li>
						<li><a href="{{URL::to('/all-post')}}">Liệt kê bài viết</a></li>
                        
                    </ul>
				</li>
            </ul>            
		</div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		@yield('admin_content')

	</section>
 <!-- footer -->
		  <div class="footer">
			
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/backend/js/scripts.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
<script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
	$(document).ready( function () {
    	$('#myTable').DataTable();
} );
</script>

<script type="text/javascript">
	$(document).ready( function () {
    	$('#myTable2').DataTable();
} );
</script>

<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->

	<script type="text/javascript" src="{{asset('public/backend/js/monthly.js')}}"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->

<script type="text/javascript">
 
    function ChangeToSlug()
        {
            var slug;
         
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
         

   
   
</script>


<!-- ====== ajax them gallery =======  -->
		<script type="text/javascript" >
			load_gallery();

			function load_gallery(){
					var pro_id = $('.pro_id').val();
					var _token = $('input[name="_token"]').val();

					 $.ajax({
						url: "{{ url('select-gallery') }}",
						method: "POST",
						data:{pro_id:pro_id, _token:_token},
						success:function(data){
							$('#gallery_load').html(data);
						}
					 });
				}

			$('#file').change(function(){
					var error = '';
					var files = $('#file')[0].files;

					if(files.length>5){
						error+='<p>Bạn chọn tối đa chỉ được 4 ảnh</p>';
					}else if(files.length==''){
						error+='<p>Bạn không được bỏ trống ảnh</p>';
					}else if(files.size > 2000000){
						error+='<p>File ảnh không được lớn hơn 2MB</p>';
					}

					if(error==''){

					}else{
						$('#file').val('');
						$('#error_gallery').html('<span class="text-danger">'+error+'</span>');
						return false;
					}

     		});

			 $(document).on('blur','.edit_gal_name',function(){
					var gal_id = $(this).data('gal_id');
					var gal_text = $(this).text();
					var _token = $('input[name="_token"]').val();
						$.ajax({
							url:"{{url('/update-gallery-name')}}",
							method:"POST",
							data:{gal_id:gal_id,gal_text:gal_text,_token:_token},
							success:function(data){
								load_gallery();
								$('#error_gallery').html('<span class="text-danger">Cập nhật tên hình ảnh thành công</span>');
							}
						});
       		 });

				$(document).on('click','.delete-gallery',function(){
					var gal_id = $(this).data('gal_id');
				
					var _token = $('input[name="_token"]').val();
					if(confirm('Bạn muốn xóa hình ảnh này không?')){
						$.ajax({
							url:"{{url('/delete-gallery')}}",
							method:"POST",
							data:{gal_id:gal_id,_token:_token},
							success:function(data){
								load_gallery();
								$('#error_gallery').html('<span class="text-danger">Xóa hình ảnh thành công</span>');
							}
						});
					}
       			 });	

					
					$(document).on('change','.file_image',function(){

							var gal_id = $(this).data('gal_id');
							var image = document.getElementById("file-"+gal_id).files[0];

							var form_data = new FormData();

							form_data.append("file", document.getElementById("file-"+gal_id).files[0]);
							form_data.append("gal_id",gal_id);



								$.ajax({
									url:"{{url('/update-gallery')}}",
									method:"POST",
									headers:{
										'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
									},
									data:form_data,

									contentType:false,
									cache:false,
									processData:false,
									success:function(data){
										load_gallery();
										$('#error_gallery').html('<span class="text-danger">Cập nhật hình ảnh thành công</span>');
									}
								});

					});

		</script>

		

			<script type="text/javascript">
			
			$( function() {
				$( "#start_coupon" ).datepicker({
					prevText:"Tháng trước",
					nextText:"Tháng sau",
					dateFormat:"dd/mm/yy",
					dayNamesMin: [ "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật" ],
					duration: "slow"
				});
				$( "#end_coupon" ).datepicker({
					prevText:"Tháng trước",
					nextText:"Tháng sau",
					dateFormat:"dd/mm/yy",
					dayNamesMin: [ "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật" ],
					duration: "slow"
				});
			} );
			
			</script>


<script type="text/javascript">
			
			$( function() {
				$( "#datepicker" ).datepicker({
					prevText:"Tháng trước",
					nextText:"Tháng sau",
					dateFormat:"dd/mm/yy",
					dayNamesMin: [ "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật" ],
					duration: "slow"
				});
				$( "#datepicker2" ).datepicker({
					prevText:"Tháng trước",
					nextText:"Tháng sau",
					dateFormat:"dd/mm/yy",
					dayNamesMin: [ "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7", "Chủ nhật" ],
					duration: "slow"
				});
			} );
			
			</script>
			

		<script>
		var options = {
			filebrowserImageBrowseUrl: 'laravel-filemanager?type=Images',
			filebrowserImageUploadUrl: 'laravel-filemanager/upload?type=Images&_token=',
			filebrowserBrowseUrl: 'laravel-filemanager?type=Files',
			filebrowserUploadUrl: 'laravel-filemanager/upload?type=Files&_token='
		};
		</script>
		<script>
		CKEDITOR.replace('my-editor', options);
		</script>


			<script  type="text/javascript">
				
					
					
				CKEDITOR.replace('ckeditor');
				CKEDITOR.replace('ckeditor1',{

					filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
					filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
					filebrowserUploadMethod: 'form'

				});

				CKEDITOR.replace('ckeditor2', {

					filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
					filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
					filebrowserUploadMethod: 'form'

				});

				CKEDITOR.replace('ckeditor3',{

					filebrowserImageUploadUrl : "{{ url('uploads-ckeditor?_token='.csrf_token()) }}",
					filebrowserBrowseUrl : "{{ url('file-browser?_token='.csrf_token()) }}",
					filebrowserUploadMethod: 'form'
				});
				CKEDITOR.replace('id4');

			
			
			</script>

			<!-- Doanh so cong ty -->

<script type="text/javascript">
$(document).ready(function(){

        // chart60daysorder();

        // var chart = new Morris.Bar({
             
        //       element: 'chart',
        //       //option chart
        //       lineColors: ['#819C79', '#fc8710','#FF6541', '#A4ADD3', '#766B56'],
        //         parseTime: false,
        //         hideHover: 'auto',
        //         xkey: 'period',
        //         ykeys: ['order','sales','profit','quantity'],
        //         labels: ['đơn hàng','doanh số','lợi nhuận','số lượng']
            
        //     });

			var chart = new Morris.Bar({
			// ID of the element in which to draw the chart.
			element: 'chart',
			// Chart data records -- each entry in this array corresponds to a point on
			// the chart.
			lineColors: ['#', '#fc8710','#FF6541', '#A4ADD3', '#766B56', '#ffffff'],
			parseTime: false,
            hideHover: 'auto',
			data: [
				{ period: '2021-11-28', order: 50, sales: 23000000, profit:25000000, quantity:90 },
				{ period: '2021-11-27', order: 7, sales: 68000000, profit:9000000, quantity:60 },
				{ period: '2021-11-26', order: 8, sales: 30000000, profit:3000000, quantity:45 },
				{ period: '2021-11-25', order: 9, sales: 45000000, profit:3800000, quantity:90 },
				{ period: '2021-11-24', order: 12, sales: 1500000, profit:36000000, quantity:100 },
				{ period: '2021-11-23', order: 30, sales: 20000000, profit:70000000, quantity:25 },
				{ period: '2021-11-22', order: 20, sales: 28000000, profit:25000000, quantity:30 },
				{ period: '2021-11-21', order: 6, sales: 13000000, profit:68000000, quantity:70},
				{ period: '2021-11-20', order: 10, sales: 17000000, profit:63000000, quantity: 75},
				{ period: '2021-11-19', order: 18, sales: 18000000, profit:50000000, quantity:63},
				{ period: '2021-11-17', order: 32, sales: 7000000, profit:33000000, quantity:52},
				{ period: '2021-11-16', order: 21, sales: 20000000, profit:70000000, quantity:23 },
				{ period: '2021-11-15', order: 5, sales: 15000000, profit:12000000, quantity:61},
				{ period: '2021-11-14', order: 35, sales: 20000000, profit:70000000, quantity:59 },
				{ period: '2021-11-13', order: 40, sales: 3000000, profit:70000000, quantity:32},
				{ period: '2021-11-12', order: 45, sales: 20000000, profit:12000000, quantity:20 },
				{ period: '2021-11-11', order: 65, sales: 19000000, profit:12000000, quantity:33 },
				{ period: '2021-11-10', order: 60, sales: 20000000, profit:25000000, quantity:42 },
				{ period: '2021-11-9', order: 12, sales: 20000000, profit:70000000, quantity:41},
				{ period: '2021-11-8', order: 4, sales: 18000000, profit:25000000, quantity:47},
				{ period: '2021-11-7', order: 30, sales: 20000000, profit:70000000, quantity:50 },

				
			],
			// The name of the data record attribute that contains x-values.
			xkey: 'period',
			// A list of names of data record attributes that contain y-values.
			ykeys: ['order','sales','profit','quantity'],
			// Labels for the ykeys -- will be displayed when you hover over the
			// chart.
			labels: ['đơn hàng','doanh số','lợi nhuận','số lượng']
			});


       
        function chart60daysorder(){
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url:"{{url('/days-order')}}",
                method:"POST",
                dataType:"JSON",
                data:{_token:_token},
                
                success:function(data)
                    {
                        chart.setData(data);
                    }   
            });
        }

    $('.dashboard-filter').change(function(){
        var dashboard_value = $(this).val();
        var _token = $('input[name="_token"]').val();
        // alert(dashboard_value);
        $.ajax({
            url:"{{url('/dashboard-filter')}}",
            method:"POST",
            dataType:"JSON",
            data:{dashboard_value:dashboard_value,_token:_token},
            
            success:function(data)
                {
                    chart.setData(data);
                }   
            });

    });

    $('#btn-dashboard-filter').click(function(){
       
        var _token = $('input[name="_token"]').val();

        var from_date = $('#datepicker').val();
        var to_date = $('#datepicker2').val();

         $.ajax({
            url:"{{url('/filter-by-date')}}",
            method:"POST",
            dataType:"JSON",
            data:{from_date:from_date,to_date:to_date,_token:_token},
            
            success:function(data)
                {
                     chart.setData(data);
                }   
        });

    });

});
    
</script>

<script type="text/javascript">
$(document).ready(function(){
      
        //     });
        var donut = Morris.Donut({
          element: 'donut',
          resize: true,
          colors: [
            '#a8328e',
            '#61a1ce',
            '#ce8f61',
            '#f5b942',
            '#4842f5'
            
          ],
          //labelColor:"#cccccc", // text color
          //backgroundColor: '#333333', // border color
          data: [
            {label:"Sản Phẩm", value:100},
            {label:"Bài Viết", value:200},
            {label:"Đơn Hàng", value:1000},
            {label:"Khách Hàng", value:205} 
          ]
        });
     
});
</script>
</body>
</html>
