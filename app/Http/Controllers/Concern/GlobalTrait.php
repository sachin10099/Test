<?php 
namespace App\Http\Controllers\Concern;

use App\Models\User;
use App\Exceptions\RedirectException;

Trait GlobalTrait 
{
	// This function are used for upload image and save in local directory

	protected function imageUpload($data) {
        if($data->image) {
            $filename      = $data->image->getClientOriginalName();
            $fileExtension = $data->image->getClientOriginalExtension();
            $imageName     = base64_encode(str_replace(' ', '', $filename)).date('ymdhis').'.'.$fileExtension;
            $return        = $data->file('image')->move(
            base_path() . '/public/upload/', $imageName
            );
            $image_path =asset('/upload/'. $imageName);
        }
        return $image_path;
    }
}
