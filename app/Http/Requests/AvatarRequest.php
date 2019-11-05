<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AvatarRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}
	
	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'image' => 'required|image',
		];
	}
	
	public function messages() {
		return [
			'image.required' => 'Avatar is mandatory field.',
			'image.image' => 'File must be an image file.',
		];
	}
}
