<?php
    function chk_upload($error)
    {
        switch($error)
        {
            case 0: echo "File upload successfully!";
                    break;
            case 1: echo "The file is too large(server)";
                    break;  // 文件大小超出了服务器的空间大小
            case 2: echo "The file is too large(explorer).";
                    break;  // 要上传的文件大小超出浏览器限制
            case 3: echo "The file was only partially uploaded.";
                    break;  // 文件仅部分被上传
            case 4: echo "No file was uploaded found.";  
                    break;  // 没有找到要上传的文件
            case 5: echo "The servers temporary folder is missing.";
                    break;  // 服务器临时文件夹丢失
            case 6: echo "Failed to write to the temporary folder.";
                    break;  // 文件写入到临时文件夹出错 
        }
    }
?>