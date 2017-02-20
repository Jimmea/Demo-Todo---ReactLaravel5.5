<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/02/17
 * Time: 10:19
 */

namespace App\Http\Controllers\API;

trait Validation
{
    /**
     *
     if (($result = $this->validateRequest($request, $this->searchValidationRule)) !== true) {
        return $result;
     }
     * @param
     * @return
     */
    public function validateRequest(Request $request, $rules)
    {
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            $errors = $validator->errors();

            return Response::JSON(
                [
                    'type' => 'validationError',
                    'title' => 'Error',
                    'success' => false,
                    'invalid-params' => array_map(function ($key) use ($errors) {
                        return [
                            'name' => $key,
                            'reason' => array_map(function ($err) {
                                return trans($err);
                            }, $errors->get($key))
                        ];
                    }, $errors->keys()),
                ],
                421
            );
        }
        return true;
    }
}