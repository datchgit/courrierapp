<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Intervention\Image\Facades\Image;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
      
        Validator::make($input, [
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'matricule' => [
                'required',
                'string',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'fonction'=> ['required'],
            'service'=> ['required'],
            'signature'=>['required', Rule::unique(User::class)]
        ])->validate();

        
       /* $file = $input['signature'];
        $image_name = time(). '_'. $file->getClientOriginalName();
        $file->move(\public_path("agent/signature/"), $image_name);*/

        $image = $input['signature'];
        $image_name = time().'.'.$image->extension();
     
        $filePath = public_path('/agent/signature/');
        $img = Image::make($image->path());
        $img->resize(591, 295, function ($const) {
            $const->aspectRatio();
        })->save($filePath.'/'.$image_name);
   
        $filePath = public_path('/images');
        $image->move($filePath, $image_name);
    
         $user =  User::create([
            'nom' => $input['nom'],
            'prenom' => $input['prenom'],
            'matricule' => $input['matricule'],
            'password' => Hash::make($input['password']),
            'signature' => $image_name,
            'service_id'=>$input['service'],
            'poste_id'=>$input['fonction'],
        ]);

        Alert::success('Creation utilisateur'.' '.$input['nom'].' '.$input['prenom'],'inscription réussie');
        return $user ;
    }

   
}
