<?php
namespace App\CustomClass;

class ChangeFileName
{
    //there are 2 parameters in this function
    //$fileName is the name of the file when you use $file->getClientOriginalName()
    //$folderName is the folder contain the file have $fileName. For example:'public/images', images is folder name
    public function change_file_name($folderName,$fileName)
    {
        $upload_file_path = public_path() . '/' . $folderName . '/' . $fileName;
        $file_name = pathinfo($fileName, PATHINFO_FILENAME);
        $file_type = pathinfo($fileName, PATHINFO_EXTENSION);

        if (file_exists($upload_file_path)) {
            $new_file_name = $file_name . '-copy.';
            $new_upload_file_path = public_path() . '/' . $folderName . '/' . $new_file_name . $file_type;
            $k = 1;
            while (file_exists($new_upload_file_path)) {
                $new_file_name = $file_name . "-copy({$k}).";
                $k++;
                $new_upload_file_path = public_path() . '/' . $folderName . '/' . $new_file_name . $file_type;
            }
            $fileName = $new_file_name.$file_type;
            return $fileName;
        } else {
            return $fileName;
        }
    }
}
