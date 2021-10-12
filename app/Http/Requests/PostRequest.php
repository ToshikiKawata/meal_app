<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $route = $this->route()->getName();
        $rule = [
            'name' => 'required|string|max:50',
            'category_id' => 'required',
            'body' => 'required|string|max:2000',
            //'image' => 'required|file|image|mimes:jpeg,png',
        ];
        if (
            $route === 'posts.store' ||
            ($route === 'posts.update' && $this->file('image'))) {
            $rule['image'] = 'required|file|image|mimes:jpeg,png';
        }

        return $rule;
    }
}
