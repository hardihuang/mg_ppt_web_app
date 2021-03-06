<?php 

/**
 * 构建上传文件信息
 * @return array
 */
function buildInfo(){
	if(!$_FILES){
		return ;
	}
	$i=0;
	foreach($_FILES as $v){
		//单文件
		if(is_string($v['name'])){
			$files[$i]=$v;
			$i++;
		}else{
			//多文件
			foreach($v['name'] as $key=>$val){
				$files[$i]['name']=$val;
				$files[$i]['size']=$v['size'][$key];
				$files[$i]['tmp_name']=$v['tmp_name'][$key];
				$files[$i]['error']=$v['error'][$key];
				$files[$i]['type']=$v['type'][$key];
				$i++;
			}
		}
	}
	return $files;
}


function uploadFile($path="images/uploads/",$allowExt=array("gif","jpeg","png","jpg","wbmp"),$maxSize=2097152,$imgFlag=true,$UniName=true){
	if(!file_exists($path)){
		mkdir($path,0777,true);
	}
	
	$i=0;
	$files=buildInfo();

	if(!($files&&is_array($files))){
		return ;
	}
	foreach($files as $file){
		if($file['error']===UPLOAD_ERR_OK){
			$ext=getExt($file['name']);
			//检测文件的扩展名
			if(!in_array($ext,$allowExt)){
				exit("上传图片为非法文件类型");
			}
			//校验是否是一个真正的图片类型
			if($imgFlag){
				if(!getimagesize($file['tmp_name'])){
					exit("上传图片不是真正的图片类型");
				}
			}
			//上传文件的大小
			if($file['size']>$maxSize){
				exit("图片文件过大");
			}
			if(!is_uploaded_file($file['tmp_name'])){
				exit("上传图片为不是通过HTTP POST方式上传上来的");
			}
			if($UniName){
				$filename=getUniName().".".$ext;
			}else{
				$filename=mb_convert_encoding($file['name'],'GBK','UTF-8');
				//$filename=$file['name'];
			}
			
			$destination=$path."/".$filename;
			//return($file['tmp_name']);
			//return($destination);
			//return move_uploaded_file($file['tmp_name'], $destination);
			if(move_uploaded_file($file['tmp_name'], $destination)){
				$file['name']=$filename;
				unset($file['tmp_name'],$file['size'],$file['type']);
				$uploadedFiles[$i]=$file;
				$i++;
			}
		}else{
			switch($file['error']){
					case 1:
						$msg="上传图片超过了配置文件上传文件的大小";//UPLOAD_ERR_INI_SIZE
						break;
					case 2:
						$msg="上传图片超过了表单设置上传文件的大小";			//UPLOAD_ERR_FORM_SIZE
						break;
					case 3:
						$msg="上传图片文件部分被上传";//UPLOAD_ERR_PARTIAL
						break;
					case 4:
						$msg="没有图片文件被上传";//UPLOAD_ERR_NO_FILE
						break;
					case 6:
						$msg="没有找到临时目录";//UPLOAD_ERR_NO_TMP_DIR
						break;
					case 7:
						$msg="文件不可写";//UPLOAD_ERR_CANT_WRITE;
						break;
					case 8:
						$msg="由于PHP的扩展程序中断了文件上传";//UPLOAD_ERR_EXTENSION
						break;
				}
				echo $msg;
			}
	}
	return @$uploadedFiles;
}

function sortImgByFilename($dir){
$fileList = array();
	if (is_dir($dir)) {
	    if ($dh = opendir($dir)) {
	    	
	        while (($file = readdir($dh)) !== false) {
	        	if ($file != "." && $file != "..") {
	            	$fileList[]=mb_convert_encoding(getFileName($file),'UTF-8','GBK');
	        	}
	        }
	        closedir($dh);
	    }
	}

    $names = array();
    for($i=0; $i<count($fileList); $i++) {
        preg_match('/^(.+?)(\d+)$/', $fileList[$i], $matches);
        $names[] = array($matches[1], $matches[2]);
    }

    $name = array();
    $number = array();
    foreach ($names as $key => $row) {
        $name[$key]  = $row[0];
        $number[$key] = $row[1];
    }

    array_multisort($name, SORT_ASC, $number, SORT_NUMERIC, $names);
    $output = array();
    foreach ($names as $row) {
        $output[] = $row[0] . $row[1];
    }
    
    return $output;
}