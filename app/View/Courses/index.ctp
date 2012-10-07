<style type="text/css">
body{
	background-color: #0F1942;
}
.image {

}
.title {
	background: #1c2b6d; /* Old browsers */
	background: -moz-linear-gradient(top, #1c2b6d 0%, #141e4e 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1c2b6d), color-stop(100%,#141e4e)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #1c2b6d 0%,#141e4e 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #1c2b6d 0%,#141e4e 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #1c2b6d 0%,#141e4e 100%); /* IE10+ */
	background: linear-gradient(to bottom, #1c2b6d 0%,#141e4e 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1c2b6d', endColorstr='#141e4e',GradientType=0 ); /* IE6-9 */
	
	color: #ffffff;
	
	padding: 3px;
	text-transform: uppercase;
}
.description {
 height: 118px;
 padding: 3px;
}
.cost {
 padding: 3px;
}
.course{
	background-image: url('img/courseBox.jpg') ;
	width: 216px;
	height: 357px;
	margin: 10px;
	padding: 2px 1px 10px 1px;
	float: left;
}

.course img {
	height: 180px;
	width: 200px;

}
.wrap{
	padding: 10px 0 0 0;
	margin: 0 auto;
	width: 960px;
	background-color: #ffffff;
	border-color: #070F33;
}

.wrap2{
	padding: 10px 0 10px 0 ;
	margin: 0 auto;
	width: 960px;
	border-color: #070F33;
}

.wrap2 a{
	color: #ffffff;
}

.loginBox{
	float: right;
	margin: 0 10px 30px 0 ;
}
	.loginBox img{
		padding: 10px 0 0 0;
		float: right;
	}

#logo{
	margin: 0 0 0 -12px;
}
#centerImg{
	margin: -12px auto 0 auto;
	width: 1000px;
}
.gray{
	width: 100%;
	background-color: #E9E7EA;
	height: 246px;
}
#footer{
	clear: both;
	background-color: #AC0009;
	width: 100%;
}
#browse{
	width: 960px;
	clear: both;
}
</style>
</head>
<body>
	<div class="wrap">
		<a href="#"><img id="logo" src="img/logo.png" /></a>
		<div class="loginBox">
			<a href="#">SIGN-IN</a> - <a href="#">CREATE ACCOUNT</a>
			<br />
			<a><img src="img/browse.png" /></a>
		</div>
	</div>
	<div class="gray">
		<div class="wrap">
		<img id="centerImg" src="img/centerImg.jpg" />
		</div>
	</div>
	<div class="wrap">
		<div id="courses">
		</div>
	<?php
	foreach ($courses as $course) { ?>
	<div class="course">
		<div class="image">
			<?php echo $this->Html->image($course['Course']['imageurl'],array()); ?>
		</div>
		<div class="title"><?php echo $this->Html->link($course['Course']['title'],array('action'=>'view',$course['Course']['id'])); ?>
		</div>
		<div class="description"><?php echo $this->Text->truncate($course['Course']['description'],140); ?>
		</div>
		<div class="cost">Cost: $<?php echo $course['Course']['cost']; ?>
		</div>
		<div class="duration"><?php echo $course['Course']['duration']; ?> Minutes
		</div>
	</div>
	<?php } ?>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

		<div id="browse"><a href="#">click to browse more...</a></div>
	</div>
	<div id="footer">
		<div class="wrap2">
		<a href="#">browse</a> - <a href="#">search</a> - <a href="#">log-in</a>
		</div>
	</div>
	
</div>
