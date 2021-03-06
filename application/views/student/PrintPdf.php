<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ระบบลงทะเบียนออนไลน์');
$pdf->SetTitle('ระบบลงทะเบียนออนไลน์');
$pdf->SetSubject('ระบบลงทะเบียนออนไลน์');
$pdf->SetKeywords('ระบบลงทะเบียนออนไลน์');

/*
// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 046', PDF_HEADER_STRING);
*/
// set header and footer fonts
// $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------


// add a page
$pdf->AddPage();
// set font

$pdf->AddFont('THSarabun','','THSarabun.php');
$pdf->SetFont('THSarabun','',16);

// $pdf->Write(0, 'สำหรับนักเรียน(ใช้เป็นหลักฐานการสมัครเรียน) โปรดเรียกเก็บค่าธรรมเนียมจากผู้ชำระเงิน', '', 0, 'L', true, 0, false, false, 0); //ตำแหน่งซ้ายขวา L,R

$pdf->Ln(1);  //ความก้างของบรรทัด


// ob_start();

			// HTML text with soft hyphens (&shy;)
$img_url = base_url().'assets/img/';
// $first_name = "<input type='text' name='fname' />";
$html = '
<table width="100%" cellspacing="5" >
	<tr>
		<td align="center" colspan="2">
			<img src="'.$img_url.'logo.png" alt=""  width="120px;" height="120px;" ><br/>
			<b style="font-size:22 ppt;font-weight: bold;">คำร้องขอสำเร็จการศึกษา</b><br/>
			<b style="font-size:22 ppt;font-weight: bold;">ระดับบัณฑิตศึกษา มหาวิทยาลัยราชภัฏมหาสารคาม</b><br/>
			<span style="font-size:16 ppt;">วันที่<u>  '.$dateNow.'  </u>เดือน<u> '.$mountNow.'  </u>พ.ศ.<u> '.$yearNow.' </u></span>
		</td>
	</tr>
	<tr >
		<td colspan="2" width="100%" align="left">
			<b>เรื่อง</b>  ขอสำเร็จการศึกษา<br/>
			<b>เรียน</b> คณบดีคณะครุศาสตร์<br/>
			<i style="text-indent:20px;">ข้าพเจ้า นาย สมชาย  ใจดีมาก</i>
		</td>
	</tr>
	<tr>
		<td colspan="2" width="100%" align="left">
			test
		</td>
	</tr>
	<tr height="10"><td colspan="4"></td></tr>
	<tr height="10" >
		<td colspan="3"  align="right" width="40%">เลขที่ใบสมัคร :</td>
		<td class="left" width="40%" style="border: 1px solid #000;" align="left"> R158110001</td>
	</tr>
	<tr height="10" >
		<td colspan="3"  align="right" width="40%">ชื่อโครงการที่สมัคร :</td>
		<td class="left" width="40%" style="border: 1px solid #000;" align="left"> BIG J DAY</td>
	</tr> 
	<tr height="50">
		<td colspan="3" align="right" width="40%">ชื่อ-นามสกุล :</td>
		<td class="left" style="border: 1px solid #000;"> นายดิษฐพงษ์ นิลนามะ</td>
	</tr>

	<tr height="50">
		<td colspan="3" align="right"  width="40%">รหัสประจำประชาชน :</td>
		<td class="left" style="border: 1px solid #000;"> 14854785423125</td>
	</tr>

	<tr height="50">
		<td colspan="3" align="right" width="40%">เบอร์ติดต่อ :</td>
		<td class="left" width="40%" style="border: 1px solid #000;"> 0821428742</td>
	</tr>
	<tr height="50">
		<td colspan="3" align="right" width="40%">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 1) :</td>
		<td class="left" width="40%" style="border: 1px solid #000;">แจ๊ค ยุทธนา</td>
	</tr>
	<tr height="50">
		<td colspan="3" align="right" width="40%">ชื่อ – นามสกุล (ผู้ร่วมสมัคร 2) :</td>
		<td class="left" width="40%" style="border: 1px solid #000;">เต้ ไชยวัฒน์</td>
	</tr> 
	<tr height="30">
		<td align="left" colspan="3" >จำนวนเงินเป็นตัวอักษร</td>
		<td align="right">จำนวนเงินที่ต้องชำระ (บาท)</td>
	</tr>
	<tr height="30">
		<td align="left" colspan="3" style="border: 1px solid #000;" width="45%">สองพันเจ็ดร้อยบาทถ้วน</td>
		<td align="right" style="border: 1px solid #000;">2,700 บาท</td>
	</tr>
	<tr height="10"><td colspan="4"></td></tr>
	<tr>
		<td width="120px" align="left">หมายเหตุ<br/></td>
		<td colspan="4" class="left" >
			1. ใบชำระค่าเรียน 1 ใบต่อ 1 คอร์ส<br/>
			2. ผู้สมัครกรุณากรอกข้อมูลและตรวจสอบความถูกต้องก่อนยื่นชำระเงินที่เคาท์เตอร์ธนาคาร
		</td>
	</tr>
	<tr>
		<td colspan="4" width="100%"> ผู้นำฝาก/Deposit by............................................................................... เจ้าหน้าที่ธนาคาร .................................................................................. </td>
	</tr>
	<hr/><br/>
	<tr><td colspan="4" align="left"><h4>รายละเอียด</h4></td></tr>
	<tr><td colspan="4" align="left"  >
		<p style="font-size:11pt;">&emsp;1. กรุณาชำระเงิน ภายใน 7 วัน หลังการสมัคร หากไม่ชำระตามกำหมด การสมัครนั้นจะถือว่าเป็นโมฆะ <br/>
			&emsp;2. หลังการชำระเงินค่าเรียน กรุณาแจ้งชำระเงินทาง www.jknowledgetutor.com เป็นอันเสร็จสิ้นขั้นตอนการลงทะเบียน
			<br/>&emsp;&emsp;2.1 การแจ้งชำระเงินให้อัฟไฟล์ภาพใบเสร็จที่ชำระเงินแล้วในการแจ้งกำรชำระเงิน
			<br/>&emsp;&emsp;2.2 ให้เก็บใบเสร็จที่ทำการชำระเงินแล้วไว้กับตนเองเพื่อเป็นหลักฐานในการเข้าเรียน
			<br/>&emsp;3. เอกสารนี้ใช้แลกบัตรเข้างานที่โต๊ะลงทะเบียน พร้อมด้วย ใบเสร็จการชำระเงินกับทำงธนาคารและบัตรประจำตัวประชาชน
			<br/>&emsp;4. ประตูเปิดเวลา 08.00 น. (เริ่มรับบัตรเข้างาน 07.30 น.)
			<br/>&emsp;5. แต่งกายด้วยชุดนักเรียนhttp://kyleschaeffer.com/wordpress/wp-content/uploads/2008/09/font-size-1.gif
			<br/>&emsp;6. ห้ามทำเอกสำรนี้หายโดยเด็ดขาด
			<br/>&emsp;7. ผู้เข้าร่วมงานการมีสิทธิลุ้นรับรางวัลพิเศษจากสถาบันกวดวิชา jknowledge</p>

		</td>
	</tr>
	<tr><td colspan="4" align="left"><h4>ติดต่อสอบถาม</h4></td></tr>
	<tr><td colspan="4" align="left">
		<p style="font-size:11pt;">&emsp;Tel : พี่พล 094-575-4777 Line ID : jtutor4, &nbsp;
			Tel : พี่เว 094-575-6777 Line ID : jtutor6, &nbsp;
			Tel : พี่มิ้ว 094-575-8777 Line ID : jtutor8, &nbsp;<br/>
			Tel : พี่ผิง 061-093-7688 Line ID : jknowledge_sisaket , &nbsp;
			Tel : พี่คาร์บอม 094-291-4542 Line ID : Cabomz</p>
		</td>
	</tr>
</table>
';

// $pdf->AddFont('THSarabun','','THSarabun.php');
// $pdf->SetFont('THSarabun','',14);
// $pdf->SetDrawColor(255,0,0);
// $pdf->SetTextColor(0,63,300);

// print a cell
// สร้างเนื้อหาจาก  HTML code
$pdf->writeHTML($html, true, 0, true, 0);

// ---------------------------------------------------------

//Close and output PDF document

	$pdf->Output('register_success.pdf','I');	//load document แสดง pdf

//============================================================+
// END OF FILE
//============================================================+
