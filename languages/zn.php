﻿<?php
if (!defined('RAPIDLEECH')) {
	require('../deny.php');
	exit;
}
// The Chinese language file
// These words has been html entitied to prevent wrong encodings

$lang[1]	=	'&#35775;&#38382;&#31105;&#27490;';
$lang[2]	=	'&#20282;&#26381;&#22120;&#25298;&#32477;&#28385;&#36275;&#24744;&#30340;&#35201;&#27714;&#12290;';
$lang[3]	=	'&#35831;&#36755;&#20837;&#27491;&#30830;&#30340;&#30005;&#37038;&#22320;&#22336;&#12290;';
$lang[4]	=	'Size of parts are not numeric';
$lang[5]	=	'Unknown URL Type, <span class="font-black">Only Use <span class="font-blue">http</span> or <span class="font-blue">https</span> or <span class="font-blue">ftp</span> Protocol</span>';
$lang[6]	=	'Path is not specified for saving this file';
$lang[7]	=	'You are not allowed to leech from <span class="font-black">%1$s (%2$s)</span>';	// %1$s = host name %2$s = host ip
$lang[8]	=	'Redirecting to:';
$lang[9]	=	'Couldn\'t update the files list';
$lang[10]	=	'File <b>%1$s</b> (<b>%2$s</b>) Saved!<br />Time: <b>%3$s</b><br />Average Speed: <b>%4$s KB/s</b><br />';	// %1$s = filename %2$s = filesize %3$s = time of download %4$s = speed
$lang[11]	=	'<script>mail("File was sent to this address<b>%1$s</b>.", "%2$s");</script>';	// %1$s = E-mail address %2$s = filename
$lang[12]	=	'Error sending file!';
$lang[13]	=	'Go back to main';
$lang[14]	=	'Connection lost, file deleted.';
$lang[15]	=	'Reload';
$lang[16]	=	'Please change the debug mode to <b>1</b>';
$lang[17]	=	'Maximum No (%1$s) Of links have been reached.';	// %1$s = Number of maximum links
$lang[18]	=	'%1$s Link%2$s checked in %3$s seconds. (Method: <b>%4$s</b>)';	// %1$s = Number of links %2$s = Plural form %3$s = seconds %4$s = method for checking links
$lang[19]	=	's';	// End of a plural
$lang[20]	=	'Bad proxy server address';
$lang[21]	=	'Link';
$lang[22]	=	'Status';
$lang[23]	=	'Waiting';
$lang[24]	=	'Invalid URL';
$lang[25]	=	'Preparing';
$lang[26]	=	'Started';
$lang[27]	=	'Connection lost';
$lang[28]	=	'Finished';
$lang[29]	=	'Start auto Transload';
$lang[30]	=	'Frames not supported, update your browser';
$lang[31]	=	'Add links';
$lang[32]	=	'Links';
$lang[33]	=	'Options';
$lang[34]	=	'Transload files';
$lang[35]	=	'Use Proxy Settings';
$lang[36]	=	'Proxy';
$lang[37]	=	'UserName';
$lang[38]	=	'Password';
$lang[39]	=	'Use Imageshack Account';
$lang[40]	=	'Save To';
$lang[41]	=	'Path';
$lang[42]	=	'Use Premium Account';
$lang[43]	=	'Run Server Side';
$lang[44]	=	'Delay Time';
$lang[45]	=	'Delay (in seconds)';
$lang[46]	=	'No files or hosts selected for upload';
$lang[47]	=	'Select Hosts to Upload';
$lang[48]	=	'No Supported Upload Services!';
$lang[49]	=	'Upload windows';
$lang[50]	=	'Link save format';
$lang[51]	=	'Default';
$lang[52]	=	'Check All';
$lang[53]	=	'Un-Check All';
$lang[54]	=	'Invert Selection';
$lang[55]	=	'Name';
$lang[56]	=	'Size';
$lang[57]	=	'No files found';
$lang[58]	=	'Legend for link saving format: (case sensitive)';
$lang[59]	=	'The link for the download';
$lang[60]	=	'The name of the file';
$lang[61]	=	'Default link style';
$lang[62]	=	'Anything besides the ones stated above will be treated as string, you are unable to do multi line format now, a new line will be inserted for each link.';
$lang[63]	=	'Uploading file %1$s to %2$s';	// %1$s = filename %2$s = file host name
$lang[64]	=	'File %1$s does not exist.';	// %1$s = filename
$lang[65]	=	'File %1$s is not readable by script.';	// %1$s = filename
$lang[66]	=	'Filesize too big to upload to host.';
$lang[67]	=	'Upload service not allowed';
$lang[68]	=	'Download-Link';
$lang[69]	=	'Delete-Link';
$lang[70]	=	'Stat-Link';
$lang[71]	=	'Admin-Link';
$lang[72]	=	'USER-ID';
$lang[73]	=	'FTP upload';
$lang[74]	=	'Password';
$lang[75]	=	'Rapidleech PlugMod - Upload Links';
$lang[76]	=	'<div class="linktitle">Upload Links for <strong>%1$s</strong> - <span class="bluefont">Size: <strong>%2$s</strong></span></div>';	// %1$s = file name %2$s = file size
$lang[77]	=	'DONE';
$lang[78]	=	'Go Back';
$lang[79]	=	'Couldn\'t establish connection with the server %1$s.';		// %1$s = FTP server name
$lang[80]	=	'Incorrect username and/or password.';
$lang[81]	=	'Connected to: <b>%1$s</b>...';	// %1$s = FTP server name
$lang[82]	=	'The filetype %1$s is forbidden to be downloaded';	// %1$s = File type
$lang[83]	=	'File <b>%1$s</b>, Size <b>%2$s</b>...';	// %1$s = file name %2$s = file size
$lang[84]	=	'Error retriving the link';
$lang[206]	=	'YouTube 视频格式选择';
$lang[207]	=	'Link to Transload';
$lang[208]	=	'Referrer';
$lang[209]	=	'Transload File';
$lang[210]	=	'User &amp; Pass (HTTP/FTP)';
$lang[211]	=	'User';
$lang[212]	=	'Pass';
$lang[213]	=	'Add Comments';
$lang[214]	=	'PluginOptions';
$lang[215]	=	'Disable All Plugins';
$lang[216]	=	'YouTube Video Format Selector';
$lang[217]	=	'Direct Link';
$lang[218]	=	'&amp;fmt=';
$lang[219]	=	'Auto-get the highest quality format available';
$lang[220]	=	'0 [Video: FLV H263 251kbps 320x180 @ 29.896fps | Audio: MP3 64kbps 1ch @ 22.05kHz]';
$lang[221]	=	'5 [Video: FLV H263 251kbps 320x180 @ 29.885fps | Audio: MP3 64kbps 1ch @ 22.05kHz]';
$lang[222]	=	'6 [Video: FLV H263 892kbps 480x270 @ 29.887fps | Audio: MP3 96kbps 1ch @ 44.10kHz]';
$lang[223]	=	'13 [Video: 3GP H263 77kbps 176x144 @ 15.000fps | Audio: AMR 13kbps 1ch @ 8.000kHz]';
$lang[224]	=	'17 [Video: 3GP XVID 55kbps 176x144 @ 12.000fps | Audio: AAC 29kbps 1ch @ 22.05kHz]';
$lang[225]	=	'18 [Video: MP4 H264 505kbps 480x270 @ 29.886fps | Audio: AAC 125kbps 2ch @ 44.10kHz]';
$lang[226]	=	'22 [Video: MP4 H264 2001kbps 1280x720 @ 29.918fps | Audio: AAC 198kbps 2ch @ 44.10kHz]';
$lang[227]	=	'34 [Video: FLV H264 256kbps 320x180 @ 29.906fps | Audio: AAC 62kbps 2ch @ 22.05kHz]';
$lang[228]	=	'35 [Video: FLV H264 831kbps 640x360 @ 29.942fps | Audio: AAC 107kbps 2ch @ 44.10kHz]';
$lang[229]	=	'ImageShack&reg; TorrentService';
$lang[230]	=	'Username';
$lang[231]	=	'Password';
$lang[232]	=	'Megaupload.com Cookie Value';
$lang[233]	=	'user';
$lang[234]	=	'Use vBulletin Plugin';
$lang[235]	=	'Additional Cookie Value';
$lang[236]	=	'Key=Value';
$lang[237]	=	'Send File to Email';
$lang[238]	=	'Email';
$lang[239]	=	'Split Files';
$lang[240]	=	'Method';
$lang[241]	=	'Total Commander';
$lang[242]	=	'RFC 2046';
$lang[243]	=	'Parts Size';
$lang[244]	=	'MB';
$lang[245]	=	'Use Proxy Settings';
$lang[246]	=	'Proxy';
$lang[247]	=	'Username';
$lang[248]	=	'Password';
$lang[249]	=	'Use Premium Account';
$lang[250]	=	'Username';
$lang[251]	=	'Password';
$lang[252]	=	'Save To';
$lang[253]	=	'Path';
$lang[254]	=	'Save Settings';
$lang[255]	=	'Clear Current Settings';
$lang[256]	=	'Check All';
$lang[257]	=	'Un-Check All';
$lang[258]	=	'Invert Selection';
$lang[259]	=	'Show';
$lang[260]	=	'Downloaded';
$lang[261]	=	'Everything';
$lang[262]	=	'Name';
$lang[263]	=	'Size';
$lang[264]	=	'Comments';
$lang[265]	=	'Date';
$lang[266]	=	'No files found';
$lang[267]	=	'Works With';
$lang[268]	=	'Kills';
$lang[269]	=	'Debug Mode';
$lang[270]	=	'Display Links Only';
$lang[271]	=	'Kill Links Only';
$lang[272]	=	'Check Links';
$lang[273]	=	'Loading...';
$lang[274]	=	'Processing, please wait...';
$lang[275]	=	'Server Space';
$lang[276]	=	'In Use';
$lang[277]	=	'Free Space';
$lang[278]	=	'Disk Space';
$lang[279]	=	'CPU';
$lang[280]	=	'Server Time';
$lang[281]	=	'Local Time';
$lang[282]	=	'Auto-Delete';
$lang[283]	=	'Hours After Transload';
$lang[284]	=	'Minutes After Transload';
$lang[285]	=	'Action';
$lang[286]	=	'Upload';
$lang[287]	=	'FTP File';
$lang[288]	=	'E-Mail';
$lang[289]	=	'Mass E-mail';
$lang[290]	=	'Split Files';
$lang[291]	=	'Merge Files';
$lang[292]	=	'MD5 Hash';
$lang[293]	=	'Pack Files';
$lang[294]	=	'ZIP Files';
$lang[295]	=	'Unzip Files';
$lang[296]	=	'Rename';
$lang[297]	=	'Mass Rename';
$lang[298]	=	'Delete';
$lang[299]	=	'List Links';
$lang[300]	=	'Retrieving download page';
$lang[301]	=	'Enter';
$lang[302]	=	'here';
$lang[303]  =   'Download File';
$lang[304]  =   'configs/files.lst is not writable, please make sure it is chmod to 777';
$lang[305]  =   '&nbsp;is selected as your download path and it is not writable. Please chmod it to 777';
$lang[306]  =   'Merging File';
$lang[307]  =   'Waiting';

?>
