<?php 
switch($_GET['htgl']){
case "编辑新闻":
  include("edit_news.php");
   break;
case "编辑Highlights":
  include("edit_highlights.php");
   break;
case "添加Publication":
  include("addpub.php");
   break;
case "删除Publication":
  include("editpub.php");
   break;
case "添加people":
	include("addpeople.php");
	break;
case "编辑people":
	include("edit_people.php");
	break;
case "编辑Info":
	include("edit_people_info.php");
	break;
case "添加meeting":
	include("addmeeting.php");
	break;
case "编辑meeting":
	include("edit_meeting.php");
	break;
case "编辑meetinginfo":
	include("edit_meetinginfo.php");
	break;
case "添加hotel":
	include("addhotel.php");
	break;
case "编辑hotel":
	include("edit_hotel.php");
	break;
case "编辑hotelinfo":
	include("edit_hotelinfo.php");
	break;
case "添加course":
	include("addcourse.php");
	break;
case "编辑course":
	include("edit_course.php");
	break;
case "添加account":
	include("addaccount.php");
	break;
case "编辑course_detail":
	include("edit_course_detail.php");
	break;
case "编辑coursefile":
	include("edit_coursefile.php");
	break;
case "添加coursefile_detail":
	include("add_coursefile.php");
	break;
case "编辑coursefile_detail":
	include("edit_coursefile_detail.php");
	break;
case "编辑coursefile_detail_detail":
	include("edit_coursefile_detail_detail.php");
	break;
case "编辑pub_detail":
	include("edit_pub_detail.php");
	break;
case "编辑pic":
	include("edit_pic.php");
	break;
case "编辑homepic":
	include("edit_homepic.php");
	break;
case "":
  include("editpub.php");
   break;

}

?>